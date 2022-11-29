<?php 

		$f_name=$_FILES[file_name]['name']; 
		//$f_size=$_POST["file_size"];
		$max_size=$_POST["max_size"];
		$upload_dir=$_POST["up_dir"];
		$name1=$_POST["name1"];
		$name2=$_POST["name2"];
		$limit_ext=$_POST["limit_ext"];
		$new_w_size=$_POST["new_w"];
		$new_h_size=$_POST["new_h"];		
		$id=(int)$_POST["id"];		

		if ($id==""||$id==0)
		{
			echo -3;
			die();
		}

		$f_name=strtolower($f_name);
		$name1=strtolower($name1);
		$name2=strtolower($name2);
		$ext = strrchr($f_name,'.'); 
  if ($limit_ext!="")
	{
		$pos = strpos($limit_ext, $ext);
		if($pos===false)
			{
				echo -1;
				die();
			}
	}
	
//-------------------------------
$f_tmp_name = $_FILES[file_name]['tmp_name']; 
$f_size=$_FILES[file_name]['size']; 	
	if ($max_size!=0)
	{
		$max_size=$max_size*1024;
		if ($f_size>$max_size)	
		{
				echo -2;
				die();
		}
	}
//-------------------------------
	if (is_uploaded_file($f_tmp_name))
	{
		$dir1=$upload_dir."/".$name1.$id.$ext;
		if (move_uploaded_file($f_tmp_name,$dir1))
		{
			list($width, $height) = getimagesize($dir1);
			if ($name2=="") 
			{
				echo 1;
				die();
			}
			else
			{
				
//-------create NEW Pic----------------------------
				$name2=$name2.$id.$ext;
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
				
				echo 1;
				die ();
			}

		}//of if move
		
		else
		{
				echo -3;
				die ();
		}
		
		
	}// if upload
	else
	{
				echo -3;
				die ();
	}
	//return $msg;

//---------------------------------------
?>