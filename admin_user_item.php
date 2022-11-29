<?php include "header_admin_page.php";
$item_type=$_GET["type"];
if ($item_type!=0&&$item_type!=1&&$item_type!=2&&$item_type!=3)
{
	header("Location: index_admin.php");
	exit;
}	
switch ($item_type)
{
	case 0 : {$grid_title="اسامی کالاهای در انتظار تایید";$page_id=42; break;}
	case 1 : {$grid_title="اسامی کالاهای تایید شده";$page_id=43; break;}
	case 2 : {$grid_title="اسامی کالاهای تایید نشده";$page_id=44; break;}
	case 3 : {$grid_title="اسامی کالاهای تایید مشروط";$page_id=45; break;}
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
		//print "update tbl_item_info set f23=$val where auto_id='$id'";
	    $r=mysql_query("update tbl_item_info set f23=$val where auto_id='$id'");
	}
	
}
if ($_POST["btn_4"])
{
	$chbox= $_POST['ch1'];
	$count = count($_POST['ch1']);
	for($i=0;$i<$count;$i++)
	{
		$id=$chbox[$i];
	    $r=mysql_query("delete from tbl_item_info where auto_id='$id'");
	}

}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta http-equiv="Content-Language" content="en-us">
<table  id="tbl_grid" border="0" width="100%" cellpadding="0" cellspacing="0"   dir=rtl width=90%>
<form name="frm_grid" id="frm_grid"  method="POST" action="admin_user_item.php?type=<?php print $item_type?>" >
<tr>
<td class= "aseman_grid_tite" width="100%" align="center" height="23"  colspan="9"   >
<?php print $grid_title?></td>
</tr>
													<tr>
<td class= "aseman_grid_btn" align="center" height="23" colspan="9"   >
													<input type="submit" value="بازگشت به انتظار" name="btn_0" onclick="javascript: return confirm('هشدار : آیا از بازگشت کالاهای انتخاب شده به حالت انتظاراطمینان دارید؟');" >&nbsp;
													<input type="submit" value="تایید کالاهای انتخاب شده" name="btn_1" onclick="javascript: return confirm('هشدار : آیا از تایید تمامی کالاهای انتخاب شده اطمینان دارید؟');" >&nbsp;
													<input type="submit" value="تایید مشروط کالاهای انتخاب شده" name="btn_3" onclick="javascript: return confirm(' هشدار : آیا از عدم تایید تمامی کالاهای انتخاب شده اطمینان دارید ؟ ');" >&nbsp;
<input type="submit" value="عدم تایید کالاهای انتخاب شده" name="btn_2" onclick="javascript: return confirm('هشدار : آیا از تایید مشروط کالاهای انتخاب شده اطمینان دارید؟');" >
<?php 
if($item_type==2)
{
?>
	<input type="submit" value="حذف کالاهای انتخاب شده" name="btn_4" onclick="javascript: return confirm('هشدار : آیا از حدف کالاهای انتخاب شده اطمینان دارید؟');" >
<?php }?>	
													
													</td></td>
													</tr>
													<tr>
<td class= "aseman_grid_col_title" width="5%" align="center" height="23"   >
<input type='checkbox' name='select-all' id='select-all'  onclick="check();" style="font-weight: 700" ></td>
<td class= "aseman_grid_col_title" width="13%" align="right" height="23"   >
<span lang="fa">نام کالا</span></td>
<td class= "aseman_grid_col_title" width="13%" align="right" height="23"   >
<span lang="fa">گروه</span></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
<span lang="fa">پرداختی</span></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
<span lang="fa">تاریخ ثبت</span></td>
<td class= "aseman_grid_col_title" width="13%" align="right" height="23"   >
<span lang="fa">مالک</span></td>
<td class= "aseman_grid_col_title" width="13%" align="right" height="23"   >
<span lang="fa">شماره پیگیری</span></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
<span lang="fa">ویرایش آگهی</span></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
پیش نمایش</td>
</tr>
	<?php

$str_sql="SELECT
  `tbl_item_info`.`auto_id` as item_id, `tbl_user_info`.`auto_id` as user_id,
  `tbl_item_sub_group`.`auto_id` as sub_id, `tbl_item_sub_group`.`f2` as sub_name,
    `tbl_item_group`.`auto_id` as group_id,`tbl_item_group`.`f1` group_name, `tbl_item_info`.`f3` as item_name, `tbl_item_info`.`f4` as item_price,
  `tbl_item_info`.`f5` as item_type, `tbl_item_info`.`f6` as sell_type, `tbl_item_info`.`f19` as reg_date,
  `tbl_item_info`.`f25` as pay_code, `tbl_item_info`.`f26` as pay_price, `tbl_user_info`.`f3` as user_fname, `tbl_user_info`.`f22` as user_lname
FROM
  `tbl_item_info` LEFT JOIN
  `tbl_item_sub_group` ON `tbl_item_info`.`f1` = `tbl_item_sub_group`.`auto_id`
  LEFT JOIN
  `tbl_item_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id`
  LEFT JOIN
  `tbl_user_info` ON `tbl_item_info`.`f2` = `tbl_user_info`.`auto_id` where `tbl_item_info`.`f23`='$item_type' order by `tbl_item_info`.`auto_id` desc";
  
//print $str_sql;

	$re = mysql_query($str_sql);
	$i=1;
	while($row = mysql_fetch_array($re))
	{  if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
													
<tr >
<td width="5%" align="center" class="<?php print $class_name; ?>"   >
<input type='checkbox' name='ch1[]'  id='ch1[]'  value="<?php print $row["item_id"]; ?>"> </td>
<td width="13%" align="right" class="<?php print $class_name; ?>"    title="<?php print$row["item_name"]?>">
<?php print substr($row["item_name"],0,20)."..."; ?></td>
<td width="13%" align="right" class="<?php print $class_name; ?>"    title="<?php print $row["group_name"]."،".$row["sub_name"]?>">
<?php print substr($row["group_name"]."،".$row["sub_name"],0,20)."..."?></td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<?php print pool($row["pay_price"]); ?></td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row["reg_date"]; ?></td>
<td width="13%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row["user_fname"]." ".$row["user_lname"]?></a></td>
<td width="13%" align="right" class="<?php print $class_name; ?>"  >
<?php print $row["pay_code"]; ?></td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<a href="admin_user_reg_item.php?edit=1&item_id=<?php print $row[item_id]?>">ویرایش کالا</a></td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<a target=_blank href="show_item_pre.php?item_id=<?php print $row["item_id"]; ?>">پیش نمایش</a></td>
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
<td width="13%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >&nbsp;
<td width="13%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"  >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
</tr>
</table>
</form>