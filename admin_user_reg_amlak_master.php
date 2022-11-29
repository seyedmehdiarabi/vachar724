<?php include "header_admin_page.php";
$form_title="مرحله اول : انتخاب نوع آگهي";
$page_id=80;
access_page1($page_id,$_SESSION["s_user_type_id"]);
$tbl_name="tbl_amlak_master_info";
if ($_GET["edit"]==1)
{
	$form_title="ويرايش آگهي املاک از قبل ثبت شده توسط کاربر";
	$edit=1;
	$item_ed_id=(int)$_GET["item_id"];
	if($item_ed_id==0||$item_ed_id=="")
	{
		header("Location: index_admin.php");
		exit;
	}	
	  $str_sql="SELECT
	  `tbl_shahr`.`shahrestan`, `tbl_shahr`.`ostan_id`, `tbl_amlak_master_info`.*,
	  `tbl_shahr`.`shahr_id`
	FROM
	  `tbl_amlak_master_info` LEFT JOIN
	  `tbl_shahr` ON `tbl_amlak_master_info`.`f3` = `tbl_shahr`.`shahr_id` ";		
		if ($_SESSION["s_user_type_id"]>2)
		{
			$str_sql=$str_sql. " where $tbl_name.auto_id='$item_ed_id' and $tbl_name.f2='$_SESSION[s_user_id]'";
		}	
		else
		{
			$str_sql=$str_sql. " where $tbl_name.auto_id='$item_ed_id'";
		}	
		$re=mysql_query($str_sql);
		$num=mysql_num_rows($re);
		if($num==0)
		{
			header("Location: index_admin.php");
			exit;
		}	
		//print $str_sql;
		$selected_row=mysql_fetch_array($re);
}// of edit
else // of is new
{
	$str_sql="SELECT f23,f24 from tbl_user_info  where auto_id='$_SESSION[s_user_id]'";
	$r_city=mysql_query($str_sql);
    list($user_ostan,$user_city)=mysql_fetch_array($r_city);
	
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script language="javascript">
var valid_fld=new Array("f1","f2","f3","f3_temp","f4","f5","f6","f5");
var test_array=new Array("1","1","1","1","1", "1", "1","3");	
var edit=<?php if($edit) print "1"; else print "0"?>;
var item_ed_id=<?php if($edit) print $item_ed_id; else print "0"?>;
</script>
<body>
<p>&nbsp;</p> 
<div align="center">
<div class="main_form">
<form method="POST" action="admin_user_reg_amlak_detail.php" name="frm1" id="frm1">
<?php if($_SESSION["s_user_type_id"]>2) {?>
		<input type=hidden value="<?php print $_SESSION[s_user_id]?>" id="f2" name="f2">
<?php }; ?>		
	<div id="val_item_id" name="val_item_id"></div>		
	<input type=hidden value="<?php print $edit ?>" id="edit_status" name="edit_status">


	<?php
		include "jdf.php";
		$t_date=gregorian_to_jalali($y,$m,$d); // register date
		$f4=$t_date[0]."/".$t_date[1]."/".$t_date[2];
		?>
		<input type=hidden value="<?php print $f4?>" id="f4" name="f4">

	<table class="tbl_1_border">
		<tr>
			<td align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" class="tbl_2">
				
					<tr>
						<td align="center" width="100%"  colspan="4"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>
					<tr>
						
					</tr>
					<tr>
						
						</td>
					</tr>
					<tr>
						<td width="100%" class="cell_message" colspan="4" height=30px;>
							<center><span id="msg_send_err" name="msg_send_err"></span>
	  						<span id="msg_send_ok" name="msg_send_ok"></span></center>
						</td>
					</tr>

					<tr>
						<td align="left" width="20%" class="cell_lable">
<?php if($_SESSION["s_user_type_id"]<=2){ ?>					
						آگهي دهنده :
<?php }?>						
						</td>
						<td align="right" class="cell_input" width="30%">
<?php if($_SESSION["s_user_type_id"]<=2){ ?>					
						<select id="f2" name="f2" />
<option value='-1'> آگهي دهنده را انتخاب کنيد</option>
<?php 
$re1=mysql_query("select auto_id,f3,f22 from tbl_user_info order by f22 asc");
while($row2 = mysql_fetch_array($re1))
{
 print $_SESSION["s_user_id"];
 ?>
 
<option <?php if($_SESSION["s_user_id"]==$row2[auto_id]&&$edit!=1) print " selected"; if ($edit) {if ($selected_row["f2"]==$row2["auto_id"]) print " selected";}?>  value=<?php print $row2[auto_id];?> ><?php print $row2["f22"]." ، ".$row2["f3"] ?></option>
<?php }?>
</select>
<?php }?>
</td>

					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%">
						</td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span class="fld_err" id="err_f12"></span>
</td>
					</tr>
					<tr>
<td align="right" width="20%" class="cell_lable">نوع آگهي :</td>
						<td class="cell_input" align="right" width="30%" >
<select id="f12" name="f12" />
<option value="-1"> نوع آگهي را انتخاب کنيد</option>
<?php 
$re=mysql_query("select auto_id,f1,f2,f3 from tbl_adver_type");

/*$re=mysql_query("SELECT  `tbl_item_sub_group`.`auto_id`,`tbl_item_sub_group`.`f2` 
FROM
  `tbl_item_group` RIGHT JOIN
  `tbl_item_sub_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id` where `tbl_item_group`.`f1`='خودرو'  ");
  */
while($row2 = mysql_fetch_array($re))
{
 ?>
<option  value=<?php print $row2[auto_id];?> <?php if($selected_row["f12"]==$row2["auto_id"]) print " selected"?> ><?php print $row2[f1]." اعتبار : ".$row2[f2]." روز "." هزينه ثبت: ".$row2[f3]." ريال " ?></option>
<?php }?>
</select></td>
						<td align="left" width="20%" class="cell_lable">نوع معامله :</td>
						<td class="cell_input" align="right" width="30%" >
<select id="f1" name="f1" />
<option value="-1"> نوع معامله را انتخاب کنيد</option>
<?php 
//$re=mysql_query("select auto_id,f2 from tbl_item_sub_group where auto_id=242 or auto_id=254");
$re=mysql_query("SELECT  `tbl_item_sub_group`.`auto_id`,`tbl_item_sub_group`.`f2` 
FROM
  `tbl_item_group` RIGHT JOIN
  `tbl_item_sub_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id` where `tbl_item_group`.`f1`='املاک'  ");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option  value=<?php print $row2[auto_id];?> <?php if($selected_row["f1"]==$row2["auto_id"]) print " selected"?> ><?php print $row2[f2] ?></option>
<?php }?>
</select></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%">
						</td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%"><span class="fld_err" id="err_f1"></span>
						</td>
					</tr>
					<tr>
						<td align="right" width="20%" class="cell_lable">
						استان :</td>
					<td align="right" class="cell_input" width="30%">
						<select id="f3_temp" name="f3_temp"  onchange="loadcity2(this.options[this.selectedIndex].value);"/>
<option value='-1'>استان را انتخاب نماييد</option>
<?php 
mysql_query("SET CHARACTER SET utf8");
$re=mysql_query("select ostan_id,ostan_name from tbl_ostan");
while($row2 = mysql_fetch_array($re))
{
 ?>
<option value=<?php print $row2[ostan_id];?>  <?php if($selected_row["ostan_id"]==$row2[ostan_id]||$user_ostan==$row2[ostan_id]) print " selected"?>  ><?php print $row2["ostan_name"] ?></option>
<?php }?>
</select></td>
						<td align="left" width="20%" class="cell_lable">شهر/ 
						شهرستان :</td>
						<td class="cell_input" align="right" width="30%" >
						<select id="f3" name="f3"  />
<?php
mysql_query("SET CHARACTER SET utf8");
if($selected_row["shahr_id"]!=0||$selected_row["shahr_id"]!="")
{
	$re=mysql_query("select shahr_id,shahrestan from tbl_shahr where shahr_id=$selected_row[shahr_id]");
	list($cur_shahr_id,$cur_shahr_name)=mysql_fetch_array($re);
	
}	
else
if($user_city!="")
{
	$re=mysql_query("select shahr_id,shahrestan from tbl_shahr where shahr_id=$user_city");
	list($cur_shahr_id,$cur_shahr_name)=mysql_fetch_array($re);
	
}	

 ?>
						
						<option  value="<?php print $cur_shahr_id?>" selected><?php print $cur_shahr_name?></option>
						</select>
						<span id="group_loader"></span></td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%">
						<span class="fld_err" id="err_f3_temp"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%">
						<span class="fld_err" id="err_f3"></span></td>
					</tr>
					<tr>
						<td align="right" width="20%" class="cell_lable">اولويت 
						نمايش :</td>
						<td align="right" class="cell_input" width="30%">
						<input type="text" name="f5" id="f5"  value="<?php if($edit) print $selected_row[f5];else print '1'?>"></td>
						<td align="left" width="20%" class="cell_lable">وضعيت 
						نمايش&nbsp; :</td>
						<td class="cell_input" align="right" width="30%">
						<select id="f6" name="f6" size="1"  />
						<option <?php if($edit) if ($selected_row["f6"]=="1") print "selected"?> value="1">نمايش داده شود</option>
						<option <?php if($edit) if ($selected_row["f6"]=="0") print "selected"?> value="0">فعلا نمايش داده نشود</option>
						</select>
					</td>
					</tr>
					<tr>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td align="right" class="cell_sp" width="30%"><span class="fld_err" id="err_f5"></span></td>
						<td align="left" width="20%" class="cell_sp">&nbsp;</td>
						<td class="cell_sp" align="right" width="30%">
</td>
					</tr>
					<tr>
						<td align="center" width="100%"  colspan="4">
						&nbsp;</td>
						</tr>
					<tr>
						<td align="center" width="100%"  colspan="4">
						<input type="checkbox" name="f_roul" id="f_roul"> قوانين واچار724 را مطالعه کرده و مي پذيرم
						<br>
						<span class="err_roul" id="err_roul"></span>
						</td>
						</tr>
				<tr>
						<td align="center" width="100%" class="cell_sp" colspan="4">
						&nbsp;</td>
					</tr>
				<tr>
						<td align="center" width="100%" class="cell_submit" colspan="4">
						<input type="button" value="ثبت اطلاعات و رفتن به مرحله دوم" name="btn_save" onclick="insert_item();"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</form>			
</div>
</div>
<p>&nbsp;</p>
<?php include"footer_admin_function.php"?>
<script language="javascript">
var res=true;
//=========================================================
 $( document ).ready(function() {
	$(".cell_roul_data").slideToggle('fast');
});
//=========================================================
function insert_item()
{
test_form();	
if (res==false)
	return;
if (!$('#f_roul').is(":checked") ) 
{
	$("#err_roul").hide();
	$("#err_roul").fadeIn(400).html('<font color=#ff0000><b>لطفا ابتدا قوانين واچار724 را مطالعه نموده و توافق خود را با آن اعلام نماييد</b></font>');
	return;
}
var f1= document.frm1.elements["f1"].value;  
var f2= document.frm1.elements["f2"].value;  
var f3= document.frm1.elements["f3"].value;  
var f4= document.frm1.elements["f4"].value;  
var f5= document.frm1.elements["f5"].value;  
var f6= document.frm1.elements["f6"].value;  
var f7=Math.floor((Math.random() * 500) + 1); 
var f8='0'; 
var f9=''; 
var f10='1'; 
$.ajax({
type: "POST",
url: "ajaxinsertmastermelk.php",
data :({
	f1:f1,f2:f2,f3:f3,f4:f4,f5:f5,f6:f6,f7:f7,f8:f8,f9:f9,f10:f10,		
	edit:edit,item_id:item_ed_id		
       }),
cache: true,
success: function(data){
		$('#msg_send_ok').hide();
		$('#msg_send_err').hide();
		if (data>0)
		{
			//alert("asd");
			$('#msg_send_ok').fadeIn(400).html("ثبت اطلاعات اوليه ملک با موفقيت صورت گرفت");
			$("#val_item_id").html('<input type=hidden id=item_id name=item_id value='+data+'>');
			document.frm1.submit();
		}
		else if (data==-1)
		{
			$('#msg_send_err').fadeIn(400).html("خطايي در ثبت اطلاعات رخ داده است لطفا دقايقي بعد دوباره تلاش نماييد");
			
		}
}
})

}// of function
//=========================================
function loadcity2(loadId){
 
 if (loadId!=-1)
 {
	var dataString = 'loadId='+ loadId;
  $("#city_loader").show();
  $("#city_loader").fadeIn(400).html('<img src="images/aseman_loading.gif" >');
  $.ajax({
     type: "POST",
     url: "ajaxloadcity.php",
     data: dataString,
     cache: false,
     success: function(result){
      $("#city_loader").hide();
      $("#f3").html("<option value='-1'>شهر را انتخاب نماييد</option>");
      $("#f3").append(result);
     }
   });
  } 
}
//======================================================
function roul_click()
{
	//alert("asd");
	$(".cell_roul_data").slideToggle('slow');
	//$(".cell_roul").toggle(); 
}
</script>

</body>