<?php include "header_admin_page.php";
$form_title="";
$page_id=81;
$m_type=(int)$_GET["m_id"];
if($m_type==""||$m_type=="0")
{
	header("Location: index.php");
	die();
}	
if($m_type=="1")
{
	$form_title="کلیه آگهی های خودروهای تایید شده";
	$str_where="tbl_car_master_info.f8=1 or tbl_car_master_info.f8=3";
}	
else
{
	$form_title="کلیه آگهی های خودروهای تایید نشده (در انتظار تایید ، رد شده و ...)";	
	$str_where="tbl_car_master_info.f8=0 or tbl_car_master_info.f8=2";
}	
access_page1($page_id,$_SESSION["s_user_type_id"]);

$str_sql="SELECT
  `tbl_item_sub_group`.`f2` as act_type, `tbl_car_master_info`.*
FROM
  `tbl_car_master_info` INNER JOIN
  `tbl_item_sub_group` ON `tbl_car_master_info`.`f1` =
    `tbl_item_sub_group`.`auto_id` where tbl_car_master_info.f2='$_SESSION[s_user_id]' and ($str_where) order by tbl_car_master_info.auto_id desc ";
$re = mysql_query($str_sql);
$i=0;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script type="text/javascript" src="js/jquery.lazyload-any.js"></script>
<body>
<p>&nbsp;</p>
<div align="center">
<div class="main_form">
	<table class="tbl_1_border" dir="rtl">
			<tr>
			<td align="center" width="100%"  colspan="4"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>

		<tr>
			<td align="center">
				<div align="center" class="lazyload1">
									<table border="0" width="100%" id="tbl_factor" cellpadding=1px cellspacing=1px>
										<tr>
											<th width="5%">ردیف</th>
											<th width="5%">کد آگهی</th>
											<th width="10%">نوع معامله</th>
											<th width="10%">تاریخ ثبت</th>
											<th width="5%">اولویت نمایش</th>
											<th width="5%">وضعیت نمایش</th>
											<th width="15%">وضعیت تایید</th>
											<th width="5%">دفعات مشاهده</th>
											<th width="10%">ویرایش تصاویر</th>
											<th width="10%">ویرایش اطلاعات</th>
											<th width="10%">نوع آگهی</th>
											<th width="10%">پیش نمایش</th>
										</tr>
<?php 
		while($row = mysql_fetch_array($re))
		{  
			if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
										
										<tr>
											<td width="5%"><?php print $i ?></td>
											<td width="5%"><?php print $row["auto_id"] ?></td>
											<td width="10%"><?php print $row["act_type"] ?></td>
											<td width="10%"><?php print $row["f4"]?></td>
											<td width="5%"><?php print $row["f5"]?></td>
											<td width="5%"><?php print $row["f6"]?></td>
											<td width="15%">
											<?php 
											switch($row["f8"])
											{
												case "0": print "در انتظار تایید"; break;
												case "1": print "تایید شده"; break;
												case "2": print "رد شده"; break;
												case "3": print "تایید مشروط"; break;
											}	
											 ?></td>
											<td width="5%"><?php print $row["f10"]?></td>											 											
											<td width="10%"><a href="admin_user_reg_car_pic.php?item_id=<?php print $row[auto_id]?>">ویرایش</a></td>
											<td width="10%"><a href="admin_user_reg_car_master.php?edit=1&item_id=<?php print $row[auto_id]?>">ویرایش</a></td>
                                                                                        <td width="13%" align="right" class="<?php print $class_name; ?>"  >
	                                                                                    <?php print $row["adver_type"]?>
											<td width="10%"><a target=_blank href="show_car_preview.php?item_id=<?php print $row[auto_id]?>">مشاهده</a></td>
											
										</tr>
<?php } // of while?>										

								
									</td>
								</tr>
								</table>
								</td>
								</tr>
					</table>
					</div>
	</div>
</div>
<script language="javascript">
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
</script>

</body>