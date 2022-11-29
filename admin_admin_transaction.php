<?php include "header_admin_page.php";
$form_title="";
$page_id=69;
$form_title="جزئیات کلیه تراکنش های مالی کاربران";
access_page1($page_id,$_SESSION["s_user_type_id"]);
$str_sql="SELECT auto_id,f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f12,f13,f14,f15 from tbl_payment order by auto_id desc";
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
	<table class="tbl_1_border" dir="rtl">
			<tr>
			<td align="center" width="100%"  colspan="4"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>

		<tr>
			<td align="center">
				<div align="center" class="lazyload1">
									<table border="0" width="100%" id="tbl_factor" cellpadding=1px cellspacing=1px>
										<tr>
											<th width="13%">تاریخ و ساعت</th>
											<th width="13%">پرداخت کننده</th>
											<th width="35">دریافت کننده</th>
											<th width="26">مبلغ</th>
											<th width="13%">بابت</th>
											<th width="42">شماره پیگیری</th>
											<th width="106">
											شرح</th>
										</tr>
<?php 
		while($row = mysql_fetch_array($re))
		{  
			if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
			if($row["f1"]==-1)
				$payer="آرکا";
			else if($row["f1"]==0) 	
				$payer=$row["f12"];
			else
			{	
				$r=mysql_query("SELECT f3,f22 from tbl_user_info where auto_id='$row[f1]'");
				list($payer_name,$payer_famil)=mysql_fetch_array($r);
				$payer=$payer_name." ".$payer_famil;
			}	

			if($row["f2"]==-1)
				$geter="آرکا";
			else
			{	
				$r=mysql_query("SELECT f3,f22 from tbl_user_info where auto_id='$row[f2]'");
				list($geter_name,$geter_famil)=mysql_fetch_array($r);
				$geter=$geter_name." ".$geter_famil;
			}	

	?>
										
										
										<tr>
											<td width="13%"><?php print $row["f4"]." : ".$row["f5"]?></td>
											<td width="13%"><?php print $payer?></td>
											<td width="35"><?php print $geter?></td>
											<td width="26"><?php print pool($row["f3"])?></td>
											<td width="13%">
											<?php 
											switch($row["f7"])
											{
												case 1: print "بابت ثبت کالا"; break;
												case "2": print "بابت خرید از سایت"; break;
												case "3": print "واریز وجه"; break;
												case "4": print "پرداخت بابت مالک کالا"; break;
												case "5": print "واریز مجدد برای ردیف فاکتور"; break;
											}	
											 ?></td>
											<td width="42"><?php print $row["f9"]?></td>
											<td width="106"><?php print $row["f10"]?></td>
										</tr>
<?php } // of while?>										

								
									</td>
								</tr>
								</table>
								</td>
								</tr>
					</table>
					</div>
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