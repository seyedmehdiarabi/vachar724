<?php session_start(); 
include "connect.php";
	
if (strtolower(cleantxt($_POST["ts"]))!=strtolower($_SESSION['s_sec_code']))
{
	echo -2;
	die();
}


		$f1=cleantxt($_POST["tn"]);
		$f2=cleantxt($_POST["tm"]);
		$f4=cleantxt($_POST["te"]);
		$f5=cleantxt($_POST["tp"]);
		include "jdf.php";
		$t_date=gregorian_to_jalali($y,$m,$d); // register date
		$f6=$t_date[0]."/".$t_date[1]."/".$t_date[2];
		
		$t=date("Y-n-j G:i");
		$t=explode(' ',$t);
		$f7=$t[1];

		$f9=0;// no read
		$str_sql="insert into tbl_contactus(f1,f2,f4,f5,f6,f7,f9)values ('$f1','$f2','$f4','$f5','$f6','$f7','$f9')";				
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