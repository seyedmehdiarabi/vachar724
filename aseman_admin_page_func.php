<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<?php
access_page($page_id,$_SESSION["s_user_type_id"]);

if ($_POST["B1"])
{
	$msg='';
	a_insert($f_count,$tbl_name,&$msg);
}
else if ($_POST["B2"])
{
	$msg='';
	a_update($f_count,$tbl_name,&$msg);
}

if(isset($_GET["delete"]))
{
	$msg='';
	$id=$_GET["auto_id"];
	a_delete($tbl_name,$id,&$msg);
}

if(isset($_POST["btn_del"]))
{
	a_del_selected($tbl_name,&$msg);
}

if(isset($_GET["edit"]))
{
	$id=$_GET["auto_id"];
	a_edit_click($tbl_name,$id,&$selected_row);
 }	

function access_page($page_id,$user_access)
{
	$r=mysql_query("select auto_id from tbl_user_access_info where f1='".$page_id."' and f2='".$user_access."'");
	if (mysql_num_rows($r)==0)
		header("Location: login.php?invalid_user");
	
}
//====================================================
function a_insert($f_count,$tbl_name,&$msg)
{

	//$str_sql="insert into ".$tbl_name." values ('',";
	
	$str_sql="insert into ".$tbl_name." (";
	for($i=1;$i<=$f_count;$i++)
	{
		$fname="f".$i;
		if ($i<$f_count)
			$str_sql=$str_sql.$fname.",";
		else
			$str_sql=$str_sql.$fname;
	}
	$str_sql=$str_sql.") values (";

	for($i=1;$i<=$f_count;$i++)
	{
		$fname="f".$i;
		$fname=$_POST[$fname];
		if ($i<$f_count)
			$str_sql=$str_sql."'".$fname."',";
		else
			$str_sql=$str_sql."'".$fname."'";
	}
	$str_sql=$str_sql.")";
	//print $str_sql;
	$re=mysql_query($str_sql);

	if ($re)
		$msg="عملیات درج با موفقیت انجام شد";
	else
		$msg="خطا در انجام عملیات درج"	;
}
//====================================================
function a_update($f_count,$tbl_name,&$msg)
{
	$str_sql="update ".$tbl_name." set ";
	for($i=1;$i<=$f_count;$i++)
	{
		$fname="f".$i;
		$str_sql=$str_sql.$fname."=";
		$fname=$_POST[$fname];
		if ($i<$f_count)
			$str_sql=$str_sql."'".$fname."',";
		else
			$str_sql=$str_sql."'".$fname."'";
			
	}
	$str_sql=$str_sql." where auto_id=".$_POST["auto_id"];
//print $str_sql;
	$re=mysql_query($str_sql);
	if ($re)
		$msg="عملیات ویرایش با موفقیت انجام شد";
	else
		$msg="خطا در انجام عملیات ویرایش. لطفا دوباره تلاش کنید";	
}
//====================================================
function a_delete($tbl_name,$id,&$msg)
{

	$str_sql="delete from ".$tbl_name." where auto_id= ".$id;
	$re=mysql_query($str_sql);
	if ($re)
		$msg="عملیات حذف با موفقیت انجام شد";
	else
		$err_msg="خطا در انجام عملیات حذف. لطفا دوباره تلاش کنید";	
}
//====================================================
function a_del_selected($tbl_name,&$msg)
{
	$chbox= $_POST['ch1'];
	$count = count($_POST['ch1']);
	for($i=0;$i<$count;$i++)
	{
		$id=$chbox[$i];
	    $r=mysql_query("delete from ".$tbl_name." where auto_id='$id'");
	}
	
}	
//====================================================
function a_edit_click($tbl_name,$id,&$selected_row)
		{
			$str_sql="SELECT * from ".$tbl_name." where auto_id=".$id;
			$re = mysql_query($str_sql);
			$selected_row= mysql_fetch_array($re);	
		}

//====================================================
function upload_file($f_name,$f_tmp_name,$f_size,$max_size,$upload_dir,$name1,$name2,$limit_ext,$new_w_size,$new_h_size,&$width,&$height)
{
	//global $width,$height;
	$f_name=strtolower($f_name); 
	$name1=strtolower($name1);
	$name2=strtolower($name2);
	
	if ($limit_ext[0]!="")
	{
		$ext = strrchr($f_name,'.'); 
		if ((!in_array(strtolower($ext),$limit_ext))) 
		{
			$msg=" پسوند فایل نامعتبر می باشد ";
			return $msg;
		}
	}
//-------------------------------
	if ($max_size!=0)
	{
		if ($f_size>$max_size)	
		{
			$msg=" حجم تصویر باید کمتر از ".$max_size." کیلوبایت باشد  ";
			return $msg;
		}
	}
//-------------------------------
	if (is_uploaded_file($f_tmp_name))
	{
		$dir1=$upload_dir."/".$name1;
		if (move_uploaded_file($f_tmp_name,$dir1))
		{
			list($width, $height) = getimagesize($dir1);
			if ($name2=="") 
			{
				$msg=" فایل با موفقیت ارسال شد ";
				return $msg;
			}
			else
			{
				
//-------create NEW Pic----------------------------
				if ($new_w_size>0&&$new_h_size>0)
				{
					$newheight= $new_h_size;
					$newwidth = $new_w_size;
				}
				else if ($new_h_size>0)
				{
					$newheight= $new_h_size;
 					$newwidth = ($newheight*$width)/$height;
 				}
 				else 
 				{
					$newwidth= $new_w_size;
 					$newheight = ($newwidth*$height)/$width;
 				}	
 				
				$thumb = imagecreatetruecolor($newwidth, $newheight);
				
				//print $newheight."/".$newwidth."/".$width."/".$height;
				if ($ext==""||$ext==".jpg")
					$source = imagecreatefromjpeg($dir1);
				else if ($ext==".gif")
					$source = imagecreatefromgif($dir1);
				else if	($ext==".png")
				{
					$source = imagecreatefrompng($dir1);
					imagealphablending($thumb, false);
					imagesavealpha($thumb , true);
				}	
					
				//imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight,$width, $height);
				imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth ,$newheight,$width, $height); // in dastor keyfiyatesh behtare
				
				if ($ext==""||$ext==".jpg")
		 			imagejpeg($thumb,"$upload_dir/".$name2);
				else if ($ext==".gif")		 			
		 			imagegif($thumb,"$upload_dir/".$name2);
		 		else if	($ext==".png")	
		 		{
		 			imagealphablending($thumb , false);
					imagesavealpha($thumb , true);
					//imagepng ($thumb, $filename );
		 			imagepng($thumb,"$upload_dir/".$name2);
		 		}	
				
				$msg=" فایل با موفقیت ارسال شد ";
				return $msg;
			}

		}//of if move
		
		else
		{
				$msg=" خطا در ارسال فایل ";
				return $msg;
		}
		
		
	}// if upload
	else
	{
				$msg=" خطا در ارسال فایل ";
				return $msg;
	}
	//return $msg;
}
//=================================================================
function get_max_id($tbl_name)
{
	$r=mysql_query("select max(auto_id) from $tbl_name");
	list($id_file)=mysql_fetch_array($r);
	return $id_file;
}
//==================================================================
function delete_file($file_name)
{
	if (is_file($file_name))
		unlink($file_name);
}
//======================================================================
function select_factor($master_id,&$master_data,&$detail_data)
{
	$master_data=mysql_query("select * from tbl_recive_order_master where auto_id=$master_id");
	$detail_data=mysql_query("SELECT `tbl_recive_order_detail`.`f3`, `tbl_recive_order_detail`.`f6`,
  `tbl_item_info`.`f2` as item_name,`tbl_item_info`.`f4` as item_unit
FROM
  `tbl_recive_order_detail` INNER JOIN
  `tbl_item_info` ON `tbl_recive_order_detail`.`f2` = `tbl_item_info`.`auto_id` where `tbl_recive_order_detail`.`f1`=$master_id");
  
}
//==================================================================
?>

