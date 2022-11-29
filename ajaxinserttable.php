<?php session_start(); 
include "connect.php";
 $info = $_POST['data_str'];
// echo $info;
 list($tbl_name,$fld_name,$fld_val)=explode(";",$info);
 $fld_val=substr($fld_val,0,strlen($fld_val)-1);
 $fld_name=substr($fld_name,0,strlen($fld_name)-1);
 
 $str_sql="insert into  $tbl_name ($fld_name) values($fld_val)";
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//	check for valid data
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
		$str_sql=stripslashes($str_sql);
		$re=mysql_query($str_sql); 
		if($re)
		{
			echo 1;
			die(); 
		}
		else
		{
			echo $str_sql;
			die(); 
		}
		
//---------------------------------------
?>