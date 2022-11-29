<?php session_start(); 
include "connect.php";
if ($_SESSION["s_sell_id"]=="")
	$_SESSION["s_sell_id"]=time().mt_rand(1,100);

$auto_id =(int) $_POST['news_name']; 
$item_count =(int) $_POST['item_count']; 
if ($auto_id!=""&&$item_count!="")
{
	$res=mysql_query("select count(auto_id) from tbl_basket where f2=$auto_id and f1='$_SESSION[s_sell_id]'");	
	list($count)=mysql_fetch_array($res);
	if($count==0)
	{
		$res=mysql_query("select f4,f16,f20,f7 from tbl_item_info where auto_id=$auto_id");	
		list($price,$item_wazn,$price_after_off,$poster)=mysql_fetch_array($res);
		if($poster!="0"&&$poster!="1")
			$poster="1";
		$t=time();
		$res=mysql_query("insert into tbl_basket(f1,f2,f3,f4,f5,f8,f10,f12)values('$_SESSION[s_sell_id]',$auto_id,$price,'$price_after_off',$item_count,$item_wazn,$poster,$t)");	
	}	
		//if ($res)
			{
				$res=mysql_query("select count(auto_id) from tbl_basket where f1='$_SESSION[s_sell_id]'");	
				list($basket_count)=mysql_fetch_array($res);
				echo $basket_count;
			}	
	//else
	//	echo -1;	
		
}
else
{
		echo -1;	
}



?>