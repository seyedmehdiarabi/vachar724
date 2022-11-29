<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<!-- ---------------------------------------------------------- -->	
<p>&nbsp;</p>
				<div class="col-sm-3">
					<div class="left-sidebar">
<!-- ============================================================= -->																
						<h2>پیوندهای تصویری</h2>
<!---------------------------------------------------- -->
<!-------------------------ADVER --------------------- -->
	<div class="brands_products"><!--brands_products-->
	
	<?php 
$re2=mysql_query("SELECT auto_id,f1,f2,f3,f4,f5 from tbl_pic_link where f6=1 order by f3"); 
while($row2=mysql_fetch_array($re2))
{
?>
	<a class=pic_link href="<?php print $row2[f2]?>" target="<?php print $row2[f5]?>"><img class="" src="images/pic_link/<?php print $row2[auto_id].$row2[f4]?>"></a>
<?php }?>
							</div>

<?php 
$re2=mysql_query("SELECT auto_id,f1,f2,f3,f4 from tbl_license where f4=1 order by f3"); 
while($row2=mysql_fetch_array($re2))
{
?>

	<a class=pic_link <?php print $row2[f2]?><img class="pic_link_img" <?php print $row2[auto_id].$row2[f2]?></a>
<?php }?>

<!--/brands_products-->
<!---------------------------------------------------- -->											
					
					</div>
				</div>