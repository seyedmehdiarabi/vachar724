<?php include "user_header.php"?>
<?php 
	function get_seller_info($id)
	{
	$re=mysql_query("SELECT   `tbl_user_info`.`auto_id` AS  `s_user_id`,`tbl_item_info`.`f19` AS `s_item_reg_date`,
	 `tbl_user_info`.`f22` AS `s_famil`, `tbl_user_info`.`f9` AS `s_reg_date`, `tbl_user_info`.`f6` AS `s_user_mobil`, `tbl_user_info`.`f3` AS `s_user_name`,
	 `tbl_user_info`.`f24` AS `s_city_id` ,`tbl_user_info`.`f25` 
	  FROM
	  `tbl_item_info` LEFT JOIN
	  `tbl_user_info` ON `tbl_user_info`.`auto_id` = `tbl_item_info`.`f2`   where `tbl_item_info`.`auto_id`=$id");		
		$res=mysql_fetch_array($re);
		return $res;
	}
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group4").colorbox({rel:'group4',slideshow:true});
			});
		</script>

<!-- ---------------------------------------------------------- -->	
	</head>
	<section>
		<div class="container">
			<div class="row">
	<?php include "item_group.php"?>

<!---------------------------------------------------- -->	
<?php 
$item_id=(int)$_POST["item_id"];
if($item_id=="")
	$item_id=(int)$_GET["item_id"];
if($item_id=="")
	header("Location: index.php");
$re=mysql_query("select auto_id,f3,f4,f5,f6,f7,f8,f10,f11,f12,f13,f14,f16,f18 from tbl_item_info where (f23=1 or f23=3) and f15=1 and auto_id=$item_id");	
$row=mysql_fetch_array($re);
?>
			
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product" id="larg_img">
								<a class="group4"  href="images/items_pic/<?php print $item_id?>_larg_1.jpg" >
								<img src="images/items_pic/<?php print $item_id?>_larg_1.jpg" alt="<?php print $row[f3]?>" />
								</a>
								<!--<h3><a class="group4"  href="images/items_pic/<?php print $item_id?>_larg_1.jpg" >بزرگنمایی</a></h3>-->
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
								    <?php for($i=1;$i<=5;$i++)
								    {
										if($i==1||$i==4){								   
								    ?>
								    <div class="item <?php if($i==1)print 'active'?>">
								    <?php };
											$no_pic="images/items_pic/no_item_pic.jpg";
											$img_name_small="images/items_pic/".$item_id."_small_".$i.".jpg";
											$img_name_larg="images/items_pic/".$item_id."_larg_".$i.".jpg";
											 if(!is_file($img_name_small)) {$img_name_small=$no_pic; $img_name_larg=$no_pic;}
											 if($i>0){
											?>
   										  <a class="group4"  href="<?php print $img_name_larg?>" title="<?php //print $row[f3]?>">
   										  <?php }?>
 										  <img src="<?php print $img_name_small?>" alt="<?php print $row[f3]?>" />
 										  </a>	
  										  <?php if($i==3||$i==5)print "</div>";?>
										<?php }// of while?>
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
<!----------------------------------------------------------------------------------------->
				<?php 
					
				$re=mysql_query("Select auto_id,f1,f2,f3,f4,f5,f6,f7,f8,f10,f11,f12,f13,f14,f18 from tbl_item_info where f15=1 and auto_id=$item_id");
				$row=mysql_fetch_array($re);
				$pic_dir="images/items_pic/";
				$pic_name=$item_id."_small_1.jpg";
				if(!is_file($pic_dir.$pic_name))
					$pic_name="adver_no_pic_larg_1.jpg";
				?>

						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<?php if ($row["f8"]<=0) print "<img src='images/sold.png' class='newarrival' alt='آرکا' />";?>
							<?php if ($row["f5"]==1) print "<img src='images/no.png' class='new' />";?>
							<?php if ($row["f5"]==2) print "<img src='images/nono.png' class='new' />";?>
							<?php if ($row["f5"]==3) print "<img src='images/daste2.png' class='new' />";?>
								<h2><?php print $row["f3"]?></h2>
								<p class="emtiaz"><img src="images/rating.png" alt="" /></p>
								<p class="price1" align=center><?php print pool($row["f4"])?> ریال</p>
<br>
<p  align=center>
<?php if ($row["f8"]>0){?>	
<input type=text value=1 id="t_<?php print $row[auto_id]?>" name="t_<?php print $row[auto_id]?>" width=5px class="t_sabad_count">
<a title="<?php print $row[f3]?>"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
به سبد اضافه کن
</a>
</p>
<?php $post='';
if($row["f7"]==1||$row["f7"]=='خریدار')
	$post="خریدار";
else
	$post="فروشنده";
?>
<p class="price1"><span>&nbsp; <?php print "هزینه ارسال کالا با ".$post." می باشد "?> &nbsp;</span></p>
<?php 
if ($post=="خریدار")
{
	if($_SESSION["s_user_id"]=="")
		print "<p class=price1><span>&nbsp; برای مشاهده هزینه پست لطفا با نام کاربری و رمز عبور خود وارد شوید &nbsp;</span></p>";
	else
	{	

		$post_price=calc_post_price_zood($item_id,1,0);
		mysql_query("SET CHARACTER SET utf8");
		$r=mysql_query("SELECT  `tbl_shahr`.`shahrestan` FROM   `tbl_shahr` RIGHT JOIN
		`tbl_user_info` ON `tbl_user_info`.`f24` = `tbl_shahr`.`shahr_id` where `tbl_user_info`.`auto_id`='$_SESSION[s_user_id]'");
		list($user_city)=mysql_fetch_array($r);
		mysql_query("SET CHARACTER SET $charset ");
			print "<p class=price1><span>&nbsp; هزینه پست این کالا به <font color=#00A753> $user_city </font>برابر است با <font color=#00A753>".pool($post_price)." </font> ریال &nbsp;</span></p>";
	}	

}
}
else
{
?>									
<a title="<?php print $row[f3]?>" class="btn btn-default add-to-cart_no">
کالا فروخته شد
</a>
</p>
<?php }?>


								<?php if ($row["f10"]!=""){?>
								<p class="title"><b>توضیحات مختصر :</b><span ><?php print $row[f10];?></span></p>
								<?php } // of if?>
								<p class="title"><b>تعداد دفعات بازدید : </b><span > <?php print $row[f18];?> مرتبه </span></p>
								<p class="emtiaz"><b>امتیاز شما به این کالا</b></p>
								<p class="emtiaz"><img src="images/rating.png" alt="خرید و فروش اجناس دسته دوم" /></p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#reviews" data-toggle="tab">نظر شما در باره این کالا</a></li>
								<li><a href="#nazarha" data-toggle="tab">
								نظرات بازدیدکنندگان</a></li>
								<li><a href="#tag" data-toggle="tab">سایر کالاهای این فروشنده</a></li>
								<!--<li ><a href="#darbare" data-toggle="tab">
								درباره فروشنده</a></li>-->
								<li ><a href="#details" data-toggle="tab">جزئیات کالا</a></li>
								<li class="active"><a href="#darbare_froshande" data-toggle="tab">مشخصات فروشنده کالا</a></li>
								
							</ul>
						</div>
						<div class="tab-content">
<!--------------------------NAZAR SHOMA--------------------------- -->						
							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
								<div id="res_msg" align=center></div>
								<div id="res_msg_err" align=center></div>
								<p><b>نظر خود را ثبت نمایید</b></p>
									<p>شما بازدید کننده عزیز می توانید در چند سطر نظر خود را در مورد این کالا بنوسید. بدلیل حجم بالای نظرات ، نظرات شما ظرف 24 ساعت آینده در سایت قرار خواهد گرفت .
									 برای آگاهی از قرار گرفتن نظر خود در سایت گزینه پست الکترونیک را صحیح وارد نمایید تا پس از قرار گرفتن نظر شما در سایت ، به شما اطلاع رسانی شود.  </p>
									<form method="post" name=form1 id=form1 action="<?php print $_SERVER["PHP_SELF"]."?item_id=$item_id";?>">
										<span>
											<input type="text" id="t_name" id="t_name" placeholder="نام و نام خانوادگی (اختیاری)"/>
											<input type="text" id="t_email" id="t_email" placeholder="پست الکترونیک"/>
										</span>
<?php 
	include "jdf.php";
	$t_date=gregorian_to_jalali($y,$m,$d); // register date
	$t_date=$t_date[0]."/".$t_date[1]."/".$t_date[2];
//	print $t_date;

?>										
										
										<div id="nazar_err"></div><textarea name="t_nazar"  id="t_nazar"  placeholder="متن نظر شما" ></textarea>
										<span>
											<div id="sec_err"></div>
											<input type="text" name="t_sec_code" id="t_sec_code" placeholder="کد مقابل را تایپ کنید.با حروف بزرگ"/>
											<img src="sec_code.php">
										</span>
										<button type="button" class="btn btn-default pull-right" >ارسال نظر شما
										</button>
									</form>
								</div>
							</div>
<!-----------------------------NAZAR MARDOM------------------------------------ -->													
							<div class="tab-pane fade" id="nazarha" >
								<div class="col-sm-12">
								<?php 							
								$r_nazar= mysql_query("SELECT  `tbl_item_cust_des`.*, `tbl_user_info`.`f3` as user_full_name FROM
								 `tbl_item_cust_des` LEFT JOIN `tbl_user_info` ON `tbl_item_cust_des`.`f2` = `tbl_user_info`.`auto_id` 
							 	 where `tbl_item_cust_des`.`f1`=$item_id and `tbl_item_cust_des`.`f11`=1");
								if(mysql_num_rows($r_nazar)>0)
								{
									while ($arr_nazar=mysql_fetch_array($r_nazar))
								{
								?>
									<ul>
										<li><a><i class="fa fa-user"></i>
										<?php if($arr_nazar["user_full_name"]!="") print $arr_nazar["user_full_name"]; else print  $arr_nazar["f9"];?></a></li>
										<li><a ><i class="fa fa-clock-o"></i>
										<?php print $arr_nazar["f4"];?></a></li>
										<li><a ><i class="fa fa-calendar-o"></i>
										<?php print $arr_nazar["f5"];?></a></li>
									</ul>
								<p class="nazar"><?php print $arr_nazar["f3"];?></p>	
								<?php };// of while
								}
								else
									print "<h4> <center>تاکنون نظری در مورد این کالا ثبت نشده است</center></h4>"
								?>
								</div>
							</div>
<!------------------------------------------------------------------------------------ -->																				
<!--------------------------SAYER KALAHAYE FOROSHANDE      --------------------------- -->						
							<div class="tab-pane fade" id="tag" >
<?php 							
				
				$re=mysql_query("Select auto_id,f3,f4,f5,f8 from tbl_item_info where f15=1 and f2=$row[f2] and auto_id<>$item_id and (f23=1 or f23=3) order by auto_id desc limit 4");
			  while($row_other=mysql_fetch_array($re))
			  {
?>				
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img src="images/items_pic/<?php print $row_other["auto_id"]?>_larg_1.jpg" title="<?php print $row_other[f3]?>" alt="<?php print $row_other[f3]?> در واچار" />												
												<h2><?php print pool($row_other["f4"])?> ریال </h2>
												<p><?php print small_name($row_other["f3"],35)?></p>
<?php if ($row_other["f8"]>0){?>	
<input type=text value=1 id="t_<?php print $row_other[auto_id]?>" name="t_<?php print $row[auto_id]?>" width=5px class="t_sabad_count">
<a title="<?php print $row_other[f3]?>"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
به سبد اضافه کن
</a>
<?php 
}
else
{
?>									
<a title="<?php print $row_other[f3]?>" class="btn btn-default add-to-cart_no">
کالا فروخته شد
</a>
<?php }?>

											</div>
										<?php if ( $row_other["f5"]=="1")$img1="no.png";else $img1="daste2.png";?>
										<img src="images/<?php print $img1?>" class="new" alt="" />										
	 									 <?php if ( $row_other["f8"]<=0){$img2="sold.png"; ?>
										<img src="images/<?php print $img2?>" class="forosh" alt="" />
										<?php } ?>
										</div>
									</div>
								</div>
<?php }?>								
							</div>
<!------------------------------------------------------------------------------------ -->																				
<!--------------------------DARBARE --------------------------- -->						
<!------------------------------------------------------------------------------------ -->																				
<!--------------------------DARBARE --------------------------- -->						
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-12">
								<div class="detail_pic" ><img width=200px  src=images/items_pic/<?php print $item_id?>_larg_1.jpg>
								<h3><?php print $row["f3"]?></h3>
								<h4 class="item_detail_name">9.5 <img src=images/rating.png> </h4>
								<?php if ($row["f10"]!="") {?>
									<p ><b>معرفی اولیه :</b><br><span ><?php print $row["f10"]?></span></p>
								<?php }?>	
								<?php if ($row["f11"]!="") {?>
									<p ><b><?php print $row["f11"]?> :</b><br><span ><?php print $row["f12"]?></span></p>
								<?php }?>	
								<?php if ($row["f13"]!="") {?>
									<p ><b><?php print $row["f13"]?> :</b><br><span ><?php print $row["f14"]?></span></p>
								<?php }?>	
								<?php 
									$re=mysql_query("select f2,f3 from tbl_item_info_tec where f1=$item_id");
									if (mysql_num_rows($re)>0){
								?>
										<p ><center><b>مشخصات فنی  :</b></center></p>								
										<p > 
										<table id="tbl_item_tec_info" align=center>
										<thead>
										<tr>
											<td class="row_header">نام مشخصه</td>
											<td class="row_header">مقدار</td>
											</tr>
										</thead>
									<?php 
									$i=0;
									//$re=mysql_query("select f2,f3 from tbl_item_info_tec where f1=$item_id");
									while(list($item_per,$item_val)=mysql_fetch_array($re)){ if($i++%2==0) $class_name="even_row";else $class_name="odd_row"; 
									?>
										<tr>
										<td class="<?php print $class_name?>"><b> 
										<?php print $item_per?>
										</b></td>
										<td class="<?php print $class_name?>" dir=ltr><b>
										<?php print $item_val?>						
										</b></td>
										</tr>
									<?php }?>
									</table>
									</p>
								<?php } // of if?>
								</div>
							</div>
							</div>
<!------------------------------------------------------------------------------------ -->
<!-- About Froshande -->
							<div class="tab-pane fade active in" id="darbare_froshande" >
<?php
$seller_info=get_seller_info($item_id);
if($seller_info["f25"]==0)
{
 ?>							
 				<div class="col-sm-12">
 				<div class="detail_pic" >
 				<h3>اطلاعات این فروشنده به درخواست وی نمایش داده نمی شود اما امکان خرید برای شما مهیا می باشد</h3>
 				</div>
 				</div>
 <?php }
 else{
 ?>				
 								
								<div class="col-sm-12">
									<?php 
										$user_pic="images/user/".$seller_info[s_user_id].".jpg";
										if(!is_file($user_pic)) {$user_pic="images/user/no_user_pic.jpg";}
										?>

									<div class="detail_pic" ><img width=150px alt="<?php print $seller_info[s_user_name].'  '.$seller_info[s_famil]?> در آرکا" title="<?php print $seller_info[s_user_name].'  '.$seller_info[s_famil]?>" src="<?php print $user_pic?>">
										<h3><?php print $seller_info["s_user_name"]."  ".$seller_info["s_famil"]?></h3>
										<p ><b>تاریخ عضویت در واچار 724 :  </b><span><?php print $seller_info["s_reg_date"]?></span></p>
										<p ><b>تاریخ ثبت کالا : </b><span><?php print $seller_info["s_item_reg_date"]?></span></p>
<?php 
		mysql_query("SET CHARACTER SET utf8");
		$r=mysql_query("SELECT  shahrestan,ostan_name FROM tbl_shahr where shahr_id='$seller_info[s_city_id]'");
		list($s_city,$s_ostan)=mysql_fetch_array($r);
		mysql_query("SET CHARACTER SET $charset ");
?>										
										<p ><b>شهر فروشنده : </b><span><?php print $s_ostan." ، ".$s_city;?></span></p>
										<p ><b>تلفن تماس : </b><span><?php print $seller_info["s_user_mobil"]?></span></p>
									</div>
								</div>
 <?php }// of else
 ?>										
							</div>
																										
<!------------------------------------------------------------------------------------ -->
						</div>
					</div><!--/category-tab-->
<!-------------------------------------------------------------- -->					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">کالاهای مشابه</h2>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
<?php 
$i=-1;
$re=mysql_query("select auto_id,f3,f4,f5,f8 from tbl_item_info where (f23=1 or f23=3) and f15=1 and f1=$row[f1] and auto_id<>$item_id order by f21 asc limit 30");
$num=mysql_num_rows($re);
while($row_moshabeh=mysql_fetch_array($re))
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
														<img src="images/items_pic/<?php print $row_moshabeh["auto_id"]?>_larg_1.jpg" title="<?php print $row_moshabeh[f3]?>" alt="<?php print $row_moshabeh[f3]?> در واچار" />
													<h2><?php print pool($row_moshabeh["f4"])?> ریال</h2>
													<p><?php print small_name($row_moshabeh["f3"],35)?></p>
<?php if ( $row_moshabeh["f8"]>0){?>	
<input type=text value=1 id="t_<?php print $row_moshabeh[auto_id]?>" name="t_<?php print $row[auto_id]?>" width=5px class="t_sabad_count">
<a title="<?php print $row_moshabeh[f3]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
به سبد اضافه کن
</a>
<?php 
}
else
{
?>									
<a title="<?php print $row_moshabeh[f3]?>" class="btn btn-default add-to-cart_no">
کالا فروخته شد
</a>
<?php }?>

												</div>
										<?php if ( $row_moshabeh["f5"]=="1")$img1="no.png";else $img1="daste2.png";?>
										<img src="images/<?php print $img1?>" class="new" alt="" />										
	 									 <?php if ( $row_moshabeh["f8"]<=0){$img2="sold.png"; ?>
										<img src="images/<?php print $img2?>" class="forosh" alt="" />
										<?php } ?>
												
											</div>
										</div>
									</div>
<?php 
if($i==2||$i==5||$i==8||$i==11||$i==14||$i==17||$i==20||$i==23||$i==26||$i==29||$i==$num-1) print "</div>" ;
};//of while 
?>										
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
<!-------------------------------------------------------------- -->					
				</div>
			</div>
		</div>
	</section>
	
<?php include "user_footer.php"?>

<script language=javascript>
function show_big_pic($pic_name)
{
   $ad='<a class="group4"  href="'+$pic_name+'"><img src="'+$pic_name+'" /></a>';
   $("#larg_img").hide();
   $("#larg_img").fadeIn(400).html('<img src="images/aseman_loading.gif" >');   
   $("#larg_img").html('');
   $("#larg_img").html($ad);
   $("#larg_img").show();
   								
}
//-----------------------------------------

</script>
