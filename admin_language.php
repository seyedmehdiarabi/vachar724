<?php include "header_admin_page.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script lang="javascript">
var today_date_j=<?php print $_SESSION["today_date_t"];?>;
var f_date_name="";
var first_f="f1";
var no_empty=new Array("")
var test_array=new Array(0,0);
var onload_array=new Array(0,0,0);
</script>
<?php
$tbl_name="tbl_item_info2";
$msg='';
$form_title="مدیریت زبانهای قابل پشتیبانی";
$page_id=23;
access_page1($page_id,$_SESSION["s_user_type_id"]);
if(isset($_POST["B1"]))
{
	$str_zebon="";

	if ($_POST["chk_dirooz"]=="ON")
		$str_zebon=$str_zebon."1";
	if ($_POST["chk_emrooz"]=="ON")
		$str_zebon=$str_zebon."2";
	if ($_POST["chk_farda"]=="ON")
		$str_zebon=$str_zebon."3";
	if ($_POST["chk_passfarda"]=="ON")
		$str_zebon=$str_zebon."4";
		
	mysql_query("update $tbl_name set sell_date=$str_zebon");	
	$msg="تنظیمات مورد نظر انجام شد";
}
	$rh=mysql_query("select sell_date from tbl_item_info2");
	$r=mysql_fetch_array($rh);
	$_SESSION["today_date_t"]=$r["sell_date"];

?>
</head>
<div align="center">
<div class="main_form">
<body onload="aseman_onload_test();" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"> 
	<div align="right">
		<table border="0"  dir="rtl" cellspacing="0" style="border-collapse: collapse" class="main_table">
			<tr>
			<td align="right" valign="top">
			<table border =0 width=100% dir=rtl class="tbl_3_row" cellspacing="0" cellpadding="0">
			</tr>
			<td align=right>
			<form method="POST" name="form1" id="form1" action="<?php print $_SERVER["PHP_SELF"];?>" >
			<table border="0" width="100%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
				<td align="center" width="100%" colspan="6" height="25" class="tbl_title">
			<?php print $form_title?></td>
			</tr>
				<tr>
					<td align="center" width="100%" colspan="6" height="20" class=tbl_msg_row>
					<span  class=tbl_msg><?php print $msg?></span>
</td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="6">&nbsp;</td>
					</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&nbsp;</td>
<td align="right" width="20%" class="auto_id_row">زبانهای قابل پشتیبانی :</td>
<td align="right" width="18%" class="auto_id_row">
<?php 
$date_temp=$_SESSION["today_date_t"];
$chk1="";
$chk2="";
$chk3="";
$chk4="";
for($i=0;$i<strlen($date_temp);$i++)
{
	if ($date_temp[$i]==1)
		$chk1="checked";
	else if ($date_temp[$i]==2)
		$chk2="checked";
	else if ($date_temp[$i]==3)
		$chk3="checked";
	else if ($date_temp[$i]==4)
		$chk4="checked";
}
?>
<input type="checkbox" name="chk_dirooz" value="ON" <?php print $chk1 ?> > 
فارسی</td>
<td align="right" width="17%" class="auto_id_row" >
<input type="checkbox" name="chk_emrooz" value="ON" <?php print $chk2 ?>> 
انگلیسی</td>
<td align="right" width="20%" class="auto_id_row">
<input type="checkbox" name="chk_farda" value="ON" <?php print $chk3 ?>> 
عربی</td>
<td align="right" width="20%" class="auto_id_row">
<input type="checkbox" name="chk_passfarda" value="ON" <?php print $chk4 ?>> 
روسی</td>
</tr>
<tr>
<td align="center" width="100%"  colspan="6">&nbsp;</td>
</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="20%" class="btn_table">&nbsp;</td>
						<td align="right" width="35%" class="btn_table" colspan="2">
<input type="submit"  name="B1" value="ثبت اطلاعات">
<span lang="en-us">&nbsp;
						</span>&nbsp;</td>
						<td align="right" width="40%" class="btn_table" colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" width="100%" class="btn_table" colspan="6" class="tbl_last_row">&nbsp;</td>
					</tr>
				</table>
				</form>
				</td>
			</tr>
			</tr>
			</td>
				<tr>
				<td align=center>
				</td>
			</tr>
				<tr>
				<td align=center>
				<?php //include "footer.php"?></td>
			</tr>
			</table>
		</table>
	</div>
	</div></div>

