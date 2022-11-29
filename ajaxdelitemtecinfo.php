<?php session_start(); 
include "connect.php";
	
		$val=cleantxt($_POST["auto_id"]);
		$tbl_name="tbl_item_info_tec";
		if($val==""||$val==0)
		{
			echo -1;
			die();
		}
		
		$str_sql="delete from $tbl_name where auto_id=$val";				
		$re=mysql_query($str_sql); 
		if(!$re)
		{ 
			echo "-1";
			die();
		}
		else
		{
			echo 1;
			die();
		}
//---------------------------------------
?>