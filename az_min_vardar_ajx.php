<?php session_start(); 
include "connect.php";
if ($_SESSION["s_sell_id"]!="")
{
$auto_id = (int)$_POST['news_name']; 
if ($auto_id!="")
{
	$res_array=array();
	$res=mysql_query("delete from tbl_basket where auto_id=$auto_id");	
	if ($res)
		{
			$r_s=mysql_query("SELECT sum(`tbl_item_info`.`f4`),count(`tbl_item_info`.`f4`),sum(`tbl_basket`.`f9`) FROM `tbl_basket` LEFT JOIN
		   `tbl_item_info` ON `tbl_basket`.`f2` = `tbl_item_info`.`auto_id` where `tbl_basket`.`f1`='$_SESSION[s_sell_id]' order by `tbl_basket`.`auto_id` ");
			list($basket_sum,$count,$post_sum)=mysql_fetch_array($r_s);
			$res_array[0]=$basket_sum;
			$res_array[1]=$count;
			$res_array[2]=$post_sum;
			
			
		}	
	else
	{
		$res_array[0]=-1;
		$res_array[1]=-1;
	}	
echo json_encode($res_array); 
}
}
?>