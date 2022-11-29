<?php include "header_admin_page.php";
$page_id=63;
include "aseman_admin_page_func.php";

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script lang="javascript">
function update_tartib(item_id)
{

var tar_val= document.form1.elements["t_item_"+item_id].value;  
$("#img_item"+item_id).show();
$("#img_item"+item_id).fadeIn(400).html('<img src="images/aseman_loading.gif" >');
$.ajax({
type: "POST",
url: "ajaxostan.php",
data :({
                    item_id:item_id,
                    tar_val:tar_val
       }),
cache: true,
success: function(){
//$('#t_item_'+item_id).html(tar_val);
$("#img_item"+item_id).hide();
$("#img_item"+item_id).fadeIn(400).html('<img src="images/ok.gif" >');
//$("#img_item"+item_id).fadeIn(400).html(data);
$("#img_item"+item_id).show();

}
})
}
</script>
</head>
<div align=center>
<div class="main_form">
<body onload="aseman_onload_test();" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"> 
		<table border="0"  dir="rtl" cellspacing="0" style="border-collapse: collapse" class="main_table">
			<tr>
			<td align="right" valign="top">
			<form method="POST" name="form1" id="form1">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" class="input_tbe" dir="rtl">
				<tr>
				<td align="center" width="100%" height="25" class="tbl_title" colspan=3>
			<?php print $form_title?></td>
			</tr>
					<tr>
							<td align="center" width="11%">کد استان</td>
							<td align="center" width="28%">نام استان</td>
							<td align="center" width="57%">کد استانهای همجوار</td>
						</tr>
<?php
$i=0;
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("select ostan_id as auto_id,ostan_name,hamjavarha from tbl_ostan order by ostan_name");
while ($row=mysql_fetch_array($re))
{
if($i++%2==0) { $class_name="grid_odd_row"; } else {$class_name="grid_even_row";}  

?>
	<tr>
							<td align="center" width="11%" class="<?php print $class_name; ?>" ><?php print $row["auto_id"]?></td>
							<td align="center" width="28%" class="<?php print $class_name; ?>" ><?php print $row["ostan_name"]?></td>
							<td align="center" width="57%" class="<?php print $class_name; ?>" >	<input type="text" name="t_item_<?php print $row["auto_id"]?>" size="36" value="<?php print $row["hamjavarha"]?>" onchange="update_tartib(<?php print $row["auto_id"]?>);"  tabindex=<?php print $i?>><span lang="en-us">&nbsp;
							
						</span><span id="img_item<?php print $row["auto_id"]?>"></span></td>
	</tr>
<?php } ?>						
					</table>
					</td>
				</tr>
				</form>
				</td>
			</tr>
			</table>
	</div>
</div>