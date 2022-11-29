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
var f_date_name="";
var first_f="auto_id";
var no_empty=new Array("auto_id")
var test_array=new Array(1,0);
var onload_array=new Array(1,0,1);
</script>
<script lang="javascript">
 $( document ).ready(function() {
	$(".cell_roul_data").slideToggle('fast'); 
  	$('.item_info').slideToggle('fast'); 
  //	$('.item_info').css('background','url(images/arrow_up.png) ');
});
</script>
<?php
$tbl_name="tbl_item_info";
$f_count=31;
$msg='';
$page_id=18;
$form_title="مديريت تصاویر کالاهاي فروشگاه";
$grid_title="ليست کالاهاي تعريف شده";
//$col1_title="عنوان کالا";
//$col2_title="قيمت";
//$col1_grid="f2";
//$col2_grid="f3";
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
						<td align="center" width="100%"  colspan="4">
						<div class="cell_roul" align=center onclick="roul_click();">
						برای
						مطالعه قوانین و نکات این بخش اینجا کلیک کنید</div>
						<div class="cell_roul_data" dir=rtl>
							پسوند فایل قابل قبول برای این بخش "jpg" می باشد
						<!--<br>حداکثر حجم هر تصویر 900 کیلو بایت می باشد-->
						<br>برای ویرایش تصویر هر کالا کافیست بروی دکمه سبز رنگ کنار هر کالا کلیک کنید تا کالا به کادر بالا منتقل شود سپس براحتی 5 تصویر برای کالای خود انتخاب کرده و بروی دکمه ارسال تصاویر کلیک کنید
							<br>چنانچه کالای شما قبلا تایید شده باشد با هر بار ویرایش تصویر توسط شما کالا به بخش کالاهای در انتظار تایید ارسال خواهد شد تا دوباره توسط مدیر بازبینی و تایید شود
						<br>کلیه ی تصاویر ارسالی باید در ابعاد 600×800 و با رزولوشن 72 باشد و اولین تصویر هر کالا باید بصورت افقی ارسال گردد
							<br>عکسهای آپلود شده باید با کیفیتی مطلوب و از خود کالا گرفته شده باشد و فاقد هرگونه نوشته و یاWater Mark  باشد و حتی المقدور معایب محصول شامل ضربه خوردگی، خط و خش و .... در تصاویر ارسالی نمایان باشد
							<br>استفاده از عکس‌های اینترنتی (به استثنای تصویر اول و همچنین کالاهایی که بصورت نو آکبند می باشند) جهت ثبت کالاها مجاز نمی‌باشد و در صورت استفاده، کالا جهت نمایش در فروشگاه تایید نخواهد شد

						</div>
					</td>
						</tr>
			
			
				<tr>
					<td align="center" width="100%" colspan="4" height="20" class=tbl_msg_row>
					<span  class=tbl_msg>
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp;";
					$upload_dir="images/items_pic";
					$pics_size="";
					if(isset($_POST["B1_PIC"])&&$_POST["auto_id"]!="")
					{
					mysql_query("update tbl_item_info set f23='0' where auto_id=$_POST[auto_id]");
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
							$id_file=$_POST["auto_id"];
							$name1=$id_file."_larg_".$i.".jpg";
							
							$limit_ext=array(".jpg");
							//@@if ($i==1) // faghat aks yek kochek shavad
							//{
								$name2=$id_file."_small_".$i.".jpg";
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
							print " ( $i )> ".$msg."  ";
							if ($msg==" فایل با موفقیت ارسال شد ")
							{
								$fld_name="4".$i-1;
								$fld_name="f".$fld_name;
								$f_val=$width.",".$height;
								mysql_query("update tbl_item_info set $fld_name='$f_val' where auto_id=$_POST[auto_id]");
							}	
						}
					}// of for
					
					}
					{
						if($msg=="عملیات حذف با موفقیت انجام شد")
						{	
							
							$id_file=$_GET["auto_id"];
							for($i=1;$i<=5;$i++)
							{
								$name1=$id_file."_larg_".$i.".jpg";
								if (is_file($upload_dir."/".$name1))
									delete_file($upload_dir."/".$name1);
							}	
							
							$name2=$id_file."_small_1.jpg";
							if (is_file($upload_dir."/".$name2))
								delete_file($upload_dir."/".$name2);
						}	
					
					}
					
					?>
					 </span></td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="4">&nbsp;</td>
					</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&#1645;</td>
<td align="right" width="20%" class="auto_id_row">کد (خودکار درج مي شود)</td>
<td align="right" width="43%" class="auto_id_row">
<input type="text" name="auto_id" size="20" dir="ltr"  <?php if(isset($_GET["edit"])) print "value=".$selected_row[auto_id]; ?>></td>
<td align="right" width="32%" class="auto_id_row">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%"  colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">نام کالا :</td>
<td align="right" width="43%" class="dirooz">
<input type="text" name="f3" size="51" dir="rtl" readonly=true  <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f3].'"';?>><td align="right" width="32%" class="dirooz">&nbsp;</td>
</tr>
<!--<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">تعداد عکس :</td>
<td align="right" width="43%" class="dirooz">
<input type="text" name="f16" size="51" dir="rtl" readonly=true  <?php if(isset($_GET["edit"])) print 'value="'.$selected_row[f16].'"';?>><td align="right" width="32%" class="dirooz">&nbsp;</td>
</tr>
-->
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">فایل تصویر 1 :</td>
<td align="right" width="43%" class="dirooz">
<input type="file" name="file_up1" size="60" dir="ltr" ></td>
<td align="right" width="32%" class="dirooz">
&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">&nbsp;</td>
</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">فایل تصویر 2 :</td>
<td align="right" width="43%" class="dirooz">
<input type="file" name="file_up2" size="60" dir="ltr" ></td>
<td align="right" width="32%" class="dirooz">
&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">&nbsp;</td>
</tr>
					
					<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">فایل تصویر 3 :</td>
<td align="right" width="43%" class="dirooz">
<input type="file" name="file_up3" size="60" dir="ltr" ></td>
<td align="right" width="32%" class="dirooz">
&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">&nbsp;</td>
</tr>
					
					<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">فایل تصویر 4 :</td>
<td align="right" width="43%" class="dirooz">
<input type="file" name="file_up4" size="60" dir="ltr" ></td>
<td align="right" width="32%" class="dirooz">
&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">&nbsp;</td>
</tr>
					
					<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">فایل تصویر 5 :</td>
<td align="right" width="43%" class="dirooz">
<input type="file" name="file_up5" size="60" dir="ltr" ></td>
<td align="right" width="32%" class="dirooz">
&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="farda" colspan="4">
<img border="0" src="images/sp_forms.gif" width="50" height="13"></td>
</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="20%" class="btn_table">&nbsp;</td>
						<td align="right" width="43%" class="btn_table">
<img border="0" src="images/sp_forms.gif" width="50" height="13"></td>
						<td align="right" width="32%" class="btn_table">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="center" width="5%" class="btn_table">&nbsp;</td>
						<td align="right" width="20%" class="btn_table">&nbsp;</td>
						<td align="right" width="43%" class="btn_table">
<input type="submit" onclick= "return aseman_test();" 
<?php if(isset($_GET["edit"])) print 'value= "ارسال تصاویر کالا" name=B1_PIC';  else print 'value="ارسال تصاویر کالا" name="B1_PIC"'?> >
<span lang="en-us">&nbsp;
						</span>&nbsp;</td>
						<td align="right" width="32%" class="btn_table">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" width="100%" class="btn_table" colspan="4" class="tbl_last_row">
<table border="1" width="90%" cellspacing="0" cellpadding="0" style="border-collapse: collapse">
	<tr>
		<?php 
		if(isset($_GET["edit"])) 
		{
			for($i=1;$i<=5;$i++)
			{
				$p_name="images/items_pic/$selected_row[auto_id]_larg_".$i.".jpg";
				if (!is_file($p_name)) $p_name="images/items_pic/adver_no_pic_small_1.jpg";
				?>
				<td align="center" width="20%">
				<img border="0" src="<?php print $p_name?>" width="100" ></td>
				<?php 
			} // enf of for
		}	// end of if
		?>
	</tr>
</table>
						</td>
					</tr>
				</table>
				</form>
				</td>
			</tr>
			</tr>
			</td>
				<tr>
				<td align=center>
<!--============================-->
<?php
$col1_title="نام کالا";
$col2_title="گروه";
$col3_title="قیمت کالا";
$col3_5_title="هزینه ثبت";
$col4_title="مشخصات فنی";
$col5_title="وضعیت تایید";
$col6_title="کد پرداخت هزینه";
$col7_title="پیش نمایش";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<table  id= "tbl_grid" border="0" width="100%" cellpadding="0" cellspacing="0"   >
<form name="frm_grid" id="frm_grid"  method="POST" action="<?php print $_SERVER["PHP_SELF"];?>" >
<tr>
<td class= "aseman_grid_tite" width="100%" align="center" height="23"  colspan="7"   >
<?php print $grid_title?></td>
</tr>
													<tr>
</td>
<td class= "aseman_grid_btn" width="5%" align="right" height="23"   >
													&nbsp;</td>
<td class= "aseman_grid_btn" width="7%" align="right" height="23"   >
													&nbsp;</td>
<td class= "aseman_grid_btn" width="369" align="right" height="23"   >
													&nbsp;</td>
<td class= "aseman_grid_btn" width="308" align="right" height="23"   >
													&nbsp;</td>
<td class= "aseman_grid_btn" width="10%" align="right" height="23"   >
													&nbsp;</td>
<td class= "aseman_grid_btn" width="10%" align="right" height="23"   >
													&nbsp;</td>
<td class= "aseman_grid_btn" width="7%" align="right" height="23"   >
													&nbsp;</td>
													</tr>
													<tr>
<td class= "aseman_grid_col_title" width="5%" align="right" height="23"   >
													&nbsp;</td>
<td class= "aseman_grid_col_title" width="7%" align="right" height="23"   >
												ویرایش</td>
<td class= "aseman_grid_col_title" width="369" align="right" height="23"   >
<?php print $col1_title;?></td>
<td class= "aseman_grid_col_title" width="308" align="right" height="23"   >
<?php print $col2_title;?></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
<?php print $col3_title;?></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
<?php print $col3_5_title;?></td>
<td class= "aseman_grid_col_title" width="7%" align="right" height="23"   >
<?php print $col7_title;?>

</td>
</tr>
	<?php
$sort_field="auto_id " ;
$sort_type="desc";
$col1_grid="item_name";
$col2_grid="group_name";
$col3_grid="item_price";
$col3_5_grid="f26";
$col4_grid="مشخصات فنی";
$col5_grid="admin_allow";
$col6_grid="price_code";
$col7_grid="پیش نمایش";




$_SESSION["im_id"]=null;
session_unregister("im_id");

// اسامی کالاهای فروخته نشده فروشنده

$str_sql="SELECT
  `tbl_item_info`.`auto_id`, `tbl_item_info`.`f3` as item_name, `tbl_item_info`.`f4` as item_price, `tbl_item_info`.`f8` as item_tec,
  `tbl_item_info`.`f23` as admin_allow, `tbl_item_info`.`f25` as price_code, `tbl_item_sub_group`.`f2` as sub_name,
  `tbl_item_group`.`f1` as group_name,`tbl_item_info`.`f26`
FROM
  `tbl_item_info` LEFT JOIN
  `tbl_item_sub_group` ON `tbl_item_info`.`f1` = `tbl_item_sub_group`.`auto_id`
  RIGHT JOIN
  `tbl_item_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id`  where `tbl_item_info`.`f2`='$_SESSION[s_user_id]'  order by ".$sort_field." ".$sort_type;
  

	$re = mysql_query($str_sql);
	$i=1;
	while($row = mysql_fetch_array($re))
	{  if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
													
<tr >
<td width="5%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="7%" align="right" class="<?php print $class_name; ?>" >
<a href="?edit&auto_id=<?php print $row["auto_id"]; ?>" style="text-decoration: none; color: #16387C" >
<img border="0" src="images/aseman_edit.png" width="40" ></a></td>
<td width="369" align="right" class="<?php print $class_name; ?>"    title="<?php print $row[$col1_grid]?>">
<?php print $row[$col1_grid]?>
</td>
<td width="308" align="right" class="<?php print $class_name; ?>"    title="<?php print $row["group_name"]."،".$row["sub_name"]?>">
<?php print $row["group_name"]."،".$row["sub_name"]?></td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<?php print pool($row[$col3_grid]); ?></td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<?php print pool($row["f26"]); ?></td>
</td>
<td width="7%" align="right" class="<?php print $class_name; ?>"    >
<a target=_blank href="show_item_pre.php?item_id=<?php print $row["auto_id"]; ?>">پیش نمایش</a>
</td>
</tr>
<?php }
?>
													
<tr >
<td width="5%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="7%" align="right" class="<?php print $class_name; ?>" >
&nbsp;</td>
<td width="369" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="308" align="right" class="<?php print $class_name; ?>"    title="<?php print $row["group_name"]."،".$row["sub_name"]?>">
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="7%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
</tr>
</table>
</form>
<!--============================-->
		
				</td>
			</tr>
				<tr>
				<td align=center>
				<?php //include "footer.php"?></td>
			</tr>
			</table>
		</table>
			</div>
</body>
<script language="javascript">
function roul_click()
{
	//alert("asd");
	$(".cell_roul_data").slideToggle('slow');
	//$(".cell_roul").toggle(); 
}
</script>
</html>			