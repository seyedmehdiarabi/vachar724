<?php include "user_header.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
	<section id="cart_items">
		<div class="container">
			<p></p><p>&nbsp;</p>
			<div class="table-responsive cart_info">
			<form name=frm_basket id=frm_basket>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<?php if ($_SESSION["s_sell_id"]=="") {?>				
							<td id="sabad_title" colspan="10">هیچ کالایی در سبد شما موجود نیست</td>
							</thead>
							</table>
							<?php }// of if
							else {
  $r_s=mysql_query("SELECT
 `tbl_basket`.`auto_id` as basket_id,`tbl_basket`.`f2` as item_id,`tbl_basket`.`f3` as item_price,`tbl_basket`.`f4` as item_price2,`tbl_basket`.`f5` as item_count,
 `tbl_basket`.`f8` as item_vazn,`tbl_basket`.`f9` as item_post_price,`tbl_item_info`.`f3` as item_name,`tbl_item_info`.`f7` as item_poster,`tbl_basket`.`f10` as post_method
	FROM
  `tbl_basket` LEFT JOIN
  `tbl_item_info` ON `tbl_basket`.`f2` = `tbl_item_info`.`auto_id` where `tbl_basket`.`f1`='$_SESSION[s_sell_id]' order by `tbl_basket`.`auto_id` ");
						 if (mysql_num_rows($r_s)==0) {?>				
							<td id="sabad_title" colspan="10">هیچ کالایی در سبد شما موجود نیست</td>
							</thead>
							</table>
							<?php 
							}
							else
							{
							?>
							<td id="sabad_title" colspan="10">کالاهای موجود در سبد خرید شما</td>							
						</tr>
						<?php if($_SESSION["s_user_id"]=="") {?>
						<tr>
						<td id="sabad_title" colspan="10">نکته : فاکتور زیر بدون محاسبه هزینه ارسال کالا می باشد. برای مشاهده هزینه ارسال لطفا اگر عضو هستید با نام کاربری و رمز عبور خود وارد شوید. در غیر اینصورت فرم عضویت زیر را تکمیل نمایید</td>
						</tr>
						<?php }?>
						
						<tr class="cart_menu">
							<td class="up_des"></td>
							<td class="delete"></td>
							<td class="description">توضیحات خریدار</td>
							<td class="price">هزینه ارسال</td>
							<td class="price">روش ارسال</td>
							<td class="price">وزن واحد</td>							
							<td class="price">تعداد</td>
							<td class="price">قیمت واحد</td>
							<td class="description">نام کالا</td>							
							<td class="image">تصویر کالا</td>
						</tr>
					</thead>
					<tbody>
					<?php 
	$sum_price=0;
	$sum_post_price=0;
  	while($row_adver=mysql_fetch_array($r_s))
	{
	$post_price=0;
	if ($_SESSION["s_user_id"]!=""&&$row_adver["post_method"]==3&&$row_adver["item_poster"]==1)
	{
		//if($row_adver["item_poster"]==1&&$_POST[$post_m_name]==3)	
		//{
			$post_price=calc_post_price_zood($row_adver["item_id"],$row_adver["item_count"],0);
		//}	
		
	}
			if($post_price>=0)
				mysql_query("update tbl_basket set f9=$post_price where auto_id=$row_adver[basket_id]"); 

	$sum_price+= $row_adver["item_price"]*$row_adver["item_count"];
	$sum_post_price+=$post_price;

  ?>
						<tr id="sb_<?php print $row_adver[basket_id]?>">
							
							<td class="up_des" id="sabad_msg_<?php print $row_adver[basket_id]?>"></td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" onclick="nema_yom_103x('<?php print $row_adver[basket_id]?>');"><i class="fa fa-times"></i></a>
							</td>
							<td class="user_description">
								<h4><textarea width="120" row="10" onchange="tozih_berozshe(<?php print $row_adver[basket_id]?>);" name=des_"<?php print $row_adver[basket_id]?>" id="des_<?php print $row_adver[basket_id]?>"><?php print $row_adver["user_des"]?></textarea></h4>
							</td>
							<td class="cart_price" id="post_price_<?php print $row_adver[basket_id]?>" name="post_price_<?php print $row_adver[basket_id]?>">
								<p><?php print pool($post_price)." ریال  ";?> </p>
							</td>
							<td class="cart_price" >
							<p>
								<?php if ($row_adver["post_method"]==0) print "هزینه ارسال با فروشنده است";
										else {
								?>
									<select id="post_method_<?php print $row_adver[basket_id]?>" name="post_method_<?php print $row_adver[basket_id]?>" size=1 onchange="show_post_price('<?php print $row_adver[basket_id]?>','<?php print $row_adver[item_id]?>','<?php print $row_adver[item_count];?>');">
										<option value=1 <?php if($row_adver[post_method]==1) print "selected" ?>>تیپاکس-درب منزل پرداخت می کنم</option>
										<option value=2 <?php if($row_adver[post_method]==2) print "selected" ?>>باربری-درب منزل پرداخت می کنم</option>
										<option value=3 <?php if($row_adver[post_method]==3) print "selected" ?>>پست پیشتاز -پرداخت هم اکنون</option>
									</select>
								<?php }// of else ?>	
							</p>

							</td>

							<td class="cart_price" >
								<p><?php print $row_adver["item_vazn"];?> گرم </p>
							</td>

							<td class="cart_price" >
								<p><?php print $row_adver["item_count"];?> عدد</p>
							</td>
							
							<td class="cart_price" >
								<p><?php print pool($row_adver["item_price"]);?> ریال </p>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php print $row_adver["item_name"];?></a></h4>
								<p><!-- نوع کالا بعدها نوشته شود--></p>
							</td>
							<td class="cart_product">
								<a onclick="show_item_detail(<?php print $row_adver[item_id]?>);">	<img src="images/items_pic/<?php print $row_adver["item_id"]?>_small_1.jpg"  alt="<?php print $row["f3"]?> در آرکا" /></a>
							</td>
						</tr>
						<?php }// of while?>
						<tr>
						<td id="sabad_title" colspan="10">جمع اقلام موجود در سبد عبارت است از : <span id="hamash"><?php print pool($sum_price)?></span> ریال</td>
						</tr>
						<tr>
						<td id="sabad_title" colspan="10">جمع هزینه ارسال عبارت است از : <span id="post_pool"><?php print pool($sum_post_price)?></span> ریال</td>
						</tr>
						<tr>
						<td id="sabad_title" colspan="10">جمع کل فاکتور شما : <span id="halahamash"><?php print pool($sum_price+$sum_post_price)?></span> ریال</td>
						</tr>
						
					</tbody>
				</table>
				</form>
				<?php }}// of else?>
			</div>
		</div>
	</section> <!--/#cart_items-->
	
	<section id="do_action">
	<div align=center>
				<span id="main_msg" name="main_msg"></span>
				<span id="main_err" name="main_err"></span>
	</div>
		<div align=center id=bank_area name=bank_area><?php if ($_SESSION["s_user_id"]!=""&&$sum_price>0) 
		      {?>
	    	<a class="" id="bankbtn" name="bankbtn" onclick="get_amount();">
                 <img border="0" src="images/payment/melat.png" width="100" style="cursor:pointer">
	    	</a>
		     <?php }?>
		</div>
		     
	<?php if ($_SESSION["s_user_id"]=="") {?>
		<div class="container">
			<div class="heading">
				<p><!--later --></p>
			</div>
			<div class="row">
			<form id=old_pic name=old_pic>
				<div class="col-sm-6">
					<div class="chose_area">
  					<div id="msg_title" name="msg_title">اگر قبلا عضو سایت شده اید ، لطفا وارد شوید</div>
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
						<a class="btn btn-default update" onclick="find_pic();">ورود و تایید نهایی سفارش</a>
					</div>
					</form>
				</div>
				<div class="col-sm-6">
					<div class="chose_area">
  					<div id="msg_title" name="msg_title">اگر در آرکا عضو نیستید فرم زیر را تکمیل نمایید</div>
  					<span id="msg_singup_err" name="msg_singup_err"></span>
  					<span id="msg_singup_err" name="msg_ok"></span>
  					<form method=post name="new_pic" id="new_pic">
						<ul class="user_option" >
							<li>
								<input type="text" id="tn" name="tn" placeholder="نام"/>
							</li>
							<li>
								<input type="text" id="tf" name="tf" placeholder="نام خانوادکی"/>
							</li>

							<li>
								<input type="text" id="te" name="te" placeholder="پست الکترونیک"/>								
							</li>
							<li>
								<input type="text" id="tm" name="tm" maxlength=11 placeholder="شماره همراه"/>								
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
								<input type="text" id="ta" name="ta" placeholder="آدرس دقیق پستی"/>								
							</li>
						</ul>
						<a class="btn btn-default update" onclick="show_new_picure();"> ثبت اطلاعات فردی و تایید نهایی سفارش</a>
						</form>
					</div>
				</div>
				
				</div>
			</div>
		</div>
		<?php } // ?>
	</section><!--/#do_action-->

<?php include "user_footer.php"?>		
<script language="javascript">
function show_new_picure()
{
$('#msg_singup_err').hide();
$('#main_err').hide();
$('#main_msg').hide();
$('#login_msg_err').hide();
var tn=(document.new_pic.elements["tn"].value).trim();
var tf=(document.new_pic.elements["tf"].value).trim();
var te=(document.new_pic.elements["te"].value).trim();
var tm=(document.new_pic.elements["tm"].value).trim();
var tc=(document.new_pic.elements["tc"].value).trim();
var to=(document.new_pic.elements["to"].value).trim();
var ta=(document.new_pic.elements["ta"].value).trim();
var semat="کاربر عادی";
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
	$('#msg_singup_err').fadeIn(400).html("لطفا برای شماره همراه فقط عدد وارد کنید");
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

var isozv="0";
$.ajax({
type: "POST",
url: "ajaxnewverto.php",
data :({
tn:tn,
tf:tf,
te:te,
tm:tm,
tc:tc,
to:to,
ta:ta,
semat:semat,
isozv:isozv
       }),
cache: true,
success: function(data){
//alert(data);
if (data>0)
{
	$('.chose_area').hide();
	$('#main_msg').fadeIn(400).html("اطلاعات شما با موفقیت ثبت گردید.برای اتصال به درگاه بانک و اتمام سفارش چند لحظه صبر کنید");
	window.location.href='show_basket.php';
	//$("#bank_area").fadeIn(400).html("<a class='btn btn-default update'	 onclick='get_amount()'> اتصال به درگاه بانک  وپرداخت وجه</a>");
}
else if (data==-1)
{
	$('#main_err').fadeIn(400).html("خطایی در ثبت اطلاعات رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید");
}
else if (data==-2)
{
	$('#main_err').fadeIn(400).html("این ایمیل قبلا ثبت شده است چنانچه مربوط به شماست برای بازیابی رمز عبور خود بروی لینک زیر کلیک کنید ");
	$('#main_err').fadeIn(400).append("<br><br><a href=singup.php><font color=#ffff00> بازیابی کلمه عبور </font></a>");
	
}	
}
})
}
}	
//---------------------------------------------------
function find_pic()
{
//alert("asd");
$('#login_msg_err').hide();
$('#main_msg').hide();
$('#msg_singup_err').hide();
$('#main_err').hide();
var p_name=document.old_pic.elements["t_pic_name"].value;
var p_code=document.old_pic.elements["t_pic_code"].value;
if (p_name==""){	
		$('#login_msg_err').fadeIn(400).html("لطفا نام کاربری را وارد کنید");
		document.old_pic['t_pic_name'].focus();	
	}
else if (p_code=="")	
	{
	$('#login_msg_err').fadeIn(400).html("لطفا رمز عبور را وارد کنید");
	document.new_pic['t_pic_code'].focus();	
	}
else
{
var isozv="1";
$.ajax({
type: "POST",
url: "ajaxverto.php",
data :({
p_name:p_name,
p_code:p_code,
isozv:isozv
       }),
cache: true,
success: function(data){
//alert(data);
if (data==1)
{
	$('.chose_area').hide();
	$('#main_msg').fadeIn(400).html("شما با موفقیت وارد شدید.برای اتصال به درگاه بانک چند لحظه صبر کنید");
	//$("#bank_area").fadeIn(400).html("<a class='btn btn-default update'	onclick='get_amount()'> اتصال به درگاه بانک  وپرداخت وجه</a>");
	window.location.href='show_basket.php';
}
else
{
	$('#login_msg_err').fadeIn(400).html("نام کاربری و یا رمز عبور صحیح نمی باشد");
	document.new_pic['t_pic_name'].focus();	
}
}
})
}
}	
//---------------------------------------------------

//---------------------------------------------------
function show_post_price(b_id,item_id,item_count)
{
var user_id=<?php if ($_SESSION["s_user_id"]=="") print "0;"; else print $_SESSION["s_user_id"].";";?>
var post_method=document.frm_basket.elements["post_method_"+b_id].value;
if (user_id<=0&&post_method==3)
{
	$("#post_price_"+b_id).fadeIn(400).html("لطفا ابتدا وارد شوید");			
	return;
}	
//alert(des);
$("#sabad_msg_"+b_id).fadeIn(400).html('<img src="images/aseman_loading.gif" >');
$.ajax({
type: "POST",
url: "ajaxshowpostprice.php",
data :({
item_id:item_id,
item_count:item_count,
b_id:b_id,
post_method:post_method
       }),
cache: true,
success: function(data){
//alert(data);
	var str_res=data;
	var res=str_res.split("*");

if (res[0]>=0)
{
	
	$("#sabad_msg_"+b_id).hide();
	$("#sabad_msg_"+b_id).fadeIn(400).html('<img src="images/aseman_ok.gif" >');
	$("#post_price_"+b_id).fadeIn(400).html("<p>"+res[0]+" ریال "+"</p>");
	
	$("#hamash").fadeIn(400).html(res[2]);
	$("#halahamash").fadeIn(400).html(parseInt(res[2])+parseInt(res[1])+" ریال ");
	$("#post_pool").fadeIn(400).html(res[1]+" ریال ");
}
else
{
	$("#sabad_msg_"+b_id).hide();
	$("#sabad_msg_"+b_id).fadeIn(400).html('<img src="images/aseman_err.gif" >');

}
}
})
}
//================================================================================

//---------------------------------------------------
function tozih_berozshe(b_id)

{
var b_des=document.frm_basket.elements["des_"+b_id].value;
//alert(des);
//$("#sabad_msg_"+b_id).hide();
$("#sabad_msg_"+b_id).fadeIn(400).html('<img src="images/aseman_loading.gif" >');
$.ajax({
type: "POST",
url: "ajaxsabadtozih.php",
data :({
b_des:b_des,
b_id:b_id

       }),
cache: true,
success: function(data){
//alert(data);
if (data==1)
{
	$("#sabad_msg_"+b_id).hide();
	$("#sabad_msg_"+b_id).fadeIn(400).html('<img src="images/aseman_ok.gif" >');
}
else
{
	$("#sabad_msg_"+b_id).hide();
	$("#sabad_msg_"+b_id).fadeIn(400).html('<img src="images/aseman_err.gif" >');
}
}
})
}
//================================================================================
function get_amount()
{
$.ajax({
type: "POST",
url: "ajaxcheghzerraft.php",
cache: true,
success: function(data){
if (data>0)
{
	window.location.href = 'pay_bank.php?babat=sabad&amount='+data;
}
else
	$('#main_err').fadeIn(400).html("مشکلی در سبد خرید شما وجود دارد لذا امکان اتصال به درگاه نیست");
}	
})
}	
//---------------------------------------------------
	
</script>
</body>
</html>
