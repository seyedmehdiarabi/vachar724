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

$re=mysql_query("select * from tbl_payment_mellat");
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
      		require_once("lib/nusoap.php");
		$client = new nusoap_client('https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl');
		$namespace='http://interfaces.core.sw.bps.com/';

$babat=cleantxt($_GET["babat"]);
if($babat=="sabad")
{
	$callBackUrl = "https://arka.company/pay_kharid_return.php";  // return from dargah
	$amount = $_SESSION["s_sum_fact"];
	//print $amount;
	if ($amount>0)
	{
			$additionalData = "بابت خرید از آرکا".",user_code=".$_SESSION["s_user_id"].",user_full_name=".$_SESSION["s_full_user_name"];
			$orderId = time();
			date_default_timezone_set('Asia/Tehran');
			$t=date("Y-m-d H:i:s", time()); 	
			$time=substr($t,11, 2);
			$time--;
			$time=$time.substr($t,14, 2).substr($t,17, 2);
			$date=substr($t,0, 4).substr($t,5, 2).substr($t,8, 2);
			
			//$_SESSION["s_amount"]=$amount;
			//header("Location: pay_kharid_return.php");
			//die();
//----------------------------------------------------------------------------
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
	
				$result = $client->call('bpPayRequest', $parameters, $namespace);
			
				if ($client->fault) 
				{
						echo '<center><h3>خطایی در هنگام اتصال به بانک رخ داده است لطفا دقایقی بعد مجددا تلاش نمایید</h3><pre>' . $result . '</pre><center>';
					die();
				} 
				else 
				{
					$resultStr  = $result;
					$err = $client->getError();
					if ($err) 
					{
							echo '<center><h3>خطایی در هنگام اتصال به بانک رخ داده است لطفا دقایقی بعد مجددا تلاش نمایید</h3><pre>' . $err . '</pre><center>';
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
							print "<center>"."خطا در هنگام اتصال به درگاه بانک ملت"."<br>";
							print "<center><a href=index.php>"."بازگشت "."<br>";
							print " کد خطا بازگشت داده شده ".$ResCode;
						}
				  }// end Display the result
			}// end Check for errors

//----------------------------------------------------------------------------			
	}
	else
	{
				echo '<h2>متاسفانه خطایی در مبلغ فاکتور رخ داده است. لطفا خرید را دوباره انجام دهید</h2>';
				die();

	}
}// of babat sabad
?>
</body>
</html>