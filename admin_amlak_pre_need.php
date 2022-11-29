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
var first_f="f1";
var no_empty=new Array("f1","f2","f4")
var test_array=new Array(1,0);
var onload_array=new Array(1,0,1);
</script>
<?php
$tbl_name="tbl_amlak_pre_need";
$f_count=8;
$msg='';
$page_id=78;
$form_title="مدیریت مشخصه های فنی املاک";
$grid_title="لیست مشخصات تعریف شده";
$col1_title="عنوان";
$col2_title="نوع";
$col1_grid="f1";
$col2_grid="f2";
$sort_field=" f6";
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
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp; ";?></span></td>
				</tr>
<tr>
<td align="center" width="5%" class="auto_id_row">&nbsp;</td>
<td align="right" width="20%" class="auto_id_row">&nbsp;</td>
<td align="right" width="35%" class="auto_id_row">
&nbsp;</td>
<td align="right" width="40%" class="auto_id_row">&nbsp;</td>
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
<td align="right" width="20%" class="dirooz">عنوان مشخصه :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<input type="text" name="f1" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f1].'"';?>></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">نوع داده :</td>
<td align="right" width="35%" class="dirooz">
<select size="1" name="f2" id="f2" dir="rtl" >
<option <?php if(isset($_GET["edit"])) if ($selected_row["f2"]=="string") print "selected"?> value="string">
متن کوتاه
										</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f2"]=="text") print "selected"?> value="text">
متن طولانی
										</option>

<option <?php if(isset($_GET["edit"])) if ($selected_row["f2"]=="int") print "selected"?> value="int">عددی</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f2"]=="currency")print "selected"?> value="currency">پولی</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f2"]=="boolean")print "selected"?> value="boolean">بلی/خیر</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f2"]=="loockup")print "selected"?> value="loockup">چند مقداری</option>

</select></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">مقدار پیش فرض :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<input type="text" name="f3" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f3].'"';?>></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">اجازه خالی بودن :</td>
<td align="right" width="35%" class="dirooz">
<select size="1" name="f4" id="f4" dir="rtl" >
<option <?php if(isset($_GET["edit"])) if ($selected_row["f4"]=="1") print "selected"?> value="1">
دارد
										</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f4"]=="0") print "selected"?> value="0">
ندارد
										</option>

</select></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">واحد یا عبارت جلوی مقدار :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<input type="text" name="f5" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f5].'"';?>></td>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">اولویت :</td>
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
<td align="right" width="20%" class="dirooz">نام زیر گروه :</td>
<td align="right" width="35%" class="dirooz">
<select id="f7" name="f7" />
<option  value="0">اگر فقط مربوط به زیر گروه خاصی است انتخاب کنید</option>
<?php $re=mysql_query("select auto_id,f2 from tbl_item_sub_group ");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f7"]==$row2["auto_id"]) print "selected"?> value=<?php print $row2[auto_id];?> ><?php print $row2[f2] ?></option>
<?php }?>
</select></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
					</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">مهمترین ها :</td>
<td align="right" width="35%" class="dirooz">
<select size="1" name="f8" id="f8" dir="rtl" >
<option <?php if(isset($_GET["edit"])) if ($selected_row["f8"]=="0") print "selected"?> value="0">
خیر
										</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f8"]=="1") print "selected"?> value="1">
بلی
										</option>

</select></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
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
						<td align="center" width="100%" class="btn_table" colspan="4" class="tbl_last_row">&nbsp;</td>
					</tr>
				</table>
				</form>
				</td>
			</tr>
			</tr>
			</td>
				<tr>
				<td align=center>
<!--==================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<table  id= "tbl_grid" border="0" width="100%" cellpadding="0" cellspacing="0"   >
<form name="frm_grid" id="frm_grid"  method="POST" action="<?php print $_SERVER["PHP_SELF"];?>" >
<tr>
<td class= "aseman_grid_tite" width="117%" align="center" height="23"  colspan="6"   >
<?php print $grid_title?></td>
</tr>
													<tr>
<td class= "aseman_grid_btn" width="112%" align="right" height="23" colspan="6"   >
<input type="submit" value="حذف انتخاب شده ها" name="btn_del" onclick="javascript: return confirm('هشدار تمامی گزینه های انتخاب شده حذف خواهند شد .آیا از حذف اطمینان دارید ؟');"  tabindex="12"></td></td>
													</tr>
													<tr>
<td class= "aseman_grid_col_title" width="10%" align="center" height="23"   >
<input type='checkbox' name='select-all' id='select-all'  onclick="check();" style="font-weight: 700" ></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
													حدف</td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
												ویرایش</td>
<td class= "aseman_grid_col_title" width="23%" align="center" height="23"   >
													عنوان مشخصه</td>
<td class= "aseman_grid_col_title" width="23%" align="center" height="23"   >
													نوع</td>
<td class= "aseman_grid_col_title" width="15%" align="center" height="23"   >
زیر مجموعه
</td>
</tr>
	<?php
	if ($sort_field=="")
		$sort_field=" auto_id desc";
	$grid_field=$col1_grid.",".$col2_grid;
	$str_sql="SELECT auto_id,".$grid_field."  from ".$tbl_name." ".$str_where." order by ".$sort_field;
	//print $str_sql;
	$re = mysql_query($str_sql);
	$i=1;
	while($row = mysql_fetch_array($re))
	{  if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
													
<tr >
<td width="10%" align="center" class="<?php print $class_name; ?>"   >
<input type='checkbox' name='ch1[]'  id='ch1[]'  value="<?php print $row["auto_id"]; ?>"> </td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<a href="?delete&auto_id=<?php print $row["auto_id"]; ?>" onclick="javascript: return confirm('آیا از حذف اطمینان دارید ؟');" style="text-decoration: none; color: #16387C" >
<img border="0" src="images/aseman_del2.png" width="25" alt="حذف" title="حذف"></a><?php //} ?></td>
<td width="10%" align="right" class="<?php print $class_name; ?>" >
<a href="?edit&auto_id=<?php print $row["auto_id"]; ?>" style="text-decoration: none; color: #16387C" >
<img border="0" src="images/aseman_edit.png" width="25" alt="ویرایش" title="ویرایش"></a></td>
<td width="23%" align="center" class="<?php print $class_name; ?>"    >
<?php print $row[1]; ?>
</td>
<td width="23%" align="center" class="<?php print $class_name; ?>"    >
<?php print $row[2]; ?>
</td>
<td width="15%" align="center" class="<?php print $class_name; ?>"    >
<?php if($row[2]=="loockup")	 { ?>
<a href="admin_amlak_pre_need_loockup.php?amlak_pre_id=<?php print $row[auto_id];?>&amlak_pre_name=<?php print $row[f1]?>">ثبت</a></td>
<?php }?>
</tr>
<?php }
?>
</table>
				
<!-- =================================================== -->
				</td>
			</tr>
				<tr>
				<td align=center>
				<?php //include "footer.php"?></td>
			</tr>
			</table>
		</table>
		
	</div>

