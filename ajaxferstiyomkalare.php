<?php session_start(); 
include "connect.php";
	
		
		$f10=cleantxt($_POST["f10"]);
		$f11=cleantxt($_POST["f11"]);
		$f12=cleantxt($_POST["f12"]);
		$f13=cleantxt($_POST["f13"]);
		$id=(int)$_POST["id"];
		if($id==""||$id==0)
		{
			echo "-1";
			die();
		}
		$re=mysql_query("update tbl_recive_order_detail set f10='$f10',f11='$f11',f12='$f12',f13='$f13' where auto_id='$id'");
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