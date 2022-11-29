<?php session_start(); 
include "connect.php";
 $info = $_POST['data_str'];
// echo $info;
 list($tbl_name,$str_where,$fld_val)=explode(";",$info);
 $fld_val=substr($fld_val,1,strlen($fld_val));
 $str_sql="update $tbl_name set $fld_val where $str_where";
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