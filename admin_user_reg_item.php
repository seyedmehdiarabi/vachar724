<?php include "header_admin_page.php";
$form_title="مرحله اول : ثبت کالای فروشی ";
$page_id=41;
access_page1($page_id,$_SESSION["s_user_type_id"]);
$tbl_name="tbl_item_info";
if ($_GET["edit"]==1)
{
	$form_title="ویرایش کالای از قبل ثبت شده کاربر";
	$edit=1;
	$item_ed_id=(int)$_GET["item_id"];
	if($item_ed_id==0||$item_ed_id=="")
	{
		header("Location: index_admin.php");
		exit;
	}	
	$str_sql=" SELECT `tbl_item_info`.`f1`, `tbl_item_info`.`f2`, `tbl_item_info`.`f3`,
  `tbl_item_info`.`f4`, `tbl_item_info`.`f5`, `tbl_item_info`.`f6`,  `tbl_item_info`.`f7`, `tbl_item_info`.`f8`, `tbl_item_info`.`f10`,`tbl_item_info`.`f20`,
  `tbl_item_info`.`f11`, `tbl_item_info`.`f12`, `tbl_item_info`.`f13`,  `tbl_item_info`.`f14`, `tbl_item_info`.`f15`, `tbl_item_info`.`f16`,
  `tbl_item_sub_group`.`f2` AS `sub_group_name`, `tbl_item_group`.`f1`  AS `group_name`, `tbl_item_group`.`auto_id` as group_code
FROM
  `tbl_item_info` LEFT JOIN
  `tbl_item_sub_group` ON `tbl_item_info`.`f1` = `tbl_item_sub_group`.`auto_id`
  LEFT JOIN
  `tbl_item_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id`";		

	if ($_SESSION["s_user_type_id"]>2)
	{
		$str_sql=$str_sql. " where tbl_item_info.auto_id='$item_ed_id' and tbl_item_info.f2='$_SESSION[s_user_id]'";
	}	
	else
	{
		$str_sql=$str_sql. " where tbl_item_info.auto_id='$item_ed_id'";
	}	
//	print $str_sql;
	$re=mysql_query($str_sql);
	$num=mysql_num_rows($re);
	if($num==0)
	{
		header("Location: index_admin.php");
		//print "fffffffffffffffffff";
		exit;
	}	
	$selected_row=mysql_fetch_array($re);
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script language="javascript">
var valid_fld=new Array("f1","f1_temp","f3","f4","f8","f16","f20","f4","f8","f16","f20","f2");
var test_array=new Array("1","1","1","1","1", "1", "1","3","3","3","3","1");	
var edit=<?php if($edit) print "1"; else print "0"?>;
var item_ed_id=<?php if($edit) print $item_ed_id; else print "0"?>;
</script>
<body>
<p>&nbsp;</p> 
<div align="center">
<div class="main_form">
<form method="POST" action="admin_user_reg_item_step2.php" name="frm1" id="frm1">
<?php if($_SESSION["s_user_type_id"]>2) {?>
		<input type=hidden value="<?php print $_SESSION[s_user_id]?>" id="f2" name="f2">
<?php }; ?>		
	<div id="val_item_id" name="val_item_id"></div>		
	<input type=hidden value="<?php print $edit ?>" id="edit_status" name="edit_status">


	<?php
		include "jdf.php";
		$t_date=gregorian_to_jalali($y,$m,$d); // register date
		$f19=$t_date[0]."/".$t_date[1]."/".$t_date[2];
		?>
		<input type=hidden value="<?php print $f19?>" id="f19" name="f19">

	<table class="tbl_1_border">
		<tr>
			<td align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" class="tbl_2">
				
					<tr>
						<td align="center" width="100%"  colspan="4"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>
					<tr>
						
					</tr>
					<tr>
					</tr>
					<tr>
						<td width="100%" class="cell_message" colspan="4" height=30px;>
							<center><span id="msg_send_err" name="msg_send_err"></span>
	  						<span id="msg_send_ok" name="msg_send_ok"></span></center>
						</td>
					</tr>

					<tr>
						<td align="left" width="20%" class="cell_lable">
<?php if($_SESSION["s_user_type_id"]<=2){ ?>					
						مالک کالا :
<?php }?>						
						</td>
						<td align="right" class="cell_input" width="30%">
<?php if($_SESSION["s_user_type_id"]<=2){ ?>					
						<select id="f2" name="f2" />
<option value='-1'> مالک کالا را انتخاب کنید</option>
<?php 
$re1=mysql_query("select auto_id,f3,f22 from tbl_user_info order by f22 asc");
while($row2 = mysql_fetch_array($re1))
{
 ?>
<option <?php if ($edit) if ($selected_row["f2"]==$row2["auto_id"]) print "selected"?>  value=<?php print $row2[auto_id];?> ><?php print $row2["f22"]." ، ".$row2["f3"] ?></option>
<?php }?>
</select>
<?php }?>
</td>
						<td align="left" width="20%" class="cell_lable">گروه کالا :</td>
						<td class="cell_input" align="right" width="30%" >
<select id="f1_temp" name="f1_temp"  onchange="load_sub_group(this.options[this.selectedIndex].value);"/>
<option value="-1">گروه قرارگیری کالا</option>
<?php $re=mysql_query("select auto_id,f1 from tbl_item_group");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option  value="<?php print $row2[auto_id];?>" <?php if ($edit) if ($selected_row["group_code"]==$row2["auto_id"]) print "selected"?>><?php print $row2[f1] ?></option>
<?php }?>
</select></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f2"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span class="fld_err" id="err_f1_temp"></span></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">
						زیر گروه 
						کالا :</td>
						<td align="right" class="cell_input" width="30%">
						<select size="1" name="f1" id="f1" dir="rtl">
						<?php if ($selected_row["group_code"]!="")
						{
						?>
						<option  value="<?php print $selected_row[f1]?>" selected ><?php print $selected_row["sub_group_name"] ?></option>						
						<?php }?>
						</select></td>
						<td align="left" width="20%" class="cell_lable">نام کالا :</td>
						<td class="cell_input" align="right" width="30%" >
						<input type="text" name="f3" id="f3" value="<?php if($edit) print $selected_row[f3]?>"> <span id="group_loader"></span></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f1"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span class="fld_err" id="err_f3"></span></td>
				</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">قیمت 
						فروش (ریال) :</td>
						<td align="right" class="cell_input" width="30%">
						<input type="text" name="f4" id="f4" maxlength="10" value="<?php if($edit) print $selected_row[f4]?>" onchange="calc_reg_price();"></td>
						<td align="left" width="20%" class="cell_lable">قیمت 
						عمده فروشی :</td>
						<td class="cell_input" align="right" width="30%">
						<input type="text" name="f20" id="f20" maxlength="10" value="<?php if($edit) print $selected_row[f20]?>" onchange="calc_reg_price();" size="20"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f4"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span class="fld_err" id="err_f20"></span></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">نوع کالا 
						:</td>
						<td align="right" class="cell_input" width="30%">
						<select size="1" name="f5" id="f5" dir="rtl" onclick="calc_reg_price();" >
<option <?php if($edit) if ($selected_row["f5"]=="1") print "selected"?> value="1">نو آکبند</option>
<option <?php if($edit) if ($selected_row["f5"]=="2") print "selected"?> value="2">نو غیرآکبند</option>
<option <?php if($edit) if ($selected_row["f5"]=="3") print "selected"?> value="3">دست دوم</option>
</select></td>
						<td align="left" width="20%" class="cell_lable">نحوه 
						فروش :</td>
						<td class="cell_input" align="right" width="30%">
						<select size="1" name="f6" id="f6" dir="rtl" onclick="calc_reg_price();">
<option <?php if($edit) if ($selected_row["f6"]=="1") print "selected"?> value="1">نقدی</option>
<option <?php if($edit) if ($selected_row["f6"]=="2") print "selected"?> value="2">مزایده</option>
</select></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">وزن کالا 
						(گرم) :</td>
						<td align="right" class="cell_input" width="30%">
						<input type="text" name="f16" id="f16" size="20" value="<?php if($edit) print $selected_row[f16]?>" onchange="calc_reg_price();"></td>
						<td align="left" width="20%" class="cell_lable">تعداد 
						کالا :</td>
						<td class="cell_input" align="right" width="30%">
						<input type="text" name="f8" id="f8"  value="<?php if($edit) print $selected_row[f8]?>" onchange="calc_reg_price();">
					</td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f16"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span class="fld_err" id="err_f8"></span></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">معرفی 
						اجمالی کالا :</td>
						<td align="right" class="cell_input" width="80%" colspan="3">
						<textarea rows="4" name="f10" id="f10" cols="39" class="big_area" ><?php if($edit) print $selected_row[f10]?></textarea></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%">
						</td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">عنوان 
						معرفی دوم :</td>
						<td align="right" class="cell_input" width="80%" valign="top" colspan="3">
						<input type="text" name="f11" id="f11" size="20" class="big_txt" value="<?php if($edit) print $selected_row[f11]?>"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">شرح 
						معرفی دوم :</td>
						<td align="right" class="cell_input" width="80%" valign="top" colspan="3">
						<textarea rows="4" name="f12" id="f12" cols="39" class="big_area" ><?php if($edit) print $selected_row[f12]?></textarea>
					</td>
						</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">عنوان 
						معرفی سوم :</td>
						<td align="right" class="cell_input" width="80%" valign="top" colspan="3">
						<input type="text" name="f13" id="f13" size="20" class="big_txt" value="<?php if($edit) print $selected_row[f13]?>"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">شرح 
						معرفی سوم :</td>
						<td align="right" class="cell_input" width="80%" valign="top" colspan="3">
						<textarea rows="4" name="f14" id="f14" cols="39" class="big_area" ><?php if($edit) print $selected_row[f14]?></textarea>
					</td>
						</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_lable">پرداخت 
						کننده هزینه پست :</td>
						<td align="right" class="cell_input" width="30%">
						<select id="f7" name="f7" size="1"/>
						<option value="0"  <?php if($edit) if ($selected_row["f7"]=="فروشنده"||$selected_row["f7"]==0) print "selected"?> >فروشنده</option>
						<option value="1" <?php if($edit) if ($selected_row["f7"]=="خریدار"||$selected_row["f7"]==1) print "selected"?>>خریدار</option>
						</select></td>
						<td align="left" width="20%" class="cell_lable">وضعیت 
						نمایش کالا :</td>
						<td class="cell_input" align="right" width="30%">
						<select id="f15" name="f15" size="1"  />
						<option <?php if($edit) if ($selected_row["f15"]=="1") print "selected"?> value="1">نمایش داده شود</option>
						<option <?php if($edit) if ($selected_row["f15"]=="0") print "selected"?> value="0">فعلا نمایش داده نشود</option>
						</select>
					</td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%">
						<span class="fld_err" id="err_f29"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%">
						<span id="city_loader2"></span>
						<span class="fld_err" id="err_f30"></span></td>
					</tr>
				<tr>
						<td align="center" width="100%" class="cell_step" colspan="4">پورسانت این کالا پس از فروش برابر است با : 
						<span id="reg_price"></span> ریال </td>
					</tr>
					<tr>
						<td align="center" width="100%"  colspan="4">
						&nbsp;</td>
						</tr>
					<tr>
						<td align="center" width="100%"  colspan="4">
						<input type="checkbox" name="f_roul" id="f_roul"> قوانین واچار 724 را مطالعه کرده و می پذیرم
						<br>
						<span class="err_roul" id="err_roul"></span>
						</td>
						</tr>
				<tr>
						<td align="center" width="100%" class="cell_sp" colspan="4">
						&nbsp;</td>
					</tr>
				<tr>
						<td align="center" width="100%" class="cell_submit" colspan="4">
						&nbsp;
						<input type="button" value="ثبت اطلاعات اولیه و ادامه" name="btn_save" onclick="insert_item('next_step');"><span lang="en-us">&nbsp;
						</span>
						<input type="button" value="ویرایش و ثبت کالای جدید" name="btn_save_and_end" onclick="insert_item('finish');" style="color: #FFFF00"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</form>			
</div>
</div>
<p>&nbsp;</p>
<?php include"footer_admin_function.php"?>
<script language="javascript">
var res=true;
var reg_price=0;
//=========================================================
 $( document ).ready(function() {
	$(".cell_roul_data").slideToggle('fast');
});
//=========================================================
function insert_item(action)
{
calc_reg_price();
//test_form();	
if (res==false)
	return;
if (!$('#f_roul').is(":checked") ) 
{
	$("#err_roul").hide();
	$("#err_roul").fadeIn(400).html('<font color=#ff0000><b>لطفا ابتدا قوانین واچار 724 را مطالعه نموده و توافق خود را با آن اعلام نمایید</b></font>');
	return;
}
var f1= document.frm1.elements["f1"].value;  
var f2= document.frm1.elements["f2"].value;  
var f3= document.frm1.elements["f3"].value;  
var f4= document.frm1.elements["f4"].value;  
var f5= document.frm1.elements["f5"].value;  
var f6= document.frm1.elements["f6"].value;  
var f7= document.frm1.elements["f7"].value;  
var f8= document.frm1.elements["f8"].value;  
var f10= document.frm1.elements["f10"].value;  
var f11= document.frm1.elements["f11"].value;  
var f12= document.frm1.elements["f12"].value;  
var f13= document.frm1.elements["f13"].value;  
var f14= document.frm1.elements["f14"].value;  
var f15= document.frm1.elements["f15"].value;  
var f16= document.frm1.elements["f16"].value;  
var f19= document.frm1.elements["f19"].value;  
var f20= document.frm1.elements["f20"].value;  
var f21=Math.floor((Math.random() * 500) + 1); 
var f23=0;
var f26= reg_price;  
if (f26==0)
{
	calc_reg_price();
	return
}	
$.ajax({
type: "POST",
url: "ajaxinsertitem.php",
data :({
	f1:f1,f2:f2,f3:f3,f4:f4,f5:f5,f6:f6,f7:f7,f8:f8,f10:f10,		
	f11:f11,f12:f12,f13:f13,f14:f14,f15:f15,f16:f16,f19:f19,f21:f21,f23:f23,f26:f26,f20:f20,edit:edit,item_id:item_ed_id		
       }),
cache: true,
success: function(data){
		$('#msg_send_ok').hide();
		$('#msg_send_err').hide();
		if (data>0)
		{
			//alert("asd");
			$('#msg_send_ok').fadeIn(400).html("ثبت کالا با موفقیت صورت گرفت");
			$("#val_item_id").html('<input type=hidden id=item_id name=item_id value='+data+'>');
			if (action=='next_step')
				document.frm1.submit();
			else if (action=='finish')
				window.location.href='admin_user_reg_item.php';
				
		}
		else if (data==-1)
		{
			$('#msg_send_err').fadeIn(400).html("خطایی در ثبت اطلاعات رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید");
			
		}
}
})

}// of function
//===================================================
//=========================================
function calc_reg_price()
{
test_form();	
if (res==false)
	return ;
var item_price= document.frm1.elements["f4"].value;  
var item_type= document.frm1.elements["f5"].value;  
var sell_type= document.frm1.elements["f6"].value;  
var item_count= document.frm1.elements["f8"].value;  
$("#reg_price").show();
$("#reg_price").fadeIn(400).html('<img src="images/aseman_loading.gif" >');
$.ajax({
type: "POST",
url: "ajaxcalcprice.php",
data :({
                    item_price:item_price,
                    item_type:item_type,
                    item_count:item_count,
                    sell_type:sell_type
       }),
cache: true,
success: function(result){
var r
$("#reg_price").hide();
$("#reg_price").fadeIn(400).html('<font color=#ffff00 size="4"><b>'+result+'</b></font>');
//$("#val_f26").html('<input type=hidden id=f26 name=f26 value='+result+'>');
reg_price=result;
}
})
}
//===============================================
function roul_click()
{
	//alert("asd");
	$(".cell_roul_data").slideToggle('slow');
	//$(".cell_roul").toggle(); 
}
</script>

</body>