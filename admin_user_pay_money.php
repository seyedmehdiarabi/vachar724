<?php include "header_admin_page.php";
$page_id=70;
access_page1($page_id,$_SESSION["s_user_type_id"]);
$form_title="پرداخت مستقيم وجه توسط اعضاي سايت";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script type="text/javascript">
s1 = new Array ("","يک","دو","سه","چهار","پنج","شش","هفت","هشت","نه")
s2 = new Array ("ده","يازده","دوازده","سيزده","چهارده","پانزده","شانزده","هفده","هجده","نوزده")
s3 = new Array ("","","بيست","سي","چهل","پنجاه","شصت","هفتاد","هشتاد","نود")
s4 = new Array ("","صد","دويست","سيصد","چهارصد","پانصد","ششصد","هفتصد","هشتصد","نهصد")
function convert(z)
{
z=parseInt(z)/10

if (z==0) { result="صفر" } else {
result=""
convert2(z) }
toman=z/10

 document.getElementById('strmablagh').innerHTML = result+' تومان ';
}

function convert2(y)
{
if (y>999999999&&y<1000000000000)
	{  bghb=(y%1000000000); temp=y-bghb; bil=temp/1000000000; convert3r(bil); result=result+" ميليارد"; if (bghb!=0) {result=result+" و "; convert2(bghb); } }
else if (y>999999&&y<=999999999)
	{ bghm=(y%1000000); temp=y-bghm; mil=temp/1000000; convert3r(mil); result=result+" ميليون"; if (bghm!=0) {result=result+" و "; convert2(bghm); }	}
else if (y>999&&y<=999999) { bghh=(y%1000); temp=y-bghh; hez=temp/1000; convert3r(hez); result=result+" هزار"; if (bghh!=0) {result=result+" و "; convert2(bghh); } }
else if (y<=999) convert3r(y); else result="صفر" ;
} 

function convert3r(x)
{
bgh=(x%100); temp=x-bgh; sad=temp/100; 
if (bgh==0) { result=result+s4[sad] }
	else	 
	 { 
	  if (x>100) result=result+s4[sad]+" و "; 
	 	if (bgh<10) { result=result+s1[bgh] } 
			else if (bgh<20) { bgh2=(bgh%10); result=result+s2[bgh2] }
				else {
				 	  bgh2=(bgh%10); temp=bgh-bgh2; dah=temp/10; 
					  if (bgh2==0) { result=result+s3[dah] }
					  else { result=result+s3[dah]+" و "+s1[bgh2] }
					 } 
	 }
}

</script>

<body>
<p>&nbsp;</p>
<div align="center">
<div class="main_form">
<form method="POST" name="frm1" id="frm1" action="pay_vajh_admin.php">
	<input  type="hidden" id="step" name="step" value="go"/>
	<table class="tbl_1_border">
		<tr>
			<td align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" class="tbl_2">
				
					<tr>
						<td align="center" width="100%"  colspan="2"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>
					<tr>
						<td width="100%" class="cell_message" colspan="2" height=30px;>
							<center><span id="msg_send_err" name="msg_send_err"></span>
	  						<span id="msg_send_ok" name="msg_send_ok"></span></center>
						</td>
					</tr>
					<tr>
						<td align="left" width="17%" class="cell_lable">مبلغ 
						پرداختي به ريال</td>
						<td align="right" class="cell_input" width="83%">
						<input type="text" name="tprice" id="tprice" onkeyup="convert(this.value)" onkeydown="return (event.ctrlKey || event.altKey|| (47<event.keyCode && event.keyCode<58 && event.shiftKey==false)|| (95<event.keyCode && event.keyCode<106)|| (event.keyCode==8) || (event.keyCode==9)|| (event.keyCode>34 && event.keyCode<40)|| (event.keyCode==46))"></td>
					</tr>
					<tr>
						<td align="left" width="17%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="83%"><span class="fld_err" id="err_f23"></span></td>
					</tr>
					<tr>
						<td align="left" width="17%" class="cell_lable">شرح 
						پرداخت :</td>
						<td align="right" class="cell_input" width="83%">
						<textarea rows="4" name="tdes" id="tdes" cols="39" class="long_area"></textarea></td>
					</tr>
					<tr>
						<td align="center" width="50%"  colspan="2">&nbsp;
						</td>
					</tr>
					<tr>
						<td align="center" width="50%"  colspan="2">
						لطفا به صورت دقيق شرح دهيد اين مبلغ بابت چه چيزي پرداخت 
						شده است. چنانچه مربوط به فاکتور خاصي مي باشد ، شماره و 
						مشخصات فاکتور را درج نماييد</td>
					</tr>
					<tr>
						<td align="center" width="80%" colspan="2"><div align=center id="strmablagh" name="strmablagh"></td>
					</tr>
					<tr>
						<td align="left" width="100%" class="cell_sp" colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" width="100%" class="cell_submit" colspan="2">
						<input name="btn_save" type="image" onclick="pay();" value="go" src=images/payment/melat.png></td>
				  </tr>
				</table>
			</td>
		</tr>
	</table>
	</form>			
</div>
</div>
<script language="javascript">
function pay()
{
var ta=(document.frm1.elements["tdes"].value).trim();
var tprice=(document.frm1.elements["tprice"].value).trim();
$('#msg_send_err').hide();

if (isNaN(tprice))	
	{
	$('#msg_send_err').fadeIn(400).html("لطفا براي مبلغ فقط عدد وارد کنيد");
	document.frm1['tprice'].focus();	
	}

else if (tprice=="")	
	{
	$('#msg_send_err').fadeIn(400).html("لطفا مبلغ را وارد کنيد");
	document.frm1['tprice'].focus();	
	}

else
{
	document.frm1.submit();
}	
}
//================================================================================

</script>
</body>