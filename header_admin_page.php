<?php ob_start(); session_start(); 
include "connect.php";

if($_SESSION["s_user_id"]=="")
	header("Location: index.php?exit");

if ($_SESSION["today_date_t"]=="")
{
	$rh=mysql_query("select sell_date from tbl_item_info2");
	$r=mysql_fetch_array($rh);
	$_SESSION["today_date_t"]=$r["sell_date"];
}
$y=date('Y');
$m=date('m');
$d=date('d');
?>
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script type="text/javascript" src="js/jquery.js"></script>
<SCRIPT type="text/javascript" src="js/aseman_func.js"></SCRIPT>
<link rel="stylesheet" type="text/css" href="css/admin_style.css" >
<script language="javascript">
var err_1="گزینه فوق نمی تواند خالی باشد";
var err_2="طول این گزینه صحیح نمی باشد";
var err_3="لطفا برای این گزینه فقط عدد وارد کنید";
var err_4="قالب پست الکترونیک صحیح نمی باشد";
</script>
<title></title>
</head>
<body>
<?php 
//===================================================
function calc_payed_for_reg_item($item_id)
{
	$sum=0;
	$item_id=(int) $item_id;
	if ($item_id==""||$item_id==0) return 0;
	$re=mysql_query("select sum(f5) from tbl_item_reg_d_factor where f2=$item_id");
	if($re)
		list($sum)=mysql_fetch_array($re);

	if($sum=="")$sum=0;	
	return $sum;	
}
//===================================================
function calc_shood_for_reg_item($item_id,$item_count,$reg_price,$sell_count)
{
	$sum=0;
	$item_id=(int) $item_id;
	$item_count=(int) $item_count;
	$reg_price=(int) $reg_price;
	$sell_count=(int) $sell_count;
	
	/*
	print $item_id."<br>";
	print $item_count."<br>";
	print $reg_price."<br>";
	print $sell_count."<br>";
	
	if ($item_id==""||$item_id==0) return 0;
	

	if ($sell_count=="") return 0;	
	*/
	if ($reg_price==""||$reg_price==0) return 0;
	if ($item_count==""||$item_count==0) return 0;
		
	$one_price=round($reg_price/$item_count);
	$sum=($item_count+$sell_count)*$one_price;

	return $sum;	

}
?>

</body>
</html>

