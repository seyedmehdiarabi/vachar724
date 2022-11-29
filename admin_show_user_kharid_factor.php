<?php include "header_admin_page.php";
$form_title="";
$page_id=68;	
$form_title="فاکتورهای خرید شما از آرکا";
access_page1($page_id,$_SESSION["s_user_type_id"]);
$str_sql="SELECT auto_id,f4,f5,f7 from tbl_recive_order_master where f2='$_SESSION[s_user_id]' order by auto_id desc";
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
						<td align="center" width="100%"  colspan="4"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>

		<tr>
			<td align="center">
<?php 
		while($row = mysql_fetch_array($re))
		{  
			if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
			
				<div align="center" class="lazyload1">
					<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" id="tbl_kadr">
								<tr>
									<td width="91%" colspan="4" align="center" class="row_item_title" id="row_title<?php print $row[auto_id]?>" onclick="toggle_row('<?php print $row[auto_id]?>')">
									<?php print" فاکتور خرید شماره : <font color=#CC0066>". $row["auto_id"]."</font>" ?></td>
								</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" class="item_info" cellpadding="0" id="row_item<?php print $row[auto_id]?>" >
								<tr>
									<td align="center" width="33%" class="post_title"> 
									تاریخ خرید :<font color="#CC0066"> 
									<?php print $row["f4"]  ?></font></td>
									<td align="center" width="33%" class="post_title">ساعت خرید :<font color="#CC0066"> 
									<?php print $row["f5"]  ?>
									</font></td>
									<td align="center" width="34%" class="post_title">وضعیت فاکتور :<font color="#CC0066"><?php if($row["f7"]=="1") print " بسته "; else if($row["f7"]=="0") print " باز "; ?></font></td>
								</tr>
								<!--
								<tr>
								
									<td align="right" width="84%" colspan="3" class="post_title">
									لیست اقلام موجود در این فاکتور</td>
								</tr>
								-->
								<tr>
									<td align="right" width="84%" colspan="3">
									<table border="0" width="100%" id="tbl_factor0" cellpadding=1px cellspacing=1px>
										<tr>
											<th width="15">&nbsp;</th>
											<th width="10">ردیف در آرکا</th>
											<th width="25%">نام کالا&nbsp; </th>
											<th width="8%">تعداد</th>
											<th width="10%">قمیت واحد</th>
											<th width="10%">قیمت همکار</th>
											<th width="15%">روش پست</th>
											<th width="8%">هزینه پست</th>
										</tr>
<?php 
$str_sql="SELECT
  `tbl_item_info`.`f3` as item_name, `tbl_recive_order_detail`.`auto_id`,`tbl_recive_order_detail`.`f2`,`tbl_recive_order_detail`.`f3`,
  `tbl_recive_order_detail`.`f4`, `tbl_recive_order_detail`.`f5`,
  `tbl_recive_order_detail`.`f8`, `tbl_recive_order_detail`.`f9`,`tbl_recive_order_detail`.`f10`
FROM
  `tbl_recive_order_detail` LEFT JOIN
  `tbl_item_info` ON `tbl_recive_order_detail`.`f2` = `tbl_item_info`.`auto_id`  where `tbl_recive_order_detail`.`f1`='$row[auto_id]' order by `tbl_recive_order_detail`.`auto_id` ";								
$re2 = mysql_query($str_sql);
while($row2 = mysql_fetch_array($re2))
		{  
if($row2["f10"]==0)
	$post_method="پست با فروشنده";
else if($row2["f10"]==1)
	$post_method="پس کرایه - تیپاکس";
else if($row2["f10"]==2)
	$post_method="پس کرایه-باربری";
else if($row2["f10"]==3)
	$post_method="آنلاین-پیشتاز";
else	
	$post_method="پس کرایه-تیپاکس";	
	
	
?>										<tr>
											<td align="center" width="15">
											<img border="0" src="images/items_pic/<?php print $row2[f2]?>_small_1.jpg" width="42" height="51"></td>
											<td align="center" width="10%"><?php print $row2["auto_id"]?></td>
											<td align="center" width="25%"><?php print $row2["item_name"]?></td>
											<td align="center" width="8%"><?php print $row2["f5"]?></td>
												<td align="center" width="15%"><?php print pool($row2["f3"])?> ریال </td>
											<td align="center" width="10%"><?php print pool($row2["f4"])?> 	ریال </td>
											<td align="center" width="10%"><?php print $post_method; ?> </td>
											<td align="center" width="8%"><?php print pool($row2["f9"])?> ریال </td>
										</tr>
<?php } // of while?>										

									</table>
									
									</td>
								</tr>
								<tr>
									<td align="right" width="84%" colspan="3">
									<table border="0" width="100%" id="tbl_factor" cellpadding=1px cellspacing=1px>
									<caption>اطلاعات پرداختی بابت این فاکتور</caption>
										<tr>
											<th align="center" width="5%">ردیف</th>
											<th width="15%">تاریخ&nbsp; </th>
											<th width="15%">ساعت</th>
											<th width="15%">روش 
											پرداخت</th>
											<th width="15%" colspan="2">
											مبلغ</th>
											<th width="30%">
											کدرهگیری</th>
										</tr>
<?php 
$str_sql="SELECT  `tbl_payment`.`f4` AS `pay_date`, `tbl_payment`.`f5` AS `pay_time`,`tbl_payment`.`f6` AS `pay_method`,
		 `tbl_payment`.`f9` AS `pay_code`,`tbl_payment`.`f3` AS `pay_price`,`tbl_payment`.`f7`
		FROM
		  `tbl_payment` where (f7=2 and f8='$row[auto_id]') and f1='$_SESSION[s_user_id]' order by auto_id";
$re3 = mysql_query($str_sql);
		$i=0;
		$sum_pay=0;
		while($row3= mysql_fetch_array($re3))
		{
			$sum_pay+=$row3["pay_price"];
		?>
										<tr>
											<td align="center" width="5%"><?php print $i++?></td>
											<td align="center" width="15%">
											<?php print $row3["pay_date"]?></td>
											<td align="center" width="15%"><?php print $row3["pay_time"]?></td>
												<td align="center" width="15%"><?php if($row3["pay_method"]==1) print "آنلاین";else if($row3["pay_method"]==2) print "واریز فیش";else print "سایر";?></td>
											<td align="center" width="15%" colspan="2"><?php print pool($row3["pay_price"])?> 	ریال</td>
											<td align="center" width="30%"><?php print $row3["pay_code"]?></td>
										</tr>
<?php } // of while?>										
										<tr >
											<td align="left" width="100%" colspan="7" >
											&nbsp;</td>
										</tr>
										<!--<tr >
											<td align="center" width="98%" colspan="7" class="select_for_pay">
											مجموع پرداختی ها بابت خرید این کالا : <font color=#CC0066><b> <?php print pool($sum_pay)?> </b></font>   ریال</td>
										</tr>
										-->
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