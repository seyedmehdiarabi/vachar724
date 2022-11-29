<?php include "header_admin_page.php";
$page_id=50;
access_page1($page_id,$_SESSION["s_user_type_id"]);
$form_title=" ویرایش پروفایل شخصی کاربران";
$tbl_name="tbl_user_info";
$str_sql="select * from $tbl_name where auto_id='$_SESSION[s_user_id]'";
$re=mysql_query($str_sql);
$row=mysql_fetch_array($re);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script language="javascript">
var tbl_name="tbl_user_info";
var valid_fld=new Array("f3","f22","f6","f8","f11","f23","f24","f7","f6","f6","f8");
var test_array=new Array("1","1","1","1","1","1","1","1","2","3","4");	
var fld_name=new Array("f3","f4","f5","f6","f7","f8","f11","f22","f23","f24","f25");
var frm_name="frm1";
var str_where="auto_id=<?php print $_SESSION[s_user_id]?>";
</script>

<body>
<p>&nbsp;</p>
<div align="center">
<div class="main_form">
<form method="POST" action="" name="frm1" id="frm1">
	<table class="tbl_1_border">
		<tr>
			<td align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" class="tbl_2">
				
					<tr>
						<td align="center" width="100%"  colspan="4"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>
					<tr>
						<td width="100%" class="cell_message" colspan="4" height=30px;>
							<center><span id="msg_send_err" name="msg_send_err"></span>
	  						<span id="msg_send_ok" name="msg_send_ok"></span></center>
						</td>
					</tr>
					<tr>
						<td align="center" width="100%"  colspan="4">
						<span id="img_user_pic" name="img_user_pic">
											<?php 
										$user_pic="images/user/".$_SESSION["s_user_id"].".jpg";
										if(!is_file($user_pic)) {$user_pic="images/user/no_user_pic.jpg";}					
					?>					
					<img border="0" class="img_user" src="<?php print $user_pic?>" >
					</span>
						</td>
					<tr>
						<td align="center" width="100%"  colspan="4">&nbsp;</td>
</tr>						
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">
						<span lang="en-us">&nbsp;</span>نام :</td>
						<td align="right" class="cell_input" width="30%">
						<input type="text" name="f3" value="<?php print $row[f3]?>"></td>
						<td align="left" width="20%" class="cell_lable">نام 
						خانوادگی :</td>
						<td class="cell_input" align="right" width="30%" >
						<input type="text" name="f22" value="<?php print $row[f22]?>"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f3"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span class="fld_err" id="err_f22"></span></td>
				</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">شماره 
						تلفن ثابت :</td>
						<td align="right" class="cell_input" width="30%">
						<input type="text" name="f5" value="<?php print $row[f5]?>" ></td>
						<td align="left" width="20%" class="cell_lable">شماره 
						همراه :</td>
						<td class="cell_input" align="right" width="30%">
						<input type="text" name="f6" value="<?php print $row[f6]?>" maxlength=11></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%">&nbsp;</td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span class="fld_err" id="err_f6"></span></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">پست 
						الکترونیک:</td>
						<td align="right" class="cell_input" width="30%">
						<input type="text" name="f8" value="<?php print $row[f8]?>"></td>
						<td align="left" width="20%" class="cell_lable">رمز ورود 
						به پنل :</td>
						<td class="cell_input" align="right" width="30%">
						<input type="text" name="f11" value="<?php print $row[f11]?>" ></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f8"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span class="fld_err" id="err_f11"></span></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">استان 
						محل اقامت :</td>
						<td align="right" class="cell_input" width="30%">
						<select id="f23" name="f23"  onchange="loadcity(this.options[this.selectedIndex].value);"/>
<option value='-1'>استان را انتخاب نمایید</option>
<?php 
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("select ostan_id,ostan_name from tbl_ostan");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option <?php if ($row["f23"]==$row2[ostan_id]) print "selected"?>  value=<?php print $row2[ostan_id];?> ><?php print $row2["ostan_name"] ?></option>
<?php }?>
</select></td>
<?php
mysql_query("SET CHARACTER SET utf8");
if((int)$row[f24]!=0||(int)$row[f24]!="")
{
	$re=mysql_query("select shahr_id,shahrestan from tbl_shahr where shahr_id=$row[f24]");
	list($cur_shahr_id,$cur_shahr_name)=mysql_fetch_array($re);
}	
 ?>
						<td align="left" width="20%" class="cell_lable">شهرستان 
						:</td>
						<td class="cell_input" align="right" width="30%">
						<select id="f24" name="f24"  />
						<option  value="<?php print $cur_shahr_id?>" selected><?php print $cur_shahr_name?></option>
						</select>
					</td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f23"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span id="city_loader"></span><span class="fld_err" id="err_f24"></span></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">آدرس 
						دقیق پستی :</td>
						<td align="right" class="cell_input" width="29%">
						<textarea rows="4" name="f7" cols="39" ><?php print $row["f7"]?></textarea></td>
						<td align="right" class="cell_lable" width="19%" valign="top">
						جنسیت :</td>
						<td align="right" class="cell_input" width="32%" valign="top">
<select size="1" name="f4" dir="rtl">
<option <?php  if ($row["f4"]=="1") print "selected"?> value="1">مرد</option>
<option <?php  if ($row["f4"]=="0") print "selected"?> value="0">زن</option>
</select></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%">
						<span class="fld_err" id="err_f25"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%">&nbsp;</td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">وضیعت 
						نمایش اطلاعات :</td>
						<td align="right" class="cell_input" width="29%">
						<select size="1" name="f25" dir="rtl">
<option <?php  if ($row["f25"]=="0") print "selected"?> value="0">اطلاعات من در صفحه نمایش کالا نمایش داده نشود</option>
<option <?php  if ($row["f25"]=="1") print "selected"?> value="1">اطلاعات من در صفحه نمایش کالا نمایش داده شود</option>
</select></td>
						<td align="right" class="cell_lable" width="19%" valign="top">
						انتخاب 
						فایل تصویر :&nbsp;</td>
						<td align="right" class="cell_input" width="32%" valign="top">
				 	   <input type="file" id="file1" /></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%">&nbsp;</td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" width="100%" class="cell_submit" colspan="4">
						<input type="button" value="ذخیره تغییرات" name="btn_save" onclick="update();">&nbsp;&nbsp;
						<input type="button" value="آپلود فایل تصویر" name="btn_save1" onclick="edit_file('<?php print $_SESSION[s_user_id] ?>');">
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</form>			
</div>
</div>
<?php include"footer_admin_function.php"?>
</body>