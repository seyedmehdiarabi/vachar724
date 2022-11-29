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
				<div class="chose_area" id="address_info">
  					<div id="msg_title" name="msg_title">سایر راههای ارتباطی با ما</div>
<?php 
$re=mysql_query("select f1,f2,f3,f4,f5,f6,f7 from tbl_shop_info");
$row=mysql_fetch_array($re);
?>	    				
	    					<p><?php print cleantxt($row["f1"]);?></p>
							<p><?php print cleantxt($row["f5"]);?></p>
							<p> نام مدیر : <?php print cleantxt($row["f3"]);?></p>
							<p><?php print cleantxt($row["f4"]);?></p>
							<p><?php print cleantxt($row["f6"]);?></p>
							<p>SMS : <?php print cleantxt($row["f7"]);?></p>
  					<div id="msg_title" name="msg_title">آدرس ما بروی نقشه</div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3254.601926181139!2d59.22291819191748!3d35.34070541868148!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sir!4v1423582920026" width="100%" name="f1" border="0" frameborder="0" scrolling="no"></iframe>
	    			</div>
				</div>		
				<div class="col-sm-8">
				<div class="chose_area">
  					<div id="msg_title" name="msg_title">کاربران و بازدیدکنندگان گرامی می توانند از طریق این فرم پیام خود را به ما برسانند</div>
  						<span id="msg_singup_err" name="msg_singup_err"></span>
  						<span id="msg_ok" name="msg_ok"></span>
  						<form method=post name="new_pic" id="new_pic" enctype="multipart/form-data">
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
								<textarea id="tp" name="tp" placeholder="متن پیام شما"/></textarea>								
							</li>
<!--							
							<li>
								<input type="file" name="file_up" id="file_up" placeholder="انتخاب فایل پیوست"/>
							</li>
-->							
							<li>
								<div class="my_sec"><img src="sec_code.php"></div>	
							</li>
							<li>
								<input type="text" id="t_sec_code" name="t_sec_code" placeholder="کد امنیتی بالا را وارد کنید"/>								
							</li>
							
						</ul>
							<a class="btn btn-default update" onclick="send_letter();">ارسال پیام</a>
						</form>
						</div>
					</div>
					
			    	</div>  		
				</div>
				</div>
	</section>
				
<?php include "user_footer.php"?>		
<script language="javascript">
function send_letter()
{

var tn=(document.new_pic.elements["tn"].value).trim();
var te=(document.new_pic.elements["te"].value).trim();
var tm=(document.new_pic.elements["tm"].value).trim();
var tp=(document.new_pic.elements["tp"].value).trim();
//var tf=document.new_pic.elements["file_up"].value;

var ts=(document.new_pic.elements["t_sec_code"].value).trim();
$('#msg_singup_err').hide();
$('#main_err').hide();
$('#main_msg').hide();
if(te!=""&&!(isValidEmailAddress(te)))
	{
		$('#msg_singup_err').fadeIn(400).html("ایمیل وارد شده صحیح نمی باشد");
		document.new_pic['te'].focus();	
		return;
	}
	
if (tm!=""&&(isNaN(tm)))	
	{
		$('#msg_singup_err').fadeIn(400).html("لطفا برای شماره همراه فقط عدد وارد کنید");
		document.new_pic['tm'].focus();	
		return;
	}
if (tm!=""&&tm.length!=11)
	{
	$('#msg_singup_err').fadeIn(400).html("طول شماره همراه 11 رقم می باشد");
	document.new_pic['tm'].focus();	
	return;
	}
if (tp=="")		
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا متن پیام خود وارد کنید");
	document.new_pic['tp'].focus();	
	return;
	}

if (ts=="")		
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا کد امنیتی را وارد کنید");
	document.new_pic['t_sec_code'].focus();	
	return;
	}
else
{
$.ajax({
type: "POST",
url: "ajaxnamebebar.php",
data :({
tn:tn,
te:te,
tm:tm,
ts:ts,
tp:tp
//tf:tf
       }),
cache: true,
success: function(data){
//alert(data);
if (data==1)
{
	$('#main_msg').fadeIn(400).html("پیام شما با موفقیت ارسال شد و در اولین فرصت بررسی خواهد گردید");
	//var m=tm+'*'+te;	
	//khebarbete(m,'send_letter');	
}
else if (data==-1)
{
	$('#main_err').fadeIn(400).html("خطایی در ثبت اطلاعات رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید");
}
else if (data==-2)
{
	$('#msg_singup_err').fadeIn(400).html("کد امنیتی صحیح نمی باشد ");
	document.new_pic['t_sec_code'].focus();	

	
}

}
})
}
}	
//======================================
</script>
</body>
</html>