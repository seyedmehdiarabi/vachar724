<?php include "header_admin_page.php";
$form_title="";
$page_id=67;
$form_title="جزئیات کلیه تراکنش های مالی شما";
access_page1($page_id,$_SESSION["s_user_type_id"]);
$str_sql="SELECT auto_id,f1,f2,f3,f4,f5,f6,f7,f8,f9,f10 from tbl_payment where f1='$_SESSION[s_user_id]' or f2='$_SESSION[s_user_id]' order by auto_id desc";
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
											<th width="39">تاریخ و ساعت</th>
											<th width="9%">مبلغ</th>
											<th width="12%">بابت</th>
											<th width="10%">شماره ارجاع</th>
											<th width="12%">شماره پیگیری</th>
											<th width="29%">
											شرح</th>
											<th width="10%">
											نوع سند</th>
										</tr>
<?php 
		while($row = mysql_fetch_array($re))
		{  
			if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
										
										<tr>
											<td width="39"><?php print $row["f4"]." : ".$row["f5"]?></td>
											<td width="9%"><?php print pool($row["f3"])?></td>
											<td width="12%">
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
											<td width="10%"><?php print $row["f8"]?></td>
											<td width="12%"><?php print $row["f9"]?></td>
											<td width="29%"><?php print $row["f10"]?></td>
											<td width="10%"><?php  if($row["f1"]==$_SESSION[s_user_id]) print "پرداختی"; else print "دریافتی" ?></td>
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