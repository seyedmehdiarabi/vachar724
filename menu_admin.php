<?php include "header_admin_page.php"?>
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<base target="main">
<script language="javascript">
function admin_menu(sub_id,top_id)
{
 
 var s_id="tr."+sub_id;
if ($(s_id).is(':visible'))
 $("td#"+top_id).css('background-image','url(images/arrow_down.png)');
else
 $("td#"+top_id).css('background-image','url(images/arrow_up.png)');
$(s_id).toggle({"left":"200px"}); 
//$(s_id).slideToggle('slow');
};
</script>
</head>
<?php if ($_SESSION["s_user_type_id"]=="")
	header("Location: login.php?invalid_user");
?>	
<?php //include "aseman_admin_page_func.php"?>
<body topmargin="0" class="menu_admin_body" leftmargin="0" rightmargin="0" bottommargin="0">
<div align="right">
	<table border="0" width="95%" cellspacing="0" cellpadding="0" class="tbl_menu_admin">
		<tr>
			<td align="right">
			<table border="0" width="100%" cellpadding="0">
				<tr>
					<td align="center" class="admin_menu_first_row" colspan="4">
					<?php 
										$user_pic="images/user/".$_SESSION["s_user_id"].".jpg";
										if(!is_file($user_pic)) {$user_pic="images/user/no_user_pic.jpg";}					
					?>					
					<img border="0" class="img_user" src="<?php print $user_pic?>" >
					</td>
				</tr>
				
<?php 
	//====================================================
//function get_user_menu()
//{

$str_sql="SELECT
  `tbl_user_access_info`.`f1`, `tbl_page_info`.`f1` as `menu_gid`, `tbl_page_info`.`f2` AS
  `page_title`, `tbl_page_info`.`f3` AS `page_name`, `tbl_page_info`.`auto_id`,
  `tbl_user_access_info`.`f2`, `tbl_page_info`.`f7`, `tbl_page_info`.`f8`,
  `tbl_page_info`.`f9`, `tbl_master_page_info`.`f1` AS `menu_group_name`,
  `tbl_master_page_info`.`f2` AS `menu_group_olavi`, `tbl_master_page_info`.`f6`
  AS `menu_group_pic`
FROM
  `tbl_user_access_info` RIGHT JOIN
  `tbl_page_info` ON `tbl_page_info`.`auto_id` = `tbl_user_access_info`.`f1`
  LEFT JOIN
  `tbl_master_page_info` ON `tbl_page_info`.`f1` =
    `tbl_master_page_info`.`auto_id` where `tbl_user_access_info`.`f2`=".$_SESSION["s_user_type_id"]." and  `tbl_page_info`.`f9`=1 order by menu_group_olavi,`tbl_page_info`.`f8` asc";
  	$res_menu=mysql_query($str_sql);
//}
//====================================================

	//print $res_menu;
	$i=1;
	while ($mnu_name=mysql_fetch_array($res_menu))
	{
	 if ($old_menu_gid!=$mnu_name["menu_gid"])
	 {			
	 $menu_id="menu".$i;
	 $i++;
	 $old_menu_gid=$mnu_name["menu_gid"];			
?>				
				<tr >
					<td align="center" width="100%" colspan="4" class="menu_level1" id="<?php print $menu_id?>" onclick="admin_menu('<?php print "sub_".$menu_id;?>','<?php print $menu_id;?>');">
					&nbsp;<?php print $mnu_name["menu_group_name"]?></td>
				</tr>
		<?php }// of if?>		
				<tr class="sub_<?php print $menu_id?>">
					<td align="center" width="2%" class="menu_level2" >
					&nbsp;</td>
					<td align="right" width="1%" class="menu_level2">
					<a href="<?php print $mnu_name["page_name"]?>">
					<img border="0" src="images/icons/<?php print $mnu_name["auto_id"].$mnu_name["f7"]?>" width="25"></a></td>
					<td align="right" width="1%" class="menu_level2">&nbsp;</td>
					<td align="right" width="95%" class="menu_level2">
					<a href="<?php print $mnu_name["page_name"]?>" <?php if ($mnu_name["menu_gid"]==1) print "target='_top'"?>><?php print $mnu_name["page_title"]?></a></td>
				</tr>
<?php 
}// of while
?>				
				<tr>
					<td align="right" class="admin_menu_first_row" colspan="4">
					&nbsp;
					</td>
				</tr>

			</table>
			<p>&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>