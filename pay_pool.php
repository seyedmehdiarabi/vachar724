<?php include "user_header.php"?>
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
	<section id="do_action">
	<p></p>
	<p>&nbsp;</p>
	<div align=center>
				<span id="main_msg" name="main_msg"></span>
				<span id="main_err" name="main_err"></span>
	</div>
	<p>&nbsp;</p>
	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="chose_area">
  					<div id="pay_title" name="pay_title" >پرداخت وجه مستقیم در 
						آرکا<br>چنانچه عضو آرکا هستید 
						از گزینه پرداخت وجه که در پنل کاربری شما وجود دارد 
						استفاده کنید</div>
  						<span id="msg_singup_err" name="msg_singup_err"></span>
  						<span id="msg_ok" name="msg_ok"></span>
  						<form method=post name="new_pic" id="new_pic" action="pay_vajh_direct.php">
						<ul class="user_option" >
							<li>
								<input type="text" id="tn" name="tn" placeholder="نام و نام خانوادگی"/>
							</li>
							<li>
								<input type="text" id="te" name="te"  placeholder="پست الکترونیک"/>								
							</li>
							<li>
								<input type="text" id="tm" name="tm" maxlength=11 placeholder="شماره همراه"/>								
							</li>
							<li>
								<input type="text" id="tprice" name="tprice"  placeholder="مبلغ به ریال" onkeyup="convert(this.value)" onkeydown="return (event.ctrlKey || event.altKey|| (47<event.keyCode && event.keyCode<58 && event.shiftKey==false)|| (95<event.keyCode && event.keyCode<106)|| (event.keyCode==8) || (event.keyCode==9)|| (event.keyCode>34 && event.keyCode<40)|| (event.keyCode==46))"/>								
							</li>
							<li>
							<input  type="text" id="tdes" name="tdes" placeholder="ذکر کنید این پول بابت چه چیزی پرداخت می شود"/>
							</li>
						</ul>
						<input  type="hidden" id="step" name="step" value="go"/>
						<div align="center">
							<table border="0" width="10%" cellpadding="2">
								<tr>
								<br>
<!--						<td align="center" width="33%">
						<img border="0" src="images/payment/parsian.png" width="100" onclick="pay('persian');" style="cursor:pointer">
						</td>
-->							
						<td align="center" width="33%">
						<img border="0" src="images/payment/melat.png" width="100" onclick="pay('mellat');" style="cursor:pointer">
						</td>
					
<!--                        <td align="center" width="33%">
						<img border="0" src="images/payment/asan.png" width="100" onclick="pay('asan');" style="cursor:pointer">
						</td>
						
                            <td align="center" width="33%">
    						<img border="0" src="images/payment/melli.png" width="100" onclick="pay('melli');" style="cursor:pointer">
                            </td>									
							
                            <td align="center" width="33%">
    						<img border="0" src="images/payment/saderat.png" width="100" onclick="pay('saderat');" style="cursor:pointer">
                            </td>-->
								</br>
								</tr>
							</table>
						</div>
						</form>
						<div align=center id="strmablagh" style="direction: rtl"></div>
						</div>
					</div>
					
			    	</div>  		
				</div>
				</div>
	</section>
				
<?php include "user_footer.php"?>		
<script language="javascript">
function pay(daragah)
{
var tn=(document.new_pic.elements["tn"].value).trim();
var te=(document.new_pic.elements["te"].value).trim();
var tm=(document.new_pic.elements["tm"].value).trim();
var ta=(document.new_pic.elements["tdes"].value).trim();
var tprice=(document.new_pic.elements["tprice"].value).trim();
$('#msg_singup_err').hide();
$('#main_err').hide();
$('#main_msg').hide();

if (tn==""){	
		$('#msg_singup_err').fadeIn(400).html("لطفا نام خانوادگی را درج کنید");
		document.new_pic['tn'].focus();	
	}
else if(te!==""&&!isValidEmailAddress(te) ) 
	{
	$('#msg_singup_err').fadeIn(400).html("ایمیل وارد شده صحیح نمی باشد");
	document.new_pic['te'].focus();	
	}
else if (isNaN(tm))	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا برای شماره همراه فقط عدد وارد کنید");
	document.new_pic['tm'].focus();	
	}
else if (tm!=""&&tm.length!=11)	
	{
	$('#msg_singup_err').fadeIn(400).html("طول شماره همراه 11 رقم می باشد");
	document.new_pic['tm'].focus();	
	}
else if (isNaN(tprice))	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا برای مبلغ فقط عدد وارد کنید");
	document.new_pic['tprice'].focus();	
	}

else if (tprice=="")	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا مبلغ را وارد کنید");
	document.new_pic['tprice'].focus();	
	}

else
{
	if(daragah=='mellat')
		$('#new_pic').get(0).setAttribute('action', 'pay_vajh_direct_mellat.php'); 
	else if(daragah=='persian')
		$('#new_pic').get(0).setAttribute('action', 'pay_vajh_direct_parsian.php'); 
/*	else if(daragah=='asan')
		$('#new_pic').get(0).setAttribute('action', 'pay_vajh_direct_asan.php'); 
	else if(daragah=='saderat')
		$('#new_pic').get(0).setAttribute('action', 'pay_vajh_direct_saderat.php'); 
	else if(daragah=='melli')
		$('#new_pic').get(0).setAttribute('action', 'pay_vajh_direct_melli.php');*/
	else
		$('#new_pic').get(0).setAttribute('action', 'pay_vajh_direct_mellat.php'); 
	
	document.new_pic.submit();
}	
}
//================================================================================

</script>
</body>
</html>