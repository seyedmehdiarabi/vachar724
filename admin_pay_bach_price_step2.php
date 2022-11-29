<?php include "header_admin_page.php";
$form_title="پیش فاکتور شما برای پرداخت";
$page_id=58;
access_page1($page_id,$_SESSION["s_user_type_id"]);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<body>
<p>&nbsp;</p>
<div align="center">
<div class="main_form">
<form method="POST" action="admin_user_reg_item_step4.php" name="frm1" id="frm1">
	<table class="tbl_1_border" dir="rtl">
						<tr>
						<td align="center" width="100%"  colspan="4"><div class="cell_header"><?php print $form_title?></div></td>
				</tr>
<tr>
<td align=center width=100%>
<table border="0" width="100%" id="tbl_factor" cellpadding=1px cellspacing=1px>
									<caption>کالاهای انتخاب شده برای پرداخت هزینه ثبت</caption>
										<tr>
											<th align="center" width="5%">ردیف</th>
											<th align="right" width="20%">نام 
											کالا</th>
											<th align="right" width="5%">تعداد </th>
											<th align="right" width="15%">
											نوع فروش</th>
											<th align="right" width="20%">قمیت 
											کالا</th>
											<th align="right" width="18%">هزینه 
											ثبت</th>
											<th align="center" width="17%">&nbsp;</th>
										</tr>
<?php 
$str_sql="SELECT
  `tbl_item_reg_d_factor_t`.`f2`, `tbl_item_reg_d_factor_t`.`f3`,
  `tbl_item_reg_d_factor_t`.`f4`, `tbl_item_reg_d_factor_t`.`f5`,
  `tbl_item_reg_d_factor_t`.`f6`, `tbl_item_reg_d_factor_t`.`f7`,
  `tbl_item_info`.`f3` as item_name
FROM
  `tbl_item_info` RIGHT JOIN
  `tbl_item_reg_d_factor_t` ON `tbl_item_reg_d_factor_t`.`f2` =
    `tbl_item_info`.`auto_id` where `tbl_item_reg_d_factor_t`.`f1`='$_SESSION[s_user_id]' order by `tbl_item_reg_d_factor_t`.`auto_id`  ";
//print $str_sql;
$re2 = mysql_query($str_sql);
		$sum_fact=0;
		$i=1;
		while($row2= mysql_fetch_array($re2))
		{
			$sum_fact=$sum_fact+$row2["f5"];
		if($row2[f6]==1)
			$item_type="نو آکبند";		
                if($row2[f6]==2)$item_type="نو غیرآکبند";	
                if($row2[f6]==3)$item_type="دست دوم";	
		if($row2[f7]==1)
			$item_sell_type="نقدی";else $item_sell_type="مزایده";	
			
		?>
		
										<tr>
											<td align="center" width="5%"><?php print $i++?></td>
											<td align="center" width="20%"><?php print $row2["item_name"]?></td>
											<td align="center" width="5%"><?php print $row2["f4"]?></td>
											<td align="center" width="15%"><?php print $item_type." / ".$item_sell_type?></td>
											<td align="left" width="20%"><?php print  pool($row2["f3"])?> 	ریال</td>
											<td align="left" width="18%"><?php print pool($row2["f5"])?> ریال</td>
											<td align="center" width="17%">
											<!--<img onclick() border="0" src="images/aseman_del2.png" width="25">--></td>
										</tr>
<?php } // of while?>										
										<tr >
											<td align="left" width="100%" colspan="7" >&nbsp;
											</td>
										</tr>
										<tr >
											<td align="left" width="65%" colspan="5" class="sum_fact">
											مجموع هزینه ثبت کالاهای انتخاب شده برابر است با :</td>
											<td align="center" width="15%" class="sum_fact"><?php print pool($sum_fact)?> ریال</td>
											<td align="center" width="20%" class="sum_fact"></td>
										</tr>
									</table>
</td></tr>

						<tr>
						<td align="center" width="100%"  colspan="4">
						<div class="pish_factor">
						<?php 
					    	if($sum_fact>0)
    						{
								$_SESSION["items_id"]=$chbox;
								$_SESSION["sum_items_price"]=$sum;
								print "مجموع مبلغ هزینه ثبت کالاهای انتخاب شده برابر است با : "."<font color=#CC0066>".pool($sum_fact)."</font> ریال <br><br>";
							?>						
								<input type=hidden name="step" id="step" value="pay_bach">	
								<input type=hidden name="pay_price" id="pay_price" value="<?php print $sum_fact;?>">	
								<input type=image src="images/mellat.png" name="btn_pay" value="پرداخت وجه کالاهای انتخاب شده">
								
								</div>
						<?php }// of if
							else 
							{
								print "هیچ کالایی برای پرداخت انتخاب نشده است"."<p>";
								print "<input type=button name='btn_back' value='بازگشت به لیست کالاها' onclick=window.location.href='admin_pay_bach_price.php'>";
							}	
						?>
					</td>
						</tr>
	</table>
	</form>			
</div>
</div>
</body>