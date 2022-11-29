<?php include "header_admin_page.php";
$form_title="";
$tbl_name="tbl_user_info";
$item_type=cleantxt($_GET["type"]);
if ($item_type!=0&&$item_type!=1&&$item_type!=2&&$item_type!=3)
{
	header("Location: index_admin.php");
	exit;
}	
switch ($item_type)
{
	case 0 : {$form_title="اسامی کالاهای در انتظار تایید";$page_id=52; break;}
	case 1 : {$form_title="اسامی کالاهای تایید شده";$page_id=53; break;}
	case 2 : {$form_title="کالاهایی که مورد قبول قرار نگرفته اند";$page_id=54; break;}
	case 3 : {$form_title="کالاهایی که بصورت مشروط تایید شده اند";$page_id=55; break;}
}
access_page1($page_id,$_SESSION["s_user_type_id"]);

if(isset($_GET["delete"]))
{
	$msg='';
	$id=$_GET["auto_id"];
	item_delete($id);

}
if($_POST["btn_close"])
{
	$k=0;
	$chbox= $_POST['ch1'];
	$count = count($_POST['ch1']);
	for($i=0;$i<$count;$i++)
	{
		$k++;
		$id=$chbox[$i];
	    $r=mysql_query("update tbl_item_info set f15='0' where auto_id='$id' ");
	}
	
	$msg=" عدم نمایش ".$k." عدد کالا اعمال شد ";
}// btn_close

if($_POST["btn_open"])
{
	$k=0;
	$chbox= $_POST['ch1'];
	$count = count($_POST['ch1']);
	for($i=0;$i<$count;$i++)
	{
		$k++;
		$id=$chbox[$i];
	    $r=mysql_query("update tbl_item_info set f15='1' where auto_id='$id' ");
	}
	
	$msg=" نمایش ".$k." عدد کالا اعمال شد ";
}// btn_close

$str_sql="SELECT
  
  `tbl_item_info`.`auto_id` as item_id, `tbl_item_info`.`f2`, `tbl_item_info`.`f3` as item_name, `tbl_item_info`.`f4`,
  `tbl_item_info`.`f5`, `tbl_item_info`.`f6`, `tbl_item_info`.`f7`,
  `tbl_item_info`.`f8`, `tbl_item_info`.`f15`, `tbl_item_info`.`f16`,
  `tbl_item_info`.`f18`,`tbl_item_info`.`f19`, `tbl_item_info`.`f20`, `tbl_item_info`.`f22`,`tbl_item_info`.`f24`,`tbl_item_info`.`f22`,`tbl_item_info`.`f26`,
  `tbl_item_sub_group`.`f1` as group_code, `tbl_item_group`.`f1` as group_name, `tbl_item_sub_group`.`f2` as sub_group_name
FROM
  `tbl_item_info` LEFT JOIN
  `tbl_item_sub_group` ON `tbl_item_info`.`f1` = `tbl_item_sub_group`.`auto_id`
  LEFT JOIN
  `tbl_item_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id`  where `tbl_item_info`.`f23`='$item_type' and `tbl_item_info`.`f2`='$_SESSION[s_user_id]' order by `tbl_item_info`.`auto_id` desc";

  
  //print $str_sql;
	$re = mysql_query($str_sql);
	$i=1;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script type="text/javascript" src="js/jquery.lazyload-any.js"></script>
<body>
<p>&nbsp;</p>
<div align="center">
<div class="main_form">
<form method="POST" action="" name="frm1" id="frm1">
	<table class="tbl_1_border" dir="rtl">
						<tr>
						<td align="center" width="100%"  colspan="2"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>
					<tr>
						<td align="center" width="50%">
							<input type=submit name="btn_open" value="نمایش انتخاب شده ها در سایت" style="color: #FFFFFF"></td>
						<td align="center" width="50%">
							<input type=submit name="btn_close" value="عدم نمایش انتخاب شده ها در سایت" style="color: #FFFF00"></td>
					</tr>


					<tr>
						<td align="center" width="100%" colspan="2"><font color="#CC0066">
						<b><?php print $msg?></b></font></td>
					</tr>
					

		<tr>
			<td align="center" colspan="2">
<?php 
		while($row = mysql_fetch_array($re))
		{  
			$r=mysql_query("select count(auto_id) from tbl_item_cust_des where f1=$row[item_id]");
			list($nazar_count)=mysql_fetch_array($r);
			if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
			
				<div align="center" class="lazyload1">
					<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" id="tbl_kadr">
								<tr>
									<td width="91%" colspan="4" align="center" class="row_item_title" id="row_title<?php print $row[item_id]?>" onclick="toggle_row('<?php print $row[item_id]?>')">
									<?php print $row["item_name"]." - کد شناسایی آرکا برای این کالا : <font color=#CC0066>". $row["item_id"]."</font>"?></td>
								</tr>
					
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" class="item_info" cellpadding="0" id="row_item<?php print $row[item_id]?>" >
								<tr>
									<td width="10%" rowspan="7" align="center">
									<img border="0" src="images/items_pic/<?php print $row[item_id]?>_small_1.jpg" width="80" ></td>
									<td align="right" width="31%"> 
									<font color="#CC0066">گروه :</font>
									<?php print $row["group_name"].",".$row["sub_group_name"]?></td>
									<td align="right" width="25%">قیمت :<font color="#CC0066"> <?php print pool($row["f4"])?></font> ریال</td>
									<td align="right" width="24%">تعداد دفعات 
									بازدید : <font color="#CC0066"><?php print $row["f18"]?></font> 
									مرتبه</td>
								</tr>
								<tr>
									<td align="right" width="31%"> 
									تاریخ ثبت :<font color="#CC0066"> <?php print $row["f19"]?></font></td>
									<td align="right" width="25%">قیمت همکار :<font color="#CC0066"> <?php print pool($row["f20"])?></font> ریال</td>
									<td align="right" width="24%">تعداد نظر :
									<font color="#CC0066"><?php print $nazar_count?></font> 
									نظر</td>
								</tr>
								<tr>
									<td align="right" width="31%">
									نوع کالا :<font color="#CC0066">
<?php if($row["f5"]=="1") print "نو آکبند"; ?>
<?php if($row["f5"]=="2") print "نو غیرآکبند"; ?>
<?php if($row["f5"]=="3") print "دست دوم"; ?>

</font></td>
									<td align="right" width="25%">وزن :
									<font color="#CC0066"><?php print $row["f16"]?></font> گرم </td>
									<td align="right" width="24%">وضعیت نمایش :
										<font color="#CC0066"><?php if($row["f15"]=="1") print "در حال نمایش"; else print "فعلا نمایش داده نمی شود"; ?></font></td>
								</tr>
								<tr>
									<td align="right" width="31%">نوع فروش :<font color="#CC0066"> 
									<?php if($row["f6"]=="1") print "نقدی"; else if($row["f6"]=="2") print "مزایده ای"; ?></font></td>
									<td align="right" width="25%">تعداد موجود :
									<font color="#CC0066"><?php print $row["f8"]?></font> 
									عدد</td>
									<td align="right" width="24%">تعداد فروخته 
									شده :
									<font color="#CC0066"><?php print $row["f22"]?></font> 
									عدد </td>
								</tr>
								<tr>
									<td align="right" width="31%">هزینه پست :<font color="#CC0066"> <?php if($row["f7"]=="0") print "با فروشنده است"; else if($row["f7"]=="1") print "با خریدار است"; ?></font></td>
									<td align="right" width="25%">&nbsp;</td>
									<td align="right" width="24%">
									&nbsp;</td>
								</tr>
								<tr>
									<td align="right" width="80%" colspan="3"><?php if ($item_type==2||$item_type==3)print" پیام مدیر : <font color=cc0066>$row[f24]</font>"?></td>
								</tr>
								<tr>
									<td align="right" width="80%" colspan="3">
									<table border="0" width="100%" id="tbl_factor" cellpadding=1px cellspacing=1px>
									<caption>هزینه های پرداختی بابت ثبت این کالا</caption>
										<tr>
											<th align="center" width="5%">ردیف</th>
											<th align="center" width="20%">تاریخ 
											و ساعت</th>
											<th align="center" width="5%">تعداد </th>
											<th align="center" width="15%">
											نوع فروش</th>
											<th align="center" width="20%">قمیت 
											کالا</th>
											<th align="center" width="15%">هزینه 
											ثبت</th>
											<th align="center" width="20%">
											کدرهگیری</th>
										</tr>
<?php 
			$kasri=0;
			$sum_pay=calc_payed_for_reg_item($row[item_id]);
			//print "sum_pay=".$sum_pay."<br>";
			$sum_shood=calc_shood_for_reg_item($row[item_id],$row[f8],$row[f26],$row[f22]);
			//print "sum_shood=".$sum_shood."<br>";
			$kasri=$sum_shood-$sum_pay;

$str_sql="SELECT
  `tbl_item_reg_d_factor`.`f3` as item_price, `tbl_item_reg_d_factor`.`f4` as item_count,
  `tbl_item_reg_d_factor`.`f5` as item_reg_pay,  `tbl_item_reg_d_factor`.`f6` as item_type,  `tbl_item_reg_d_factor`.`f7` as item_sell_type,
  `tbl_payment`.`f4` as pay_date, `tbl_payment`.`f5` as pay_time,
  `tbl_payment`.`f9` as pay_code
FROM
  `tbl_item_reg_d_factor` LEFT JOIN
  `tbl_item_reg_m_factor` ON `tbl_item_reg_d_factor`.`f1` =
    `tbl_item_reg_m_factor`.`auto_id` LEFT JOIN
  `tbl_payment` ON `tbl_item_reg_m_factor`.`auto_id` = `tbl_payment`.`f8` where `tbl_item_reg_d_factor`.`f2`=$row[item_id] order by `tbl_item_reg_d_factor`.`auto_id`";
//print $str_sql;
$re2 = mysql_query($str_sql);
		$sum_fact=0;
		$i=0;
		while($row2= mysql_fetch_array($re2))
		{
		?>
										<tr>
											<td align="center" width="5%"><?php print $i++?></td>
											<td align="center" width="20%">
											<?php print $row2["pay_date"]." - ".$row2["pay_time"]?></td>
											<td align="center" width="5%"><?php print $row2["item_count"]?></td>
											<td align="center" width="15%"><?php print $row2["item_type"]." / ".$row2["item_sell_type"]?></td>
											<td align="center" width="20%"><?php print  pool($row2["item_price"])?> 	ریال</td>
											<td align="center" width="15%"><?php print $row2["item_reg_pay"]?> ریال</td>
											<td align="center" width="20%"><?php print $row2["pay_code"]?></td>
										</tr>
<?php } // of while?>										
										<tr >
											<td align="left" width="100%" colspan="7" >
											&nbsp;</td>
										</tr>
										<tr >
											<td align="left" width="65%" colspan="5" class="sum_fact">
											مجموع پرداختی ها برای ثبت این کالا :</td>
											<td align="center" width="15%" class="sum_fact"><?php print pool($sum_pay)?> ریال</td>
											<td align="center" width="20%" class="sum_fact"></td>
										</tr>
										<tr class="sum_shood">
											<td align="left" width="65%" colspan="5" class="sum_shood">
											مبلغ الزامی برای ثبت این کالا :</td>
											<td align="center" width="15%" class="sum_shood"><?php print pool($sum_shood)?> ریال</td>
											<td align="center" width="20%" class="sum_shood"></td>
										</tr>
										<tr >
											<td align="left" width="65%" colspan="5" class="kasri">
											کسری پرداختی بابت ثبت این کالا :</td>
											<td align="center" width="15%" class="kasri"><?php print pool($kasri)?> ریال</td>
											<td align="center" width="20%" class="kasri"></td>
										</tr>
										<tr >
											<td align="left" width="100%" colspan="7" class="select_for_pay"><span id="c_<?php print $row[item_id]?>">
											&nbsp;<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td align="center" width="10%">
											<a href="admin_user_reg_item.php?edit=1&item_id=<?php print $row[item_id]?>">
											<img border="0" src="images/aseman_barasi.png" width="25" >
											</a>
											</td>
											<td align="right" width="22%">
											<a href="admin_user_reg_item.php?edit=1&item_id=<?php print $row[item_id]?>">
											ویرایش 
											کالا</a></td>
											<td align="center" width="22%">
											<input type='checkbox'  class="chk_pay" name='ch1[]'  id='ch1[]'  value="<?php print $row[item_id]; ?>" >نمایش/ 
											عدم نمایش</td>
											<td align="center" width="23%">
											<?php if($row["f22"]==0&&2==1) {?>
												<a href="?delete&type=<?php print $item_type?>&auto_id=<?php print $row[item_id]; ?>" onclick="javascript: return confirm('آیا از حذف اطمینان دارید ؟');">
											&nbsp;</a><?php }?>
											</td>
											<td align="right" width="23%"><a target=_blank href="show_item_pre.php?item_id=<?php print $row[item_id]; ?>">پیش 
											نمایش کالا</a></td>
										</tr>
									</table>
											</td>
										</tr>
									</table>
									
									</td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					<br>
				</div>
				<?php } ?>
			</td>
		</tr>
	</table>
	</form>			
</div>
</div>
<?php 
function item_delete($id)
{
	$str_sql="delete from tbl_item_info_tec where f1= ".$id;
	$re=mysql_query($str_sql);

	$str_sql="delete from tbl_item_info where auto_id= ".$id;
	$re=mysql_query($str_sql);
	$upload_dir="images/items_pic";
	for($i=1;$i<=5;$i++)
	{
			$file_name=$upload_dir."/".$id."_larg_".$i.".jpg";
			if (is_file($file_name))
				unlink($file_name);
			$file_name=$upload_dir."/".$id."_small_".$i.".jpg";
			if (is_file($file_name))
				unlink($file_name);
			
	}	
	
	
}
?>
<script language="javascript">
function toggle_row(id)
{
	if ($('#row_item'+id).is(':visible'))
	{
		 $('#row_title'+id).css('background','url(images/arrow_down.png) ');
	}	 
	else
	{
		$('#row_title'+id).css('background','url(images/arrow_up.png) ');
	}	
		 	$('#row_item'+id).slideToggle('slow');		
}
//====================================
$('.lazyload').lazyload({
  // Sets the pixels to load earlier. Setting threshold to 200 causes image to load 200 pixels
  // before it appears on viewport. It should be greater or equal zero.
  threshold: 200,

  // Sets the callback function when the load event is firing.
  // element: The content in lazyload tag will be returned as a jQuery object.
  load: function(element) {},

  // Sets events to trigger lazyload. Default is customized event `appear`, it will trigger when
  // element appear in screen. You could set other events including each one separated by a space.
  trigger: "appear"
});
</script>

</body>