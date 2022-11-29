<?php include "header_admin_page.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script lang="javascript">
var today_date_j=<?php print $_SESSION["today_date_t"];?>;
var today_y=<?php print $y;?>;
var today_m=<?php print $m;?>;
var today_d=<?php print $d;?>;
var test=1;
checked=false;
var f_date_name="f9";
var first_f="f1";
var no_empty=new Array("f1","f2","f3","f10","f11")
//var eqal=new Array("f11","f11_2");
var test_array=new Array(1,0);
var onload_array=new Array(1,1,0);
</script>
<script lang="javascript">
function check_availability()
{  
<?php if(isset($_GET["edit"])) print "var auto_id=1;"; else print "var auto_id=0;"; ?>
    var t_user_id = document.form1.elements["f10"].value;  
    if (auto_id==1)
	    auto_id = document.form1.elements["auto_id"].value;  
	else
		auto_id =0;  	    
  
    if (t_user_id=="")
            $('#user_aval_res').html('<b><font color=#ff0000 >&nbsp;  این گزینه خالی نمی تواند باشد&nbsp; ');  
    else
    {
    $.ajax({
    type:"POST",
    url: "check_user_aval.php",
    cache: false,
    data:{
   		     t_user_id:t_user_id,
	         auto_id :auto_id
   		 },
    success: function(result){
        if(result <= 0)
        {  
            $('#user_aval_res').html('<b><font color=#009900 >'+ t_user_id + '&nbsp; قابل انتخاب می باشد &nbsp;');  
        }
        else{  
            $('#user_aval_res').html('<b><font color=#ff0000 >'+t_user_id+ '&nbsp;  قبلا انتخاب شده است&nbsp; ');  
            document.form1["f10"].focus();
            document.getElementById("f10").value='';
        	}  
    }
});
}
}

</script>
<?php
$tbl_name="tbl_user_info";
$f_count=25;
$msg='';
$page_id=4;
$form_title="تعريف و مديريت کاربران سايت";
$grid_title="ليست کاربران تعريف شده";
$col1_title="نام";
$col2_title="وضعيت فعاليت";
$col1_grid="concat(f3,' ',f22) as f2";
$col2_grid="f13";
$user_type=$_SESSION["s_user_type_id"];
$str_where=" where f2>=$user_type";
$str_where2=" where auto_id>=$user_type";
$show_del_btn=1;
if ($user_type > 2) 
{
	$str_where=$str_where." or f2=3" ; // افزودن مشتریان به لیست نمایش مدیر سطح 2
	$str_where2=$str_where2." or auto_id=3" ; // افزودن مشتریان به لیست نمایش مدیر سطح 2
}	

//if ($_SESSION["s_user_type_id"]>1)
//else
//	$str_where="";	
include "aseman_admin_page_func.php";
?>
</head>
<div align="center">
<div class="main_form">
<body onload="aseman_onload_test();" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"> 
		<table border="0"  dir="rtl" cellspacing="0" style="border-collapse: collapse" class="main_table">
			<tr>
			<td align="right" valign="top">
			<table border =0 width=100% dir=rtl class="tbl_3_row" cellspacing="0" cellpadding="0">
			</tr>
			<td align=right>
			<form method="POST" name="form1" id="form1" action="<?php print $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
				<td align="center" width="100%" colspan="4" height="25" class="tbl_title">
			<?php print $form_title?></td>
			</tr>
				<tr>
					<td align="center" width="100%" colspan="4" height="20" class=tbl_msg_row>
					<span  class=tbl_msg>
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp; ";
					$upload_dir="images/user";
					if($msg=="عملیات درج با موفقیت انجام شد"||$msg=="عملیات ویرایش با موفقیت انجام شد")
					{
						$f_tmp_name = $_FILES['file_up']['tmp_name']; 
						if($f_tmp_name!="")
						{
							$f_name=$_FILES['file_up']['name']; 
							$f_size=$_FILES['file_up']['size']; 
							$max_size=1048576;

							if ($_POST["auto_id"]!="")
								$id_file=$_POST["auto_id"];
							else
								$id_file=get_max_id($tbl_name);

							$name1=$id_file.".jpg";
							$name2="";

							$limit_ext=array(".jpg");
							$new_w_size=0;
							$new_h_size=0;
							$width=0;
							$height=0;
							$msg=upload_file($f_name,$f_tmp_name,$f_size,$max_size,$upload_dir,$name1,$name2,$limit_ext,$new_w_size,$new_h_size,$width,$height);
							print "  ".$msg."  ";
						}
					}
					{
						if($msg=="عملیات حذف با موفقیت انجام شد")
						{	

							$id_file=$_GET["auto_id"];
							$name1=$id_file.".jpg";
							if (is_file($upload_dir."/".$name1))
								delete_file($upload_dir."/".$name1);
						}	
					}

			if($_POST["f13"]==1&&$_POST["chk_send_sms"]=="ON"&&$_POST["auto_id"]!="")	
			{
//-----------------------SMS--------------------------------------
				$re=mysql_query("select f11 from tbl_option");
				list($cust_send)=mysql_fetch_array($re);
				
				if ($cust_send==1)
				{
					$cust_mobil=$_POST["f6"];
					$re=mysql_query("select f9 from tbl_sms_text");
					list($cust_sms)=mysql_fetch_array($re);
					if (strlen($cust_mobil)>=10)
					{
						send_one_sms($cust_mobil,$cust_sms);
					}	
				}	
//---------------------------------------------------------------------
			}

					?></span></td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="4">
						<span id="img_user_pic" name="img_user_pic">
											<?php 
										$user_pic="images/user/".$_GET["auto_id"].".jpg";
										if(!is_file($user_pic)) {$user_pic="images/user/no_user_pic.jpg";}					
					?>		
					<?php if(isset($_GET["edit"])) {?>			
					<img border="0" class="img_user" src="<?php print $user_pic?>" >
					<?php }?>
					</span></td>
					</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&nbsp;</td>
<td align="right" width="20%" class="auto_id_row">&nbsp;</td>
<td align="right" width="35%" class="auto_id_row">
<span lang="en-us">&nbsp;</span></td>
<td align="right" width="40%" class="auto_id_row">&nbsp;</td>
</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&#1645;</td>
<td align="right" width="20%" class="auto_id_row">کد (خودکار درج مي شود)</td>
<td align="right" width="35%" class="auto_id_row">
<input type="text" name="auto_id" size="20" dir="ltr" readonly=true  <?php if(isset($_GET["edit"])) print "value=".$selected_row[auto_id]; ?>></td>
<td align="right" width="40%" class="auto_id_row">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%"  colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">نوع مشتري (نوع تخفيف):</td>
<td align="right" width="35%" class="dirooz">
<select size="1" name="f1" dir="rtl">
<?php $re=mysql_query("select auto_id,f1 from tbl_customer_type");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option value=<?php print $row2[auto_id]; if(isset($_GET["edit"])) if ($selected_row["f1"]==$row2["auto_id"]) print " selected";?>><?php print $row2[f1] ?></option>
<?php }?>

</select>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">نوع کاربر (سطح دسترسي): </td>
<td align="right" width="35%" class="dirooz">
<select size="1" name="f2" dir="rtl">
<?php 

//$re=mysql_query("select auto_id,f1 from tbl_user_type where auto_id>=$_SESSION[s_user_type_id]");
$re=mysql_query("select auto_id,f1 from tbl_user_type ".$str_where2);
while($row2 = mysql_fetch_array($re))
{
 ?>
<option value=<?php print $row2[auto_id]; if(isset($_GET["edit"])) if ($selected_row["f2"]==$row2["auto_id"]) print " selected";?>><?php print $row2[f1] ?></option>
<?php }?>

</select>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">نام کاربر :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f3" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f3].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">نام<span lang="en-us"> </span>
خانوادگی :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f22" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f22].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">جنسيت :</td>
<td align="right" width="35%" class="dirooz">
<select size="1" name="f4" dir="rtl">
<option <?php  if ($row["f4"]=="1") print "selected"?> value="1">مرد</option>
<option <?php  if ($row["f4"]=="0") print "selected"?> value="0">زن</option>
</select>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">شماره تلفن/هاي ثابت :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f5" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f5].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">شماره تلفن/هاي همراه :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f6" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f6].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">آدرس پستي :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<input type="text" name="f7" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f7].'"';?>></td>
</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">نام استان :</td>
<td align="right" width="35%" class="dirooz">
<select id="f23" name="f23"  onchange="loadcity(this.options[this.selectedIndex].value);"/>
<option value='-1'>استان را انتخاب نمایید</option>
<?php 
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("select ostan_id,ostan_name from tbl_ostan");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option <?php if ($selected_row["f23"]==$row2[ostan_id]) print "selected"?>  value=<?php print $row2[ostan_id];?> ><?php print $row2["ostan_name"] ?></option>
<?php }?>
</select></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
				
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">نام شهر :</td>
<td align="right" width="35%" class="dirooz">
<?php
mysql_query("SET CHARACTER SET utf8");
if((int)$selected_row[f24]!=0||(int)$selected_row[f24]!="")
{
	$re=mysql_query("select shahr_id,shahrestan from tbl_shahr where shahr_id=$selected_row[f24]");
	list($cur_shahr_id,$cur_shahr_name)=mysql_fetch_array($re);
}	
	mysql_query("SET CHARACTER SET $charset ");	
 ?>

						<select id="f24" name="f24"  />
						<option  value="<?php print $cur_shahr_id?>" selected><?php print $cur_shahr_name?></option>
						</select></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">تاريخ عضويت :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f9" size="40" dir="rtl" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f9].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">*</td>
<td align="right" width="20%" class="dirooz">پست الکترونيک :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f8" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f8].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&#1645;</td>
<td align="right" width="20%" class="dirooz">رمز عبور :</td>
<td align="right" width="35%" class="dirooz">
<input type="text" name="f11" size="40" dir="ltr" <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f11].'"';?>></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">معرفي کاربر :</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<textarea rows="7" name="f12" cols="40" dir="rtl" ><?php if(isset($_GET["edit"])) print $selected_row[f12];?></textarea></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">وضعيت فعاليت :</td>
<td align="right" width="35%" class="dirooz">
<select size="1" name="f13" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f13"]=="1") print "selected"?> value="1">اجازه فعالیت دارد
										</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f13"]=="0") print "selected"?> value="0">فعلا غیر فعال شود
										</option>

</select>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">نمایش اطلاعات :</td>
<td align="right" width="35%" class="dirooz">
						<select size="1" name="f25" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f25"]=="1") print "selected"?> value="1">اطلاعات من در صفحه نمایش کالا نمایش داده شود</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f25"]=="0") print "selected"?> value="0">اطلاعات من در صفحه نمایش کالا نمایش داده نشود</option>
</select>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">فایل تصویر :</td>
<td align="right" width="35%" class="dirooz">
<input type="file" name="file_up" size="50" dir="ltr" ><td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
				</tr>

<!--
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">&nbsp;</td>
<td align="right" width="75%" class="dirooz" colspan="2">
<input type="checkbox" name="chk_send_sms" value="ON"> پیامک فعال شدن عضویت برای 
مشتری ارسال شود (برای زمانی که عضویت آنی غیرفعال بوده است)</tr>
				<tr>
-->				
<td align="center" width="100%" class="dirooz" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="7"></td>
</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="20%" class="btn_table">&nbsp;</td>
						<td align="right" width="35%" class="btn_table">
<input type="submit" onclick= "return aseman_test();" 
<?php if(isset($_GET["edit"])) print 'value= "ويرايش اطلاعات" name=B2';  else print 'value="ذخيره اطلاعات در سيستم" name="B1"'?> ></td>
						<td align="right" width="40%" class="btn_table">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" width="100%" class="btn_table" colspan="4" class="tbl_last_row">&nbsp;</td>
					</tr>
				</table>
				</form>
				</td>
			</tr>
			</tr>
			</td>
				<tr>
				<td align=center>
				<?php include "show_grid.php"?></td>
			</tr>
				<tr>
				<td align=center>
<?php include"footer_admin_function.php"?>
			</tr>
			</table>
		</table>
		
	</div>

