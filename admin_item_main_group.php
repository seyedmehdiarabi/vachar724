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
$tbl_name="tbl_item_main_group";
$f_count=10;
$msg='';
$page_id=71;
$form_title="تعريف و مديريت سر گروه هاي کالا";
$grid_title="ليست سرگروه های تعريف شده";
$col1_title="کد سرگروه گروه";
$col2_title="نام سرگروه گروه";
$col1_grid="auto_id";
$col2_grid="f1";
$sort_field=" f3 ";
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
					$upload_dir="images/sar_group_pic";
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

							//$name1=$id_file.".png";
							$name1=$f_name;
							$name2="";

							$limit_ext=array(".png");
							$new_w_size=0;
							$new_h_size=0;
							$width=0;
							$height=0;
							
							$msg=upload_file($f_name,$f_tmp_name,$f_size,$max_size,$upload_dir,$name1,$name2,$limit_ext,$new_w_size,$new_h_size,$width,$height);
							print "  ".$msg."  ";
							if ($msg==" فایل با موفقیت ارسال شد ")
								mysql_query("update $tbl_name set f10='$name1' where auto_id=$id_file");
						}
						else
								mysql_query("update $tbl_name set f10='$selected_row[f10]' where auto_id=$id_file");
						
					}
						if($msg=="عملیات حذف با موفقیت انجام شد")
						{	

							$id_file=$_GET["auto_id"];
							$name1=$selected_row["f10"];
							if (is_file($upload_dir."/".$name1))
								delete_file($upload_dir."/".$name1);
						}	
			
					?>
					</span>
					<?php 
					 if(isset($_GET["edit"])) {	?>				
					<img border="0" src="images/sar_group_pic/<?php print $selected_row[f10]?>" width="110">
					<?php }?>
					</td>
					
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
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">عنوان گروه کالا :</td>
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
<td align="right" width="20%" class="dirooz">شرح گروه :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<textarea rows="7" name="f2" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f2];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">الویت نمایش :</td>
<td align="right" width="35%" class="dirooz">
&nbsp;<input type="text" name="f3" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f3].'"';?>><td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">فایل تصویر گروه :</td>
<td align="right" width="35%" class="dirooz">
<input type="file" name="file_up" size="40" dir="ltr" ><td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">عنوان گروه به انگليسي :</td>
<td align="right" width="35%" class="emrooz">
<input type="text" name="f4" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[F4].'"';?>></td>
<td align="right" width="40%" class="emrooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="emrooz">&nbsp;</td>
<td align="right" width="20%" class="emrooz">شرح گروه به انگليسي :</td>
<td align="right" width="75%" class="emrooz" colspan="2">
<textarea rows="7" name="f5" cols="40" dir="ltr" ><?php if(isset($_GET["edit"])) print $selected_row[f5];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="emrooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">عنوان گروه به عربي :</td>
<td align="right" width="35%" class="farda">
<input type="text" name="f6" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f6].'"';?>></td>
<td align="right" width="40%" class="farda">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
<tr>
<td align="center" width="5%" class="farda">&nbsp;</td>
<td align="right" width="20%" class="farda">شرح گروه به عربي :</td>
<td align="right" width="75%" class="farda" colspan="2">
<textarea rows="7" name="f7" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f7];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
</tr>
					
					<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">عنوان گروه به روسی :</td>
<td align="right" width="35%" class="passfarda">
<input type="text" name="f8" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f8].'"';?>></td>
<td align="right" width="40%" class="passfarda">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" ></td>
				</tr>
				<tr>
<td align="center" width="5%" class="passfarda">&nbsp;</td>
<td align="right" width="20%" class="passfarda">شرح گروه به روسی :</td>
<td align="right" width="75%" class="passfarda" colspan="2">
<textarea rows="7" name="f9" cols="40" dir="ltr" ><?php if(isset($_GET["edit"])) print $selected_row[f9];?></textarea></td>
				</tr>
				<tr>
<td align="center" width="100%" class="passfarda" colspan="4">
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