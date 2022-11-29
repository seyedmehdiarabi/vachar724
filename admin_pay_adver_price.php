<?php include "header_admin_page.php";
//$page_id=61;
//access_page1($page_id,$_SESSION["s_user_type_id"]);
?>
<html dir="rtl" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<script language="javascript" type="text/javascript">    
			function postRefId (refIdValue) 
			{
				var form = document.createElement("form");
				form.setAttribute("method", "POST");
				form.setAttribute("action", "https://bpm.shaparak.ir/pgwchannel/startpay.mellat");
				form.setAttribute("target", "_self");
				var hiddenField = document.createElement("input");              
				hiddenField.setAttribute("name", "RefId");
				hiddenField.setAttribute("value", refIdValue);
				form.appendChild(hiddenField);
				document.body.appendChild(form);         
				form.submit();
				document.body.removeChild(form);
			}
			
		</script>

</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" dir=rtl >
<div align=center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
		require_once("lib/nusoap.php");
		$client = new nusoap_client('https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl');
		$namespace='http://interfaces.core.sw.bps.com/';
		$terminalId = 1565095;
		$userName = 'haraj123';
		$userPassword = '27390904';
//==============================================================================================================
if ($_GET["step"]=="x9823!8!9@"||$_GET["step"]=="x9823!8!9")		
{
			$orderId = $_POST['SaleOrderId'];
			$verifySaleOrderId = $_POST['SaleOrderId'];
			$verifySaleReferenceId = $_POST['SaleReferenceId'];
			
			$parameters = array(
			'terminalId' => $terminalId,
			'userName' => $userName,
			'userPassword' => $userPassword,
			'orderId' => $orderId,
			'saleOrderId' => $verifySaleOrderId,
			'saleReferenceId' => $verifySaleReferenceId);
			$result = $client->call('bpVerifyRequest',$parameters,$namespace);
			if ($client->fault)
			{
				print "<center><br><h4>انصراف از پرداخت و یا خطا در انجام تراکنش</h4><pre><br>";
				print "<br>آگهی شما در لیست آگهی های در انتظار تایید قرار گرفته است.";					
				//print_r($result);
				echo '</pre>';
				die();
			} 
				$resultStr = $result;
				date_default_timezone_set('Asia/Tehran');
				include "jdf.php";
				$pay_date=gregorian_to_jalali($y,$m,$d);
				$pay_date=$pay_date[0]."/".$pay_date[1]."/".$pay_date[2];

				$pay_time=date("Y-n-j G:i");
				$pay_time=explode(' ',$pay_time);
				$pay_time=$pay_time[1];
							
			if ($_GET["step"]=="x9823!8!9@")					
			{
	
				list($user,$price,$pay_method,$dargah,$babat,$order_code) = explode(',',$_SESSION["pay_info"]);
				if($babat==6)
					$adver="خودرو";
				else if	($babat==7) 
					$adver="املاک";
					
				$order_des="بابت ثبت آگهی ".$adver." شماره  ".$order_code;
				
					$re=mysql_query("insert into tbl_payment (f1,f2,f3,f4,f5,f6,f7,f8,f9,f10) values ('$user','-1','$price','$pay_date','$pay_time','$pay_method','$babat','$order_code','$verifySaleReferenceId','$order_des')");
				if(!$re)	
				{
					print "<font color=#ff0000>تراکنش در بانک انجام شد اما در ثبت اطلاعات خطایی رخ داده است</font>";
					print "<br>لطفا شماره پیگیری زیر که مربوط به پرداخت شما می باشد را یادداشت نموده و به مدیر سایت اطلاع دهید. ";
					print "<br>آگهی شما با موفقیت ثبت گردیده و در لیست آگهی در انتظار تایید قرار گرفته است.";					
					print "<br>"."شماره پیگیری شما عبارت است از   :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
					$_SESSION["pay_info"]="";
					die();
				}
				
				/*
					$re2=mysql_query("update tbl_item_info set f25='$verifySaleReferenceId' where auto_id=$order_code");
					if(!$re2)	
					{
						print "<font color=#ff0000>تراکنش در بانک انجام شد اما در ثبت اطلاعات خطایی رخ داده است</font>";
						print "<br>لطفا شماره پیگیری زیر که مربوط به پرداخت شما می باشد را یادداشت نموده و به مدیر سایت اطلاع دهید. ";
						print "<br>آگهی شما با موفقیت ثبت گردیده و در لیست آگهی در انتظار تایید قرار گرفته است.";					
						print "<br>"."شماره پیگیری شما عبارت است از   :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
						$_SESSION["pay_info"]="";
						die();
					}
				*/
				
				print "<font color='#DE3873'><b><span style='background-color: #FFFFFF'><center><br>"."تراکنش با موفقیت انجام شد"."</span><br></font>";
				print "<br>آگهی شما با موفقیت ثبت گردیده و در لیست آگهی های در انتظار تایید قرار گرفته است.";				
				print "<br>"."شماره پیگیری شما عبارت است از :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
				print "<br><br><a href=index_admin.php target=_parent>"."ثبت آگهی جدید"."</a><br>";
		  	}

//===========================================================================
		  	else if ($_GET["step"]=="x9823!8!9")
		  	{
		  			
//------------- STEP 1: INSERT MASTER FACTOR---------------------------------		  		
		  		$user=$_SESSION["s_user_id"];
		  		$re=mysql_query("insert into tbl_item_reg_m_factor(f1,f2,f3) values ('$user','$pay_date','$pay_time')");
				if(!$re)	
				{
					print "<font color=#ff0000>تراکنش در بانک انجام شد اما در ثبت اطلاعات خطایی رخ داده است</font>";
					print "<br>لطفا شماره پیگیری زیر که مربوط به پرداخت شما می باشد را یادداشت نموده و به مدیر سایت اطلاع دهید. ";
					print "<br>کالای شما با موفقیت ثبت گردیده و در لیست کالاهای در انتظار تایید قرار گرفته است.";					
					print "<br>"."شماره پیگیری شما عبارت است از   :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
					die();
				}
		  		$re=mysql_query("select max(auto_id) from tbl_item_reg_m_factor where f1=$user");
		  		if(!$re)
		  		{
					print "<font color=#ff0000>تراکنش در بانک انجام شد اما در ثبت اطلاعات خطایی رخ داده است</font>";
					print "<br>لطفا شماره پیگیری زیر که مربوط به پرداخت شما می باشد را یادداشت نموده و به مدیر سایت اطلاع دهید. ";
					print "<br>کالای شما با موفقیت ثبت گردیده و در لیست کالاهای در انتظار تایید قرار گرفته است.";					
					print "<br>"."شماره پیگیری شما عبارت است از   :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
					die();
		  		}
		  		list($fact_reg_id)=mysql_fetch_array($re);
				$re=mysql_query("update tbl_item_reg_d_factor_t set f1='$fact_reg_id' where f1='$user'");		  		
		  		if(!$re)
		  		{
					print "<font color=#ff0000>تراکنش در بانک انجام شد اما در ثبت اطلاعات خطایی رخ داده است</font>";
					print "<br>لطفا شماره پیگیری زیر که مربوط به پرداخت شما می باشد را یادداشت نموده و به مدیر سایت اطلاع دهید. ";
					print "<br>کالای شما با موفقیت ثبت گردیده و در لیست کالاهای در انتظار تایید قرار گرفته است.";					
					print "<br>"."شماره پیگیری شما عبارت است از   :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
					die();
		  		}
//------------- STEP 2: UPDAATE DETAIL FACTOR TEMP AND SEND 2 DETAIL FACTOR MAIN ---------------------------------		  		

				mysql_query("INSERT INTO tbl_item_reg_d_factor SELECT auto_id,f1,f2,f3,f4,f5,f6,f7 FROM tbl_item_reg_d_factor_t where f1='$fact_reg_id'");
				mysql_query("delete from tbl_item_reg_d_factor_t where f1=$fact_reg_id");				
				
//------------- STEP 3: INSERT SANAD PAYMENT ---------------------------------		  						

				$price=$_SESSION["sum_items_price"];
				$des= ' بابت ثبت گروهی کالاهای با شماره فاکتور ثبت شده: '.$fact_reg_id;
				/*vachar code=-1*/
		  			$re=mysql_query("insert into tbl_payment (f1,f2,f3,f4,f5,f6,f7,f8,f9,f10) values ('$user',-1,'$price','$pay_date','$pay_time','1','1','$fact_reg_id','$verifySaleReferenceId','$des')");
				if(!$re)	
				{
					print "<font color=#ff0000>تراکنش در بانک انجام شد اما در ثبت اطلاعات خطایی رخ داده است</font>";
					print "<br>لطفا شماره پیگیری زیر که مربوط به پرداخت شما می باشد را یادداشت نموده و به مدیر سایت اطلاع دهید. ";
					print "<br>کالای شما با موفقیت ثبت گردیده و در لیست کالاهای در انتظار تایید قرار گرفته است.";					
					print "<br>"."شماره پیگیری شما عبارت است از   :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
					die();
				}
				print "<font color='#DE3873'><b><span style='background-color: #FFFFFF'><center><br>"."تراکنش با موفقیت انجام شد"."</span><br></font>";
				print "<br>کالای شما با موفقیت ثبت گردیده و در لیست کالاهای در انتظار تایید قرار گرفته است.";				
				print "<br>"."شماره پیگیری شما عبارت است از :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
				print "<br><br><a href=admin_user_reg_item.php>"."ثبت کالای جدید"."</a><br>";
		  	}			
	
		  	
die();
exit;
}
else
if($_POST["step"]=="ximsd") // goto dargah
{
	$callBackUrl = "http://www.arka.company/admin_pay_adver_price.php?step=x9823!8!9@";  // return from dargah	
	if ($_POST["babat"]==6||$_POST["babat"]==7)
	{
		$price=$_POST["pay_price"];
		$item_id=$_POST["item_id"];
		$_SESSION["pay_info"]=$_SESSION["s_user_id"].",".$price.","."1".","."MELLAT".","."$_POST[babat]".",".$item_id;

		if ($_POST["babat"]==6)
			$additionalData = ' بابت ثبت آگهی خودور با کد '.$item_id ;
		else if ($_POST["babat"]==7)
			$additionalData = ' بابت ثبت آگهی املاک با کد '.$item_id ;
			
	}
}// of else ximsd
//============================== برای اتصال به درگاه= مشترک بین همه==============================
	$orderId = time();
	$amount = $price;
	date_default_timezone_set('Asia/Tehran');
	$t=date("Y-m-d H:i:s", time()); 	
	$time=substr($t,11, 2);
	$time--;
	$time=$time.substr($t,14, 2).substr($t,17, 2);
	$date=substr($t,0, 4).substr($t,5, 2).substr($t,8, 2);
	$payerId = 0;
	$err = $client->getError();
	if ($err) 
	{
					print "<font color=#ff0000>خطا در هنگام اتصال به درگاه بانک  ، اما نگران نباشید:</font>";
					print "<br>آگهی شما با موفقیت ثبت گردیده و در لیست آگهی در انتظار تایید قرار گرفته است.";
					print "<br>برای پرداخت مجدد هزینه آگهی می توانید از بخش پرداخت هزینه آگهی های  ثبت شد اقدام نمایید";
		die();
	}
		  
		$parameters = array(
		'terminalId' => $terminalId,
		'userName' => $userName,
		'userPassword' => $userPassword,
		'orderId' => $orderId,
		'amount' => $amount,
		'localDate' => $date,
		'localTime' => $time,
		'additionalData' => $additionalData,
		'callBackUrl' => $callBackUrl,
		'payerId' => $payerId);
		$result = $client->call('bpPayRequest', $parameters, $namespace);
		if ($client->fault) 
		{
					print "<font color=#ff0000>خطا در هنگام اتصال به درگاه بانک  ، اما نگران نباشید:</font>";
					print "<br>آگهی شما با موفقیت ثبت گردیده و در لیست آگهی در انتظار تایید قرار گرفته است.";
					print "<br>برای پرداخت مجدد هزینه آگهی می توانید از بخش پرداخت هزینه آگهی های  ثبت شد اقدام نمایید";
					//print_r($result);
			die();
		} 
		else 
		{
			$resultStr  = $result;
			$err = $client->getError();
			if ($err) 
			{
					print "<font color=#ff0000>خطا در هنگام اتصال به درگاه بانک  ، اما نگران نباشید:</font>";
					print "<br>آگهی شما با موفقیت ثبت گردیده و در لیست آگهی در انتظار تایید قرار گرفته است.";
					print "<br>برای پرداخت مجدد هزینه آگهی می توانید از بخش پرداخت هزینه آگهی های  ثبت شد اقدام نمایید";
					die();
			} 
			else 
			{
					$res = explode (',',$resultStr);
					$ResCode = $res[0];
					if ($ResCode == "0") 
					{
						echo "<script language='javascript' type='text/javascript'>postRefId('" . $res[1] . "');</script>";
					} 
					else 
					{
					print "<font color=#ff0000>خطا در هنگام اتصال به درگاه بانک  ، اما نگران نباشید:</font>";
					print "<br>آگهی شما با موفقیت ثبت گردیده و در لیست آگهی در انتظار تایید قرار گرفته است.";
					print "<br>برای پرداخت مجدد هزینه آگهی می توانید از بخش پرداخت هزینه آگهی های  ثبت شد اقدام نمایید";
					}
			}
		}
	
?>
</div>
</body>
</html>