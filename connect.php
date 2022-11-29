<?php ob_start(); session_start(); 
mysql_connect("localhost", "vacharc2_vacharc", ",M?yG_Ca^@Bs"); 
mysql_select_db("vacharc2_vachardb"); 
mysql_query ( "SET NAMES utf8" ) ;
mysql_query ( "SET CHARACTER_SET utf8" ) ;
$y=date('Y');
$m=date('m');
$d=date('d');
date_default_timezone_set('Asia/Tehran');
//----------------------------------------------------
function cleantxt($txt){
    if(get_magic_quotes_gpc()) {
        $txt = stripslashes($txt);
    }
    $cleanTxt = trim($txt);
    $cleanTxt = htmlspecialchars($cleanTxt);
    $cleanTxt = mysql_real_escape_string($cleanTxt);
    return $cleanTxt;
}
//----------------------------------------------------
function aseman_send_sms($sms,$mobil_tel)
{
if(strlen($mobil_tel)==10&&$sms!="")	
{
ini_set("soap.wsdl_cache_enabled", "0");
$sms_client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));
//$sms_client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));
	if ($err) 
	{
 	   echo 'Error In Sending SMS' . $err;
	}
$re=mysql_query("select f1 from tbl_tec_option");
list($sms_info)=mysql_fetch_array($re);
list($from,$username,$password)=explode('*',$sms_info);
$parameters['username'] = $username;
$parameters['password'] = $password;
$parameters['to'] = $mobil_tel;
$parameters['from'] = $from;
$parameters['text'] =$sms;
$parameters['isflash'] =false;
 $sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result;    
}
 }
 //================================================
 function pool($price)
{
	$p_len=strlen($price);
	if ($p_len>3)
	{
		$cur_pos=$p_len;
		$new_price="";
		while($cur_pos-3>0)
		{
			$new_price=substr($price,$cur_pos-3,3).",".$new_price;
			$cur_pos-=3;
		}	
		$new_price=substr($price,0,$cur_pos).",".$new_price;
		$new_price=substr($new_price,0,strlen($new_price)-1);
		return $new_price;
	}// of if
	return $price; // adad kamte ya 3 ragham ast khodesh mishe
}// of func
//================================================================
function access_page1($page_id,$user_access)
{
	$r=mysql_query("select auto_id from tbl_user_access_info where f1='".$page_id."' and f2='".$user_access."'");
	if (mysql_num_rows($r)==0)
		header("Location: login.php?invalid_user");
}
//=================================================================
function calc_post_price_zood($item_id,$item_count,$who)
{
	$re=mysql_query("select f2,f3,f4,f7,f16 from tbl_item_info where auto_id=$item_id");
	list($f2,$f3,$item_price,$f7,$f16)=mysql_fetch_array($re);
	if ($who==1&&f7==0) // if post is by foroshande dont need calc
		return 0;
	else // yani dar har sorat hazineh post ro hesab kon
	{
//print $item_id."<br>".$item_count;	
	$re=mysql_query("select f23,f24 from tbl_user_info where auto_id=$f2");
		list($of,$cf)=mysql_fetch_array($re); // ostan va shahr foroshande
		
		$re=mysql_query("select f23,f24 from tbl_user_info where auto_id='$_SESSION[s_user_id]'");
		list($okh,$ckh)=mysql_fetch_array($re); // ostan va shahr foroshande
		
		//--------------------- CALC POST PRICE -----------------------------
$position="";		
if($cf==$ckh)
{
	$position="f4";
	$post_method_pos="f14";
}	
else if($of==$okh)
{
	$position="f5";
	$post_method_pos="f15";
}	
	
else 
{
	$str_sql="select hamjavarha from tbl_ostan where ostan_id=$of";
	$re=mysql_query($str_sql);
	
	list($ham1)=mysql_fetch_array($re);

	$t="";
	$k=0;
	$ham_arr=array($ham1);
	for($i=0;$i<strlen($ham1);$i++)
	{
		if($ham1[$i]!=",")
			$t=$t.$ham1[$i];
		else
		{
			$ham_array[$k++]=$t;
			$t="";
		}	
		
	}	

if ((in_array($okh,$ham_array))) 
{
	$position="f6";
	$post_method_pos="f16";
}	
	
else
{
	$position="f7";	
	$post_method_pos="f17";
}	
	
}	
	
	$vazn_kol=$f16*$item_count;

	$str_sql="select * from tbl_post_method order by auto_id limit 1";
	$re=mysql_query($str_sql);
	$post_info=mysql_fetch_array($re);
	$mazad_price=0;
	$vazn_kol_t=$vazn_kol;
	$mazad=0;
	$mazad_unit=0;
	if ($vazn_kol>$post_info["f12"])
	{
		$mazad=$vazn_kol-$post_info["f12"];
		if ($mazad<=$post_info["f13"])
			$mazad_unit=1;
		else
			$mazad_unit=ceil($mazad/$post_info["f13"]);
			
		$mazad_price=$mazad_unit*$post_info[$post_method_pos];	
		
		$vazn_kol=$post_info["f12"];
	}
	
	$str_sql="select $position from tbl_post_width where f1='$post_info[auto_id]' and f2<=$vazn_kol and f3>=$vazn_kol";
	$re=mysql_query($str_sql);
	
	list($price_w)=mysql_fetch_array($re);

	$str_sql="select f3 from tbl_post_bime where  f1<=$item_price and f2>=$item_price";
	$re=mysql_query($str_sql);
	list($bime)=mysql_fetch_array($re);

	
	$price_b=($bime*$tp)/100;
	if ($price_b<$post_info["f18"])
		$price_b=$post_info["f18"];
	
	$xp=0;
	if ($post_info["f10"]>0)
	{
		$xf=$price_w;		
		$xp=($post_info["f10"]*($mazad_price+$price_w))/100;		
	}	

	$price=$price_w+$price_b+$post_info["f6"]+$post_info["f8"]+$post_info["f9"]+$xp+$mazad_price;


	$mal=($price*$post_info["f7"])/100;
	$end_price=$price+$mal;
	
	return $end_price;
		
	}// of else
	
}
//=================================================================
function send_mail($body,$user_email)
{
	require('phpmailer/class.phpmailer.php');
	$mail=new PHPMailer();
 	 $mail->SMTPSecure = "tls";
 	 $mail->SMTPAuth   = true; 
 	 $mail->Port = 587;                 
$mail->CharSet = 'UTF-8';
	$mail->IsSMTP();
	$mail->Host       = 'mail.vachar724.com'; 
	$mail->Username   = 'info@vachar724.com';
	$mail->Password   = 'arabi6567';
	$mail->SetFrom('info@vachar724.com', 'info@vachar724.com');
	$mail->Subject    = 'Vachar724 Password';
	$mail->MsgHTML($body);
	$mail->AddAddress($user_email, ''); 
	if($mail->Send())
	    return 1;
	else
    	return  htmlentities($mail->ErrorInfo);
}


?>