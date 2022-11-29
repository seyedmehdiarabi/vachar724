<?php include "header_admin_page.php";
$page_id=83;
$item_type=$_GET["type"];
if ($item_type!=0&&$item_type!=1&&$item_type!=2&&$item_type!=3)
{
	header("Location: index_admin.php");
	exit;
}	
switch ($item_type)
{
	case 0 : {$grid_title="اسامی خودروهای در انتظار تایید";$page_id=42; break;}
	case 1 : {$grid_title="اسامی خودروهای تایید شده";$page_id=43; break;}
	case 2 : {$grid_title="اسامی خودروهای تایید نشده";$page_id=44; break;}
	case 3 : {$grid_title="اسامی خودروهای تایید مشروط";$page_id=45; break;}
}
$form_title=$grid_title;
access_page1($page_id,$_SESSION["s_user_type_id"]);

if ($_POST["btn_1"]||$_POST["btn_2"]||$_POST["btn_3"]||$_POST["btn_0"])
{
	if ($_POST["btn_0"])
		$val=0;
	else
	if ($_POST["btn_1"])
		$val=1;
	else
	if ($_POST["btn_2"])
		$val=2;
	else
	if ($_POST["btn_3"])
		$val=3;
		
	$chbox= $_POST['ch1'];
	$count = count($_POST['ch1']);
	for($i=0;$i<$count;$i++)
	{
		$id=$chbox[$i];
	    $r=mysql_query("update tbl_car_master_info set f8=$val where auto_id='$id'");
	}
	
}
if ($_POST["btn_4"])
{
	$chbox= $_POST['ch1'];
	$count = count($_POST['ch1']);
	for($i=0;$i<$count;$i++)
	{
		$id=$chbox[$i];
	    $r=mysql_query("delete from tbl_car_master_info where auto_id='$id'");
	}

}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta http-equiv="Content-Language" content="en-us">
<table  id="tbl_grid" border="0" width="100%" cellpadding="0" cellspacing="0"   dir=rtl width=90%>
<form name="frm_grid" id="frm_grid"  method="POST" action="admin_user_car.php?type=<?php print $item_type?>" >
<tr>
<td class= "aseman_grid_tite" width="100%" align="center" height="23"  colspan="9"   >
<?php print $grid_title?></td>
</tr>
													<tr>
<td class= "aseman_grid_btn" align="center" height="23" colspan="9"   >
													<input type="submit" value="بازگشت به انتظار" name="btn_0" onclick="javascript: return confirm('هشدار : آیا از بازگشت خودروهای انتخاب شده به حالت انتظاراطمینان دارید؟');" >&nbsp;
													<input type="submit" value="تایید خودروهای انتخاب شده" name="btn_1" onclick="javascript: return confirm('هشدار : آیا از تایید تمامی خودروهای انتخاب شده اطمینان دارید؟');" >&nbsp;
													<input type="submit" value="تایید مشروط خودروهای انتخاب شده" name="btn_3" onclick="javascript: return confirm(' هشدار : آیا از عدم تایید تمامی خودروهای انتخاب شده اطمینان دارید ؟ ');" >&nbsp;
<input type="submit" value="عدم تایید خودروهای انتخاب شده" name="btn_2" onclick="javascript: return confirm('هشدار : آیا از تایید مشروط خودروهای انتخاب شده اطمینان دارید؟');>
<?php 
//if($item_type==2)
//{
//?>
	<input type="submit" value="حذف خودروهای انتخاب شده" name="btn_4" onclick="javascript: return confirm('هشدار : آیا از حدف خودروهای انتخاب شده اطمینان دارید؟');" >
<?php //}?>	
													
													</td></td>
													</tr>
<tr>
<td class= "aseman_grid_col_title" width="5%" align="center" height="23"   >
	<input type='checkbox' name='select-all' id='select-all'  onclick="check();" style="font-weight: 700" >
</td>
<td class= "aseman_grid_col_title" width="13%" align="right" height="23"   >
	آکهی دهنده
</td>
<td class= "aseman_grid_col_title" width="13%" align="right" height="23"   >
	<span lang="fa">نوع آگهی</span></td>
</td>
<td class= "aseman_grid_col_title" width="13%" align="right" height="23"   >
	نام شهر آگهی
</td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
	تاریخ ثبت
</td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
	دفعات بازدید
</td>
<td class= "aseman_grid_col_title" width="13%" align="right" height="23"   >
	<span lang="fa">مبلغ پرداختی</span> <span lang="fa">(ریال)</span></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
	ویرایش آگهی
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
	پیش نمایش
</td>
</tr>
	<?php
$str_sql="SELECT
  `tbl_shahr`.`shahrestan`, `tbl_shahr`.`ostan_id`, `tbl_car_master_info`.*,
  `tbl_shahr`.`shahr_id`, `tbl_shahr`.`ostan_name`, `tbl_user_info`.`auto_id` as user_id,`tbl_user_info`.`f3` as user_fname,
  `tbl_user_info`.`f22` as user_lname, `tbl_item_sub_group`.`f2` as sub_group_name, `tbl_adver_type`.`f1` as adver_type
FROM
  `tbl_car_master_info` 
  LEFT JOIN
  `tbl_shahr` ON `tbl_car_master_info`.`f3` = `tbl_shahr`.`shahr_id` 
  LEFT JOIN
  `tbl_user_info` ON `tbl_car_master_info`.`f2` = `tbl_user_info`.`auto_id`
  LEFT JOIN
  `tbl_item_sub_group` ON `tbl_car_master_info`.`f1` = `tbl_item_sub_group`.`auto_id`
  LEFT JOIN
  `tbl_adver_type` ON `tbl_car_master_info`.`f12` = `tbl_adver_type`.`auto_id`
  where `tbl_car_master_info`.`f8`='$item_type' order by `tbl_car_master_info`.`auto_id` desc";
 
  
//print $str_sql;

	$re = mysql_query($str_sql);
	$i=1;
	while($row = mysql_fetch_array($re))
	{  if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
													
<tr >
<td width="5%" align="center" class="<?php print $class_name; ?>"   >
	<input type='checkbox' name='ch1[]'  id='ch1[]'  value="<?php print $row["auto_id"]; ?>"> 
</td>
<td width="13%" align="right" class="<?php print $class_name; ?>"    title="<?php print$row["item_name"]?>">
	<a href="show_user_profile.php?u_id=<?php print $row[user_id]?>"><?php print $row["user_fname"]." ".$row["user_lname"]?></a>
</td>
<td width="13%" align="right" class="<?php print $class_name; ?>"  >
	<?php print $row["adver_type"]?>
</td>

</td>
<td width="13%" align="right" class="<?php print $class_name; ?>"    >
	<?php
	mysql_query("SET CHARACTER SET utf8");
	$re2=mysql_query("select shahr_id,shahrestan from tbl_shahr where shahr_id=$row[shahr_id]");
	list($cur_shahr_id,$cur_shahr_name)=mysql_fetch_array($re2);
	print $cur_shahr_name; 
	mysql_query("SET CHARACTER SET $charset ");
	?>
</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
	<?php print $row["f4"]; ?>
</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
	<?php print $row["f10"]; ?>
</td>

<td width="13%" align="right" class="<?php print $class_name; ?>"  >
<?php 
$re3=mysql_query("select f3 from tbl_payment where f7=6 and f8=$row[auto_id]");
list($price)=mysql_fetch_array($re3);
if($price=='')
	$price=0;
print pool($price); 
?>
</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"  >
	<a href="admin_user_reg_car_master.php?edit=1&item_id=<?php print $row[auto_id]; ?>">ویرایش آگهی</a>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
	<a target=_blank href="show_car_preview.php?item_id=<?php print $row[auto_id]; ?>">پیش نمایش</a>
</td>
</tr>
<?php }
?>
<tr >
<td width="5%" align="center" class="<?php print $class_name; ?>"   >
&nbsp;</td>
<td width="13%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="13%" align="right" class="<?php print $class_name; ?>"   >
&nbsp;</td>
<td width="13%" align="right" class="<?php print $class_name; ?>"   >
&nbsp;</td>
<td width="13%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >&nbsp;
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
</tr>
</table>
</form>
