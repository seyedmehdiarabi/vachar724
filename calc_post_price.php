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
  					<div id="msg_title" name="msg_title">نتیجه پست مورد نظر شما</div>
  						<span id="msg_send_err" name="msg_send_err">
  						<?php
if($_POST["b1"])
{
$to1=$_POST['to'];
$to2=$_POST['to2'];
$tc1=$_POST['tc'];
$tc2=$_POST['tc2'];
$tpm=(int)$_POST['tpm'];
$tw=(int)cleantxt($_POST['tw']);
$tp=(int)cleantxt($_POST['tp']);
if ($tw=="0"||$tw==""||$tp=="0" ||$tp=="")
	print "لطفا مبلغ و وزن بسته را درج نمایید";
else{	
$position="";		
if($tc1==$tc2)
{
	$position="f4";
	$post_pos="درون شهری";	
	$post_method_pos="f14";

}	
else if($to1==$to2)
{
	$position="f5";
	$post_pos="درون استانی";	
	$post_method_pos="f15";	
}	
else 
{
	$str_sql="select hamjavarha from tbl_ostan where ostan_id=$to1";
	$re=mysql_query($str_sql);
	
	list($ham1)=mysql_fetch_array($re);

	$t="";
	$k=0;
	$ham_arr=array($ham1);
	for($i=0;$i<strlen($ham1);$i++)
	{
		if($ham1[$i]!=",")
			$t=$t.$ham1[$i];
		else
		{
			$ham_array[$k++]=$t;
			$t="";
		}	
		
	}	

if ((in_array($to2,$ham_array))) 
{
	$position="f6";
	$post_pos="برون استانی همجوار";	
	$post_method_pos="f16";		
}	
else
{
	$position="f7";	
	$post_pos="برون استانی غیر همجوار";		
	$post_method_pos="f17";	
}	

}	
	
	$vazn_kol=$tw;
	
	$str_sql="select * from tbl_post_method where auto_id=$tpm";
	$re=mysql_query($str_sql);
	//list($auto_id,$f1,$f2,$f3,$f4,$f5,$f6,$f7,$f8,$f9,$f10,$f11)=mysql_fetch_array($re);
	$post_info=mysql_fetch_array($re);

	$mazad_price=0;
	$vazn_kol_t=$vazn_kol;
	$mazad=0;
	$mazad_unit=0;
	if ($vazn_kol>$post_info["f12"])
	{
		$mazad=$vazn_kol-$post_info["f12"];
		if ($mazad<=$post_info["f13"])
			$mazad_unit=1;
		else
			$mazad_unit=ceil($mazad/$post_info["f13"]);
			
		$mazad_price=$mazad_unit*$post_info[$post_method_pos];	
		
		$vazn_kol=$post_info["f12"];
	}


	//$str_sql="select $position from tbl_post_width where f1=$tpm and f2<=$tw and f3>=$tw";
	$str_sql="select $position from tbl_post_width where f1='$post_info[auto_id]' and f2<=$vazn_kol and f3>=$vazn_kol";
	$re=mysql_query($str_sql);
	list($price_w)=mysql_fetch_array($re);

	$str_sql="select f3 from tbl_post_bime where  f1<=$tp and f2>=$tp";
	$re=mysql_query($str_sql);
	list($bime)=mysql_fetch_array($re);
	//print $str_sql."<br>";
	
	$price_b=($bime*$tp)/100;
	if ($price_b<$post_info["f18"])
		$price_b=$post_info["f18"];
	
	//print $str_sql."<br>";
	
	$xp=0;

	if ($post_info["f10"]>0)
	{
		$xf=$price_w;
		$xp=($post_info["f10"]*($mazad_price+$price_w))/100;
		//$xp=($post_info["f10"]*$price_w)/100;
	}	


	$price=$price_w+$price_b+$post_info["f6"]+$post_info["f8"]+$post_info["f9"]+$xp+$mazad_price;	

	$mal=($price*$post_info["f7"])/100;
	$end_price=$price+$mal;

	$position="";// f4 shahri,f5 doron ostan,f6 boron hamjavar,f7 boron gheyr hamjavar

	mysql_query("SET CHARACTER SET utf8");
	$str_sql="select ostan_name from tbl_ostan where ostan_id=$to1";
	$re=mysql_query($str_sql);
	list($ostan_name1)=mysql_fetch_array($re);
	
	$str_sql="select ostan_name from tbl_ostan where ostan_id=$to2";
	$re=mysql_query($str_sql);
	list($ostan_name2)=mysql_fetch_array($re);

	$str_sql="select shahrestan from tbl_shahr where shahr_id=$tc1";
	$re=mysql_query($str_sql);
	list($shahr_name1)=mysql_fetch_array($re);

	$str_sql="select shahrestan from tbl_shahr where shahr_id=$tc2";
	$re=mysql_query($str_sql);
	list($shahr_name2)=mysql_fetch_array($re);
	mysql_query("SET CHARACTER SET $charset ");

}

}
?>

  						
  						</span>
  						<span id="msg_send_ok" name="msg_send_ok"></span>
	    				<address>
	    				<table id=tbl_post border=1 width=100% dir=rtl>
	    				<tr><td align=center width=50%>مبدا</td><td align=center width=50%><?php print $ostan_name1."-".$shahr_name1?></td></tr>
	    				<tr><td align=center width=50%>مقصد</td><td align=center width=50%><?php print $ostan_name2."-".$shahr_name2?></td></tr>
	    				<tr><td align=center width=50%>موقعيت</td><td align=center width=50%><?php print $post_pos?></td></tr>
	    				<tr><td align=center width=50%>ارزش ریالی کالا</td><td align=center width=50%><?php print pool($tp)?></span></td></tr>
	    				<tr><td align=center width=50%>نوع پست</td><td align=center width=50%><?php print $post_info["f1"]?></td></tr>
	    				<tr><td align=center width=50%>تعرفه پست براساس وزن</td><td align=center width=50%><?php print pool($price_w)?></td></tr>
	    				<tr><td align=center width=50%>هزینه بیمه</td><td align=center width=50%><?php print pool($price_b)?></td></tr>
	    				<tr><td align=center width=50%>غیراستاندارد</td><td align=center width=50%><?php print pool($post_info["f6"])?></td></tr>
	    				<tr><td align=center width=50%>شناسه الکترونیک</td><td align=center width=50%><?php print 
pool($post_info["f8"])?></td></tr>
	    				<tr><td align=center width=50%>آگهی تحویل</td><td align=center width=50%><?php print 
pool($post_info["f9"])?></td></tr>
	    				<tr><td align=center width=50%>خالص هزینه پست</td><td align=center width=50%><?php print pool($price)?></td></tr>
	    				<tr><td align=center width=50%>مالیات</td><td align=center width=50%><?php print pool($mal)?></td></tr>
	    				<tr><td align=center width=50%>وزن کل</td><td align=center width=50%><?php print $vazn_kol_t?></td></tr>
	    				<tr><td align=center width=50%>وزن مازاد</td><td align=center width=50%><?php print $mazad?></td></tr>
	    				<tr><td align=center width=50%>تعداد واحد وزن مازاد</td><td align=center width=50%><?php print $mazad_unit?></td></tr>
	    				<tr><td align=center width=50%>هزینه مازاد</td><td align=center width=50%><?php print pool($mazad_price)?></td></tr>
		
	    				
	    				
	    				<tr><td align=center width=50%>مجموع هزینه پست</td><td align=center width=50%><?php print pool($end_price)?><span id="end_price" name="end_price"></span></td></tr>
		
	    				
	    				
	    				</table>
	    				</address>
	    			</div>
				</div>		
			
				<div class="col-sm-8">
				<div class="chose_area">
  					<div id="msg_title" name="msg_title">برای محاسبه هزینه پست محوله خود اطلاعات زیر را پر کنید</div>
  						<span id="msg_singup_err" name="msg_singup_err"></span>
  						<span id="msg_ok" name="msg_ok"></span>
  						<form method=post name="new_pic" id="new_pic" action="calc_post_price.php">
						<ul class="user_option" >
							<li>
								<input type="text" id="tw" name="tw" placeholder="وزن کالا"/>
							</li>
							<li>
								<input type="text" id="tp" name="tp" placeholder="ارزش ریالی"/>
							</li>
							<li>
<select id="tpm" name="tpm" />
<?php 
$re=mysql_query("select auto_id,f1 from tbl_post_method");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option value=<?php print $row2[auto_id];?>><?php print $row2["f1"] ?></option>
<?php }?>
</select>

							</li>							

							<li>
<select id="to" name="to"  onchange="loadcity(this.options[this.selectedIndex].value);"/>
<option value='-1'>استان مبدا را انتخاب نمایید</option>
<?php 
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("select ostan_id,ostan_name from tbl_ostan order by ostan_name");
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
<select id="to2" name="to2"  onchange="loadcity2(this.options[this.selectedIndex].value);"/>
<option value='-1'>استان مقصد را انتخاب نمایید</option>
<?php 
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("select ostan_id,ostan_name from tbl_ostan order by ostan_name");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option value=<?php print $row2[ostan_id];?>><?php print $row2["ostan_name"] ?></option>
<?php }?>
</select>
							</li>
							<li>
								<select id="tc2" name="tc2"  /></select><span id="city_loader2"></span>
							</li>							
						</ul>
							<!--<a class="btn btn-default update" onclick="calc_price();">محاسبه هزینه پست </a>-->
							<input type=submit value="محاسبه هزینه پست" id=b1 name="b1" onclick="return calc_price()">
						</form>
						</div>
					</div>
					
			    	</div>  		
				</div>
				</div>
	</section>
				
<?php include "user_footer.php"?>		
<script language="javascript">
function calc_price()
{
var tw=(document.new_pic.elements["tw"].value).trim();
var tp=(document.new_pic.elements["tp"].value).trim();
var tpm=(document.new_pic.elements["tpm"].value).trim();
var to=(document.new_pic.elements["to"].value).trim();
var tc=(document.new_pic.elements["tc"].value).trim();
var to2=(document.new_pic.elements["to2"].value).trim();
var tc2=(document.new_pic.elements["tc2"].value).trim();
$('#msg_singup_err').hide();
$('#main_err').hide();
$('#main_msg').hide();
if (tw==""){	
		$('#msg_singup_err').fadeIn(400).html("لطفا وزن بسته را درج کنید");
		return false;
		document.new_pic['tf'].focus();	

	}
else if (isNaN(tw))	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا برای وزن بسته فقط عدد وارد کنید");
		return false;
	document.new_pic['tw'].focus();	

	}

else if (tp==""){	
		$('#msg_singup_err').fadeIn(400).html("لطفا ارزش رسالی بسته را درج کنید");
		return false;
		document.new_pic['tp'].focus();	
		
	}
else if (isNaN(tp))	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا برای مبلغ فقط عدد وارد کنید");
		return false;	
	document.new_pic['tp'].focus();	
	}

else if (to==""||to==-1)	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا نام استان را درج کنید");
			return false;
		document.new_pic['to'].focus();	

	}
else if (tc==""||tc==-1)		
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا نام شهر را درج کنید");
		return false;	
	document.new_pic['tc'].focus();	
	}
else if (to2==""||to2==-1)	
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا نام استان را درج کنید");
		return false;	
		document.new_pic['to2'].focus();	

	}
else if (tc2==""||tc2==-1)		
	{
	$('#msg_singup_err').fadeIn(400).html("لطفا نام شهر را درج کنید");
		return false;	
	document.new_pic['tc2'].focus();	
	}
else
{
//document.new_pic.submit();	
return true;
//alert("asd");
/*$.ajax({
type: "POST",
url: "ajaxpostprice.php",
data :({
tw:tw,
tp:tp,
tpm:tpm,
to:to,
tc:tc,
to2:to2,
tc2:tc2
       }),
cache: true,
success: function(data){
alert(data);
if (data>0)
{
	$('#end_price').fadeIn(400).html(data);
}
else if (data==-1)
{
	$('#main_err').fadeIn(400).html("خطایی در ثبت اطلاعات رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید");
}

}
})*/
}
}	
//================================================================================
</script>
</body>
</html>