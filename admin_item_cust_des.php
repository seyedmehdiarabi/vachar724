<?php include "header_admin_page.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<?php
$tbl_name="tbl_item_cust_des";
$msg='';
$page_id=25;
$form_title="مشاهده و مدیریت نظرات رسیده";
$grid_title="لیست نظرات رسیده";
	$col1_title="نظر دهنده";
	$col2_title="کالای مورد نظر";
	$col3_title="تاریخ نظر";
	$col4_title="ساعت نظر";
	$col5_title="وضعیت نمایش";
//----------------UPDATE----------------------
if(isset($_POST["B2"]))
{
			$re=mysql_query("update $tbl_name set f11='$_POST[f11]' where auto_id='$_POST[auto_id]'");
			if($re)
				$msg='اطلاعات با موفقيت ویرایش گردید';
			else
				$msg='خطا در ویرایش اطلاعات. لطفا دوباره سعی کنید';			
			if($_POST["f11"]==1&&$_POST["chk_send_sms"]=="ON"&&$_POST["auto_id"]!="")	
			{

//-----------------------SMS--------------------------------------
				$re=mysql_query("select f12 from tbl_option");
				list($cust_send)=mysql_fetch_array($re);
				if ($cust_send==1)
				{

					$cust_mobil="";
					$re=mysql_query("select f10 from tbl_sms_text");
					list($cust_sms)=mysql_fetch_array($re);
						$re=mysql_query("SELECT `tbl_user_info`.`f6` FROM  `tbl_item_cust_des` LEFT JOIN  `tbl_user_info` ON `tbl_item_cust_des`.`f2` = `tbl_user_info`.`auto_id` where tbl_item_cust_des.auto_id=$_POST[auto_id]");
					list($cust_mobil)=mysql_fetch_array($re);
					if (strlen($cust_mobil)>=10)
					{
						send_one_sms($cust_mobil,$cust_sms);

					}	
				}	
//---------------------------------------------------------------------
			}
	
}
//------------------ Delete--------------------------------			
if(isset($_GET["delete"]))
		{
			$re=mysql_query("delete from $tbl_name where auto_id='$_GET[auto_id]' ");
			if($re)
				$msg='اطلاعات با موفقيت حدف گردید';
			else
				$msg='خطا در حذف اطلاعات. لطفا دوباره سعی کنید';			
		}

//------------------ Click Edit--------------------------------	
	if(isset($_GET["edit"]))
	{
	$re = mysql_query("SELECT `tbl_item_cust_des`.*, `tbl_item_info`.`f2` as item_name
FROM
  `tbl_item_cust_des` LEFT JOIN
  `tbl_item_info` ON `tbl_item_cust_des`.`f1` = `tbl_item_info`.`auto_id` where  `tbl_item_cust_des`.`auto_id`='$_GET[auto_id]'");

	$selected_row=mysql_fetch_array($re);

//	mysql_query("update tbl_inbox set f8='1' where auto_id='$_GET[auto_id]'");
 	}
//----------------------------------------------------------------------

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
			<form method="POST" name="form1" id="form1" action="<?php print $_SERVER["PHP_SELF"];?>" >
			<table border="0" width="100%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
				<td align="center" width="100%" colspan="4" height="25" class="tbl_title">
			<?php print $form_title?></td>
			</tr>
				<tr>
					<td align="center" width="100%" colspan="4" height="20" class=tbl_msg_row>
					<span  class=tbl_msg>
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp; ";	?></span></td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="4">&nbsp;</td>
					</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&nbsp;</td>
<td align="right" width="15%" class="auto_id_row"><b>کد<span lang="en-us">
</span>نظر <span lang="en-us">:</span></b></td>
<td align="right" width="40%" class="auto_id_row">
<input type="text" name="auto_id" size="9" dir="ltr" readonly=true  <?php if(isset($_GET["edit"])) print "value=".$selected_row[auto_id]; ?>></td>
<td align="right" width="40%" class="auto_id_row">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz"><b>&nbsp;فرستنده :</b></td>
<td align="right" width="40%" class="dirooz"><?php if(isset($_GET["edit"])) if ($selected_row["f2"]=="0") print $selected_row["f9"]." / کاربر غیرعضو"; else print $selected_row["f9"]." / کد کاربری :  ".$selected_row["f2"] ;?>
</td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz"><b>تاریخ ارسال :</b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print $selected_row["f4"];?></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz">&nbsp;</td>
<td align="right" width="40%" class="dirooz">
&nbsp;</td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz"><b>ساعت ارسال :</b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print $selected_row["f5"];?></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz">&nbsp;</td>
<td align="right" width="40%" class="dirooz">
&nbsp;</td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz"><b>پست الکترونیک :</b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print $selected_row["f8"];?></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
				<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
				</tr>
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz"><b>کالای مورد نظر : </b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print $selected_row["item_name"];?></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz">
					<b>
					<span lang="en-us">&nbsp;</span>متن نظر&nbsp; :</b></td>
<td align="right" width="80%" class="dirooz" colspan="2" style="text-align: justify; direction: rtl; line-height: 200%; padding-left: 10px; padding-right: 0; padding-top: 10px; padding-bottom: 10px">
<?php if(isset($_GET["edit"])) print $selected_row["f3"];?></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
					
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz"><b>وضعيت نمايش :</b></td>
<td align="right" width="35%" class="dirooz">
<select size="1" name="f11" dir="rtl">
<option <?php if(isset($_GET["edit"])) if ($selected_row["f11"]=="1") print "selected"?> value="1">نمایش داده شود
										</option>
<option <?php if(isset($_GET["edit"])) if ($selected_row["f11"]=="0") print "selected"?> value="0">فعلا نمایش داده نشود
										</option>

</select>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
					
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">&nbsp;</td>
<td align="right" width="35%" class="dirooz">
&nbsp;<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
					
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">&nbsp;</td>
<td align="right" width="35%" class="dirooz">
<input type="checkbox" name="chk_send_sms" value="ON"> پیامک تایید نظر برای 
مشتری ارسال شود (ویژه مشتریان عضو)<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
					
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">&nbsp;</td>
<td align="right" width="35%" class="dirooz">
&nbsp;<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
					
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">&nbsp;</td>
<td align="right" width="35%" class="dirooz">
<input type="submit" value="ویرایش اطلاعات" name="B2" id="B2" ><td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
					
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">&nbsp;</td>
<td align="right" width="35%" class="dirooz">
&nbsp;<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
					
				<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="20%" class="dirooz">&nbsp;</td>
<td align="right" width="35%" class="dirooz">
<?php if(isset($_GET["edit"])) {
;?>
<a href=show_item_details.php?item_id=<?php print $selected_row["f1"] ?> target=_blank><img border="0" src="images/items_pic/<?php print $selected_row["f1"] ?>_small_1.jpg" width="100" ></a>
<?php } ?>
</td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
				</tr>
					
					</table>
				</form>
				</td>
			</tr>
			</tr>
			</td>
				<tr>
				<td align=center>
				<table  id= "tbl_grid" border="0" width="100%" cellpadding="0" cellspacing="0"   >
<form name="frm_grid" id="frm_grid"  method="POST" action="<?php print $_SERVER["PHP_SELF"];?>" >

<td class= "aseman_grid_btn" width="95%" align="right" height="1" colspan="8"   >
&nbsp;</td></td>
													</tr>
													
													<tr>
<td class= "aseman_grid_col_title" width="5%" align="center" height="23"   >
&nbsp;</td>
<td class= "aseman_grid_col_title" width="5%" align="right" height="23"   >
													حذف</td>
<td class= "aseman_grid_col_title" width="5%" align="right" height="23"   >
												ویرایش</td>
<td class= "aseman_grid_col_title" width="20%" align="right" height="23"   >
<?php print $col1_title ?></td>
<td class= "aseman_grid_col_title" width="25%" align="right" height="23"   >
<?php print $col2_title ?></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
<?php print $col3_title ?></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
<?php print $col4_title ?></td>
<td class= "aseman_grid_col_title" width="10%" align="right" height="23"   >
<?php print $col5_title;?>
</td>
</tr>
	<?php
	if ($sort_field=="")
		$sort_field=" auto_id desc";

	
	

//	$grid_field=$col1_grid.",".$col2_grid;

	$str_sql="SELECT `tbl_item_cust_des`.`auto_id`,`tbl_item_cust_des`.`f4`,`tbl_item_cust_des`.`f9`,`tbl_item_cust_des`.`f11`,`tbl_item_cust_des`.`f5`, `tbl_item_info`.`f2` as item_name FROM
  `tbl_item_cust_des` LEFT JOIN   `tbl_item_info` ON `tbl_item_cust_des`.`f1` = `tbl_item_info`.`auto_id` order by $sort_field";

	$re = mysql_query($str_sql);
	$i=1;
	while($row = mysql_fetch_array($re))
	{ if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
													
<tr >
<td width="5%" align="center" class="<?php print $class_name; ?>"   >
&nbsp;</td>
<td width="5%" align="right" class="<?php print $class_name; ?>"    >
<a href="?delete&auto_id=<?php print $row["auto_id"]; ?>" onclick="javascript: return confirm('آیا از حذف اطمینان دارید ؟');" style="text-decoration: none; color: #16387C" >
<img border="0" src="images/aseman_del2.png" width="25" alt="حذف" title="حذف"></a></td>
<td width="5%" align="right" class="<?php print $class_name; ?>" >
<a href="?edit&auto_id=<?php print $row["auto_id"]; ?>" style="text-decoration: none; color: #16387C" >
<img border="0" src="images/aseman_edit.png" width="25" alt="ویرایش" title="ویرایش"></a></td>
<td width="20%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row["f9"]; ?>
</td>
<td width="25%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row["item_name"]; ?></td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row["f4"]; ?></td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row["f5"]; ?></td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row["f11"]; ?>
</td>
</tr>
<?php }
?>
													
<tr >
<td width="5%" align="center" class="<?php print $class_name; ?>"   >
&nbsp;</td>
<td width="5%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="5%" align="right" class="<?php print $class_name; ?>" >
&nbsp;</td>
<td width="20%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="25%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="10%" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
</tr>
</table>

				</td>
			</tr>
				<tr>
				<td align=center>
				<?php //include "footer.php"?></td>
			</tr>
			</table>
		</table>
		
	</div>