<?php include "header_admin_page.php"?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<?php
if ($_SESSION["s_user_type_id"]=="")
	header("Location: login.php?invalid_user");

// shayad avaz shavd
	
  $str_sql="SELECT
   `tbl_user_info`.`auto_id` ,`tbl_user_info`.`f3` AS `f_user_name`,`tbl_user_info`.`f22` AS `l_user_name`, `tbl_user_info`.`f9` AS `m_date`,
  `tbl_customer_type`.`f1` AS `cust_type`, `tbl_user_type`.`f1` as user_type
FROM
  `tbl_user_info` LEFT JOIN
  `tbl_customer_type` ON `tbl_customer_type`.`auto_id` = `tbl_user_info`.`f1`
  LEFT JOIN
  `tbl_user_type` ON `tbl_user_type`.`auto_id` = `tbl_user_info`.`f2`  where `tbl_user_info`.`auto_id`=".$_SESSION["s_user_id"];
//  print $str_sql;
  $re=mysql_query($str_sql);
  $row=mysql_fetch_array($re);
?>
</head>
<base target="_top">
</head>
<div align="center">
<div class="main_form" style="margin-top: 60px;">
<body onload="aseman_onload_test();" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"> 
		<table border="0"  dir="rtl" cellspacing="0" style="border-collapse: collapse" class="main_table">
			<tr>
			<td align="right" valign="top">
			<table border =0 width=100% dir=rtl class="tbl_3_row" cellspacing="0" cellpadding="0">
			</tr>
			<td align=center>
                        <div class="cell_header" style="margin: 3px;"> اطلاعات کاربر</div>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td align="center" width="100%">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" width="100%">
					<?php 
										$user_pic="images/user/".$_SESSION["s_user_id"].".jpg";
										if(!is_file($user_pic)) {$user_pic="images/user/no_user_pic.jpg";}					
					?>					
					<img border="0" class="img_user" src="<?php print $user_pic?>" ></td>
				</tr>
				<tr>
					<td align="center" width="100%">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" width="100%" height="25">نام کاربر :<font color="#FF002B"> &nbsp; <?php print $row["f_user_name"]." ".$row["l_user_name"];?></font></td>
				</tr>
				<tr>
					<td align="center" width="100%" height="25">شماره عضویت :<font color="#FF002B"> &nbsp; <?php print $row["auto_id"]?></font><span lang="en-us">
					</span></td>
				</tr>
				<tr>
					<td align="center" width="100%" height="25">تاریخ عضویت :<font color="#FF002B">&nbsp; <?php print $row["m_date"];?></font></td>
				</tr>
				<tr>
					<td align="center" width="100%" height="25">سطح دسترسی :<font color="#FF002B">&nbsp; <?php print $row["user_type"];?></font></td>
				</tr>
				<tr>
					<td align="center" width="100%" height="25">نوع کاربر :<font color="#FF002B"> &nbsp; <?php print $row["cust_type"];?></font></td>
				</tr>
				<tr>
					<td align="center" width="100%">&nbsp;</td>
				</tr>
<!--				<tr>
					<td align="left" width="25%"><a href="index.php?exit">خروج 
					از پنل مدیریت</a></td>
					<td align="right" width="75%">&nbsp;</td>
				</tr>
				-->
<?php
  $str_sql="select auto_id,f3,f4,f5,f6 from tbl_panel_msg where f2=".$_SESSION["s_user_type_id"]." and f7=1 order by auto_id desc limit 1";
//  print $str_sql;
  $re=mysql_query($str_sql);
  if (mysql_num_rows($re)>0)
  {
	  $row=mysql_fetch_array($re);
	  
 ?>
				<tr>
					<td width="100%" align="center">
					<a href="<?php print $row["f5"]?>" target=_blank><?php print $row["f4"]?></a></td>
				</tr>
				<tr>
					<td align="center" width="100%">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" width="100%">
					<font color="#006699">
					<?php if ($row["f6"]=="1")
					{
					?>
						</font>
						<a href="<?php print $row["f5"]?>" target=_blank>
						<font color="#006699">
						<img border="0" class="img_msg_panle" src="images/modir_msg/<?php print $row["auto_id"]?>.jpg" >
						</font>
						</a>
						<font color="#006699">
						<?php 
						}
						?>
						</font>
						</td>
				</tr>
				<?php }?>
				<tr>
					<td align="center" width="100%">
					&nbsp;</td>
				</tr>
				</table>
			</td>
			</tr>
			</tr>
			</td>
				<tr>
				<td align=center>
				</td>
			</tr>
				<tr>
				<td align=center>
				</td>
			</tr>
			</table>
		</table>
		
	</div>
