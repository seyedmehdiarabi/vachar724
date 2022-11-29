<?php session_start(); 
include "connect.php";
 
	$master_id=(int)$_POST["master_id"];
	$fld_code=(int)$_POST["fld_code"];
	$val=$_POST["val"];
	
	$str_sql="delete from tbl_car_detail_info where f1=$master_id and f2=$fld_code";
	$re_1=mysql_query($str_sql); 	
if($val!="")
{
	$str_sql="insert into tbl_car_detail_info (f1,f2,f3) values($master_id,$fld_code,'$val')";	
	$re_1=mysql_query($str_sql); 	
}	
	if($re_1)
		echo 1;
	else
		echo -1;	
	

	
//---------------------------------------
?>