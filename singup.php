<?php include "user_header.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
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
			
	    		<div class="col-sm-4">
				<div class="chose_area">
				<div id="msg_title" name="msg_title">برای بازیابی کلمه عبور لطفا ایمیل خود را وارد کنید</div>
  						<span id="msg_send_err" name="msg_send_err"></span>
  						<span id="msg_send_ok" name="msg_send_ok"></span>
	    				<address>
  						<form method=post name="feramoosh" id="feramoosh">
						<ul class="user_option" >
							<li>
								<input type="text" id="te2" name="te2" placeholder="پست الکترونیک خود را وارد کنید"/>
							</li>
						</ul>
						<a class="btn btn-default update" onclick="besendmail();"> 
						ارسال کلمه عبور</a>

						
						</form>
	    				</address>
	    			</div>
				</div>		
			
				<div class="col-sm-8">
				<div class="chose_area">
  					<div id="msg_title" name="msg_title">برای عضویت در آرکا لطفا گزینه های زیر را تکمیل نمایید</div>
  						<span id="msg_singup_err" name="msg_singup_err"></span>
  						<span id="msg_ok" name="msg_ok"></span>
  						<form method=post name="new_pic" id="new_pic">
						<ul class="user_option" >
							<li>
	<input type="text" id="tn" name="tn" placeholder="نام"/>
							</li>
							<li>
	<input type="text" id="tf" name="tf" placeholder="نام خانوادکی"/>
							</li>
							<li>
	<input type="text" id="te" name="te"  placeholder="پست الکترونیک - نام کابری شما خواهد بود"/>								
							</li>
							<li>
	<input type="text" id="tm" name="tm" maxlength=11 placeholder="شماره همراه - کلمه عبور شما خواهد بود"/>								
							</li>
							<li>
<select id="to" name="to"  onchange="loadcity(this.options[this.selectedIndex].value);"/>
<option value='-1'>استان را انتخاب نمایید</option>
<?php 
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("select ostan_id,ostan_name from tbl_ostan");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option value=<?php print $row2[ostan_id];?>><?php print $row2["ostan_name"] ?></option>
<?php }?>
</select>
							</li>
							<li>
					<select id="tc" name="tc"  /></select><span id="city_loader"></span>
							</li>
							<li>
					<input  type="text" id="ta" name="ta" placeholder="آدرس دقیق پستی"/>								
							</li>
</ul><a class="btn btn-default update" onclick="membership();">عضویت در سایت</a>
						</form>
						</div>
					</div>
					
			    	</div>  		
				</div>
				</div>
	</section>
				
<?php include "user_footer.php"?>		
<script language="javascript">
function membership()
{
var tn=(document.new_pic.elements["tn"].value).trim();
var tf=(document.new_pic.elements["tf"].value).trim();
var te=(document.new_pic.elements["te"].value).trim();
var tm=(document.new_pic.elements["tm"].value).trim();
var tc=(document.new_pic.elements["tc"].value).trim();
var to=(document.new_pic.elements["to"].value).trim();
var ta=(document.new_pic.elements["ta"].value).trim();
$('#msg_singup_err').hide();
$('#main_err').hide();
$('#main_msg').hide();

if (tf==""){	
		$('#msg_singup_err').fadeIn(400).html("لطفا نام خانوادگی را درج کنید");
		document.new_pic['tf'].focus();	
	}
else if (te==""){	
		$('#msg_singup_err').fadeIn(400).html("لطفا پست الکترونیک را درج کنید");
		document.new_pic['te'].focus();	
	}
else if(!isValidEmailAddress(te) ) 
	{
	$('#msg_singup_err').fadeIn(400).html("ایمیل وارد شده صحیح نمی باشد");
	document.new_pic['te'].focus();	
	}
else if (tm=="")	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا شماره همراه خود را درج نمایید");
	document.new_pic['tm'].focus();	
	}
else if (isNaN(tm))	
	{
	$('#msg_singup_err').fadeIn(400).html("شماره همراه وارد شده صحیح نمی باشد");
	document.new_pic['tm'].focus();	
	}
else if (tm.length!=11)	
	{
	$('#msg_singup_err').fadeIn(400).html("طول شماره همراه 11 رقم می باشد");
	document.new_pic['tm'].focus();	
	}
else if (to==""||to==-1)	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا نام استان را درج کنید");
		document.new_pic['to'].focus();	
	}
else if (tc==""||tc==-1)		
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا نام شهر را درج کنید");
	document.new_pic['tc'].focus();	
	}
else if (ta=="")	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا آدرس خود را درج کنید");
	document.new_pic['ta'].focus();	
	}
else
{
$.ajax({
type: "POST",
url: "ajaxmembership.php",
data :({
tn:tn,
tf:tf,
te:te,
tm:tm,
tc:tc,
to:to,
ta:ta
       }),
cache: true,
success: function(data){
//alert(data);
if (data==1)
{
	window.location.href = 'index_admin.php';
	var m=tm+'*'+te;	
	khebarbete(m,'membership');	
}
else if (data==-2)
{
	$('#main_err').fadeIn(400).html("این ایمیل قبلا ثبت شده است چنانچه مربوط به شماست بروی لینک بازیابی کلمه عبور کلیک کنید");
}
else if (data==-1)
{
	$('#main_err').fadeIn(400).html("خطایی در ثبت اطلاعات رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید");
}

}
})
}
}	
//================================================================================
function isuser(userid){
  var dataString = 'userid='+ userid;
  $.ajax({
     type: "POST",
     url: "ajaxcheckisuser.php",
     data: dataString,
     cache: false,
     success: function(result){
     if (result==0)
     {
     	//alert("false");
     	return false;

     }	
     else if (result>0)
     {
	     //alert("true")
	     return true;
	 }   
     }
   });
}
//---------------------------------------------------
</script>
</body>
</html>