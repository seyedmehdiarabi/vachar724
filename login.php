<?php include "user_header.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
	<section id="cart_items">
	</section>
<section id="do_action">
		<div class="container">
			<div class="heading">
				<p><!--later --></p>
<?php
if(isset($_GET["exit"])||isset($_GET["invalid_info"])||isset($_GET["invalid_user"]))	
	{
	$_SESSION["s_user_id"]=null;
	session_unregister("s_user_id");

	//$_SESSION["s_sell_id"]=null;
	//session_unregister("s_sell_id");

	$_SESSION["s_user_type_id"] =null;
	session_unregister("s_user_type_id");
	
	$_SESSION["s_customer_type_id"]=$row["f1"];
	session_unregister("s_customer_type_id");

	$_SESSION["s_full_user_name"] =null;
	session_unregister("s_full_user_name");
	
	$_SESSION["s_user_off_persent"];
	session_unregister("s_user_off_persent");

	$_SESSION["s_user_semat"];
	session_unregister("s_user_semat");
	
	

	}
	if(isset($_GET["invalid_user"]))
		$msg_err="شما مجوز دسترسی به این صفحه را ندارید";
	?>				
			</div>
	<div align=center>
				<span id="main_msg" name="main_msg"></span>
				<span id="main_err" name="main_err"><?php if($msg_err!="") print $msg_err?></span>
	</div>
	<p>&nbsp;</p>
			
			<div class="row">
    		<div class="col-md-6">
				<div class="chose_area">
  					<div id="msg_title" name="msg_title">برای بازیابی کلمه عبور 
						لطفا ایمیل خود را وارد کنید</div>
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
						ارسال رمز عبور</a>

						
						</form>
	    				</address>
	    			</div>
				</div>		
			<form id=old_pic name=old_pic>
				<div class="col-md-6">
					<div class="chose_area">
  					<div id="msg_title" name="msg_title">اگر قبلا عضو سایت شده اید ، لطفا نام کاربری و رمز عبور خود راوارد کنید</div>
  					<span id="login_msg_err" name="login_msg_err"></span>
						<ul class="user_option">
							<li>
								<input type="text" id="t_pic_name" name="t_pic_name" placeholder="نام کاربری "/>
								<!-- <label>Use Coupon Code</label>-->
							</li>
							<li>
								<input type="password" id="t_pic_code" name="t_pic_code" placeholder="رمز عبور"/>								
								<!--<label>Use Gift Voucher</label>-->
							</li>
						</ul>
						<a class="btn btn-default update" onclick="gotobanel();">ورود به پنل مدیریت</a>
					</div>
					</form>
				</div>
				
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<?php //include "user_footer.php"?>		
<script language="javascript">
function besendmail()
{
var te=(document.feramoosh.elements["te2"].value).trim();
//alert("asd");
$('#msg_singup_err').hide();
$('#main_err').hide();
$('#main_msg').hide();
$('#msg_send_err').hide();
if (te==""){	
		$('#msg_send_err').fadeIn(400).html("لطفا پست الکترونیک را درج کنید");
		document.feramoosh['te'].focus();	
	}
else if(!isValidEmailAddress(te) ) 
	{
	$('#msg_send_err').fadeIn(400).html("ایمیل وارد شده صحیح نمی باشد");
	document.feramoosh['te'].focus();	
	}
else
{
$.ajax({
type: "POST",
url: "ajaxrecoverpassword.php",
data :({
te:te
       }),
cache: true,
success: function(data){
//alert(data);
if (data==1)
{
	$('#msg_send_ok').fadeIn(400).html("رمز عبور به ایمیل شما ارسال گردید");
}
else if (data==-2)
{
	$('#msg_send_err').fadeIn(400).html("این ایمیل وجود ندارد.لطفا دوباره بررسی نمایید");
}
else if (data==-1)
{
	$('#msg_send_err').fadeIn(400).html("خطایی درارسال ایمیل رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید");
}
}
})
}
}	
//---------------------------------------------------
 function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
        return pattern.test(emailAddress);
    };
//========================================================

//===============================================================================
function gotobanel()
{
$('#login_msg_err').hide();
var p_name=document.old_pic.elements["t_pic_name"].value;
var p_code=document.old_pic.elements["t_pic_code"].value;
if (p_name==""){	
		$('#login_msg_err').fadeIn(400).html("لطفا نام کاربری را وارد کنید");
		document.old_pic['t_pic_name'].focus();	
	}
else if (p_code=="")	
	{
	$('#login_msg_err').fadeIn(400).html("لطفا رمز عبور را وارد کنید");
	document.old_pic['t_pic_code'].focus();	
	}
else
{
$.ajax({
type: "POST",
url: "ajaxgotopanle.php",
data :({
tu:p_name,
tp:p_code
       }),
cache: true,
success: function(data){
//$('#login_msg_err').fadeIn(400).html(data);
if (data==-1)
{
	$('#login_msg_err').fadeIn(400).html("نام کاربری و یا رمز عبور صحیح نمی باشد");
	document.old_pic['t_pic_name'].focus();	
}
else if (data==1)
	window.location.href = 'index_admin.php';
}
})
}
}	
//---------------------------------------------------
</script>
</body>
</html>
