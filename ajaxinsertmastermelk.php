<?php session_start(); 
include "connect.php";
	
		$f1=cleantxt($_POST["f1"]);
		$f2=cleantxt($_POST["f2"]);
		$f3=cleantxt($_POST["f3"]);
		$f4=cleantxt($_POST["f4"]);
		$f5=cleantxt($_POST["f5"]);
		$f6=cleantxt($_POST["f6"]);
		$f7=cleantxt($_POST["f7"]);
		$f8=cleantxt($_POST["f8"]);
		$f9=cleantxt($_POST["f9"]);
		$f10=cleantxt($_POST["f10"]);

		$edit=$_POST["edit"];
		if($edit==1)
		{
			$item_id=cleantxt($_POST["item_id"]);
			if($item_id==""||$item_id==0)
			{
				echo "-1";
				die();
			}
			
		}	
		
		
		if($f2==""||$f2==0||$f1==""||$f1==0||$f3==""||$f3==0)
		{
			echo "-1";
			die();
		}
		
	if($edit==0)
	{
		$str_sql="insert tbl_amlak_master_info(f1,f2,f3,f4,f5,f6,f7,f8,f9,f10)values ('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10')";				
		$re=mysql_query($str_sql); 
		if(!$re)
		{ 
			echo "-1";
			die();
		}
		else
		{
			$re=mysql_query("select auto_id from tbl_amlak_master_info where f2='$f2' order by auto_id desc limit 1");
			if (!$re)
			{
				echo "-1";
			}	
			else
			{	
				list($item_id)=mysql_fetch_array($re);
				echo $item_id;
			}		
			
		}
	}
	else
	if($edit==1)	
	{
		if ($_SESSION["s_user_type_id"]>2)
			$str_sql="update tbl_amlak_master_info set f1='$f1',f3='$f3',f5='$f5',f6='$f6',f8='0' where auto_id=$item_id";						
		else
			$str_sql="update tbl_amlak_master_info set f1='$f1',f2='$f2',f3='$f3',f5='$f5',f6='$f6',f8='0' where auto_id=$item_id";							

		$re=mysql_query($str_sql); 
		if(!$re)
		{ 
			echo "-1";
			die();
		}
		else
		{
			echo $item_id;
			die();
		}	
			
	}
//---------------------------------------
?>