<?php include "header_admin_page.php";
$form_title="ویرایش و ثبت اطلاعات بانکی کاربر";
$page_id=51;
access_page1($page_id,$_SESSION["s_user_type_id"]);
$tbl_name="tbl_user_info";
$str_sql="select * from $tbl_name where auto_id='$_SESSION[s_user_id]'";
$re=mysql_query($str_sql);
$row=mysql_fetch_array($re);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script language="javascript">
var tbl_name="tbl_user_info";
var valid_fld=new Array("f15","f17","f20","f15");
var test_array=new Array("1","1","1","3");	
var fld_name=new Array("f15","f16","f17","f18","f19","f20");
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
						<td align="left" width="20%" class="cell_lable">
						شماره کارت :</td>
						<td align="right" class="cell_input" width="30%">
						<input type="text" name="f15" value="<?php print $row[f15]?>"></td>
						<td align="left" width="20%" class="cell_lable">شماره 
						حساب</td>
						<td class="cell_input" align="right" width="30%" >
						<input type="text" name="f16" value="<?php print $row[f16]?>"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f15"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%">&nbsp;</td>
				</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">نام بانک 
						:</td>
						<td align="right" class="cell_input" width="30%">
						<input type="text" name="f17" value="<?php print $row[f17]?>" ></td>
						<td align="left" width="20%" class="cell_lable">نام شعبه 
						:</td>
						<td class="cell_input" align="right" width="30%">
						<input type="text" name="f18" value="<?php print $row[f18]?>" ></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f17"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">نام صاحب 
						حساب :</td>
						<td align="right" class="cell_input" width="30%">
						<input type="text" name="f20" value="<?php print $row[f20]?>"></td>
						<td align="left" width="20%" class="cell_lable">شماره 
						شبا :</td>
						<td class="cell_input" align="right" width="30%">
						<input type="text" name="f19" value="<?php print $row[f19]?>" ></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f20"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%">&nbsp;</td>
					</tr>
<!--
					<tr>
						<td align="left" width="20%" class="cell_lable">&nbsp;</td>
						<td align="right" class="cell_input" width="30%">
&nbsp;</td>
						<td align="left" width="20%" class="cell_lable">انتخاب 
						فایل تصویر:</td>
						<td class="cell_input" align="right" width="30%">
	<div class="fileUpload btn btn-primary">
    <span>برای انتخاب فایل اینجا کلیک کنید ...</span>
    <input type="file" class="upload" />
</div></td>
					</tr>-->
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%">&nbsp;</td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" width="100%" class="cell_submit" colspan="4">
						<input type="button" value="ذخیره تغییرات" name="btn_save" onclick="update();"></td>
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
