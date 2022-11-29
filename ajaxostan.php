<?php
include('connect.php');
if(isset($_POST['item_id']))
{
    $item_id=$_POST["item_id"];  
 	$tar_val=$_POST["tar_val"];
 	$str_sql="update tbl_ostan set hamjavarha='$tar_val' where ostan_id=$item_id";
	mysql_query($str_sql);
	//echo $str_sql;
}
?>
