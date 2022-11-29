<?php session_start(); 
include "connect.php";

		//if($_SSESION["s_user_id"]=="")
		//	die();
		//echo "asda";	
				
			$sms_type=$_POST["dtype"];
			$info=$_POST["m"];
			list($pass,$user)=explode('*',$info);
			$cust_tel=$pass;
			if($cust_tel==""||$sms_type=="")
			{
				die();
			}	
			//echo $sms_type;
			if($sms_type=="membership")	
			{
				//print "asdasd";
				$re=mysql_query("select f3,f4 from tbl_option");
				list($cust_send,$modir_send)=mysql_fetch_array($re);
				
				if ($cust_send==1||$modir_send==1)
				{
					$re=mysql_query("select f1,f2 from tbl_sms_text");
					list($cust_sms,$modir_sms)=mysql_fetch_array($re);
				}	
				if ($cust_send==1)
				{
					$cust_mobil=substr($cust_tel,1,10);
					$cust_sms=str_replace('user',$user,$cust_sms);
					$cust_sms=str_replace('pass',$pass,$cust_sms);
					aseman_send_sms($cust_sms,$cust_mobil);
				}	
					
				if ($modir_send==1)
				{
					$re=mysql_query("select f8 from tbl_shop_info order by auto_id desc limit 1");
					list($modir_mobil)=mysql_fetch_array($re);
					$modir_mobil=substr($modir_mobil,1,10);
					aseman_send_sms($modir_sms,$modir_mobil);
				}	

			}

//---------------------------------------
?>