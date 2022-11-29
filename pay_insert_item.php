<?php include "master_header.php"?>
$page_id=62;
access_page1($page_id,$_SESSION["s_user_type_id"]);
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
	$re=mysql_query("select * from tbl_bank_mellat");
		$num=mysql_num_rows($re);	
		if ($num>0 )
{
                while($row2 = mysql_fetch_array($re))
				{					
		$terminalId=$row2["f2"];
		$callBackUrl=$row2["f5"];
		$userName = $row2["f3"];
		$userPassword = $row2["f4"];
				} 
				}


if ($_GET["step"]=="x9823!8!9@")		
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
				list($user,$price,$pay_method,$dargah,$babat,$order_code) = explode(',',$_SESSION["pay_info"]);
				date_default_timezone_set('Asia/Tehran');
				include "jdf.php";
				$pay_date=gregorian_to_jalali($y,$m,$d);
				$pay_date=$pay_date[0]."/".$pay_date[1]."/".$pay_date[2];

				$pay_time=date("Y-n-j G:i");
				$pay_time=explode(' ',$pay_time);
				$pay_time=$pay_time[1];

					$re=mysql_query("insert into tbl_payment (f1,f2,f3,f5,f6,f7,f9,f10,f11) values ('$user','$price','$pay_method','$dargah','$babat','$order_code','$pay_time','$pay_date','$verifySaleReferenceId')");
				//print "update tbl_item_info set f25='$verifySaleReferenceId' where auto_id=$order_code";
				$re2=mysql_query("update tbl_item_info set f25='$verifySaleReferenceId' where auto_id=$order_code");
				if (!re2)
					print "خطا در بروزسانی اطلاعات";
				$_SESSION["pay_info"]="";
					
					print "<font color='#DE3873'><b><span style='background-color: #FFFFFF'><center><br>"."تراکنش با موفقیت انجام شد"."</span><br></font>";
				print "<br>"."شماره پیگیری :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
		
				header("Location: admin_item_info.php");
	
				//print "<br><br><a href=index.php>"."بازگشت به صفحه آغازین"."</a><br>";
					
					//echo "Verify Response is : " . $resultStr;
				}// end Display the result
		
		

}
else
if($_GET["step"]=="ximsd") // goto dargah
{
if ($_GET["babt"]==1)
{
	$price=$_GET["pay_price"];
	$item_id=$_GET["item_id"];
	$_SESSION["pay_info"]=$_SESSION["s_user_id"].",".$price.","."1".","."MELLAT".","."1".",".$item_id;
	$additionalData = ' بابت ثبت کالا با کد '.$item_id ;
}
		//print $item_id;
		//print $_SESSION["pay_info"];
		//exit;		
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
			if ($err) {
				echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
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
				echo '<h2>Fault</h2><pre>';
				print_r($result);
				echo '</pre>';
				die();
			} 
			else {
				// Check for errors
				
				$resultStr  = $result;
	
				$err = $client->getError();
				if ($err) {
					// Display the error
					echo '<h2>Error</h2><pre>' . $err . '</pre>';
					die();
				} 
				else {
					// Display the result
					$res = explode (',',$resultStr);
					//echo "<script>alert('Pay Response is : " . $resultStr . "');</script>";
					//echo "Pay Response is : " . $resultStr;
					$ResCode = $res[0];
					
					if ($ResCode == "0") {
						// Update table, Save RefId
						echo "<script language='javascript' type='text/javascript'>postRefId('" . $res[1] . "');</script>";
					} 
					else {
						print "<center>"."خطا در هنگام اتصال به درگاه بانک ملت"."<br>";
						print "<center><a href=index.php>"."بازگشت "."<br>";
						
						print " کد خطا بازگشت داده شده ".$ResCode;
						 
					// log error in app
						// Update table, log the error
						// Show proper message to user
					}
				}// end Display the result
			}// end Check for errors
		
}// of else		
?>
</body>
</html>