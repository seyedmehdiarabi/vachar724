<?php include "header_admin_page.php";
$form_title="مرحله سوم : ارسال تصاویر مربوط به آگهی املاک";

$page_id=80;
//access_page1($page_id,$_SESSION["s_user_type_id"]);
include "aseman_admin_page_func.php";
$item_id=cleantxt($_POST["item_id"]);
if ($item_id==""||$item_id==0)
	$item_id=cleantxt($_GET["item_id"]);
if ($item_id==""||$item_id==0)	
	header("Location: index_admin.php");

$re=mysql_query("SELECT
  `tbl_adver_type`.`f1`, `tbl_adver_type`.`f2`, `tbl_adver_type`.`f3`
FROM
  `tbl_amlak_master_info` LEFT JOIN
  `tbl_adver_type` ON `tbl_adver_type`.`auto_id` = `tbl_amlak_master_info`.`f12` where tbl_amlak_master_info.auto_id=$item_id");
  

list($adver_name,$adver_time,$reg_price)=mysql_fetch_array($re) ;
//print $adver_name.'--'.$adver_time.'--'.$reg_price;
if($reg_price=='')
	$reg_price=0;
	
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<body>
<p>&nbsp;</p> 
<div align="center">
<div class="main_form">
<form method="POST" action="<?php print $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data" name="frm1" id="frm1">
	<input type=hidden value="<?php print $item_id?>" id="item_id" name="item_id">
	<table class="tbl_1_border">
		<tr>
			<td align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" class="tbl_2">
				
					<tr>
						<td align="center" width="100%"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>
					<tr>
						<td align="left" width="100%">
					<div class="cell_roul" align=center onClick="roul_click();">برای
						مطالعه نکات قبل از آپلود تصاویر اینجا کلیک کنید</div>
					<div class="cell_roul_data" align=center>
							پسوند فایل قابل قبول برای این بخش "jpg" می باشد
						<!--<br>حداکثر حجم هر تصویر 900 کیلو بایت می باشد-->
						<br>برای ارسال تصویر هر آگهی کافیست بروی هر کدام از دکمه های سبز رنگ کلیک کنید و سپس به راحتی 5 تصویر برای آگهی خود انتخاب کرده و بروی دکمه ثبت و ذخیره فایل های انتخاب شده کلیک نمایید
							<br>چنانچه آگهی شما قبلا تایید شده باشد با هر بار ویرایش تصویر توسط شما ، آگهی به بخش آگهی های در انتظار تایید ارسال خواهد شد تا دوباره توسط مدیر بازبینی و تایید شود
						<br>کلیه ی تصاویر ارسالی باید در ابعاد 600×800 و با رزولوشن 72 و بصورت افقی ارسال گردد
							<br>عکسهای آپلود شده باید با کیفیتی مطلوب و فاقد هرگونه نوشته و یاWater Mark  باشد 					</div>
				</td>

						<td width="100%" class="cell_message" height=35px;>
						<?php print $item_name?></td>
					</tr>

					<tr>
						<td width="100%" class="cell_message" height=30px;>
							<center>
	  				<?php if($msg!="") print "&nbsp;".$msg."&nbsp;";
	  				
					$upload_dir="images/amlak_pic";
					$pics_size="";
					if(isset($_POST["B1_PIC"])&&$_POST["item_id"]!="")
					{
					for($i=1;$i<=5;$i++)
					{
						$f_tmp_name = $_FILES['file_up'.$i]['tmp_name']; 
						if($f_tmp_name!="")
						{
							$f_name=$_FILES['file_up'.$i]['name']; 
							$f_size=$_FILES['file_up'.$i]['size']; 
							$max_size=2048576;

							//$image_info=getimagesize($_FILES['file_up'.$i]["tmp_name"]);
							//print $image_info[0]."<br>";
						//	print $image_info[1]."<br>";;
							$pics_size=$pics_size.$image_info[0].",".$image_info[1]."-";
							$id_file=$_POST["item_id"];
							$name1="vachar724_".$id_file."_larg_".$i.".jpg";
							
							$limit_ext=array(".jpg");
							//@@if ($i==1) // faghat aks yek kochek shavad
							//{
								$name2="vachar724_".$id_file."_small_".$i.".jpg";
								//@@$new_h_size=210;
								$new_w_size=175;
							//}	
							//else
							//{
							  //  $new_w_size=0;	
							   // $name2="";
							//} 
							   
							//@@$new_w_size=0;
							$new_h_size=0;
							$width=0;
							$height=0;
							$msg=upload_file($f_name,$f_tmp_name,$f_size,$max_size,$upload_dir,$name1,$name2,$limit_ext,$new_w_size,$new_h_size,$width,$height);
							
							if (trim(substr($msg,0,10))=="فایل")
							 	print "<br>&nbsp;<b><font color=#FFFFFF><span style='background-color: #33CC33'>&nbsp;نتیجه ارسال برای فایل شماره  ( $i )  $msg </span></font></b>&nbsp;<br>";
							else
								print "<br>&nbsp;<b><font color=#FFFFFF><span style='background-color: #ff0000'>&nbsp;نتیجه ارسال برای فایل شماره  ( $i )  $msg </span></font></b>&nbsp;<br>";
						}
					}// of for
					}
					?>
  						</center>
						</td>
					</tr>

					<tr>
						<td width="50%" align="center">
			<table border="0" width="30%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
<td align="center">
<div class="fileUpload btn btn-primary">
    <span id="file1">برای انتخاب تصویر شماره 1 اینجا کلیک کنید</span>
    <input type="file" class="upload" name="file_up1" onChange="selectfile(this.value,1);"/>
</div>
</td>
				</tr>
				<tr>
<td align="center">
<div class="fileUpload btn btn-primary">
    <span id="file2">برای انتخاب تصویر شماره 2 اینجا کلیک کنید</span>
    <input type="file" class="upload" name="file_up2" onChange="selectfile(this.value,2);"/>
</div>
</td>
				</tr>
					
					<tr>
<td align="center">
<div class="fileUpload btn btn-primary">
    <span id="file3">برای انتخاب تصویر شماره 3 اینجا کلیک کنید</span>
    <input type="file" class="upload" name="file_up3" onChange="selectfile(this.value,3);"/>
</div>
</td>
				</tr>
					
					<tr>
<td align="center">
<div class="fileUpload btn btn-primary">
    <span id="file4">برای انتخاب تصویر شماره 4 اینجا کلیک کنید</span>
    <input type="file" class="upload" name="file_up4" onChange="selectfile(this.value,4);"/>
</div>
</td>
				</tr>
					
					<tr>
<td align="center">
<div class="fileUpload btn btn-primary">
    <span id="file5">برای انتخاب تصویر شماره 5 اینجا کلیک کنید</span>
    <input type="file" class="upload" name="file_up5" onChange="selectfile(this.value,5);"/>
</div>
</td>
				</tr>
					
					<tr>
						<td align="right" class="btn_table">&nbsp;
</td>
					</tr>
					
					<tr>
						<td align="center" class="btn_table">
						<input type="submit" value="ثبت آگهی و ذخیره فایل های انتخاب شده " name="B1_PIC" id="B1_PIC"></td>
					</tr>
					</table>
						</td>
		</form>			
				</tr>
					
					<tr>

						<td width="30%" align="center">&nbsp;
							</td>
					</tr>
					
					<tr>
						<td width="30%" align="center" height="20">&nbsp;
							</td>
					</tr>
							
					<?php if ($reg_price>0){?>		
					<form method=post action="admin_pay_adver_price.php">
					<input type=hidden name="item_id" id="item_id" value="<?php print $item_id?>">
					<input type=hidden name="pay_price" id="pay_price" value="<?php print $reg_price?>">
<!------------------------------------------------------------------------------------>					
					<input type=hidden name="babat" id="babat" value="6"> <!-- آگهی املاک--->
<!------------------------------------------------------------------------------------>					
					<input type=hidden name="step" id="step" value="ximsd">
						<tr>
						<td width="30%" align="center">
							هزینه ثبت این آگهی برابراست با : <b>
							<font color="#CC0066"><?php print pool($reg_price)?></font></b> ریال</td>
					  </tr>
				    <tr>						</tr>
					
						<tr>
							<td width="30%" align="center">&nbsp;
							</td>
						</tr>
					
						<tr>
							<td width="30%" align="center">
							<input type="image" src="images/melat.png" value="اتصال به درگاه بانک و پرداخت هزینه ثبت آگهی" name="b1"></td>
					  </tr>
					</form>
<?php }?>
							
							
					
						<tr>
							<td width="30%" align="center">&nbsp;
								</td>
							
						</tr>
							
							
					
						<tr>
							<td width="30%" align="center">
								<input type="button" value="<?php if($reg_price>0) print 'هزینه را بعدا می پردازم ، برو به ثبت آگهی جدید'; else print 'برو به ثبت آگهی جدید'?>" name="b2" onClick="window.location.href='admin_user_reg_amlak_master.php';">
							</td>
							
						</tr>
				<tr>
						<td align="left" width="100%" class="cell_submit">&nbsp;
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
</div>
<p>&nbsp;</p>
<script language="javascript">
function selectfile(file_name,num)
 {
	//$('#file'+num).fadeIn(400).appned('background: #ff0000');
	$('#file'+num).fadeIn(400).html(file_name);

};
//=========================================================
 $( document ).ready(function() {
	$(".cell_roul_data").slideToggle('fast');
});
//=========================================================

//===============================================
function roul_click()
{
	//alert("asd");
	$(".cell_roul_data").slideToggle('slow');
	//$(".cell_roul").toggle(); 
}
</script>

</body>