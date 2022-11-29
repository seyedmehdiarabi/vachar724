<?php session_start(); 
include "connect.php";
if ($_SESSION["s_sell_id"]!="")
{
	$b_id=(int) $_POST["b_id"];
	$b_des=cleantxt($_POST["b_des"]);
	if ($b_id!="")
	{
		$re=mysql_query("update tbl_basket set f4='$b_des' where auto_id=$b_id"); 
		if($re)
		{
			echo 1; 
		}
		else
		{
			echo -1;
		}	
	}
	else
	{
		echo -1;
	}
}
else
	{
		echo -1;
	}	
	
//---------------------------------------
?>