<?php include "header_admin_page.php";
$form_title="پرداخت گروهي هزينه کالاهاي ثبت شده";
$page_id=56;
access_page1($page_id,$_SESSION["s_user_type_id"]);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<body>
<p>&nbsp;</p>
<div align="center">
<div class="main_form">
<form method="POST" action="admin_pay_bach_price_step2.php" name="frm1" id="frm1">
	<table class="tbl_1_border" dir="rtl">
						<tr>
						<td align="center" width="100%"  colspan="4"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>
						<tr>
							<td align="center" width="100%"  colspan="4"><div class="cell_step" dir=rtl>توصيه مي شود در هر بار پرداخت حداکثر 10 قلم کالا را انتخاب کنيد.
							<br>پس از انتخاب کالاهاي مورد نظر براي اتصال به درگاه بانک بروي لوگو بانک مورد نظر کليک کنيد.
							<br>پس از بازگشت از درگاه کالاهاي شما از اين ليست خارج شده و به ليست کالاهاي در انتظار تاييد منتقل خواهند شد.							</div></td>
						</tr>

						<tr>
							<td align="center" width="100%"  colspan="4"><input type=submit name="btn_pay" value="پرداخت وجه کالاهاي انتخاب شده"></td>
						</tr>

		<tr>
			<td align="center">
<?php 
		$str_sql="SELECT auto_id as item_id,f3,f4,f5,f6,f8,f16,f22,f26 from tbl_item_info where f2='$_SESSION[s_user_id]' order by auto_id desc";
		$re = mysql_query($str_sql);
		while($row = mysql_fetch_array($re))
		{  
			$kasri=0;
			$sum_pay=calc_payed_for_reg_item($row[item_id]);
			//print "sum_pay=".$sum_pay."<br>";
			$sum_shood=calc_shood_for_reg_item($row[item_id],$row[f8],$row[f26],$row[f22]);
			//print "sum_shood=".$sum_shood."<br>";
			$kasri=$sum_shood-$sum_pay;
			//print "kasri=".$kasri;
			if($kasri>0)
			{
			
	?>
				<div align="center" class="lazyload1">
					<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" id="tbl_kadr">
								<tr>
									<td width="91%" colspan="4" align="center" class="row_item_title" id="row_title<?php print $row[item_id]?>" onclick="toggle_row('<?php print $row[item_id]?>')">
									<?php print $row["f3"]." - کد شناسايي واچار براي اين کالا : <font color=#CC0066>". $row["item_id"]."</font>"?></td>
								</tr>
					
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" class="item_info" cellpadding="0" id="row_item<?php print $row[item_id]?>" >
								<tr>
									<td width="10%" rowspan="6" align="center" class="img_cell">
									<img border="0" src="images/items_pic/<?php print $row[item_id]?>_small_1.jpg" width="80" ></td>
									<td align="right" width="31%"> 
									قيمت :<font color="#CC0066"> <?php print pool($row["f4"])?></font> ريال</td>
									<td align="right" width="25%">نوع کالا :<font color="#CC0066"> <?php if($row["f5"]==1) print "نو آکبند"; ?> 
<?php if($row["f5"]==2) print "نو غیرآکبند"; ?>
<?php if($row["f5"]==3) print "دست دوم"; ?>
</font></td>
									<td align="right" width="24%">تعداد فروخته 
									شده :
									<font color="#CC0066"><?php print $row["f22"]?></font> عدد </td>
								</tr>
								<tr>
									<td align="right" width="31%">
									تعداد موجود :
									<font color="#CC0066"><?php print $row["f8"]?></font> عدد</td>
									<td align="right" width="25%">نوع فروش :<font color="#CC0066"> 
									<?php if($row["f6"]==1) print "نقدي";else if($row["f6"]==2) print "مزايده"; ?></font></td>
									<td align="right" width="24%">	&nbsp;</td>
								</tr>
								<tr>
									<td align="right" width="31%">
									&nbsp;</td>
									<td align="right" width="25%">&nbsp;</td>
									<td align="right" width="24%">
									&nbsp;</td>
								</tr>
								<tr>
									<td align="center" width="80%" colspan="3">
									</td>
								</tr>
								<tr>
									<td align="right" width="80%" colspan="3">
									<table border="0" width="100%" id="tbl_factor" cellpadding=1px cellspacing=1px>
									<caption>هزينه هاي پرداختي بابت ثبت اين کالا</caption>
										<tr>
											<th align="center" width="5%">رديف</th>
											<th align="center" width="20%">تاريخ 
											و ساعت</th>
											<th align="center" width="5%">تعداد </th>
											<th align="center" width="15%">
											نوع فروش</th>
											<th align="center" width="20%">قميت 
											کالا</th>
											<th align="center" width="15%">هزينه 
											ثبت</th>
											<th align="center" width="20%">
											کدرهگيري</th>
										</tr>
<?php 
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
											<td align="center" width="20%"><?php print  pool($row2["item_price"])?> 	ريال</td>
											<td align="center" width="15%"><?php print $row2["item_reg_pay"]?> ريال</td>
											<td align="center" width="20%"><?php print $row2["pay_code"]?></td>
										</tr>
<?php } // of while?>										
										<tr >
											<td align="left" width="100%" colspan="7" >
											&nbsp;</td>
										</tr>
										<tr >
											<td align="left" width="65%" colspan="5" class="sum_fact">
											مجموع پرداختي ها براي ثبت اين کالا :</td>
											<td align="center" width="15%" class="sum_fact"><?php print pool($sum_pay)?> ريال</td>
											<td align="center" width="20%" class="sum_fact"></td>
										</tr>
										<tr class="sum_shood">
											<td align="left" width="65%" colspan="5" class="sum_shood">
											مبلغ الزامي براي ثبت اين کالا :</td>
											<td align="center" width="15%" class="sum_shood"><?php print pool($sum_shood)?> ريال</td>
											<td align="center" width="20%" class="sum_shood"></td>
										</tr>
										<tr >
											<td align="left" width="65%" colspan="5" class="kasri">
											کسري پرداختي بابت ثبت اين کالا :</td>
											<td align="center" width="15%" class="kasri"><?php print pool($kasri)?> ريال</td>
											<td align="center" width="20%" class="kasri"></td>
										</tr>
										<tr >
											<td align="left" width="65%" colspan="5" class="select_for_pay"><span id="c_<?php print $row[item_id]?>">
											&nbsp;</td>
											<td align="center" width="15%" class="select_for_pay"><span id="chk_loader_<?php print $row[item_id]?>"></span></td>
											<td align="right" width="20%" class="select_for_pay">	<input type='checkbox' onclick="add_4_pay(<?php print $row[item_id].','.$row[f4].','.$row[f8].','.$kasri.','.$row[f5].','.$row[f6];?>);" class="chk_pay" name='chk_<?php print $row[item_id]?>'  id='chk_<?php print $row[item_id]?>' >انتخاب 
											براي پرداخت</td>
										</tr>
									</table>
									</td>
								</tr>
								</table>
							</td>
						</tr>
					</table>
					&nbsp;</div>
				<?php }// of if
				}// of while ?>
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
function add_4_pay(item_id,item_price,item_count,reg_price,item_type,item_sell_type)
{
var add=0;
$("#chk_loader_"+item_id).fadeIn(400).html('<img src="images/aseman_loading.gif" >');

if ($('#chk_'+item_id).is(":checked"))
	add=1;
else
	add=0;	
	 $.ajax({
     type: "POST",
     url: "ajaxadd4pay.php",
     data: {item_id:item_id,reg_price:reg_price,act:add,item_price:item_price,item_count:item_count,item_type:item_type,item_sell_type:item_sell_type},
     cache: false,
     success: function(data)
     {
		//alert(data);
		//$("#chk_loader_"+item_id).hide();
		if(data==1&&add==1)
		{
			$("#chk_loader_"+item_id).fadeIn(400).html('<img src="images/aseman_tik.gif" >');
		}	
		else if(data==-1)
			$("#chk_loader_"+item_id).fadeIn(400).html('<img src="images/aseman_notik.gif" >');
			
		else if(data==1&&add==0)
			$("#chk_loader_"+item_id).fadeIn(400).html('');

		//$("#c_"+item_id).html(data);
	 }
})
}
</script>

</body>