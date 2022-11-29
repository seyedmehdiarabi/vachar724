<?php 
include "header_admin_page.php";
$page_id=48;
access_page1($page_id,$_SESSION["s_user_type_id"]);
?>
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script lang="javascript">
$( document ).ready(function() 
{
	$('.first_hide').toggle(); 
	
});

function jamsho(str_row)
{
// alert(str_row)
//if (str_row!='1')
$('.first_hide').show(); 
$(str_row).toggle(); 
//$(s_id).slideToggle('slow');

/*if ($(str_row).is(':visible'))
 $(str_row).css('background-image','url(images/arrow_down2.png)');
else
 $(str_row).css('background-image','url(images/arrow_up2.png)');
*/
};
//============================================
function edit_row(edt_name)
{
// alert(edt_name);
// $('.txt_'+edt_name).css({'background' : '#ffffff'});
 $(edt_name).css({'background' : '#ffffff'});
//$(s_id).slideToggle('slow');
};

//---------------------------------------
function update_row(tbl_name,fld_name,row_id,fact_id)
{
if (fact_id!=0&&fact_id!=-1)
 fld_val=document.frm_show_order.elements["t_"+fld_name+"_"+fact_id].value;  
else
 fld_val=fact_id*-1;

//alert(fld_val);

//$("#img_factor"+factor_id).show();
//$("#img_factor"+factor_id).fadeIn(400).html('<img src="images/aseman_loading.gif" >');
$.ajax({
type: "POST",
url: "ajaxavazkondetailfact.php",
data :({
                    fld_val:fld_val,
                    fld_name:fld_name,
                    row_id:row_id,
                    tbl_name:tbl_name
       }),
cache: true,
success: function(data){
//alert(data);
$('#test').html(data);
/*
$('#f_status_'+factor_id).html(res);
$('#f_status_'+factor_id).show();
$("#img_factor"+factor_id).hide();
}
else
{
$("#img_factor"+factor_id).hide();
$("#img_factor"+factor_id).fadeIn(400).html('<img src="images/ok.gif" >');
$("#img_factor"+factor_id).show();
}*/

}
})
}
//----------------------------------------

</script>
</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" dir=rtl >
<p id="test">&nbsp;</p>
<form method="POST" action="" name=frm_show_order id=frm_show_order>
<div align="center">
<?php 
//___________________________________SELECT DETAIL FACTOR____________________________________
$str_sql="SELECT `tbl_recive_order_detail`.`auto_id` as sell_id, 
`tbl_recive_order_detail`.`f2` as item_id, `tbl_recive_order_detail`.`f3` as item_price,
 `tbl_recive_order_detail`.`f4` as item_seller_des, `tbl_item_info`.`f2` as shopper_id,
  `tbl_item_info`.`f3` as item_name,`tbl_item_info`.`f5` as item_status1,`tbl_item_info`.`f6` as item_status2,
   `tbl_item_info`.`f24`,`tbl_item_info`.`f34` , `tbl_item_info`.`f35`  , `tbl_item_info`.`f36` , `tbl_item_info`.`f37` ,
   `tbl_item_info`.`f38`  ,`tbl_item_info`.`f39` , `tbl_item_info`.`f40` , `tbl_item_info`.`f41` ,
     `tbl_item_info`.`f42` , `tbl_item_info`.`f43` ,`tbl_item_info`.`f44` , `tbl_item_info`.`f45` ,`tbl_item_info`.`f46` ,
        `tbl_item_info`.`f47` , `tbl_item_info`.`f48` , `tbl_item_info`.`f49` , `tbl_item_info`.`f50` ,  `tbl_item_info`.`f53`,`tbl_item_info`.`f54`,
 `tbl_item_info`.`f51` , `tbl_user_info`.`f3` as shopper_name, `tbl_user_info`.`f6` as shopper_mobil,`tbl_user_info`.`f7` as shopper_address 
 FROM `tbl_item_info` RIGHT JOIN `tbl_recive_order_detail` ON `tbl_recive_order_detail`.`f2` = `tbl_item_info`.`auto_id` LEFT JOIN `tbl_user_info` ON `tbl_item_info`.`f2` = `tbl_user_info`.`auto_id` 
 where `tbl_item_info`.`f2`='$_SESSION[s_user_id]'  order by `tbl_recive_order_detail`.`auto_id` ";

$d_num=0;
//print $str_sql;
$re2=mysql_query($str_sql);  
?>
<table border="1" width="90%" cellpadding="0" dir="rtl" style="border-collapse: collapse" class="lazy" bordercolor="#FFB66C">
		<tr >
			<td align="center" valign="top" >
			<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="tbl_main">
				<?php 
while($row2=mysql_fetch_array($re2))
{

	$d_num++;
	$cls=$row["fact_id"]."_".$d_num;
?>
				<tr  class="first_hide">
					<td >
					<table border="1" class="tbl_fact_detail_<?php print $row[fact_id]?>"  width="100%" cellpadding="2" style="border-collapse: collapse; font-family:B yekan; font-size:13px; font-color:#000000" bordercolor="#FFD5AA">
						<tr style="cursor: pointer;" >
							<td class="d_h" align="center" width="100%" colspan="5" bgcolor="#EAEBEB" style="background-color: #FFB66C" onclick="jamsho('#tbl_item_fact_<?php print $cls ?>');" >
							<b><?php print $row2["item_status1"]?></b></td>
						</tr>
<tr><td colspan=5><table width=100% id="tbl_item_fact_<?php print $cls ?>">
						<tr style="cursor: pointer;" onclick="jamsho('#item_info_<?php print $cls ?>')" >
							<td align="center" width="20%" bgcolor="#FFC488"  >
							<b>نام کالا</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>مشخصات</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>شرح خریدار</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>فروشنده</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>وضعیت جاری</b></td>
						</tr>
						<tr  id="item_info_<?php print $cls ?>">
							<td align="center" width="20%"><img border="0" src="images/items_pic/<?php print $row2[item_id]?>_small_1.jpg" width="100" ></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" ><p><?php print pool($row2["item_price"])?> ریال</p>	<p><?php print $row2["item_status1"]." , ".$row2["item_status2"]?></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" ><?php print $row2["item_seller_des"]?></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" ><?php print $row2["shopper_name"]?><p><?php print $row2["shopper_mobil"]?></td>
							<td width="20%" align="right" bgcolor="#FFEBD7">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td><img border="0" src="images/aseman_tik.gif" width="15" height="14"> در انتظار ارسال</td>
								</tr>
								<tr>
									<td><img border="0"  src="images/<?php $lev=1; if($row2[f34]==0||$row2[f34]=='') print 'aseman_notik';else {$lev++; print 'aseman_tik';}?>.gif" width="15"> فروشنده ارسال کرد</td>
								</tr>
								<tr>
									<td>
									<img border="0" src="images/<?php if($row2[f38]==0||$row2[f38]=='') print 'aseman_notik';else {$lev++;print 'aseman_tik';}?>.gif" width="15" height="14"> 
									تحویل خریدار شد</td>
								</tr>
								<tr>
									<td>
									<img border="0" src="images/<?php if($row2[f42]==0||$row2[f42]=='') print 'aseman_notik';else {$lev++; print 'aseman_tik'; }?>.gif" width="15"> 
									تسویه حساب شد</td>
								</tr>
								<tr>
									<td>
									<img border="0" src="images/<?php if($lev<4) print 'aseman_notik';else  print 'aseman_tik'; ?>.gif" width="15" height="15"> 
									بسته شد</td>
								</tr>
								<tr>
									<td>
									<img border="0" src="images/aseman_err.png" width="15" height="15"> 
									کنسل شد</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr style="cursor: pointer;"  onclick="jamsho('.send_info_fact_<?php print $cls ?>')">
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>اطلاعات&nbsp; ارسال</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>نحوه ارسال</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>تاریخ تحویل به پست / 
							هزینه</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>شماره پیگیری پست</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							&nbsp;</td>
						</tr>
						<tr  class="send_info_fact_<?php print $cls ?>">
							<td width="20%" align="center" bgcolor="#FFC488" >
							<img style="cursor: pointer;" border="0" src="images/aseman_barasi.png" width="25" onclick="edit_row('.txt_send_info_fact_<?php print $cls ?>')"></td>
							<td width="20%" align="center" bgcolor="#FFE4CA" ><?php print $row2["f24"]?></td>
							<td width="20%" align="center" bgcolor="#FFE4CA" ><?php print $row2["f36"] ." - ". pool($row2["f53"])?>	</td>
							<td width="20%" align="center" bgcolor="#FFE4CA" ><?php print $row2["f35"]?></td>
						<td width="20%" align="center" bgcolor="#FFE4CA" >&nbsp;</td>
						</tr>
						<tr  class="send_info_fact_<?php print $cls ?>">
							<td width="20%" align="center" bgcolor="#FFC488" >
							&nbsp;</td>
							<td width="60%" align="center" colspan="3" bgcolor="#FFE4CA" ><?php print $row2["f37"]?></td>
							<td width="20%" align="center" bgcolor="#FFE4CA" >
							&nbsp;</td>
						</tr>
						<tr style="cursor: pointer;"  onclick="jamsho('.rec_info_fact_<?php print $cls ?>')">
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>اطلاعات 
							تحویل</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>تاریخ تحویل</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>نحوه تایید تحویل</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>گزینه فرضی</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							&nbsp;</td>
						</tr>
						<tr  class="rec_info_fact_<?php print $cls ?>">
							<td width="20%" align="center" bgcolor="#FFC488" >
							<img style="cursor: pointer;" border="0" src="images/aseman_barasi.png" width="25" onclick="edit_row('.txt_rec_info_fact_<?php print $cls?>')"></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" >
							<input type="text" name="t_39_<?php print $cls?>" id="t_39_<?php print $cls?>" onchange="update_row('tbl_item_info','39','<?php print $row2[item_id]?>','<?php print $cls?>');"  size="20" class="txt_rec_info_fact_<?php print $cls?>" value="<?php print $row2[f39]?>"></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" ><?php print $row2[f54]?></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" >
							<input type="text" name="t__<?php print $cls?>" id="t__<?php print $cls?>"size="20" class="txt_rec_info_fact_<?php print $cls?>"></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" >
							&nbsp;</td>
						</tr>
						<tr  class="rec_info_fact_<?php print $cls ?>">
							<td width="20%" align="center" bgcolor="#FFC488" >
							&nbsp;</td>
							<td width="60%" align="center" colspan="3" bgcolor="#FFEBD7">
							<input placeholder="پیام خریدار پس از تحویل" type="text" name="t_40_<?php print $cls?>" id="t_40_<?php print $cls?>"  size="75" onchange="update_row('tbl_item_info','40','<?php print $row2[item_id]?>','<?php print $cls?>');"  class="txt_rec_info_fact_<?php print $cls?>" value="<?php print $row2[f40]?>"></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" >
							&nbsp;</td>
						</tr>
						<tr style="cursor: pointer;"  onclick="jamsho('.money_info_fact_<?php print $cls ?>')" >
							<td width="20%" align="center" bgcolor="#FFC488" ><b>تسویه حساب با فروشنده</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" ><b>ساعت و تاریخ واریز</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" ><b>مبلغ واریزی</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" ><b>شماره پیگیری</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >&nbsp;</td>
						</tr>
						<tr  class="money_info_fact_<?php print $cls ?>">
							<td width="20%" align="center" bgcolor="#FFC488" >
							<img style="cursor: pointer;" border="0" src="images/aseman_barasi.png" width="25" onclick="edit_row('.txt_money_info_fact_<?php print $cls?>')"></td>
							<td width="20%" align="center" bgcolor="#FFE4CA" ><?php print $row2["f43"]." : ".$row2["f45"]?></td>
							<td width="20%" align="center" bgcolor="#FFE4CA" ><?php print pool($row2["f44"])?> ریال</td>
							<td width="20%" align="center" bgcolor="#FFE4CA" ><?php print $row2["f47"]?></td>
							<td width="20%" align="center" bgcolor="#FFE4CA" >
							&nbsp;</td>
						</tr>
						<tr  class="money_info_fact_<?php print $cls ?>">
							<td width="20%" align="center" bgcolor="#FFC488" >&nbsp;</td>
							<td width="20%" align="center" height="24" bgcolor="#FFE4CA" >
							<b>شماره 
							کارت واچار</b></td>
							<td width="20%" align="center" height="24" bgcolor="#FFE4CA" >
							<b>شماره 
							کارت فروشنده</b></td>
							<td width="20%" align="center" height="24" bgcolor="#FFE4CA" >
							<b>گزینه فرضی</b></td>
							<td width="20%" align="center" height="24" bgcolor="#FFE4CA" >
							&nbsp;</td>
						</tr>
						<tr  class="money_info_fact_<?php print $cls ?>">
							<td width="20%" align="center" bgcolor="#FFC488" >&nbsp;</td>
							<td width="20%" align="center" bgcolor="#FFE4CA" ><?php print $row2["f48"]?></td>
							<td width="20%" align="center" bgcolor="#FFE4CA" ><?php print $row2["f46"]?></td>
							<td width="20%" align="center" bgcolor="#FFE4CA" ></td>
							<td width="20%" align="center" bgcolor="#FFE4CA" >&nbsp;</td>
						</tr>
						<tr style="cursor: pointer;"  onclick="jamsho('.sms_info_fact_<?php print $cls ?>');">
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>ارسال 
							پیامک</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>اطلاع به فروشنده در 
							مورد خرید</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>اطلاع به مشتری در 
							مورد ارسال</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>اطلاع به خریدار در 
							مورد تحویل</b></td>
							<td width="20%" align="center" bgcolor="#FFC488" >
							<b>اطلاع تسویه حساب به فروشنده </b></td>
						</tr>
						<tr  class="sms_info_fact_<?php print $cls ?>">
							<td width="20%" align="center" bgcolor="#FFC488" >
							&nbsp;</td>
							<td width="20%" align="center" bgcolor="#FFEBD7" ><?php print $row2["49"]?></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" ><?php print $row2["50"]?></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" ><?php print $row2["51"]?></td>
							<td width="20%" align="center" bgcolor="#FFEBD7" ><?php print $row2["52"]?></td>
						</tr>
						</table>
						</tr>
						</td>
					</table>
					</td>
				</tr>
<?php } ?>				
				</table>
				<tr >
					<td bgcolor="#fff" >
					&nbsp;</td>
				</tr>

			</td>
		</tr>
	</table>

</div>

</form>

</body>

</html>
