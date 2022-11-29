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
var first_f="f1";
var no_empty=new Array("f5")
var test_array=new Array(1,0);
var onload_array=new Array(1,0,0);
</script>
<?php
$tbl_name="tbl_contactus";
$f_count=13; 
$msg='';
$page_id=4;
$form_title="مشاهده پیامها، انتقادات و پیشنهادات رسیده";
$grid_title="لیست نامه های رسیده";
$col1_title="فرستنده پیام";
$col2_title="اندکی از شرح پیام";
$col1_grid="f1";
$col2_grid="left(f5,100)";
if(isset($_GET["delete"]))
{
	$r=mysql_query("select f8,f10 from $tbl_name where auto_id=$_GET[auto_id]");
	list($have_file,$f_del_name)=mysql_fetch_array($r);
}
include "aseman_admin_page_func.php";
?>
</head>
<body onload="aseman_onload_test();" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"> 
	<div align="right">
		<table border="1" width="90%" dir="rtl" cellspacing="0" style="border-collapse: collapse" class="main_table">
			<tr>
			<td align="right" valign="top">
			<table border =0 width=100% dir=rtl class="tbl_3_row" align=right cellspacing="0" cellpadding="0">
			</tr>
			<td align=right>
			<form method="POST" name="form1" id="form1" action="<?php print $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
				<td align="center" width="100%" colspan="4" height="25" class="tbl_title">
			<?php print $form_title?></td>
			</tr>
				<tr>
					<td align="center" width="100%" colspan="4" height="20" class=tbl_msg_row>
					<span  class=tbl_msg>
					<?php if($msg!="") print "&nbsp;".$msg."&nbsp; ";
						if($msg=="عملیات حذف با موفقیت انجام شد")
						{	
							$upload_dir="recive_files/contactus";
							if ($have_file)
								delete_file($upload_dir."/".$f_del_name);
						}	
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
<td align="right" width="40%" class="dirooz"><?php if(isset($_GET["edit"])) print $selected_row["f1"];?>
</td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz"><b>تلفن فرستنده :</b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print $selected_row["f2"];?>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz"><b>آدرس پستی :</b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print $selected_row["f3"];?></td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="15%" class="dirooz"><b>پست الکترونیک :</b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print$selected_row["f4"];?></td>
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
<td align="right" width="15%" class="dirooz"><b>تاریخ ارسال :</b></td>
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
<td align="right" width="15%" class="dirooz"><b>ساعت ارسال :</b></td>
<td align="right" width="40%" class="dirooz">
<?php if(isset($_GET["edit"])) print $selected_row["f7"];?></td>
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
<?php if(isset($_GET["edit"])) print $selected_row["f5"];?></td>
</tr>
<tr>
<td align="center" width="100%" class="dirooz" colspan="4">&nbsp;</td>
</tr>
<tr>
<td align="center" width="5%" class="dirooz">&nbsp;</td>
<td align="right" width="55%" class="dirooz" colspan="2">
<?php if(isset($_GET["edit"])&&$selected_row["f8"]==1) {;?>
<b>
<a target=_blank href="recive_files/contactus/<?php print $selected_row["f10"]?>">دانلود فایل پیوست : <?php print $selected_row["f10"]?></a></b> 
<?php }?>
</td>
<td align="right" width="40%" class="dirooz">&nbsp;</td>
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
				<?php include "show_grid.php"?></td>
			</tr>
				<tr>
				<td align=center>
				<?php //include "footer.php"?></td>
			</tr>
			</table>
		</table>
		
	</div>