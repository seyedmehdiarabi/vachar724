<?php include "user_header.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<!-- ---------------------SLIDER------------------------------------- -->	
<?php include "slider.php"?>
	<section>
		<div class="container">
			<div class="row">
<!-- ============================================================= -->										
<?php include "item_group.php"?>
<form name="frm_main" id="frm_main" method=post>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"></h2>

<!------------------------------------- 6 RANDOM ITEMS ------------------------>						

<?php 
//$re=mysql_query("select auto_id,f3,f4,f5,f6,f8 from tbl_item_info where (f23=1 or f23=3) and f15=1 order by RAND() desc limit 9");
//$re=mysql_query("select auto_id,f3,f4,f5,f6,f8 from tbl_item_info where (f23=1 or f23=3) and f15=1 order by RAND() desc limit 9");
$re=mysql_query("SELECT
  `tbl_item_info`.`auto_id`, `tbl_item_info`.`f3`, `tbl_item_info`.`f4`,
  `tbl_item_info`.`f5`, `tbl_item_info`.`f6`, `tbl_item_info`.`f8`
FROM
  `tbl_item_info` LEFT JOIN
  `tbl_item_sub_group` ON `tbl_item_info`.`f1` = `tbl_item_sub_group`.`auto_id`
  LEFT JOIN
  `tbl_item_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id`
  LEFT JOIN
  `tbl_item_main_group` ON `tbl_item_group`.`f10` =
    `tbl_item_main_group`.`auto_id` where (tbl_item_info.f23=1 or tbl_item_info.f23=3) and tbl_item_info.f15=1 and tbl_item_main_group.auto_id<>10 order by RAND() desc limit 9 ");
while($row=mysql_fetch_array($re))
{
?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img onclick="show_item_detail(<?php print $row[auto_id]?>);" src="images/items_pic/<?php print $row["auto_id"]?>_larg_1.jpg" title="<?php print $row[f3]?>" alt="<?php print $row[f3]?> در واچار" />
											<h2><?php print pool($row["f4"])?> ریال</h2>
											<p><?php $i_name=small_name($row["f3"],42);print $i_name;?></p>
<?php if ($row["f8"]>0){?>	
<a title="<?php print $row[f3]?>" onclick="mayom103x('<?php print $row[auto_id]?>','1');" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
به سبد اضافه کن
</a>
<input type=text value=1 id="t_<?php print $row[auto_id]?>" name="t_<?php print $row[auto_id]?>" width=5px class="t_sabad_count">
<?php 
}
else
{
?>									
<a title="<?php print $row[f3]?>" class="btn btn-default add-to-cart_no">
کالا فروخته شد
</a>
<?php }?>
										</div>
							<?php if ($row["f5"]==1) print "<img src='images/no.png' class='new' />";?>
							<?php if ($row["f5"]==2) print "<img src='images/nono.png' class='new' />";?>
							<?php if ($row["f5"]==3) print "<img src='images/daste2.png' class='new' />";?>


	 									 <?php if ($row["f8"]<=0){$img2="sold.png"; ?>
										<img src="images/<?php print $img2?>" class="forosh" alt="" />
										<?php } ?>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a title="<?php print $row[f3]?>" onclick="show_item_detail(<?php print $row[auto_id]?>);"><i class="fa fa-plus-square"></i>
										سایر تصاویر</a></li>
										<li ><a title="<?php print $row[f3]?>" onclick="show_item_detail(<?php print $row[auto_id]?>);"><i class="fa fa-plus-square"></i>
										 توضیحات محصول</a></li>
									</ul>
								</div>
							</div>
						</div>
<?php }// of while?>						
<!------------------------------------------------------------->
<!------------------------------------------------------------->
					</div><!--features_items-->
<!-- -------------------------------------------------------------- -->					
<!-- -------------------------------------------------------------- -->					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
<?php 
$re=mysql_query("select auto_id,f2 from tbl_item_sub_group where f11=1 order by f4 asc limit 10");
$i=0;
$row=mysql_fetch_array($re);
$t[$i++]=$row["auto_id"];
?>
							
								<li class="active"><a href="#g<?php print $row[auto_id]?>" data-toggle="tab"><?php print $row["f2"]?></a></li>
<?php 								
while($row=mysql_fetch_array($re))								
{
$t[$i++]=$row["auto_id"];
?>
								<li><a href="#g<?php print $row["auto_id"]?>" data-toggle="tab"><?php print $row["f2"]?></a></li>
<?php }// of while?>								
								
							</ul>
						</div>
						<div class="tab-content">
<?php
$k=0;
for($l=0;$l<=$i-1;$l++)
{
$j=0;
$re=mysql_query("select auto_id,f3,f4,f5,f8 from tbl_item_info where f1=$t[$l] and (f23=1 or f23=3) and f15=1 order by auto_id desc limit 4");
$num=mysql_num_rows($re);
for($count=0;$count<$num;$count++)
{
$row=mysql_fetch_array($re);
if ($j==0){
?>						

						<div class="tab-pane fade <?php if($k==0){ print 'active in';$k++; }?>" id="g<?php print $t[$l];?>" >
<?php 
}// of if
?>							
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo2 text-center">
												<img onclick="show_item_detail(<?php print $row[auto_id]?>);" src="images/items_pic/<?php print $row[auto_id];?>_small_1.jpg" alt="<?php print $row[f3]?> در واچار"  title="<?php print $row[f3]?>" />
												<h2><?php print pool($row["f4"]);?> ریال</h2>
												<p><?php print small_name($row["f3"],35);?></p>
<?php if ($row["f8"]>0){?>	
<a  onclick="mayom103x('<?php print $row[auto_id]?>','2');" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
به سبد اضافه کن
</a>
<input type=text value=1 id="t_<?php print $row[auto_id]?>" name="t_<?php print $row[auto_id]?>" width=5px class="t_sabad_count">
<?php 
}
else
{
?>									
<a  class="btn btn-default add-to-cart_no">
کالا فروخته شد
</a>
<?php }?>
											</div>
							<?php if ($row["f5"]==1) print "<img src='images/no.png' class='new' />";?>
							<?php if ($row["f5"]==2) print "<img src='images/nono.png' class='new' />";?>
							<?php if ($row["f5"]==3) print "<img src='images/daste2.png' class='new' />";?>


											
										</div>
									</div>
								</div>
<?php if ($j==$num-1) print "</div>" ;
$j++;
}// of while
}// of for
?>

</div>
</div><!--/category-tab-->
<!---------------------------------------------------------------------------------- -->							
<!---------------------------------------------------------------------------------- -->
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">جدیدترین کالاها</h2>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
<?php 
$i=-1;
$re=mysql_query("select auto_id,f3,f4,f5,f8 from tbl_item_info where (f23=1 or f23=3) and f15=1 order by auto_id desc limit 33");
$num=mysql_num_rows($re);
while($row=mysql_fetch_array($re))
{
$i++;
if($i%3==0){
?>
<div class="item <?php if($i==0) print 'active';?>">
<?php }?>																	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img onclick="show_item_detail(<?php print $row[auto_id]?>);" src="images/items_pic/<?php print $row["auto_id"]?>_larg_1.jpg" alt="<?php print $row[f3] ?> در آرکا" title="<?php print $row[f3]?>" />
													<h2><?php print pool($row["f4"])?> ریال</h2>
													<p><?php print small_name($row["f3"],42)?></p>
<?php if ($row["f8"]>0){?>	
<input type=text value=1 id="t_<?php print $row[auto_id]?>" name="t_<?php print $row[auto_id]?>" width=5px class="t_sabad_count">
<a  onclick="mayom103x('<?php print $row[auto_id]?>','1');" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
به سبد اضافه کن
</a>

<?php 
}
else
{
?>									
<a  class="btn btn-default add-to-cart_no">
کالا فروخته شد
</a>
<?php }?>
												</div>
							<?php if ($row["f5"]==1) print "<img src='images/no.png' class='new' />";?>
							<?php if ($row["f5"]==2) print "<img src='images/nono.png' class='new' />";?>
							<?php if ($row["f5"]==3) print "<img src='images/daste2.png' class='new' />";?>


												
											</div>
										</div>
									</div>
<?php 
if($i==2||$i==5||$i==8||$i==11||$i==14||$i==17||$i==20||$i==23||$i==26||$i==29||$i==$num-1) print "</div>" ;
};//of while 
?>						</div>			
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
</form>					
<?php include "user_footer.php"?>