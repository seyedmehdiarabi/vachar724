<?php 
session_start();
$text='QWERTYUIOPASDFGHJKLZXCVBNM123456789';
$s_code='';
for($i=1;$i<=5;$i++)
{
$start=rand(0,strlen($text));
$s_code.=substr($text,$start,1);
}
$_SESSION['s_sec_code']=$s_code;
$font_size=12;
$image_width=70;
$image_height=23;
$image= imagecreate($image_width,$image_height);
imagecolorallocate($image,220,220,220);
$color= imagecolorallocate($image,0,0,0);
imagettftext($image, $font_size,0,4,17, $color,'fonts/8.ttf', $s_code);
imagejpeg($image);
?>