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
  					<div id="msg_title" name="msg_title">جستجوی سریع در آرکا</div>
  						<span id="msg_send_err" name="msg_send_err"></span>
  						<span id="msg_send_ok" name="msg_send_ok"></span>
	    				<address>
  						<form method=post name="feramoosh" id="feramoosh" action=show_items.php onsubmit="return q_search();" >
						<ul class="user_option" >
							<li>
								<input type="text" id="txt_q_search" name="txt_q_search" placeholder="یک یا چند کلمه از نام و یا شرح محصول را وارد کنید"/>
							</li>
						</ul>
						<!--
						<a class="btn btn-default update" id="btn_q_search" name="btn_q_search" onclick="q_search();"> 
						شروع جستجو</a>
						-->
						<input type=submit value="شروع جستجو"  class="btn btn-default update" id="btn_q_search" name="btn_q_search">



						
						</form>
	    				</address>
	    			</div>
				</div>		

				<div class="col-sm-8">
				<div class="chose_area">
  					<div id="msg_title" name="msg_title">جستجوی پیشرفته کالا و خدمات در آرکا</div>
  						<span id="msg_singup_err" name="msg_singup_err"></span>
  						<span id="msg_ok" name="msg_ok"></span>
  						<form  name="new_pic" id="new_pic" action="show_items.php" onsubmit="return advance_search();" method=post>
						<ul class="user_option" >
							<li>
<select id="txt_item_group" name="txt_item_group" />
<option value='-1'>گروه محصول را انتخاب کنید</option>
<option value='-1'>فرقی نمی کند</option>
<?php 
$re=mysql_query("select auto_id,f1 from tbl_item_main_group order by f3");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option value=<?php print $row2[auto_id];?>><?php print $row2["f1"] ?></option>
<?php }?>
</select>

							</li>
							<li>
								<input type="text" id="txt_name" name="txt_name" placeholder="چند کلمه از نام و یا شرح محصول"/> 
							</li>
							<li>
								<input type="text" id="txt_price1" name="txt_price1" maxlength=11 placeholder="قیمت فروش به ریال از "/>								
							</li>
							<li>
								<input type="text" id="txt_price2" name="txt_price2" maxlength=11 placeholder="تا قیمت "/>								
							</li>
							
							<li>
							
<select id="txt_sort" name="txt_sort" />
<option value='date_up'>ترتیب نمایش را انتخاب کنید</option>
<option value='price_up'>از قیمت کمتر به بیشتر</option>
<option value='price_down'>از قیمت بیشتر به کمتر</option>
<option value='date_up'>براساس تاریخ ثبت از قدیم به جدید</option>
<option value='date_down'>براساس تاریخ ثبت از جدید به قدیم</option>
<option value='item_group_sort'>براساس گروه کالا</option>
</select>
<select id="txt_logic" name="txt_logic" />
<option value='and'>علمگر مابین شرایط</option>
<option value='and'>همه موارد فوق - AND</option>
<option value='or'>حداقل یکی از شرایط فوق - OR</option>
</select>

							</li>
						</ul>
							<!--<a class="btn btn-default update" id="btn_adv_search" name="btn_adv_search" href="javascript:document.forms['new_pic'].submit()"> -
							شروع جستجو</a>-->
							<input type=submit value="شروع جستجو"  class="btn btn-default update" id="btn_adv_search" name="btn_adv_search">
						
						</form>
						</div>
					</div>
					
			    	</div>  		
				</div>
				</div>
	</section>
				
<?php //include "user_footer.php"?>		
<script language="javascript">
function advance_search()
{
//alert("asd");

var tp1=(document.new_pic.elements["txt_price1"].value).trim();
var tp2=(document.new_pic.elements["txt_price2"].value).trim();
$('#msg_singup_err').hide();
$('#main_err').hide();
$('#main_msg').hide();

if (isNaN(tp1))	
	{
		$('#msg_singup_err').fadeIn(400).html("لطفا برای قیمت فقط عدد وارد کنید");
		document.new_pic['txt_price1'].focus();	
		return false;
	}
else if (isNaN(tp2))	
	{
		$('#msg_singup_err').fadeIn(400).html("لطفا برای قیمت فقط عدد وارد کنید");
		document.new_pic['txt_price2'].focus();	
		return false;
	}
	
else
{
	return true;
	//document.new_pic.submit();
	//document.getElementById("new_pic").submit();
	//document.forms['new_pic'].submit()
}
}	
//================================================================================
function q_search()
{
var tp1=(document.feramoosh.elements["txt_q_search"].value).trim();
if(tp1=="")
	return false
else
	return true;
//	document.feramoosh.submit();
	//document.getElementById("feramoosh").submit();
}	

//---------------------------------------------------
</script>
</body>
</html>