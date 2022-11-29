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
$sub_id=(int)$_POST["sub_id"];
if($sub_id=="")
	$sub_id=(int)$_GET["sub_id"];
if($sub_id=="")	
	$sub_id=(int)$_GET["zaghsiyahemechoobnazanberarjandorostniya"];
if($sub_id=="")	
	header("Location: index.php");	
$re=mysql_query("SELECT `tbl_item_sub_group`.`f2`,`tbl_item_group`.`f1`
FROM
  `tbl_item_group` RIGHT JOIN
  `tbl_item_sub_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id` where `tbl_item_sub_group`.`auto_id`=$sub_id");
 	list($sub_group_name,$group_name)=mysql_fetch_array($re);
?>				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"><?php print $group_name." - ".$sub_group_name?></h2>
				<div class="col-sm-9 padding-right">
					<div class="features_items">
					<!--
						<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" bgcolor="#F3F3F3">
							<form method="POST" action="--WEBBOT-SELF--">
								<tr>
									<td align="center" width="33%">&nbsp;</td>
									<td align="center" width="17%">&nbsp;</td>
									<td align="center" width="16%">&nbsp;</td>
									<td align="center" width="33%">&nbsp;</td>
								</tr>
								<tr>
									<td align="center" width="33%">
									<select size="1" name="txt_sort">
									<option value="-1">به ترتیب</option>
									</select></td>
									<td align="center" width="17%">
									<input type="text" name="txt_price2" size="20" value="تا قیمت"></td>
									<td align="center" width="16%">
									<input type="text" name="txt_price1" size="20" value="از قیمت"></td>
									<td align="center" width="33%">
									<select size="1" name="txt_model">
									<option value="-1">مدل را انتخاب کنید
									</option>
									</select></td>
								</tr>
								<tr>
									<td align="center" width="33%">
									<input type="button" value="جستجو" name="btn_search"></td>
									<td align="center" width="17%">
									<input type="text" name="txt_sal2" size="20" value="تا سال"></td>
									<td align="center" width="16%">
									<input type="text" name="txt_sal1" size="20" value="از سال"></td>
									<td align="center" width="33%">&nbsp;</td>
								</tr>
								<tr>
									<td align="center" width="33%">&nbsp;</td>
									<td align="center" width="17%">&nbsp;</td>
									<td align="center" width="16%">&nbsp;</td>
									<td align="center" width="33%">&nbsp;</td>
								</tr>
							</form>
						</table>
						<!--features_items-->
					</div>
				</div>
						


<?php 
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("SELECT
  `tbl_car_master_info`.`auto_id`, `tbl_shahr`.`shahrestan`,
  `tbl_shahr`.`ostan_name`, `tbl_car_master_info`.`f4` as reg_date
FROM
  `tbl_car_master_info` LEFT JOIN
  `tbl_shahr` ON `tbl_car_master_info`.`f3` = `tbl_shahr`.`shahr_id` where (`tbl_car_master_info`.`f8`=1 or `tbl_car_master_info`.`f8`=3) and `tbl_car_master_info`.`f6`=1 and `tbl_car_master_info`.`f1`=$sub_id order by `tbl_car_master_info`.`f7`,`tbl_car_master_info`.`f5`");
mysql_query("SET CHARACTER SET $charset ");
while($row=mysql_fetch_array($re))
{
$re2=mysql_query("SELECT
  `tbl_car_pre_need`.`f1` as a_title, `tbl_car_pre_need`.`f5` as a_unit,
  `tbl_car_detail_info`.`f3` as a_val,`tbl_car_pre_need`.`f2`
FROM
  `tbl_car_pre_need` RIGHT JOIN
  `tbl_car_detail_info` ON `tbl_car_detail_info`.`f2` =`tbl_car_pre_need`.`auto_id` where `tbl_car_detail_info`.`f1`=$row[auto_id] and `tbl_car_pre_need`.`f8`=1 order by `tbl_car_pre_need`.`f6`");

?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img onclick="show_car_detail(<?php print $row[auto_id]?>);" src="images/car_pic/vachar724_<?php print $row["auto_id"]?>_larg_1.jpg" title="خرید و فروش خودرو در واچار 724" alt="خرید و فروش خودرو در واچار724" />
											<h2><?php print $row["ostan_name"]." / ".$row["shahrestan"]?></h2>
<h2><font color=#000>											
<?php 
$i=0;

while($row2=mysql_fetch_array($re2))
{
	$i++;
	if($row2["f2"]=="currency")
			$a_val=pool($row2["a_val"]);
		else
			$a_val=$row2["a_val"];	
			
		if($i==4)	
			print "</font></h2><h2>".$a_val." ".$row2["a_unit"]."</h2>";
		else if($i==3)	
			print $a_val."  ".$row2["a_unit"];
		else if($i<3)	
			print $a_val."  ".$row2["a_unit"]." - ";

				
}


?>
			</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a title="<?php print $row[f3]?>" onclick="show_car_detail(<?php print $row[auto_id]?>);"><i class="fa fa-plus-square"></i>
										سایر تصاویر</a></li>
										<li><a title="<?php print $row[f3]?>" onclick="show_car_detail(<?php print $row[auto_id]?>);"><i class="fa fa-plus-square"></i>
										 توضیحات آکهی</a></li>
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