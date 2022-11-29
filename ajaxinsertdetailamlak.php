<?php session_start(); 
include "connect.php";
 
	$info = $_POST['data_str'];
	$tbl_name=tbl_amlak_detail_info;
	list($master_id,$other)=explode("-",$info);
	$other=substr($other,1,strlen($other));

	$str_sql="delete from $tbl_name where f1=$master_id";
	$re_1=mysql_query($str_sql); 	
	
	$fld_name="f1,f2,f3";
	$val=explode(";", $other);
	$i=0;
	$str_sql="insert into tbl_amlak_detail_info (f1,f2,f3) values";
	$str_val="";
//	echo count($val)."<br>";
//	echo $val."<br>";
//	die();
	
	
	//while($val[$i]!="")
	//while($val[$i]
	for($i=0;$i<count($val);$i++)
	{
		$fld_val=$master_id.','.$val[$i];
		//if(strlen($fld_val)>1)
		if(strlen($val[$i])>1)
		{
  	 		//$str_val=$str_val."($fld_val) ,";
  	 		$str_val=$str_val.'('.stripslashes($fld_val).') ,';
		}
		$i++;
	}
			$str_val=substr($str_val,0,strlen($str_val)-1);
			$str_sql=$str_sql.$str_val;
			//echo $str_sql;
			//$str_sql=stripslashes($str_sql);
			$re=mysql_query($str_sql); 
			if($re)
				echo 1;
			else
				//echo -1;	
				echo $str_sql;
			die(); 
	
//---------------------------------------
?>