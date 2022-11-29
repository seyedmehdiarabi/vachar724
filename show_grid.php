<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<table  id= "tbl_grid" border="0" width="100%" cellpadding="0" cellspacing="0"   >
<form name="frm_grid" id="frm_grid"  method="POST" action="<?php print $_SERVER["PHP_SELF"];?>" >
<tr>
<td class= "aseman_grid_tite" width="100%" align="center" height="23"  colspan="5"   >
<?php print $grid_title?></td>
</tr>
													<tr>
<td class= "aseman_grid_btn" width="95%" align="right" height="23" colspan="5"   >
<input type="submit" value="حذف انتخاب شده ها" name="btn_del" onclick="javascript: return confirm('هشدار تمامی گزینه های انتخاب شده حذف خواهند شد .آیا از حذف اطمینان دارید ؟');"  tabindex="12"></td></td>
													</tr>
													<tr>
<td class= "aseman_grid_col_title" width="10%" align="center" height="23"   >
<input type='checkbox' name='select-all' id='select-all'  onclick="check();" style="font-weight: 700" ></td>
<td class= "aseman_grid_col_title" width="7%" align="right" height="23"   >
													حدف</td>
<td class= "aseman_grid_col_title" width="7%" align="right" height="23"   >
												ویرایش</td>
<td class= "aseman_grid_col_title" width="46%" align="right" height="23"   >
													<?php print $col1_title ?></td>
<td class= "aseman_grid_col_title" width="30%" align="right" height="23"   >
<?php print $col2_title;?>
</td>
</tr>
	<?php
	if ($sort_field=="")
		$sort_field=" auto_id desc";
	$grid_field=$col1_grid.",".$col2_grid;
	$str_sql="SELECT auto_id,".$grid_field."  from ".$tbl_name." ".$str_where." order by ".$sort_field;
	//print $str_sql;
	$re = mysql_query($str_sql);
	$i=1;
	while($row = mysql_fetch_array($re))
	{  if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
													
<tr >
<td width="10%" align="center" class="<?php print $class_name; ?>"   >
<input type='checkbox' name='ch1[]'  id='ch1[]'  value="<?php print $row["auto_id"]; ?>"> </td>
<td width="7%" align="right" class="<?php print $class_name; ?>"    >
<a href="?delete&auto_id=<?php print $row["auto_id"]; ?>" onclick="javascript: return confirm('آیا از حذف اطمینان دارید ؟');" style="text-decoration: none; color: #16387C" >
<img border="0" src="images/aseman_del2.png" width="25" alt="حذف" title="حذف"></a><?php //} ?></td>
<td width="7%" align="right" class="<?php print $class_name; ?>" >
<a href="?edit&auto_id=<?php print $row["auto_id"]; ?>" style="text-decoration: none; color: #16387C" >
<img border="0" src="images/aseman_edit.png" width="25" alt="ویرایش" title="ویرایش"></a></td>
<td width="46%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row[1]; ?>
</td>
<td width="30%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row[2]; ?>
</td>
</tr>
<?php }
?>
</table>
