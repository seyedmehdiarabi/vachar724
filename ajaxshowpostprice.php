<?php
include('connect.php');

    $item_id=(int)$_POST["item_id"];  
    $item_count=(int)$_POST["item_count"];  
 	$post_method=(int)$_POST["post_method"];
 	$b_id=(int) $_POST["b_id"];
 	

if($item_id==""||$item_id==0||$post_method==""||$post_method==0||$b_id==""||$b_id==0) 	
{
	return -1;
	die();
}	
if($post_method==1||$post_method==2) 	
	$post_price=0;
else if($post_method==3) 	
	$post_price=calc_post_price_zood($item_id,$item_count,0);

	$str_sql="update tbl_basket set f9=$post_price,f10=$post_method where auto_id='$b_id'";
	$re=mysql_query($str_sql);
	$str_sql="select sum(f9),sum(f3*f5)from tbl_basket where f1='$_SESSION[s_sell_id]'";
	$re=mysql_query($str_sql);
	list($all_post_price,$price_fact)=mysql_fetch_array($re);
	echo $post_price."*".$all_post_price."*".$price_fact;
	
	die();
	
?>
