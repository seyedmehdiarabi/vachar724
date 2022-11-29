<?php include "header_admin_page.php";
$form_title="مرحله دوم : ثبت مشخصات فنی کالا (اختیاری)";
$page_id=59;
access_page1($page_id,$_SESSION["s_user_type_id"]);
$item_id=cleantxt($_POST["item_id"]);
$edit=$_POST["edit_status"];

if ($item_id==""||$item_id==0)
	header("Location: index_admin.php");
$re=mysql_query("select f3 from tbl_item_info where auto_id=$item_id");
if (mysql_num_rows($re)<=0)
	header("Location: index_admin.php");
list($item_name)=mysql_fetch_array($re) ;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<body>
<p>&nbsp;</p> 
<div align="center">
<div class="main_form">
<form method="POST" action="admin_user_reg_item_step3.php" name="frm1" id="frm1">
	<input type=hidden value="<?php print $item_id?>" id="item_id" name="item_id">
	<table class="tbl_1_border">
		<tr>
			<td align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" class="tbl_2">
				
					<tr>
						<td align="center" width="100%" colspan="2"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>
					<tr>
						<td align="left" width="100%" colspan="2">
					<div class="cell_roul" align=center onclick="roul_click();">
						برای
						مطالعه راهنمای استفاده از این بخش اینجا کلیک کنید</div>
					<div class="cell_roul_data" align=center>
					<br>در ستون نام مشخصه کلماتی مانند رنگ، اندازه ، وزن ، تعداد سیم کارت  ، ابعاد و ... را ذکر نمایید و در ستون مقدار مشخصه از کلمات یا جملاتی نظیر : آبی ، 14 اینچ ، 100 گرم ، دارای گارانتی یکساله و .. استفاده کنید
				<br>با فشردن کلید تب از روی صفحه کلید پس از ثبت هر مشخصه، اطلاعات وارده ثبت و به فیلد بعدی منتقل می شود	
				<br>دقت در تکمیل این بخش ، تاثیر بسزایی در میزان فروش کالای شما خواهد داشت
				</div>
				</td>
					</tr>
					<tr>
					</tr>
					<tr>
						<td width="100%" class="cell_message" height=35px; colspan="2">
						<?php print $item_name?></td>
					</tr>

					<tr>
						<td width="100%" class="cell_message" height=30px; colspan="2">
							<center><span id="msg_send_err" name="msg_send_err"></span>
	  						<span id="msg_send_ok" name="msg_send_ok"></span></center>
						</td>
					</tr>

					<tr>
						<td width="30%" align="center" valign="top" rowspan="5">
							<img border="0" src="images/sample_tec.png" width="250"></td>
						<td width="70%" align="center" valign="top">
							<table border="0" width="100%" dir="rtl" id="tbl_insert_val" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td align="center" width="48%" valign="top">
									نام مشخصه</td>
									<td width="2"></td>
									<td align="center" width="48%" valign="top">
									مقدار مشخصه</td>
								</tr>
								<tr id="row1">
									<td align="center" width="48%" valign="top">
									<textarea  name="p1" class="item_tec_pv"></textarea></td>
									<td width="2"></td>
									<td align="center" width="48%" valign="top">
									<textarea class="item_tec_pv" name="v1"  onblur="add_tec_info('1');"></textarea></td>
								</tr>
								<tr id="row2">
									<td align="center" width="48%" valign="top">
									<textarea class="item_tec_pv" name="p2" ></textarea></td>
									<td width="2"></td>
									<td align="center" width="48%" valign="top">
									<textarea class="item_tec_pv" name="v2"  onblur="add_tec_info('2');"></textarea></td>
								</tr>
								<tr id="row3">
									<td align="center" width="48%" valign="top">
									<textarea class="item_tec_pv" name="p3" ></textarea></td>
									<td width="2"></td>
									<td align="center" width="48%" valign="top">
									<textarea class="item_tec_pv" name="v3"  onblur="add_tec_info('3');"></textarea></td>
								</tr>
								<tr id="row4">
									<td align="center" width="48%" valign="top">
									<textarea class="item_tec_pv" name="p4" ></textarea></td>
									<td width="2"></td>
									<td align="center" width="48%" valign="top">
									<textarea class="item_tec_pv" name="v4"  onblur="add_tec_info('4');"></textarea></td>
								</tr>
								<tr id="row5">
									<td align="center" width="48%" valign="top">
									<textarea class="item_tec_pv" name="p5" ></textarea></td>
									<td width="2"></td>
									<td align="center" width="48%" valign="top">
									<textarea class="item_tec_pv" name="v5"  onblur="add_tec_info('5');"></textarea></td>
								</tr>
								</tbody>
							</table>
						</td>
					</tr>
					
					<tr>
						<td width="70%" align="center">
							&nbsp;</td>
					</tr>
					
					<tr>
						<td width="70%" align="right">
							<img border="0" src="images/add_icon.jpg" width="25" title=" افزودن ردیف جدبد" onclick="add_row();" onmousemove="this.style.cursor='pointer'"> </td>
					</tr>
					
					<tr>
						<td width="70%" align="right">
							&nbsp;</td>
					</tr>
					
					<tr>
						<td width="70%" align="center">
							<table border="0" width="100%" dir="rtl" id="tbl_show_val" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td align="center" width="101%" colspan="4">
									<font color="#CC0066">
									<b>مقادیر ثبت شده توسط شما</b></font></td>
								</tr>
								<?php if($edit) 
								{
									$r=mysql_query("select auto_id,f2,f3 from tbl_item_info_tec where f1=$item_id");
									while($pr=mysql_fetch_array($r))
									{
								?>
									<tr id=row_val_<?php print $pr["auto_id"]?>><td align="center" width="45%"><?php print $pr["f2"]?></td>
									<td width="45%" align="center"><?php print $pr["f3"]?></td>
									<td align=center width=9%>
									<img border=0 class="img_del" src=images/aseman_notik.gif width=20 onclick="del_tec_info('<?php print $pr[auto_id]?>');">
									</td>
									</tr>
								<?php } }?>
								
								</tbody>
							</table>
						</td>
					</tr>
					
					<tr>
						<td width="30%" align="center">
							&nbsp;</td>
						<td width="70%" align="center">
							&nbsp;</td>
					</tr>
					
					<tr>
						<td width="30%" align="center" colspan="2">
							&nbsp;</td>
					</tr>
					
				<tr>
						<td align="left" width="100%" class="cell_submit" colspan="2">
						<input type="submit" value="رفتن به مرحله سوم" name="btn_save"></td>
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
var row_id=5;
//=========================================================
 $( document ).ready(function() {
	$(".cell_roul_data").slideToggle('fast');
});
//=========================================================
function del_tec_info(auto_id)
{
if(auto_id=="" || auto_id==0)
	return;
$.ajax({
type: "POST",
url: "ajaxdelitemtecinfo.php",
data :({
	auto_id:auto_id
       }),
cache: true,
success: function(data){
		$('#msg_send_ok').hide();
		$('#msg_send_err').hide();
		if (data==1)
		{
			$('#row_val_'+auto_id).fadeIn(400).remove();
		}
		else if (data==-1)
		{
			$('#msg_send_err').fadeIn(400).html("خطایی در ثبت اطلاعات رخ داده است لطفا د	وباره تلاش نمایید");
		}
}
})
}
//=========================================================
function add_row()
{
	row_id=row_id+1;
	var addhtm='<tr id=row'+row_id+'><td align=center width=48% valign=top>';
	addhtm=addhtm+'<textarea class="item_tec_pv" name=p'+row_id+'></textarea></td><td width=2></td><td align=center width=48% valign=top>';
	addhtm=addhtm+'<textarea class="item_tec_pv" name=v'+row_id+' onblur="add_tec_info('+row_id+');"></textarea></td></tr>';
	$('#tbl_insert_val > tbody:last').fadeIn(400).append(addhtm); 
	
}
//===============================================================
function add_tec_info(pv_id)
{
var p= document.frm1.elements['p'+pv_id].value;  
var v= document.frm1.elements['v'+pv_id].value;  
var item_id= document.frm1.elements['item_id'].value;  
if(p=="" | v==""||item_id==""||item_id==0)
	return;
$.ajax({
type: "POST",
url: "ajaxadditemtecinfo.php",
data :({
	p:p,v:v,item_id:item_id
       }),
cache: true,
success: function(data){
		$('#msg_send_ok').hide();
		$('#msg_send_err').hide();
		if (data>0)
		{
	var addhtm='<tr id=row_val_'+data+'><td align="center" width="45%">'+p;
	addhtm=addhtm+'</td><td width="45%" align="center">'+v+'</td>';
		addhtm=addhtm+'<td align=center width=9%><img border=0 class="img_del" src=images/aseman_notik.gif width=20 onclick="del_tec_info('+data+');"></td></tr>';
	$('#tbl_show_val > tbody:last').fadeIn(400).append(addhtm); 
	$('#row'+pv_id).remove();

			
		}
		else if (data==-1)
		{
			$('#msg_send_err').fadeIn(400).html("خطایی در ثبت اطلاعات رخ داده است لطفا د	وباره تلاش نمایید");
			
		}
}
})

}// of function
//===================================================
//=========================================
//===============================================
function roul_click()
{
	//alert("asd");
	$(".cell_roul_data").slideToggle('slow');
	//$(".cell_roul").toggle(); 
}
</script>

</body>