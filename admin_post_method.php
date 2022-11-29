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
$tbl_name="tbl_post_method";
$f_count=18;
$msg='';
$page_id=64;
$form_title="تعریف روشهای پستی";
$grid_title="عناوین تعریف شده";
$col1_title="کد عنوان";
$col2_title="عنوان پست";
$col1_grid="auto_id";
$col2_grid="f1";
$sort_field=" auto_id ";
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
			<form method="POST" name="form1" id="form1" action="<?php print $_SERVER["PHP_SELF"];?>" >
			<table border="0" width="100%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
				<td align="center" width="100%" colspan="4" height="25" class="tbl_title">
			<?php print $form_title?></td>
			</tr>
				<tr>
					<td align="center" width="100%" colspan="4" height="20" class=tbl_msg_row>
					<span  class=tbl_msg>
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp; ";
					?></span></td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="4">&nbsp;</td>
					</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&#1645;</td>
<td align="right" width="23%" class="auto_id_row">کد (خودکار درج مي شود)</td>
<td align="right" width="72%" class="auto_id_row" colspan="2">
<input type="text" name="auto_id" size="20" dir="ltr" readonly=true  <?php if(isset($_GET["edit"])) print "value=".$selected_row[auto_id]; ?>></td>
</tr>
<tr>
<td align="center" width="100%"  colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="23%" class="dirooz">عنوان<span lang="en-us"> </span>روش 
:</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f1" id="f1" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f1].'"';?>></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">نرخ پایه شهری :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f2" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f2].'"';?>></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">نرخ پایه درون استانی :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f3" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f3].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">نرخ پایه برون استانی همجوار :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
	<input type="text" name="f4" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f4].'"';?>>&nbsp;</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">نرخ پایه برون استانی غیرهمجوار :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f5" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f5].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">غیر استاندارد :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f6" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f6].'"';?>></tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">مالیات بر ارزش افزوده :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f7" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f7].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">آگهی تحویل:</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f8" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f8].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">شناسه الکترونیک:</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f9" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f9].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">درصد سایر :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f10" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f10].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">نام فیلد درصد سایر :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f11" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f11].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">حداکثر وزن بسته (گرم) :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f12" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f12].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">هر واحد وزن مازاد (گرم) :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f13" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f13].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">نرخ مازاد شهری :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f14" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f14].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">نرخ مازاد درون استانی :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f15" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f15].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">نرخ مازاد برون استانی همجوار :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f16" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f16].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">نرخ کازاد برون استانی غیر همجوار:</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f17" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f17].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="23%" class="dirooz">حداقل هزینه بیمه :</td>
<td align="right" width="72%" class="dirooz" colspan="2">
<input type="text" name="f18" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f18].'"';?>></tr>
				</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="23%" class="btn_table">&nbsp;</td>
						<td align="right" width="47%" class="btn_table">
<input type="submit" onclick= "return aseman_test();" 
<?php if(isset($_GET["edit"])) print 'value= "ويرايش اطلاعات" name=B2';  else print 'value="ذخيره اطلاعات در سيستم" name="B1"'?> >
<span lang="en-us">&nbsp;
						</span>&nbsp;</td>
						<td align="right" width="40%" class="btn_table">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" width="100%" class="btn_table" colspan="4" class="tbl_last_row">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
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