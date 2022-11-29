<?php session_start(); 
include "connect.php";
if ($_SESSION["s_user_id"]!="")
{
	$fld_name=(int)$_POST["fld_name"];
	$fld_val=cleantxt($_POST["fld_val"]);
	$auto_id=$_POST["row_id"];
	$fld_name="f".$fld_name;
	$tbl_name=$_POST["tbl_name"];
		$re=mysql_query("update $tbl_name set $fld_name='$fld_val' where auto_id=$auto_id"); 
		//echo "update $tbl_name set $fld_name='$fld_val' where auto_id=$auto_id";
		if($re)
		{
			echo 1; 
		}
		else
		{
			echo -1;
		}	
}	
//---------------------------------------
?>