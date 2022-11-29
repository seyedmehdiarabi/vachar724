<?php 
include "connect.php";
$loadId=$_POST['loadId'];
   $sql="select auto_id,f2 from tbl_item_sub_group where f1='".$loadId."' order by f4 asc";

$res=mysql_query($sql);
$check=mysql_num_rows($res);
if($check > 0){
   $HTML="";
   while($row=mysql_fetch_array($res))
   {
      $HTML.="<option value='".$row['auto_id']."'>".$row['1']."</option>";
   }
   echo $HTML;   
   }   
   
?>