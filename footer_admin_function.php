<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script language="javascript">
var res=true;
function update()
{

test_form();	
if (res==true)
{
//	alert("ok");	
	var dataString=tbl_name+";";
	dataString =dataString+str_where+";";
	
	var val="";
	var len=fld_name.length;
	for(i=0;i<len;i++)
	{
		
		val=(document.frm1.elements[fld_name[i]].value).trim();
		//dataString=dataString+"&"+fld_name[i]+"='"+val+"'";
		dataString=dataString+","+fld_name[i]+"='"+val+"'";
//		alert(dataString);	
	}	
	//alert(dataString);	
	 $.ajax({
     type: "POST",
     url: "ajaxupdatetable.php",
     data: {data_str:dataString},
     cache: false,
     success: function(data)
     {

		$('#msg_send_ok').hide();
		$('#msg_send_err').hide();
		//alert(data);
		if (data==1)
		{
			$('#msg_send_ok').fadeIn(400).html("ویرایش اطلاعات با موفقیت صورت گرفت");
		}
		else if (data==-2)
		{
			$('#msg_send_err').fadeIn(400).html("این ایمیل قبلا ثبت شده است");
		}
		else if (data==-1)
		{
			$('#msg_send_err').fadeIn(400).html("خطایی در ثبت اطلاعات رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید");
		}
	}
})
}// of if
}
//=====================================
function test_form()
{
res=true;	
var val,val_str="";

for(i=0;i<valid_fld.length;i++)
	$('#err_'+valid_fld[i]).hide();
//alert(valid_fld.length);
for(i=0;i<valid_fld.length;i++){
	val=(document.frm1.elements[valid_fld[i]].value).trim();
//	alert(valid_fld[i]+":"+val);
	switch (test_array[i])
	{
	case "1":
	{ 
		if (val==""||val=="-1")
		{	
			$('#err_'+valid_fld[i]).fadeIn(400).html(err_1);
			//alert('#err_'+valid_fld[i]);
			res=false;
		}	
		break;
	}
	case "2":
	{ 
		if (val.length!=11)
		{	
			$('#err_'+valid_fld[i]).fadeIn(400).html(err_2);
			res=false;
		}	

		break;
	}
	case "3":
	{ 
		if (isNaN(val))	
		{	
			$('#err_'+valid_fld[i]).fadeIn(400).html(err_3);
			res=false;
		}	

		break;
	}
	case "4":
	{ 
		if(!isValidEmailAddress(val) ) 
		{	
			$('#err_'+valid_fld[i]).fadeIn(400).html(err_4);
			res=false;
		}	
		break;
	}
	}// of cese
  }// of for
}	
//================================================================================
//---------------------------------------------------
 function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
        return pattern.test(emailAddress);
    };
//========================================================
//===================================================
function loadcity(loadId){
 
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
      $("#f24").html("<option value='-1'>شهر را انتخاب نمایید</option>");
      $("#f24").append(result);
     }
   });
  } 
}
//===============================================	
function load_sub_group(loadId){
 
	var dataString = 'loadId='+ loadId;
  $("#group_loader").show();
  $("#group_loader").fadeIn(400).html('<img src="images/aseman_loading.gif" >');
  $.ajax({
     type: "POST",
     url: "ajaxloadsubgroup.php",
     data: dataString,
     cache: false,
     success: function(result){
      $("#group_loader").hide();
      $("#f1").html("<option value='-1'>انتخاب زیر گروه</option>");
      $("#f1").append(result);
     }
   });
}
//=============================================
function edit_file(id)
{
	var file_name=document.frm1.elements["file1"].value;
	if(file_name==""||id=="")	
		return;
	var name1="";
	var name2="old_pic_";
	var max_size="300";
	var new_w=200;
	var new_h="";
	var limit_ext='.jpg';			
	var up_dir='images/user/';	
var fd;		
fd = new FormData();    
fd.append( 'file_name', $('#file1')[0].files[0]);
fd.append( 'id', id);
fd.append( 'name1', name1);
fd.append( 'name2', name2);
fd.append( 'max_size', max_size);
fd.append( 'new_w', new_w);
fd.append( 'new_h', new_h);
fd.append( 'limit_ext', limit_ext);
fd.append( 'up_dir', up_dir);
$("#msg_send_ok").fadeIn(400).html('<img src="images/aseman_loading.gif" >');
 $.ajax({
     type: "POST",
     url: "ajax_up_file.php",
     data: fd,
     processData: false,
     contentType: false,
     success: function(data)
     {
		//alert(data);
		$('#msg_send_ok').hide();
		$('#msg_send_err').hide();
		
		if (data==1)
		{
			$("#img_user_pic").hide();
			$('#msg_send_ok').fadeIn(400).html(" فایل با موفقیت ارسال گردید ");	
			$("#img_user_pic").fadeIn(400).html("<img src="+up_dir+"old_pic_"+id+".jpg width=100px>");    
			document.frm1.elements["file1"].value="";
		}
		else if (data==-1)
			$('#msg_send_err').fadeIn(400).html(" پسوند فایل قابل قبول نمی باشد ");
		else if (data==-2)
			$('#msg_send_err').fadeIn(400).html(" حجم فایل انتخاب شده بیشتر از حجم مجاز است ");
		else if (data==-3)
			$('#msg_send_err').fadeIn(400).html(" خطایی در ثبت اطلاعات رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید ");
	}
})
}

</script>
