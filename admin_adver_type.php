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
var no_empty=new Array("f1","f2","f3")
var test_array=new Array(1,0);
var onload_array=new Array(1,0,1);
</script>
<?php
$tbl_name="tbl_adver_type";
$f_count=4;
$msg='';
$page_id=96;
$form_title="معرفي و مديريت انواع آگهی";
$grid_title="ليست گزينه هاي ثبت شده";
$col1_title="عنوان آگهی";
$col2_title="اعتبار (روز)";
$col1_grid="f1";
$col2_grid="f2";
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
			<form method="POST" name="form1" id="form1" action="<?php print $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
				<td align="center" width="100%" colspan="4" height="25" class="tbl_title">
			<?php print $form_title?></td>
			</tr>
				<tr>
					<td align="center" width="100%" colspan="4" height="20" class=tbl_msg_row>
					<span  class=tbl_msg>
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp; ";?>
					</span></td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="4"></td>
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
<td align="right" width="20%" class="dirooz">عنوان آگهی :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f1" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f1].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
				<tr>
<td align="center" width="100%"  colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">اعتبار (به روز) :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f2" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f2].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%"  colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">هزینه ثبت (ریال) :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f3" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f3].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">شرح :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<textarea rows="7" name="f4" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f4];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
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
		
	</div>
