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
$tbl_name="tbl_pic_link";
$f_count=6;
$msg='';
$page_id=49;
$form_title="مدیریت پیوندهای متنی";
$grid_title="عناوین تعریف شده";
$col1_title="عنوان پیوند";
$col2_title="اولویت";
$col1_grid="f1";
$col2_grid="f3";
$sort_field=" f3 asc ";
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
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp; ";
					$upload_dir="images/pic_link";
					if($msg=="عملیات درج با موفقیت انجام شد"||$msg=="عملیات ویرایش با موفقیت انجام شد")
					{
						$f_tmp_name = $_FILES['file_up']['tmp_name']; 
						if($f_tmp_name!="")
						{
							$f_name=$_FILES['file_up']['name']; 
							$f_size=$_FILES['file_up']['size']; 
							$max_size=1048576;

							if ($_POST["auto_id"]!="")
								$id_file=$_POST["auto_id"];
							else
								$id_file=get_max_id($tbl_name);

							$ext = strrchr($f_name,'.'); 							
							$name1=$id_file.$ext;
							$limit_ext=array(".jpg",".gif",".png");
							$name2="";
							$new_w_size=0;
							$new_h_size=0;
							$width=0;
							$height=0;
							
							$msg=upload_file($f_name,$f_tmp_name,$f_size,$max_size,$upload_dir,$name1,$name2,$limit_ext,$new_w_size,$new_h_size,$width,$height);
							print "  ".$msg."  ";
							if ($msg==" فایل با موفقیت ارسال شد ")
								mysql_query("update $tbl_name set f4='$ext' where auto_id=$id_file");
						}
						//else
						//	mysql_query("update $tbl_name set f4='$_POST[ext]' where auto_id=$id_file");
					}
						if($msg=="عملیات حذف با موفقیت انجام شد")
						{	

							$id_file=$_GET["auto_id"];
							$name1=$id_file.".jpg";
							if (is_file($upload_dir."/".$name1))
								delete_file($upload_dir."/".$name1);
						}	
					?></span></td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="4">&nbsp;</td>
					</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&#1645;</td>
<td align="right" width="20%" class="auto_id_row">کد (خودکار درج مي شود)</td>
<td align="right" width="35%" class="auto_id_row">
<input type="text" name="auto_id" size="20" dir="ltr" readonly=true  <?php if(isset($_GET["edit"])) print "value=".$selected_row[auto_id]; ?>></td>
<input type="hidden" name="f4" id="f4" <?php if(isset($_GET["edit"])) print "value=".$selected_row[f4]; ?>></td>
<td align="right" width="40%" class="auto_id_row">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%"  colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">عنوان لینک :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f1" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f1].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">آدرس پیوند :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<input type="text" name="f2" size="77" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f2].'"';?>></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">اولویت نمایش :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
&nbsp;<input type="text" name="f3" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f3].'"';?>></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">نحوه باز شدن :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
&nbsp;<select size="1" name="f5" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f5"]=="_self") print "selected"?> value="_self">در همان صفحه بازشود
										</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f5"]=="_blank") print "selected"?> value="_blank">در صفحه جدید باز شود
										</option>

</select></tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">وضعیت نمایش :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
&nbsp;<select size="1" name="f6" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f6"]=="1") print "selected"?> value="1">نمایش داده شود
										</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f6"]=="0") print "selected"?> value="0">فعلا نمایش داده نشود
										</option>

</select></tr>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">فایل تصویر پیوند :</td>
<td align="right" width="35%" class="dirooz">
<input type="file" name="file_up" size="40" dir="ltr" ><td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
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