<?php 
include "connect.php";
$loadType=$_POST['loadType'];
$loadId=(int) $_POST['loadId'];
if ($loadId!=0||$loadId!="")
	$sql="select shahr_id,shahrestan from tbl_shahr where ostan_id='".$loadId."' order by shahrestan asc";
mysql_query("SET CHARACTER SET utf8");
$res=mysql_query($sql);
$check=mysql_num_rows($res);
if($check > 0){
   $HTML="";
   while($row=mysql_fetch_array($res))
   {
      $HTML.="<option value='".$row['shahr_id']."'>".$row['shahrestan']."</option>";
   }
   echo $HTML;   
   }   
   
?>