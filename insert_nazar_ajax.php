<?php 
include "connect.php";
$f3=trim($_POST["nazar"]);
if ($f3=="")
	echo "nazar";
else
{
	$t_sec_code=$_POST["t_sec_code"];
	if (strtolower($t_sec_code)!=strtolower($_SESSION["s_sec_code"]))
		echo "sec_code";
	else
	{
		
		$f1=trim($_POST["item_id"]);
		$t_temp=date("Y-n-j G:i");
		$t_temp=explode(' ',$t_temp);
		$t=$t_temp[1];
		$f5=$t;
		$f4=trim($_POST["t_date"]);
		$f2=trim($_POST["user_id"]);
	
		$f9=trim($_POST["user_name"]);
		$f8=trim($_POST["email"]);
		$f10="";
		$f11=0;
		$res=mysql_query("insert into tbl_item_cust_des (f1,f2,f3,f4,f5,f8,f9,f10,f11) values ($f1,$f2,'$f3','$f4','$f5','$f8','$f9','$f10','$f11')");
		if ($res)
			echo "1";
		else
			echo "-1";	
	}
}
?>