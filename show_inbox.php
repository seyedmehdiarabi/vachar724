<?php include "header_admin_page.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<?php
$tbl_name="tbl_contactus";
$msg='';
$page_id=22;
$form_title="مشاهده پیامهای رسیده";
$grid_title="لیست پیامهای رسیده";
$col1_title="فرستنده پیام";
$col2_title="موضوع پیام";
$upload_dir="recive_files/inbox";
//$col1_grid="msg_sender";
//$col2_grid="left(f4,100)";
//------------------ Delete--------------------------------	
/*		
if(isset($_GET["delete"]))
		{
			$re=mysql_query("delete from tbl_inbox where auto_id='$_GET[auto_id]' ");
			if($re)
				$msg='اطلاعات با موفقيت حدف گردید';
			else
				$msg='خطا در حذف اطلاعات. لطفا دوباره سعی کنید';			
	$r=mysql_query("select f8,f10 from $tbl_name where auto_id=$_GET[auto_id]");
	list($have_file,$f_del_name)=mysql_fetch_array($r);
		}
*/
//------------------ Click Edit--------------------------------	
	if(isset($_GET["edit"]))
	{
	$re = mysql_query("SELECT `tbl_inbox`.*, `tbl_user_info`.`f3` as msg_sender
	FROM
 	 `tbl_inbox` LEFT JOIN
 	 `tbl_user_info` ON `tbl_inbox`.`f1` = `tbl_user_info`.`auto_id` where  `tbl_inbox`.`auto_id`='$_GET[auto_id]'");

	$selected_row=mysql_fetch_array($re);

	mysql_query("update tbl_inbox set f8='1' where auto_id='$_GET[auto_id]'");
 	}
//----------------------------------------------------------------------

?>
</head>
<body  topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"> 
	<div align="right">
		<table border="1" width="90%" dir="rtl" cellspacing="0" style="border-collapse: collapse" class="main_table">
			<tr>
			<td align="right" valign="top">
			<table border =0 width=100% dir=rtl class="tbl_3_row" align=right cellspacing="0" cellpadding="0">
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
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp; ";
					/*	if($msg=="عملیات حذف با موفقیت انجام شد")
						{	

							if ($have_file)
								delete_file($upload_dir."/".$f_del_name);
						}	
						*/
					?></span></td>
				</tr>
					<tr>
						<td align="center" width="100%" colspan="4">&nbsp;</td>
					</tr>

<tr>
<td align="center" width="5%" class="auto_id_row">&nbsp;</td>
<td align="right" width="15%" class="auto_id_row"><b>کد<span lang="en-us">
</span>پیام <span lang="en-us">:</span></b></td>
<td align="right" width="40%" class="auto_id_row">
<?php if(isset($_GET["edit"])) print $selected_row["auto_id"]; ?></td>
<td align="right" width="40%" class="auto_id_row">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz"><b>&nbsp;فرستنده :</b></td>
<td align="right" width="40%" class="dirooz"><?php if(isset($_GET["edit"])) print $selected_row["msg_sender"];?>
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
<td align="right" width="15%" class="dirooz"><b>ساعت ارسال :</b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print $selected_row["f6"];?></td>
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
<td align="right" width="15%" class="dirooz"><b>موضوع پیام :</b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print $selected_row["f3"];?></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz">
					<b>
					<span lang="en-us">&nbsp;</span>متن پیام :</b></td>
<td align="right" width="80%" class="dirooz" colspan="2" style="text-align: justify; direction: rtl; line-height: 200%; padding-left: 10px; padding-right: 0; padding-top: 10px; padding-bottom: 10px">
<?php if(isset($_GET["edit"])) print $selected_row["f4"];?></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="55%" class="dirooz" colspan="2">
<?php if(isset($_GET["edit"])&&$selected_row["f7"]==1) {;?>
<b>
<a target=_blank href="<?php print $upload_dir."/".$selected_row["f9"]?>">دانلود فایل پیوست : <?php print $selected_row["f9"]?></a></b> 
<?php }?>
</td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
					
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
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
<tr>
<td class= "aseman_grid_tite" width="100%" align="center" height="23"  colspan="5"   >
<?php print $grid_title?></td>
</tr>

<td class= "aseman_grid_btn" width="95%" align="right" height="1" colspan="5"   >
&nbsp;</td></td>
													</tr>
													
													<tr>
<td class= "aseman_grid_col_title" width="130" align="center" height="23"   >
&nbsp;</td>
<td class= "aseman_grid_col_title" width="130" align="right" height="23"   >
													&nbsp;</td>
<td class= "aseman_grid_col_title" width="130" align="right" height="23"   >
												ویرایش</td>
<td class= "aseman_grid_col_title" width="32%" align="right" height="23"   >
													<?php print $col1_title ?></td>
<td class= "aseman_grid_col_title" width="50%" align="right" height="23"   >
<?php print $col2_title;?>
</td>
</tr>
	<?php
	if ($sort_field=="")
		$sort_field=" auto_id desc";

	$grid_field=$col1_grid.",".$col2_grid;

	$str_sql="SELECT `tbl_inbox`.`auto_id`,`tbl_inbox`.`f3`,`tbl_inbox`.`f8`, `tbl_user_info`.`f3` as msg_sender
	FROM
 	 `tbl_inbox` LEFT JOIN
 	 `tbl_user_info` ON `tbl_inbox`.`f1` = `tbl_user_info`.`auto_id` where  `tbl_inbox`.`f2`='$_SESSION[s_user_id]' or( `tbl_inbox`.`f2`=0 and `tbl_inbox`.`f1`<>'$_SESSION[s_user_id]')   order by `tbl_inbox`.`auto_id` desc";

	$re = mysql_query($str_sql);
	$i=1;
	while($row = mysql_fetch_array($re))
	{ if($i++%2==0) { $class_name="grid_even_row"; } else {$class_name="grid_odd_row";}  
	?>
													
<tr >
<td width="130" align="center" class="<?php print $class_name; ?>"   >
&nbsp;</td>
<td width="130" align="right" class="<?php print $class_name; ?>"    >
&nbsp;</td>
<td width="130" align="right" class="<?php print $class_name; ?>" >
<a href="?edit&auto_id=<?php print $row["auto_id"]; ?>" style="text-decoration: none; color: #16387C" >
<img border="0" src="images/aseman_edit.png" width="25" alt="ویرایش" title="ویرایش"></a></td>
<td width="32%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row["msg_sender"]; ?>
</td>
<td width="50%" align="right" class="<?php print $class_name; ?>"    >
<?php print $row["f3"]; ?>
</td>
</tr>
<?php }
?>
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