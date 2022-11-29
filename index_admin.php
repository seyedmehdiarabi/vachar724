<?php ob_start(); session_start(); 
	if ($_SESSION["s_user_type_id"]=="")
		header("Location: login.php?invalid_user");
	else{	
?>
<html dir="rtl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="fa">
  <title>پنل مدیریت</title>
</head>
<frameset cols="77%,*" framespacing="0" border="0" frameborder="0" style="background: #ddd;">
	<frame name="main" src="first_admin_page.php" marginwidth="0" marginheight="0" scrolling="auto" target="main">
	<frame name="menu" src="menu_admin.php"  target="main"  marginwidth="0" marginheight="0" scrolling="auto">
	<noframes>
	<body rightmargin="0" >
	<p>This page uses frames, but your browser doesn't support them.</p>
	</body>
	</noframes>
</frameset>
</html>
<?php }?>