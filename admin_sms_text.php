<?php include "header_admin_page.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script lang="javascript">
var today_date_j=<?php print $_SESSION["today_date_t"];?>;
var test=1;
checked=false;
var f_date_name="";
var first_f="f1";
var no_empty=new Array("")
var test_array=new Array(0,0);
var onload_array=new Array(0,0,1);
</script>
<?php
$tbl_name="tbl_sms_text";
$f_count=20;
$msg='';
$page_id=27;
$form_title="ثبت متن های  پیامکهای ارسالی";
$grid_title="متن های ثبت شده";
$col1_title="متن عضویت";
$col2_title="متن ثبت سفارش";
$col1_grid="f1";
$col2_grid="f3";
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
<td align="right" width="57%" class="auto_id_row">کد (خودکار درج مي شود)</td>
<td align="right" width="38%" class="auto_id_row">
<input type="text" name="auto_id" size="20" dir="ltr" readonly=true  <?php if(isset($_GET["edit"])) print  "value=".$selected_row[auto_id]; ?>></td>
</tr>
<tr>
<td align="center" width="100%"  colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مشتری پس از 
عضویت در سایت :</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f1" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print $selected_row[f1]; ?></textarea></tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مدیر پس از 
عضویت مشتری در سایت :</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f2" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print  $selected_row[f2]; ?></textarea></tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
					
					<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مشتری پس از 
تایید نهایی سفارش خرید :</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f3" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print  $selected_row[f3]; ?></textarea></tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مدیر پس از 
تایید نهایی سفارش خرید توسط مشتری :</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f4" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print  $selected_row[f4]; ?></textarea></tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مشتری پس از 
ثبت نظر وی در مورد یک کالا :</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f5" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print  $selected_row[f5]; ?></textarea></tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مدیرپس از ثبت 
نظر مشتری در مورد یک کالا :</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f6" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print  $selected_row[f6]; ?></textarea></tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مشتری پس از 
ارسال نامه توسط وی از صفحه ارتباط با ما :</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f7" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print  $selected_row[f7]; ?></textarea></tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مدیر پس از 
ارسال نامه توسط مشتری از صفحه ارتباط با ما :</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f8" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print  $selected_row[f8]; ?></textarea></tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مشتری پس از 
فعال شدن عضویت وی : (زمانی که عضویت آنی غیر فعال است)</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f9" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print  $selected_row[f9]; ?></textarea></tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="57%" class="dirooz">متن پیامک ارسالی برای مشتری پس از 
تایید نظر وی : (زمانی که درج نظر آنی غیر فعال است)</td>
<td align="right" width="38%" class="dirooz">
<textarea rows="2" name="f10" cols="30" dir="rtl"><?php if(isset($_GET["edit"])) print  $selected_row[f10]; ?></textarea></tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="3">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="57%" class="btn_table">&nbsp;</td>
						<td align="right" width="38%" class="btn_table">
&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="57%" class="btn_table">&nbsp;</td>
						<td align="right" width="38%" class="btn_table">
<input type="submit" value="ویرایش اطلاعات" name="B2" id="B2" ></td>
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

