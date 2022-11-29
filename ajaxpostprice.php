<?php 
include "connect.php";
$to1=$_POST['to'];
$to2=$_POST['to2'];
$tc=$_POST['tc'];
$tc2=$_POST['tc2'];
$tpm=$_POST['tpm'];
$tw=$_POST['tw'];
$tp=$_POST['tp'];

$position="";// f4 shahri,f5 doron ostan,f6 boron hamjavar,f7 boron gheyr hamjavar
if($tc==$tc2)
	$position="f4";
else if($to==$to2)
	$position="f5";
else 
{
	$re=mysql_query("select hamjavarha from tbl_ostan where ostan_id=$to");
	list($ham)=mysql_fetch_array($re);
	$t="";
	$k=0;
	$ham_arr=array($ham);
	for($i=0;$i<strlen($ham);$i++)
	{
		if($ham[$i]!=",")
			$t=$t.$ham[$i];
		else
		{
			$ham_array[$k++]=$t;
			$t="";
		}	
		
	}	

if ((in_array($to2,$ham_array))) 
	$position="f6";
else
	$position="f7";	

}	
	echo $position;

	$re=mysql_query("select $position from tbl_post_width where f1=$tpm and f2>=$tw and f3<=$tw");
	list($price_w)=mysql_fetch_array($re);
	echo $price_w;

	$re=mysql_query("select f3 from tbl_post_bime where  f1>=$tp and f2<=$tp");
	list($bime)=mysql_fetch_array($re);
	$price_b=($bime*$tp)/100;
	echo $price_b;
	$re=mysql_query("select * from tbl_post_method where auto_id=$tpm");
	list($auto_id,$f2,$f3,$f4,$f5,$f6,$f7,$f8,$f9,$f10,$f11)=mysql_fetch_array($re);
	
	$price=$price_w+$price_b+$f6+$f8+$f9;
	echo $price;
	
	$mal=($price*$f7)/100;
	echo $mal;
	$end_price=$price+$mal;
	echo $end_price;
?>