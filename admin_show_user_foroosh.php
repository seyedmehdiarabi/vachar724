<?php include "header_admin_page.php";
$form_title="";
$tbl_name="tbl_user_info";
$page_id=48;
$form_title="اطلاعات کالاهای فروخته شده توسط شما";
access_page1($page_id,$_SESSION["s_user_type_id"]);

$str_sql="SELECT
   `tbl_recive_order_detail`.`auto_id`,`tbl_recive_order_detail`.`f1`, `tbl_recive_order_detail`.`f2`,
  `tbl_recive_order_detail`.`f3`, `tbl_recive_order_detail`.`f4`,
  `tbl_recive_order_detail`.`f5`, `tbl_recive_order_detail`.`f6`,
  `tbl_recive_order_detail`.`f7`, `tbl_recive_order_detail`.`f8`,
  `tbl_recive_order_detail`.`f9`, `tbl_recive_order_detail`.`f10`,
  `tbl_recive_order_detail`.`f11`, `tbl_recive_order_detail`.`f12`,
  `tbl_recive_order_detail`.`f13`, `tbl_recive_order_detail`.`f14`,
  `tbl_recive_order_detail`.`f15`, `tbl_recive_order_detail`.`f16`,
  `tbl_recive_order_master`.`f4` as sell_date,
  `tbl_recive_order_master`.`f5` as sell_time, `tbl_item_info`.`f2` as item_malek,`tbl_item_info`.`f19` as item_reg_date,`tbl_item_info`.`f3` as item_name, `tbl_item_info`.`f5` as item_type,
  `tbl_item_info`.`f6` as item_sell_type, `tbl_item_info`.`f7` as item_poster
FROM
  `tbl_item_info` RIGHT JOIN
  `tbl_recive_order_detail` ON `tbl_recive_order_detail`.`f2` =
    `tbl_item_info`.`auto_id` LEFT JOIN
  `tbl_recive_order_master` ON `tbl_recive_order_detail`.`f1` =
   `tbl_recive_order_master`.`auto_id`  where `tbl_item_info`.`f2`='$_SESSION[s_user_id]' order by `tbl_recive_order_master`.`auto_id` desc";
  //print $str_sql;
	$re = mysql_query($str_sql);
	$i=1;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script type="text/javascript" src="js/jquery.lazyload-any.js"></script>
<body>
<p>&nbsp;</p>
<div align="center">
<div class="main_form">
<form method="POST" action="" name="frm1" id="frm1">
	<table class="tbl_1_border" dir="rtl">
						<tr>
						<td align="center" width="100%"  colspan="4"><div class="cell_step"><?php print $form_title?></div></td>
					</tr>

		<tr>
			<td align="center">
<?php 
		while($row = mysql_fetch_array($re))
		{  
			if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
			
if($row["f10"]==0)
	$post_method="پست با فروشنده";
else if($row["f10"]==1)
	$post_method="پس کرایه - تیپاکس";
else if($row["f10"]==2)
	$post_method="پس کرایه-باربری";
else if($row["f10"]==3)
	$post_method="آنلاین-پیشتاز";
else	
	$post_method="پس کرایه-تیپاکس";	
		
			
	?>
			
				<div align="center" class="lazyload1">
					<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" id="tbl_kadr">
								<tr>
									<td width="91%" colspan="4" align="center" class="row_item_title" id="row_title<?php print $row[item_id]?>" onclick="toggle_row('<?php print $row[item_id]?>')">
									<?php print $row["item_name"]." - شماره فاکتور خرید : <font color=#CC0066>". $row["f1"]."، </font> شماره ردیف در فاکتور : <font color=#CC0066>". $row["auto_id"]."</font>"?></td>
								</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" class="item_info" cellpadding="0" id="row_item<?php print $row[item_id]?>" >
								<tr>
									<td width="10%" rowspan="15" align="center">
									<img border="0" src="images/items_pic/<?php print $row[f2]?>_small_1.jpg" width="80" ></td>
									<td align="right" width="31%"> 
									تاریخ ثبت کالا در سایت :<font color="#CC0066"> 
									<?php print $row["item_reg_date"]  ?></font></td>
									<td align="right" width="25%">نوع فروش :<font color="#CC0066"> 
									<?php if($row["item_sell_type"]=="1") print "نقدی"; else if($row["item_sell_type"]=="2") print "مزایده ای"; ?></font></td>
									<td align="right" width="24%">قیمت :<font color="#CC0066"> <?php print pool($row["f3"])?></font> ریال</td>
								</tr>
								<tr>
									<td align="right" width="31%"> 
									نوع کالا :<font color="#CC0066">
<?php if($row["item_type"]=="1") print "نو آکبند"; ?> 
<?php if($row["item_type"]=="2") print "نو غیرآکبند"; ?> 
<?php if($row["item_type"]=="3") print "دست دوم"; ?> 
</font></td>
									<td align="right" width="25%">وزن کالا :<font color="#CC0066"> 
									<?php print $row["f8"]; ?></font></td>
									<td align="right" width="24%">قیمت همکار :<font color="#CC0066"><?php print pool($row["f4"])?></font> ریال</td>
								</tr>
								<tr>
									<td align="right" width="31%">
									تعداد :
									<font color="#CC0066"><?php print $row["f5"]?></font> 
									عدد</td>
									<td align="right" width="25%">تاریخ فروش :<font color="#CC0066"> 
									<?php print $row["sell_date"]  ?></font></td>
									<td align="right" width="24%">&nbsp;</td>
								</tr>
								<tr>
									<td align="right" width="80%" colspan="3">
									پیام مدیر : <font color=#CC0066><?php print $row["f7"]?></font></td>
								</tr>
								<tr>
									<td align="right" width="80%" colspan="3" class="post_title">
									اطلاعات مربوط به پست کالا</td>
								</tr>
								<tr>
									<td align="right" width="31%">تاریخ تحویل به 
									پست :<font color="#CC0066"> 
									<?php print $row["f11"] ; ?></font></td>
									<td align="right" width="25%">نوع پست :<font color="#CC0066"> 
									<?php print $post_method ; ?></font></td>
									<td align="right" width="24%">
									 تاریخ تحویل مشتری :<font color="#CC0066"><?php print $row["f14"] ; ?></font> </td>
								</tr>
								<tr>
									<td align="right" width="31%">شماره پیگیری 
									پست :<font color="#CC0066"> 
									<?php print $row["f12"] ; ?></font></td>
									<td align="right" width="25%">هزینه پست :<font color="#CC0066"><?php print pool($row["f9"])?></font> ریال</td>
									<td align="right" width="24%">
									نحوه تایید تحویل :<font color="#CC0066"><?php print $row["f16"]?></font> </td>
								</tr>
								<!--
								<tr>
									<td align="right" width="80%" colspan="3">
									پیام مشتری پس از تحویل :<font color="#CC0066"><?php print $row["f15"] ; ?></font> </td>
								</tr>
								-->
								<?php if ($row["f11"]==""){ ?>
								<div id="gereftom_info">
								<tr>
									<td align="right" width="80%" colspan="3" class="post_title">
									فروشنده گرامی لطفا پس از تحویل کالا به پست&nbsp; اطلاعات 
									زیر را تکمیل نموده و بروی دکمه ثبت اطلاعات کلیک کنید</td>
								</tr>
								<tr >
									<td align="center" width="31%">تاریخ تحویل 
									به پست :</td>
									<td align="center" width="49%" colspan="2">
									شماره پیگیری پست :</td>
								</tr>
								<tr>
									<td align="center" width="31%">
									<input type="text" name="t_f11_<?php print $row[auto_id]?>" id="t_f11_<?php print $row[auto_id]?>" size="20"></td>
									<td align="center" width="49%" colspan="2">
									<input type="text" name="t_f12_<?php print $row[auto_id]?>" id="t_f12_<?php print $row[auto_id]?>" size="42"></td>
								</tr>
								<tr>
									<td align="center" width="31%">
									نوع پست :</td>
									<td align="center" width="49%" colspan="2">
									توضیح اضافه شما در مورد پست کالا :</td>
								</tr>
								<tr>
									<td align="center" width="31%">
									<input type="text" name="t_f10_<?php print $row[auto_id]?>" id="t_f10_<?php print $row[auto_id]?>" size="20"></td>
									<td align="center" width="49%" colspan="2">
									<input type="text" name="t_f13_<?php print $row[auto_id]?>" id="t_f13_<?php print $row[auto_id]?>" size="42"></td>
								</tr>
								<tr>
									<td align="right" width="61%" colspan="3">
									<div align="center">
									<table border="0" width="50%" cellspacing="0" cellpadding="0">
										<tr>
											<td align="center" width="100%">
											<img border="0" src="images/aseman_barasi.png"  style="cursor: pointer;" width="25" onclick="ferestiyom(<?php print $row[auto_id]?>);">
											ثبت اطلاعات  <span id="edit_loader"></span>
											</td>
										</tr>
									</table>
											
									</td>
								</tr>
								</div>								
								<?php }?>
								<tr>
									<td align="right" width="80%" colspan="3">
									<table border="0" width="100%" id="tbl_factor" cellpadding=1px cellspacing=1px>
									<caption>مبالغ پرداختی به شما بابت فروش این کالا</caption>
										<tr>
											<th align="center" width="5%">ردیف</th>
											<th width="10%">تاریخ&nbsp; </th>
											<th width="10%">ساعت</th>
											<th width="10%">
											مبلغ</th>
											<th width="15%">
											کدرهگیری</th>
											<th width="45%">
											شرح</th>
										</tr>
<?php 
$str_sql="SELECT  `tbl_payment`.`f4` AS `pay_date`, `tbl_payment`.`f5` AS `pay_time`,`tbl_payment`.`f6` AS `pay_method`,
		 `tbl_payment`.`f9` AS `pay_code`,`tbl_payment`.`f3` AS `pay_price`
		FROM
		  `tbl_payment` where f7=4 and f8='$row[f1]' and f2='$_SESSION[s_user_id]' order by auto_id";
//print $str_sql;
$re2 = mysql_query($str_sql);
		$i=0;
		$sum_pay=0;
		while($row2= mysql_fetch_array($re2))
		{
			$sum_pay+=$row2["pay_price"];
		?>
										<tr>
											<td align="center" width="5%"><?php print $i++?></td>
											<td align="center" width="10%">
											<?php print $row2["pay_date"]?></td>
											<td align="center" width="10%"><?php print $row2["pay_time"]?></td>
											<td align="center" width="10%"><?php print pool($row2["pay_price"])?> 	ریال</td>
											<td align="center" width="15%"><?php print $row2["pay_code"]?></td>
											<td align="center" width="45%">&nbsp;</td>
										</tr>
<?php } // of while?>										
										<tr >
											<td align="left" width="100%" colspan="6" >
											&nbsp;</td>
										</tr>
										<tr >
											<td align="center" width="98%" colspan="6" class="select_for_pay">
											مجموع پرداختی ها بابت فروش این کالا : <font color=#CC0066><b> <?php print pool($sum_pay)?> </b></font>   ریال</td>
										</tr>
									</table>
									
									</td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					<br>
				</div>
				<?php } ?>
			</td>
		</tr>
	</table>
	</form>			
</div>
</div>
<script language="javascript">
function ferestiyom(id)
{

	var f10=document.frm1.elements['t_f10_'+id].value;
	var f11=document.frm1.elements['t_f11_'+id].value;
	var f12=document.frm1.elements['t_f12_'+id].value;
	var f13=document.frm1.elements['t_f13_'+id].value;
	
var dataString = 'f10='+f10+'&f11='+f11+'&f12='+f12+'&f13='+f13+'&id='+id;
  $("#edit_loader").show();
  $("#edit_loader").fadeIn(400).html('<img src="images/aseman_loading.gif" >');
  $.ajax({
     type: "POST",
     url: "ajaxferstiyomkalare.php",
     data: dataString,
     cache: false,
     success: function(result){
	 // $("#edit_loader").fadeIn(400).html(result);
      $("#gereftom_info").hide();
	  $("#edit_loader").hide();
     }
   });

}

function toggle_row(id)
{
	if ($('#row_item'+id).is(':visible'))
	{
		 $('#row_title'+id).css('background','url(images/arrow_down.png) ');
	}	 
	else
	{
		$('#row_title'+id).css('background','url(images/arrow_up.png) ');
	}	
		 	$('#row_item'+id).slideToggle('slow');		
}
//====================================
$('.lazyload').lazyload({
  // Sets the pixels to load earlier. Setting threshold to 200 causes image to load 200 pixels
  // before it appears on viewport. It should be greater or equal zero.
  threshold: 200,

  // Sets the callback function when the load event is firing.
  // element: The content in lazyload tag will be returned as a jQuery object.
  load: function(element) {},

  // Sets events to trigger lazyload. Default is customized event `appear`, it will trigger when
  // element appear in screen. You could set other events including each one separated by a space.
  trigger: "appear"
});
</script>

</body>