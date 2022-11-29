<?php include "header_admin_page.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script lang="javascript">
var today_date_j=<?php print $_SESSION["today_date_t"];?>;
var today_y=<?php print $y;?>;
var today_m=<?php print $m;?>;
var today_d=<?php print $d;?>;
var test=1;
checked=false;
var f_date_name="";
var first_f="f1";
var no_empty=new Array("")
var test_array=new Array(0,0);
var onload_array=new Array(0,0,1);
</script>
<?php
$tbl_name="tbl_option";
$f_count=20;
$msg='';
$page_id=24;
$form_title="ثبت تنظیمات اولیه";
$grid_title="تنظمات تعریف شده";
$col1_title="نمایش نظرات";
$col2_title="فعال شدن عضویت";
$col1_grid="f1";
$col2_grid="f2";
if(!isset($_GET["delete"])&&!isset($_POST["btn_del"]))
include "aseman_admin_page_func.php";
?>
</head>
<div align="center">
<div class="main_form">
<body onload="aseman_onload_test();" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"> 
		<table border="0"  dir="rtl" cellspacing="0" style="border-collapse: collapse" class="main_table">
			<tr>
			<td align="right" valign="top">
			<table border =0 width=100% dir=rtl class="tbl_3_row" cellspacing="0" cellpadding="0">
			</tr>
			<td align=right>
			<form method="POST" name="form1" id="form1" action="<?php print $_SERVER["PHP_SELF"];?>">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
				<td align="center" width="100%" colspan="3" height="25" class="tbl_title">
			<?php print $form_title?></td>
			</tr>
				<tr>
					<td align="center" width="100%" colspan="3" height="20" class=tbl_msg_row>
					<span  class=tbl_msg>
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp;";?></span></td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="3">&nbsp;</td>
					</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&#1645;</td>
<td align="right" width="62%" class="auto_id_row">کد (خودکار درج مي شود)</td>
<td align="right" width="33%" class="auto_id_row">
<input type="text" name="auto_id" size="20" dir="ltr" readonly=true  <?php if(isset($_GET["edit"])) print "value=".$selected_row[auto_id]; ?>></td>
</tr>
<tr>
<td align="center" width="100%"  colspan="3">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">نظرات همان لحظه نمایش داده شود ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f1" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f1"]=="0") print "selected"?> value="0">خیر
									</option>

<option <?php if(isset($_GET["edit"])) if ($selected_row["f1"]=="1") print "selected"?> value="1">بلی
										</option>

</select>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">عضویت در همان لحظه فعال گردد ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f2" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f2"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f2"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
</tr>
					
					<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مشتری پس از عضویت ارسال 
شود ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f3" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f3"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f3"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مدیر پس از عضویت مشتری 
ارسال شود ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f4" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f4"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f4"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مشتری پس از ثبت سفارش 
ارسال شود ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f5" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f5"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f5"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مدیر پس از ثبت سفارش 
مشتری ارسال شود ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f6" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f6"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f6"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مشتری پس از ثبت نظر 
ارسال شود ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f7" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f7"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f7"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مدیر پس از ثبت نظر مشتری 
ارسال شود ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f8" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f8"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f8"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مشتری پس از ارسال نامه 
(از صفحه ارتباط با ما) ارسال شود ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f9" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f9"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f9"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مدیر پس از ارسال نامه از 
سوی مشتری (از صفحه اتباط با ما)ارسال شود ؟</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f10" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f10"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f10"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مشتری پس از فعال شدن 
عضویت وی ارسال شود ؟ (زمانی که عضویت آنی غیر فعال است)</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f11" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f11"]=="0") print "selected"?> value="0">خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f11"]=="1") print "selected"?> value="1">بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="62%" class="dirooz">پیامک برای مشتری پس از تایید نظر وی 
ارسال شود ؟ (زمانی که درج نظرآنی غیر فعال است)</td>
<td align="right" width="33%" class="dirooz">
<select size="1" name="f12" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f12"]=="0") print "selected"?> value="0">
خیر
									</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f12"]=="1") print "selected"?> value="1">
بلی
										</option>
</select>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">&nbsp;</td>
				</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="62%" class="btn_table">&nbsp;</td>
						<td align="right" width="33%" class="btn_table">
&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="62%" class="btn_table">&nbsp;</td>
						<td align="right" width="33%" class="btn_table">
<input type="submit" value="ویرایش اطلاعات" name="B2" id="B2" >
<span lang="en-us">&nbsp;
						</span>&nbsp;</td>
					</tr>
					<tr>
						<td align="center" width="100%" class="btn_table" colspan="3" class="tbl_last_row">&nbsp;</td>
					</tr>
				</table>
				</form>
				</td>
			</tr>
			</tr>
			</td>
				<tr>
				<td align=center>
				<?php include "show_grid.php"?></td>
			</tr>
				<tr>
				<td align=center>
				<?php //include "footer.php"?></td>
			</tr>
			</table>
		</table>
		
	</div>

