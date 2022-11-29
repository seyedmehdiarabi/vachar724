<?php
include('connect.php');
if(isset($_POST['item_price']))
{

    $item_type=$_POST["item_type"];  
 	$sell_type=$_POST["sell_type"];
 	$item_price=$_POST["item_price"];
 	$item_count=$_POST["item_count"];
 	
 	$reg_price=0;
	$str_sql="SELECT f5 from tbl_price_of_sell where  ".$item_price."  BETWEEN f3 AND f4 ";
	$re=mysql_query($str_sql);
	list($ddd)=mysql_fetch_array($re);
	print $item_price*$item_count*$ddd/100;
}
?>
