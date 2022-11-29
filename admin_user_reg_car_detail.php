<?php include "header_admin_page.php";
$form_title="مرحله دوم : ثبت اطلاعات دقیق خودرو";
$valid_fld="";
$test_array="";
$page_id=80;
access_page1($page_id,$_SESSION["s_user_type_id"]);
$item_id=cleantxt($_POST["item_id"]);
$edit=$_POST["edit_status"];

if ($item_id==""||$item_id==0)
	header("Location: index_admin.php");
$re0=mysql_query("select f1 from tbl_car_master_info where auto_id=$item_id");
if (mysql_num_rows($re0)<=0)
	header("Location: index_admin.php");
list($sub_group_id)=mysql_fetch_array($re0) ;

//================================================================
function create_value($auto_id,$title,$f2,$f3,$f4,$edit,$item_id)
{
	$input="";
	if($edit==1)
	{
		$old_val="";
		$r1=mysql_query("select f3 from tbl_car_detail_info where f1=$item_id and f2=$auto_id");
		if (mysql_num_rows($r1)>0)
			list($old_val)=mysql_fetch_array($r1) ;		
	}
	$name="t_".$auto_id;
	switch($f2)
	{
		case "string":
		{
			$input="<input type=text name=$name id=$name value='$old_val' onchange=\"update_detail('$auto_id',this.value);\">";	
			break;
		}
		case "text":
		{
			$input="<textarea name=$name id=$name onchange=\"update_detail('$auto_id',this.value);\">$old_val</textarea>";	
			break;
		}
		case "currency":
		{
			$input="<input type=text name=$name id=$name value='$old_val' onchange=\"update_detail('$auto_id',this.value);\">";	
			break;
		}
		case "int":
		{
			$input="<input type=text name=$name id=$name value='$old_val' onchange=\"update_detail('$auto_id',this.value);\">";	
			break;
		}
		case "boolean":
		{
			$input="<input type=checkbox onchange=\"update_detail('$auto_id',this.value);\" name=$name id=$name ";
			if($old_val=='ok')
				$input.=" checked=true";
			$input.=">";	
			break;
		}
		case "loockup":
		{
			$input="<select size=1  name=$name id=$name onchange=\"update_detail('$auto_id',this.value);\">";
			$input.="<option value=-1>لطفا انتخاب کنید</option>";
			$r=mysql_query("select auto_id,f2 from tbl_car_pre_need_loockup where f1=$auto_id");
			while($rw=mysql_fetch_array($r))
			{
				$input.="<option value='$rw[f2]'";
				if($old_val==$rw[f2])
					$input.=" selected";
				$input.=">$rw[f2]</option>";
			}	
			$input.="</select>";	
			break;
		}
	}// of case	
return $input;
}
//=========================================================
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<body>
<div align="center">
<div class="main_form">
<form method="POST" action="admin_user_reg_car_pic.php" name="frm1" id="frm1">
	<input type=hidden value="<?php print $item_id?>" id="item_id" name="item_id">
	<table class="tbl_1_border">
		<tr>
			<td align="center">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" class="tbl_2">
				
					<tr>
						<td align="center" width="100%"><div class="cell_header"><?php print $form_title?></div></td>
					</tr>
					<tr>

						<td width="100%" class="cell_message" height=30px;>
						</td>
					</tr>

					<tr>
						<td width="100%" align="center" valign="top">
							<table border="0" width="100%" dir="rtl" id="tbl_insert_val" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
						<td align="center" width="100%" class="cell_sp" dir="rtl">
						<table border="0" width="100%" cellspacing=0>
<?php 
	$re=mysql_query("select auto_id,f1,f2,f3,f4,f5 from tbl_car_pre_need where f7=0 or f7=$sub_group_id order by f6");
	$valid_fld="";
	$fld_name="";
	$test_array="";
	while(list($auto_id1,$title1,$f2,$f3,$f4,$unit1)=mysql_fetch_array($re))
	{
	//print $f4."<br>";
	$fld_name.=",\"t_$auto_id1\"";
	$input1="";
	
	if($f4==0)
	{
		//print "t_$auto_id1"."<br>";
		$valid_fld.=",\"t_$auto_id1\"";
		$test_array.=",\"1\"";
	}
	if($f2=="int"||$f2=="currency")
	{
		$valid_fld.=",\"t_$auto_id1\"";
		$test_array.=",\"3\"";
	}
	$input1=create_value($auto_id1,$title1,$f2,$f3,$f4,$edit,$item_id);
	$input2="";
	$unit2="";
	$title2="";
	$auto_id2="";
	if(list($auto_id2,$title2,$f2,$f3,$f4,$unit2)=mysql_fetch_array($re))
	{
		$fld_name.=",\"t_$auto_id2\"";
		if($f4==0)
		{
			$valid_fld.=",\"t_$auto_id2\"";
			$test_array.=",\"1\"";
		}
		if($f2=="int"||$f2=="currency")
		{
			$valid_fld.=",\"t_$auto_id2\"";
			$test_array.=",\"3\"";
		}
		$input2=create_value($auto_id2,$title2,$f2,$f3,$f4,$edit,$item_id);
	}	
?>						
							<tr>
								<td align="left" width="13%"><?php print $title1; if ($unit1!="") print " ( $unit1 )" ;?> : </td>
								<td align="right" width="27%"><?php print $input1 ?> </td>
								<td align="right" width="10%"><?php //print $unit1 ?> </td>
								<td align="left" width="13%"><?php if($title2!=""){print $title2; if ($unit2!="") print " ( $unit2 )" ;?> : <?php }?></td>
								<td align="right" width="27%"><?php print $input2 ?> </td>
								<td align="right" width="10%"><?php //print $unit2 ?> </td>
							</tr>
							<tr>
								<td align="left" width="13%">&nbsp;</td>
								<td align="right" width="27%"><span class="fld_err" id="err_t_<?php print $auto_id1?>"></span></td>
								<td align="right" width="10%">&nbsp;</td>
								<td align="left" width="13%">&nbsp;</td>
								<td align="right" width="27%"><span class="fld_err" id="err_t_<?php print $auto_id2?>"></span></td>
								<td align="right" width="10%">&nbsp;</td>
							</tr>
<?php }// of while
?>
						</table>
									</td>
								</tr>
								<tr>
									<td align="center" valign="top">
						<center>
									<span class="msg_send_ok" id="msg_ok_"></span>
									<span class="msg_send_err" id="msg_err_"></span>
									<span class="msg_send_err"  id="aseman_loader_" name="aseman_loader_"></span>
						</center>
</td>
								</tr>
								</tbody>
							</table>
							&nbsp;</td>
					</tr>
					
				<tr>
						<td align="left" width="100%" class="cell_submit">
						<input type="button" value="رفتن به مرحله سوم" name="btn_save" onclick="insert_rec();"></td>
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
var fld_name=new Array(<?php print substr($fld_name,1,strlen($fld_name))?>);
var valid_fld=new Array(<?php print substr($valid_fld,1,strlen($valid_fld))?>);
var test_array=new Array(<?php print substr($test_array,1,strlen($test_array))?>);	

var frm_name="frm1";
var tbl_name="tbl_car_detail_info";
//=========================================
function update_detail(fld_code,val)
{
		if(val=="on") 
			if(document.getElementById('t_'+fld_code).checked)
				val="ok";
			else
				val="";	
			//alert(fld_code)	
			 $.ajax({
		     type: "POST",
		     url: "ajaxupdatedetailcar.php",
			data :({
				     master_id:<?php print $item_id?>,
				     fld_code:fld_code,
				     val:val
		       }),
		     cache: true,
		     success: function(data){
		if(data==1)
		{
			//alert("ok")
			//document.frm1.submit();
		}	
		else //if (data==-1)
		{
				$('#msg_err_').fadeIn(400).html("خطایی در ثبت اطلاعات رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید");
				//$('#msg_err_').fadeIn(400).html(data);
		}
		}
		})
	
}
//====================================================
function insert_rec()
{
	document.getElementById("aseman_loader_").innerHTML= "<img src=images/aseman_loading.gif>";
	$('#msg_err_').hide();
	test_form();
	if(res==false)
	{
		$('#aseman_loader_').hide();
		$('#msg_err_').fadeIn(400).html("<font color=#ff0000>خطاهای مشخص شده را اصلاح نمایید</font>");
	}
	else
		document.frm1.submit();
}
//=======================================
 $( document ).ready(function() {
	$(".cell_roul_data").slideToggle('fast');
});
//===============================================
function roul_click()
{
	//alert("asd");
	$(".cell_roul_data").slideToggle('slow');
	//$(".cell_roul").toggle(); 
}
</script>

</script>




</body>