<?php include "user_header.php"?>
<html dir="rtl">
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
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" dir=rtl>
<?php 

		require_once("lib/nusoap.php");
		$client = new nusoap_client('https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl');
		$namespace='http://interfaces.core.sw.bps.com/';
		$callBackUrl = "https://www.arka.company/pay_vajh_direct_mellat.php?step=ret";  // return from dargah
		

			$terminalId = 1565095;
			$userName = 'haraj123';
			$userPassword = '27390904';


if ($_GET["step"]=="ret")		
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
	
			// Call the SOAP method
			$result = $client->call('bpVerifyRequest', $parameters, $namespace);

			if ($client->fault)
			 {
				print "<center><br><h2> انصراف از پرداخت و یا خطا در تایید نهایی تراکنش</h2><pre><br>";
				//print_r($result);
				echo '</pre>';
				die();
			 } 
			else {
	
				$resultStr = $result;
				// Display the result
				list($tn,$te,$tm,$tdes,$price) = explode(',',$_SESSION["pay_info"]);
				date_default_timezone_set('Asia/Tehran');
				include "jdf.php";
				$pay_date=gregorian_to_jalali($y,$m,$d);
				$pay_date=$pay_date[0]."/".$pay_date[1]."/".$pay_date[2];

				$pay_time=date("Y-n-j G:i");
				$pay_time=explode(' ',$pay_time);
				$pay_time=$pay_time[1];

					$re=mysql_query("insert into tbl_payment (f1,f2,f3,f4,f5,f6,f7,f9,f10,f12,f13,f14,f15) values ('0','-1','$price','$pay_date','$pay_time','1','3','$verifySaleReferenceId','$tdes','$tn','$tm','$te','$tdes')");
				if($re)
				{					
					print "<font color='#DE3873'><b><span style='background-color: #FFFFFF'><center><br>"."تراکنش با موفقیت انجام شد"."</span><br></font>";
					print "<br>"."شماره پیگیری :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
				} 
				else
				{
						print "<font color='#DE3873'><b><span style='background-color: #FFFFFF'><center><br>"." تراکنش با موفقیت انجام شد اما خطایی در ثبت اطلاعات شما رخ داده است.لطفا با مدیر سایت تماس بگیرید"."</span><br></font>";
					print "<br>"."شماره پیگیری :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
				}
		
	
					print "<br><br><a href=index.php>"."بازگشت به صفحه آغازین"."</a><br>";
					

				}// end Display the result
		
		

}
else
if($_POST["step"]=="go") // goto dargah
{
	$price=$_POST["tprice"];
	$_SESSION["pay_info"]=$_POST["tn"].",".$_POST["te"].",".$_POST["tm"].",".$_POST["tdes"].",".$price;
	$additionalData = ' پرداخت مستقیم وجه توسط'.$_POST["tn"];
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
				echo '<center><h3>خطایی در هنگام اتصال به بانک رخ داده است لطفا دقایقی بعد مجددا تلاش نمایید</h3><pre>' . $err . '</pre><center>';
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
	
			// Call the SOAP method
			$result = $client->call('bpPayRequest', $parameters, $namespace);
			
			// Check for a fault
			if ($client->fault) {
				echo '<center><h3>خطایی در هنگام اتصال به بانک رخ داده است لطفا دقایقی بعد مجددا تلاش نمایید</h3><pre>' . $err . '</pre><center>';
				die();
			} 
			else {
				$resultStr  = $result;
				$err = $client->getError();
				if ($err) {
					echo '<center><h3>خطایی در هنگام اتصال به بانک رخ داده است لطفا دقایقی بعد مجددا تلاش نمایید</h3><pre>' . $err . '</pre><center>';
					die();
				} 
				else {
					$res = explode (',',$resultStr);
					$ResCode = $res[0];
					if ($ResCode == "0") {
						echo "<script language='javascript' type='text/javascript'>postRefId('" . $res[1] . "');</script>";
					} 
					else {
							echo '<center><h3>خطایی در هنگام اتصال به بانک رخ داده است لطفا دقایقی بعد مجددا تلاش نمایید</h3><pre>' . $err . '</pre><center>';
							die();
					}
				}// end Display the result
			}// end Check for errors
		
}// of else		
?>
</body>
</html>