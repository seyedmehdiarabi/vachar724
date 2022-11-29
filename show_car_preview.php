<?php include "user_header.php"?>
<?php 
	function get_seller_info($id)
	{
	$re=mysql_query("SELECT `tbl_user_info`.`auto_id` AS  `s_user_id`, `tbl_user_info`.`f22` AS `s_famil`, 
	`tbl_user_info`.`f9` AS `s_reg_date`,
	 `tbl_user_info`.`f6` AS `s_user_mobil`, 
	 `tbl_user_info`.`f3` AS `s_user_name`,
	 `tbl_user_info`.`f24` AS `s_city_id` ,`tbl_user_info`.`f25` 
	  FROM
	  `tbl_car_master_info` LEFT JOIN
	  `tbl_user_info` ON `tbl_user_info`.`auto_id` = `tbl_car_master_info`.`f2`   where `tbl_car_master_info`.`auto_id`=$id");		
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
	
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("SELECT  `tbl_shahr`.`shahrestan`,
  `tbl_shahr`.`ostan_name`, `tbl_car_master_info`.`f4`, `tbl_car_master_info`.`f10` ,`tbl_car_master_info`.`f2`,`tbl_car_master_info`.`f1`
FROM
  `tbl_car_master_info` LEFT JOIN
  `tbl_shahr` ON `tbl_car_master_info`.`f3` = `tbl_shahr`.`shahr_id` where `tbl_car_master_info`.`auto_id`=$item_id");
$num=mysql_num_rows($re);
if($num<=0)
	header("Location: index.php");
list($city_name,$ostan_name,$reg_date,$visit_count,$user_code,$item_group)=mysql_fetch_array($re);
mysql_query("SET CHARACTER SET $charset ");
?>
			
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product" id="larg_img">
								<a class="group4"  href="images/car_pic/vachar724_<?php print $item_id?>_larg_1.jpg" >
								<img src="images/car_pic/vachar724_<?php print $item_id?>_larg_1.jpg" alt="خرید و فروش خودرو در <?php print $ostan_name?>" />
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
											$no_pic="images/car_pic/no_item_pic.jpg";
											$img_name_small="images/car_pic/vachar724_".$item_id."_small_".$i.".jpg";
											$img_name_larg="images/car_pic/vachar724_".$item_id."_larg_".$i.".jpg";
											 if(!is_file($img_name_small)) {$img_name_small=$no_pic; $img_name_larg=$no_pic;}
											 if($i>0){
											?>
   										  <a class="group4"  href="<?php print $img_name_larg?>" title="<?php //print $row[f3]?>">
   										  <?php }?>
 										  <img src="<?php print $img_name_small?>" alt="رهن و اجاره منزل در <?php print $city_name?>" />
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
				$pic_dir="images/car_pic/";
				$pic_name="vachar724_".$item_id."_small_1.jpg";
				if(!is_file($pic_dir.$pic_name))
					$pic_name="adver_no_pic_larg_1.jpg";
				?>

						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->

										<table class="tbl_properties" align=center>
										<thead>
										<tr>
											<td class="row_header">نام مشخصه</td>
											<td class="row_header">مقدار</td>
											</tr>
										</thead>
										<tr>
										<td class="even_row"><b> 
										تاریخ ثبت آگهی
										</b></td>
										<td class="even_row"><b>
										<?php print $reg_date?>						
										</b></td>
										</tr>
										<tr>
										<td class="odd_row"><b> 
										تعداد دفعات بازدید آگهی
										</b></td>
										<td class="odd_row" ><b>
										<?php print $visit_count?>						
										</b></td>
										</tr>
										<tr>
										<td class="even_row"><b> 
										<?php print $ostan_name?>
										</b></td>
										<td class="even_row" ><b>
										<?php print $city_name?>						
										</b></td>
										</tr>

									<?php 
$re=mysql_query("SELECT
  `tbl_car_pre_need`.`f1` as a_title, `tbl_car_pre_need`.`f5` as a_unit,
  `tbl_car_detail_info`.`f3` as a_val,`tbl_car_pre_need`.`f2` as a_data_type
FROM
  `tbl_car_pre_need` RIGHT JOIN
  `tbl_car_detail_info` ON `tbl_car_detail_info`.`f2` =`tbl_car_pre_need`.`auto_id` where `tbl_car_detail_info`.`f1`=$item_id order by `tbl_car_pre_need`.`f6`");
									
									$i=0;
									while(list($item_per,$a_unit,$item_val,$a_data_type)=mysql_fetch_array($re)){ if($i++%2==0) $class_name="even_row";else $class_name="odd_row"; 
									?>
										<tr>
										<td class="<?php print $class_name?>"><b> 
										<?php print $item_per;if($a_unit!="") print " ( ".$a_unit." ) ";?>
										</b></td>
										<td class="<?php print $class_name?>" dir=ltr><b>
										<?php 
										if($a_data_type=="currency") $item_val=pool($item_val);
										if($item_val=="ok") print "<img src=images/aseman_tik.gif>";else print $item_val?>						
										</b></td>
										</tr>
									<?php }?>
									</table>
							
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#tag" data-toggle="tab">سایر آگهی های این کاربر</a></li>
								<li class="active"><a href="#darbare_froshande" data-toggle="tab">مشخصات صاحب آگهی</a></li>
							</ul>
						</div>
						<div class="tab-content">
<!--------------------------SAYER KALAHAYE FOROSHANDE      --------------------------- -->						
							<div class="tab-pane fade" id="tag" >
<?php 							
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("SELECT  `tbl_shahr`.`shahrestan`,
  `tbl_shahr`.`ostan_name`, `tbl_car_master_info`.`f4`, `tbl_car_master_info`.`f10` ,`tbl_car_master_info`.`auto_id` 
FROM
  `tbl_car_master_info` LEFT JOIN
  `tbl_shahr` ON `tbl_car_master_info`.`f3` = `tbl_shahr`.`shahr_id` where (`tbl_car_master_info`.`f8`=1 or `tbl_car_master_info`.`f8`=3) and `tbl_car_master_info`.`f6`=1 and `tbl_car_master_info`.`f2`=$user_code and `tbl_car_master_info`.`auto_id`<>$item_id");

mysql_query("SET CHARACTER SET $charset ");	
	  while($row_other=mysql_fetch_array($re))
  {
	$re2=mysql_query("SELECT
  `tbl_car_pre_need`.`f1` as a_title, `tbl_car_pre_need`.`f5` as a_unit,
  `tbl_car_detail_info`.`f3` as a_val
FROM
  `tbl_car_pre_need` RIGHT JOIN
  `tbl_car_detail_info` ON `tbl_car_detail_info`.`f2` =`tbl_car_pre_need`.`auto_id` where `tbl_car_detail_info`.`f1` =$row_other[auto_id] and `tbl_car_pre_need`.`f8`=1 order by `tbl_car_pre_need`.`f6`");
		  
?>				
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img onclick="show_car_detail(<?php print $row_other[auto_id]?>);" src="images/car_pic/vachar724_<?php print $row_other["auto_id"]?>_larg_1.jpg" title="خرید و فروش خودرو در <?php print $row_other[shahrestan]?>" alt="خرید و فروش و رهن اجاره خودرو در <?php print $row_other[ostan_name]?>" />
											<h2><?php print $row_other["ostan_name"]." / ".$row_other["shahrestan"]?></h2>
<?php 
while($row2=mysql_fetch_array($re2))
{
?>
		<h2><?php print $row2["a_title"]." : ".$row2["a_val"]." ".$row2["a_unit"] ?></h2>
<?php }?>

											</div>
										</div>
									</div>
								</div>
<?php }?>								
							</div>
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
	
											<div class="detail_pic" ><img width=150px alt="<?php print $seller_info[s_user_name].'  '.$seller_info[s_famil]?> در واچار724" title="<?php print $seller_info[s_user_name].'  '.$seller_info[s_famil]?>" src="<?php print $user_pic?>">
											<h3><?php print $seller_info["s_user_name"]."  ".$seller_info["s_famil"]?></h3>
											<p ><b>تاریخ عضویت در واچار 724 :  </b><span><?php print $seller_info["s_reg_date"]?></span></p>
											<p ><b>تاریخ ثبت آگهی : </b><span><?php print $reg_date?></span></p>
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
					</div><!--/category-tab-->
<!-------------------------------------------------------------- -->					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">آگهی های مشابه</h2>
							<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
<?php 

$i=-1;
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("SELECT  `tbl_shahr`.`shahrestan`,
  `tbl_shahr`.`ostan_name`, `tbl_car_master_info`.`f4`, `tbl_car_master_info`.`f10` ,`tbl_car_master_info`.`auto_id` 
FROM
  `tbl_car_master_info` LEFT JOIN
  `tbl_shahr` ON `tbl_car_master_info`.`f3` = `tbl_shahr`.`shahr_id` where (`tbl_car_master_info`.`f8`=1 or `tbl_car_master_info`.`f8`=3) and `tbl_car_master_info`.`f6`=1 and `tbl_car_master_info`.`f1`=$item_group and `tbl_car_master_info`.`auto_id`<>$item_id  order by `tbl_car_master_info`.`auto_id` desc  limit 30 ");
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
														<img onclick="show_car_detail(<?php print $row_moshabeh[auto_id]?>);" src="images/car_pic/vachar724_<?php print $row_moshabeh[auto_id]?>_larg_1.jpg" title="خرید و فروش خودرو در <?php print $row_moshabeh[shahrestan]?>" alt="خرید و فروش خودرو در <?php print $row_moshabeh[shahrestan]?>" />
													<h2><?php print $row_moshabeh["ostan_name"]." / ".$row_moshabeh["shahrestan"] ?></h2>
													<p>&nbsp;</p>
											</div>
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
