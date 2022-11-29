<?php include "user_header.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<!-- ---------------------------------------------------------- -->	
	<section>
		<div class="container">
			<div class="row">
		
<?php include "item_group.php"?>			
<!------------------------------------- Selected Group Pic------------------------>						
<?php 
$sub_id=$_GET["tar"];
switch ($sub_id)
{
	case "arzan":
	{
		$title="ارزان ترین کالاها در فروشگاه اینترنتی آرکا";
		$order=" f4 asc";
		break;		
	}
	case "geran":
	{
		$title="گران ترین کالاها در فروشگاه اینترنتی آرکا";
		$order=" f4 desc";
		break;		
	}
	case "visit":
	{
		$title="پربیننده ترین کالاها در فروشگاه اینترنتی آرکا";
		$order=" f18 desc";
		break;		
	}
	case "new":
	{
		$title="جدید ترین کالاها در فروشگاه اینترنتی آرکا";
		$order=" f19 asc";
		break;		
	}
	case "mahboob":
	{
		$title="محبوب ترین کالاها در فروشگاه اینترنتی آرکا";
		$order=" f18 asc";
		break;		
	}
	default:
	{
		$title="ارزان ترین کالاها در فروشگاه اینترنتی آرکا";
		$order=" f4 asc";
		break;
	}
}
?>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"><?php print $title?></h2>


<?php 
$re=mysql_query("select auto_id,f3,f4,f5,f6,f10,f18,f8 from tbl_item_info where (f23=1 or f23=3) and f15=1  order by $order limit 100");
while($row=mysql_fetch_array($re))
{
?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img onclick="show_item_detail(<?php print $row[auto_id]?>);" src="images/items_pic/<?php print $row["auto_id"]?>_larg_1.jpg" title="<?php print $row[f3]?>" alt="<?php print $row[f3]?> در آرکا" />
											<h2><?php print pool($row["f4"])?> ریال</h2>
											<p><?php print small_name($row["f3"],42)?></p>
<?php if ($row["f8"]>0){?>	
<input type=text value=1 id="t_<?php print $row[auto_id]?>" name="t_<?php print $row[auto_id]?>" width=5px class="t_sabad_count">
<a title="<?php print $row[f3]?>" onclick="mayom103x('<?php print $row[auto_id]?>','1');" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
به سبد اضافه کن
</a>
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
										<!--<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php print $row["f4"]?> ریال</h2>
												<p><?php print $row["f3"]." - ".$row["f10"]?></p>
												<a href="?add2b&item_id=<?php print $row[auto_id]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
												افزودن به سبد</a>
											</div>
										</div>-->
										<?php if ($row["f5"]=="1")$img1="no.png";else $img1="daste2.png";?>
										<img src="images/<?php print $img1?>" class="new" alt="" />										
	 									 <?php if ($row["f8"]<=0){$img2="sold.png"; ?>
										<img src="images/<?php print $img2?>" class="forosh" alt="" />
										<?php } ?>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a title="<?php print $row[f3]?>" onclick="show_item_detail(<?php print $row[auto_id]?>);"><i class="fa fa-plus-square"></i>
										سایر تصاویر</a></li>
										<li><a title="<?php print $row[f3]?>" onclick="show_item_detail(<?php print $row[auto_id]?>);"><i class="fa fa-plus-square"></i>
										 توضیحات محصول</a></li>
									</ul>
								</div>
							</div>
						</div>
<?php }// of while?>						
<!------------------------------------------------------------->
<!------------------------------------------------------------->
					</div><!--features_items-->
<!--------------------------------------------------------------------->					
				</div>
			</div>
		</div>
	</section>
<p></p>
<p></p>	
<?php include "user_footer.php"?>