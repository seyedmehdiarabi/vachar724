<?php session_start(); 
include "connect.php";
	
		$f14=cleantxt($_POST["get_date"]);
		$f15=cleantxt($_POST["get_des"]);
		$id=(int)$_POST["id"];
		if($id==""||$id==0)
		{
			echo "-1";
			die();
		}
		$re=mysql_query("update tbl_recive_order_detail set f14='$f14',f15='$f15' where auto_id='$id'");
		if (!$re)
		{
			echo "-1";
			die();			
		}	
		else
		{
			echo 1;
		}
		

//---------------------------------------
?>