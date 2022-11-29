<?php include "header_admin_page.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script lang="javascript">
var today_date_j=<?php print $_SESSION["today_date_t"];?>;
var today_y=<?php print $y;?>;
var today_m=<?php print $m;?>;
var today_d=<?php print $d;?>;
var test=1;
checked=false;
var f_date_name="";
var first_f="";
var no_empty=new Array("")
var test_array=new Array(0,0);
var onload_array=new Array(1,0,0);
</script>
<?php
//$tbl_name="tbl_user_access_info";
$f_count=2;
$msg='';
$page_id=3;
access_page1($page_id,$_SESSION["s_user_type_id"]);
$form_title="تعريف سطح دسترسی برای گروه هاي مختلف کاربري";
?>
</head>
<body dir=rtl topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
	  	<div align="right">
			<table border="1" width="90%" dir="rtl" cellspacing="0" style="border-collapse: collapse" class="main_table">
		<tr>
			<td align="center" valign="top" width="75%">
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td align="center" valign="top">
									<table id="aseman_tbl" border="0" width="100%" cellspacing="3" cellpadding="3" >
										<tr>
											<td align="right" width="100%" colspan="3" >
											<p align="center">
											&nbsp;</td>
										</tr>
										<tr>
<form name="form1" id="form1"  method="POST" action="<?php print $_SERVER["PHP_SELF"];?>" >
											<td align="right" width="33%" valign="top" >
<table border="0" width="100%" cellspacing="3" cellpadding="3">
	<tr>
		<td width="100%" align="center" colspan="2" height="25">
		<b>تعیین سطح دسترسی گروه های مختلف کاربری</b></td>
	</tr>
	<?php
//-----------------------------------------------------------------------------
	$tbl_name="tbl_user_type";
	$user_type=$_SESSION["s_user_type_id"];
	//print $user_type;
	$str_where2="";
	if ($user_type>1) 
		$str_where2=" where auto_id>$user_type";
	 
	$str_sql="select auto_id,f1 from $tbl_name".$str_where2." order by auto_id";
	$re = mysql_query($str_sql);
	while($row = mysql_fetch_array($re))
	{ $i++; if($i%2==0) { $color="#E8E8E8"; } else {$color="#FFFFFF";}  
	?>
	<tr>
		<td width="3%" align="center">&nbsp;</td>
		<td align="right" width="97%"><a href="?get_menu&gp_id=<?php print $row['auto_id']?>&gr_name=<?php print $row['f1']?>"><?php print $row["f1"]?></a></td>
	</tr>
	
	<?php }
	//-----------------------------------------------------------------------------		
	?>

	</table>
											</td>
     															
											<td align="center" width="33%" valign="top" >
<form name="form2" id="form2"  method="POST" action="<?php print $_SERVER["PHP_SELF"];?>" >
<table border="0" width="100%" cellspacing="3" cellpadding="3" >
<input type=hidden name="gp_id" value='<?php print $_GET["gp_id"]?>'>	
<input type=hidden name="gr_name" value='<?php print $_GET["gr_name"]?>'>	
											
											<font color="#000000">
											<span style="font-weight: 700; background-color: #FF9933" lang="fa">

	<?php 
//------------------ insert --------------------------------
	
		if(isset($_POST["B1"]))
		{
		//------------- Delete Old Selection --------------------
		$f2=$_POST["gp_id"];
		if ($f2!="")		
		{
				$tbl_name="tbl_user_access_info";
				$str_sql="delete from ".$tbl_name." where f2='$f2'";
				$re = mysql_query($str_sql);
				
		//--------------INSSERT NEW SELECTION -------------------
				$chbox= $_POST['ch1'];
				$count = count($_POST['ch1']);
				for($i=0;$i<$count;$i++)
				{
				    $f1=$chbox[$i];
				    $str_sql="insert into ".$tbl_name." values('','$f1','$f2')";
				    $r=mysql_query($str_sql);
				}
			    print " &nbsp;تخصیص منو برای  <font color='#6600cc'>".$_POST["gr_name"]."</font> انجام شد&nbsp; ";
	
		}// of b1
	}	
//---------------------------------------------------------


		 if(isset($_GET["get_menu"]))
		{
			$tbl_name="tbl_user_access_info";
			$str_sql="select f1 from ".$tbl_name." where f2='$_GET[gp_id]' order by auto_id";
			//print $str_sql;
			$re = mysql_query($str_sql);
			$i=0;
			$menu=array();
			
			while($r= mysql_fetch_array($re))
			{
				$menu[$i++]=$r["f1"];
			}
				
		?>
		</span>
			<tr>
				<td width="100%" align="center" colspan="2" height="25" class="confirm_msg">
				<?php print $_GET["gr_name"] ?></td>
			</tr>
		<?php }?>
		

	
	<tr>
		<td width="100%" align="center" colspan="2" height="25">
		<b>منوهای تعریف شده در سایت </b></td>
	</tr>
	
	<?php
	//-----------------------------------------------------------------------------		
	$tbl_name="tbl_page_info";
	$str_sql="select auto_id,f2 from ".$tbl_name." order by auto_id";
	$re = mysql_query($str_sql);
	while($row = mysql_fetch_array($re))
	{ $i++; if($i%2==0) { $color="#FFFFFF"; } else {$color="#E8E8E8";}  
	?>
	<tr>
		<td width="10%" align="center">
		<input type='checkbox' name='ch1[]'  id='ch1[]' 
		 value="<?php print $row["auto_id"];?>"
		 <?php  
		 	if(isset($_GET["get_menu"]))
				if ((in_array($row["auto_id"],$menu)))
					 print "checked";
			?>
			>
			</td>
		<td align="right" width="90%"><?php print $row["f2"]; ?></td>
	</tr>
	
	<?php 
	}
	//-----------------------------------------------------------------------------	
	?>

	</table>
</td>
<td align="right" width="33%" >
<input type="submit" value="اختصاص منوها به گروه انتخاب شده" name="B1" tabindex="1"  ></td>
</form>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</div>
</body>

</html>