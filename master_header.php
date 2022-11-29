<?php ob_start(); session_start(); 
include "connect.php";
if ($_SESSION["s_user_off_persent"]>0&&$user_off==0) // سیشن میزان تخفیف مشتری که در فرم لاگین مقدار دهی می شود
	$user_off=$_SESSION["s_user_off_persent"];
else
	$user_off=0;	

/* init super_key session later */

if ($_SESSION["today_date_t"]=="") // for lang
{
	$rh=mysql_query("select sell_date from tbl_item_info2");
	$r=mysql_fetch_array($rh);
	$_SESSION["today_date_t"]=$r["sell_date"];
}
if ($_SESSION["s_shop_name"]=="") 
{
	$r_shop=mysql_query("select f1,f2,f4,f5,f6,f38,f39,f40 from tbl_shop_info where auto_id=1");
	$row_shop=mysql_fetch_array($r_shop);
	$_SESSION["s_shop_name"]=$row_shop["f1"];
	$_SESSION["s_super_key1"]=$row_shop["f38"];
	$_SESSION["s_super_key2"]=$row_shop["f39"];
	$_SESSION["s_super_key3"]=$row_shop["f40"];
	$_SESSION["s_des"]=$row_shop["f1"]."،".$row_shop["f2"];
	$_SESSION["s_contact"]=$row_shop["f4"]."*".$row_shop["f5"]."*".$row_shop["f6"];
	
	
}
$y=date('Y');
$m=date('m');
$d=date('d');
//---------------------------------------------------------------
function login_user($str_where,&$user_info)
{
	$user_info="";
	$result =mysql_query("SELECT
  `tbl_user_info`.`auto_id`, `tbl_user_info`.`f1`, `tbl_user_info`.`f2`, `tbl_user_info`.`f3`,`tbl_user_info`.`f14` as shop_id,
	`tbl_user_info`.`f5`,`tbl_user_info`.`f6`, `tbl_user_info`.`f7`, `tbl_user_info`.`f8`, `tbl_user_type`.`f1` as semat
FROM
  `tbl_user_info` LEFT JOIN
  `tbl_user_type` ON `tbl_user_info`.`f2` = `tbl_user_type`.`auto_id`".$str_where);

			$num = mysql_num_rows($result);
			if($num==0)
				return 0;
			else
			{
				$user_info=mysql_fetch_array($result);
				$_SESSION["s_user_id"]=$user_info["auto_id"];
				$_SESSION["s_user_type_id"] =$user_info["f2"];
				$_SESSION["s_full_user_name"] =$user_info["f3"];
				$_SESSION["s_customer_type_id"]=$user_info["f1"];
				$_SESSION["s_user_semat"]=$user_info["semat"];
				$_SESSION["s_shop_id"]=$user_info["shop_id"];
				
			 	$result =mysql_query("select f3 from tbl_customer_type where auto_id='$user_info[f1]'");
			 	list($_SESSION["s_user_off_persent"])=mysql_fetch_array($result);
			 	return 1;

			}
	
}
//---------------------------------------------------------
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<meta name="keywords" content="<?php print $_SESSION["s_super_key1"]."،".$_SESSION["s_super_key2"]."،".$_SESSION["s_super_key3"] ?>">
<meta name="description" content="<?php print  print $_SESSION["s_des"]?>">
<title><?php print $_SESSION["s_shop_name"] ?></title>
<link rel="stylesheet" type="text/css" href="slider/style.css" />
<SCRIPT type="text/javascript" src="js/aseman_func.js"></SCRIPT>
<link rel="stylesheet" type="text/css" href="css/aseman_style.css" >
<script type="text/javascript" src="slider/jquery.js"></script>

</head>
<body topmargin="0" leftmargin="0" bottommargin="0" >
<div align="center">
<?php 
	if(isset($_GET["exit"]))	
	{
	$_SESSION["s_user_id"]=null;
	session_unregister("s_user_id");

//	$_SESSION["s_sell_id"]=null;
//	session_unregister("s_sell_id");

	$_SESSION["s_user_type_id"] =null;
	session_unregister("s_user_type_id");
	
	$_SESSION["s_customer_type_id"]=null;
	session_unregister("s_customer_type_id");

	$_SESSION["s_full_user_name"] =null;
	session_unregister("s_full_user_name");
	
	$_SESSION["s_user_off_persent"]=null;
	session_unregister("s_user_off_persent");

	$_SESSION["s_user_semat"]=null;
	session_unregister("s_user_semat");
	
	$_SESSION["s_shop_id"]=null;
	session_unregister("s_shop_id");
	
	}
	
	if(isset($_POST["btn_login"]))	
	{
		$user_username= stripslashes($_POST["user_username"]);
		$user_password = stripslashes($_POST["user_password"]);
		$str_where=" where tbl_user_info.f10='$user_username'  and  tbl_user_info.f11='$user_password' and tbl_user_info.f13=1";
		$res=login_user($str_where,$user_info);
		print $user_username;
		print $user_password;
		
		if ($res)
			header("Location: index_admin.php");
		else
			header("Location: login.php?invalid_info");
	} // of if

	$re=mysql_query("select * from tbl_index_info where f20=1 order by auto_id desc limit 1");
	$part=mysql_fetch_array($re);
	if ($part["f19"]==1) // show mahsool in main manu
		$_SESSION["s_m_count"]=1;
	else
		$_SESSION["s_m_count"]=2;

if ($_SESSION["today_date_t"]!="1"){ 
?>
<table border="0" cellpadding="0" class="tbl_date" width=1000 style="border-collapse: collapse" dir =ltr cellspacing="0" cellpadding="0"> 
<tr>
<td align=center height=10 >
<table border="0" width="5%" cellspacing="0" cellpadding="0" style="border-collapse: collapse">
	<tr>
			<?php if($_SESSION["today_date_t"]=="1" ||$_SESSION["today_date_t"]=="12"||$_SESSION["today_date_t"]=="13"||$_SESSION["today_date_t"]=="123") {
			 ?> 
			<td align="left" width="33%"><a href=index.php>
			<img border="0" src="images/aseman_flag/ir.gif" alt="<?php print $_SESSION[s_shop_name].'_'?>Persian" title="Persian"></a></td>
			<?php }
			if ($_SESSION["today_date_t"]=="2" ||$_SESSION["today_date_t"]=="12"||$_SESSION["today_date_t"]=="23"||$_SESSION["today_date_t"]=="123") { 
			?>
			<td align="left" width="33%"><a href=index_en.php>
			<img border="0" src="images/aseman_flag/uk.gif" alt="<?php print $_SESSION[s_shop_name].'_'?>English" title="English"></a></td>
			<?php };
			if ($_SESSION["today_date_t"]=="3" ||$_SESSION["today_date_t"]=="13"||$_SESSION["today_date_t"]=="23"||$_SESSION["today_date_t"]=="123") { 
			?>
			<td align="left" width="33%"><a href=index_ar.php>
			<img border="0" src="images/aseman_flag/sa.gif" alt="<?php print $_SESSION[s_shop_name].'_'?>Arabic" title="Arabic"></a></td>
			<?php }?>
		</tr>
</table>
</td>
</tr>
</table>
<?php }?>
<table border="0" cellspacing="0" cellpadding="0" class="tbl_banner" width=1000 background="images/banner/banner.png"> 
<tr>
<td align=right height=84 >&nbsp;</td>
</tr>
<tr>
<td align=right height=21 >&nbsp;</td>
</tr>
<tr>
<td align=right height=21 >&nbsp;</td>
</tr>
<tr>
<td align=right height=21 >&nbsp;</td>
</tr>
<tr>
<form method="POST" action="search_items.php" >
<td align=left height=21 dir="ltr" >
						<input type="submit" value="  جستــجو " name="btn_search"  dir="rtl" tabindex="2"><input type="text" name="t_item_name" size="38"  dir="rtl" tabindex="1"><span lang="en-us">
</span><b><font color="#FFFFFF">: جستجو </font></b></td>
</form>
</tr>
<tr>
<td align=left height=27 align=left style="color: #FFFFFF">
	<table border="0" width="100%" cellspacing="0" cellpadding="0" dir="rtl" align=left style="color: #FFFFFF">
		<tr>
			<td align="right" width="60%"><span lang="en-us">&nbsp;&nbsp; </span><font color="#ffffff">
	<?php if ($_SESSION["s_user_id"]!='')
	{ ?>
	کاربر جاری : </font><font color="#ffff00"><?php print $_SESSION["s_full_user_name"]?></font> <font color=#FFFFFF>• سمت : </font>
			<font color="#ffff00"><?php print $_SESSION["s_user_semat"]?>
			<a href="index_admin.php"><font color=#FFFFFF>• ورود به پنل مدیریت</font></a>
			<a href="index.php?exit"><font color=#FFFFFF>• خروج از پنل</a></font></b></td>
	<?php
	}
	else
	{?>
	کاربر جاری : <font color="#ffff00">کاربر میهمان</font>
	<?php 
	}
	?>
			</td>
<form method="POST" action="<?php print $_SERVER["PHP_SELF"];?>">
			<td align="left" width="40%">
			<div align="left">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center" width="17%"><font color=#FFFFFF>ورود اعضا
						<span style="font-size: 5pt">&gt;&gt;</span></font></td>
						<td align="center" width="10%">
						<img border="0" src="images/aseman_user.png" width="20" height="20"></td>
						<td align="center" width="17%">
						<input type="text" name="user_username" size="12"  dir="ltr" tabindex="40"></td>
						<td align="center" width="10%">
						<img border="0" src="images/aseman_pass.png" width="20" height="20"></td>
						<td align="center" width="17%">
						<input type="password" name="user_password" size="12"  dir="ltr" tabindex="41"></td>
						<td align="center" width="17%">
						<input type="submit" value="ورود به پنل" name="btn_login"  dir="rtl" tabindex="43"></td>
					</tr>
				</table></div></td>
			</form>			
			</tr>
		</table>
</td>
</tr>
</table>
<table align=center width=1000px border=0 cellpadding=0 cellpadding=0 style="border-collapse: collapse">
<tr>
<td align=center>
<?php include "menu.php"?>
</td>
</tr>
</table>
</div>
</body>
<?php 

