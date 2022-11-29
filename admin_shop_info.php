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
var no_empty=new Array("f1")
var test_array=new Array(1,0);
var onload_array=new Array(1,0,1);
</script>
<?php
$tbl_name="tbl_shop_info";
$f_count=54;
$msg='';
$page_id=5;
$form_title="مديريت اطلاعات اصلی فروشگاه";
$grid_title="اطلاعات تعريف شده براي فروشگاه";
$col1_title="عنوان فروشگاه";
$col2_title="زمينه فعاليت";
$col1_grid="f1";
$col2_grid="f2";
include "aseman_admin_page_func.php";
?>
</head>
<div align="center">
<div class="main_form">
<body onload="aseman_onload_test();" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"> 
		<table border="0" dir="rtl" cellspacing="0" style="border-collapse: collapse" class="main_table">
			<tr>
			<td align="right" valign="top">
			<table border =0 width=100% dir=rtl class="tbl_3_row"  cellspacing="0" cellpadding="0">
			</tr>
			<td align=right>
			<form method="POST" name="form1" id="form1" action="<?php print $_SERVER["PHP_SELF"];?>">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
				<td align="center" width="100%" colspan="4" height="25" class="tbl_title">
			<?php print $form_title?></td>
			</tr>
				<tr>
					<td align="center" width="100%" colspan="4" height="20" class=tbl_msg_row>
					<span  class=tbl_msg>
					<?php if($msg!="")  print "&nbsp;".$msg."&nbsp; "?></span></td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="4">&nbsp;</td>
					</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&#1645;</td>
<td align="right" width="20%" class="auto_id_row">کد (خودکار درج مي شود)</td>
<td align="right" width="35%" class="auto_id_row">
<input type="text" name="auto_id" size="20" dir="ltr" readonly=true  <?php if(isset($_GET["edit"])) print "value=".$selected_row[auto_id]; ?>></td>
<td align="right" width="40%" class="auto_id_row">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%"  colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">عنوان شرکت :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f1" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f1].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">زمينه فعاليت :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f2" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f2].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">نام مدير / ان :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f3" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f3].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">شماره / هاي تلفن :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f4" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f4].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">شماره<span lang="en-us"> </span>/ 
های مویل یک&nbsp; :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f53" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f53].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">شماره / هاي موبایل دو :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f54" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f54].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">آدرس شرکت :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<input type="text" name="f5" size="102" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f5].'"';?>></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">پست الکترونيک :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f6" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f6].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">شماره پیامک :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f7" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f7].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">موبایل دریافت کننده پیامک :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f8" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f8].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">معرفي کامل شرکت :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<textarea rows="7" name="f9" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f9];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">عنوان براي شرح يک :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f10" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f10].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">شرح يک :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<textarea rows="7" name="f11" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f11];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">عنوان شرح دو :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f12" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f12].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">شرح دو :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<textarea rows="7" name="f13" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f13];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">عنوان شرکت به انگليسي :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f14" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f14].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">زمينه فعاليت به انگليسي :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f15" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f15].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">نام مدير/ان به انگليسي :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f16" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f16].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">شماره / هاي تلفن به انگليسي :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f17" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f17].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">آدرس شرکت به انگليسي :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f18" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f18].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">شماره پیامک :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f19" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f19].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">پست الکترونيک به انگليسي :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f20" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f20].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">معرفي شرکت به انگليسي :</td>
<td align="right" width="75%" class="emrooz" colspan="2">
<textarea rows="7" name="f21" cols="40" dir="ltr" ><?php if(isset($_GET["edit"])) print $selected_row[f21];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">عنوان شرح يک انگليسي :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f22" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f22].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">شرح يک انگليسي :</td>
<td align="right" width="75%" class="emrooz" colspan="2">
<textarea rows="7" name="f23" cols="40" dir="ltr" ><?php if(isset($_GET["edit"])) print $selected_row[f23];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">عنوان شرح دو انگليسي :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f24" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f24].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">شرح دو انگليسي :</td>
<td align="right" width="75%" class="emrooz" colspan="2">
<textarea rows="7" name="f25" cols="40" dir="ltr" ><?php if(isset($_GET["edit"])) print $selected_row[f25];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">عنوان شرکت به عربي :</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f26" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f26].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">زمينه فعاليت به اعربي :</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f27" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f27].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">نام مدير به عربي:</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f28" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f28].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">شماره / هاي تلفن به عربي:</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f29" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f29].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">آدرس شرکت به عربي :</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f30" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f30].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">تاريخ تاسيس  به عربي :</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f31" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f31].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">پست الکترونيک به عربي :</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f32" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f32].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">معرفي شرکت به عربي :</td>
<td align="right" width="75%" class="farda" colspan="2">
<textarea rows="7" name="f33" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f33];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">عنوان شرح يک عربي :</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f34" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f34].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">شرح يک عربي :</td>
<td align="right" width="75%" class="farda" colspan="2">
<textarea rows="7" name="f35" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f35];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">عنوان شرح دو عربي :</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f36" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f36].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">شرح دو عربي :</td>
<td align="right" width="75%" class="farda" colspan="2">
<textarea rows="7" name="f37" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f37];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
					
					<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">عنوان شرکت به روسی :</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f41" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f26].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">زمينه فعاليت به روسی :</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f42" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f27].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">نام مدير به روسی:</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f43" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f28].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">شماره / هاي تلفن به روسی:</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f44" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f29].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">آدرس شرکت به روسی :</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f45" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f30].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">تاريخ تاسيس  به روسی :</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f46" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f31].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">پست الکترونيک به روسی :</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f47" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f32].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">معرفي شرکت به روسی :</td>
<td align="right" width="75%" class="passfarda" colspan="2">
<textarea rows="7" name="f48" cols="40" dir="ltr" ><?php if(isset($_GET["edit"])) print $selected_row[f33];?></textarea></td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">عنوان شرح يک روسی :</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f49" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f34].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">شرح يک روسی :</td>
<td align="right" width="75%" class="passfarda" colspan="2">
<textarea rows="7" name="f50" cols="40" dir="ltr" ><?php if(isset($_GET["edit"])) print $selected_row[f35];?></textarea></td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">عنوان شرح دو روسی :</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f51" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f36].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">شرح دو روسی :</td>
<td align="right" width="75%" class="passfarda" colspan="2">
<textarea rows="7" name="f52" cols="40" dir="ltr" ><?php if(isset($_GET["edit"])) print $selected_row[f37];?></textarea></td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
					
					<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">سوپر کلید یک :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f38" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f38].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">سوپر کلید دو :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f39" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f39].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">سوپر کلید سه :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f40" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f40].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="20%" class="btn_table">&nbsp;</td>
						<td align="right" width="35%" class="btn_table">
&nbsp;</td>
						<td align="right" width="40%" class="btn_table">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="20%" class="btn_table">&nbsp;</td>
						<td align="right" width="35%" class="btn_table">
<input type="submit" onclick= "return aseman_test();" 
<?php if(isset($_GET["edit"])) print 'value= "ويرايش اطلاعات" name=B2';  else print 'value="ذخيره اطلاعات در سيستم" name="B1"'?> >
<span lang="en-us">&nbsp;
						</span>&nbsp;</td>
						<td align="right" width="40%" class="btn_table">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" width="100%" class="btn_table" colspan="4" class="tbl_last_row">
						<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
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
</div></div>		
	</div>