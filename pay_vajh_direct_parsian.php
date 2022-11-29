<?php include "user_header.php"?>
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<?php 
function gotoParsian () {
  include	("lib/nusoap.php");

  $soapclient = new nusoap_client("https://pec.shaparak.ir/NewIPGServices/Sale/SaleService.asmx?WSDL",'wsdl');
  
  if (!$err = $soapclient->getError())
  	$soapProxy = $soapclient->getProxy() ;
  if ( (!$soapclient) OR ($err = $soapclient->getError()) ) 
  {
    $error .= $err . "<br />" ;
	echo $error ;
  } 
  else 
  {

	$amount = intval($_POST["tprice"]) ;  
	$orderId = time();
	$authority = 0 ;  // default authority
	$status = 1 ;	// default status
   $callbackUrl = "https://arka.company/pay_vajh_direct_parsian.php?step=ret";  // return from dargah

	$price=$_POST["tprice"];
	$_SESSION["pay_info"]=$_POST["tn"].",".$_POST["te"].",".$_POST["tm"].",".$_POST["tdes"].",".$price;


    $params = array(
	 			'pin' => "WiaxeRn8QxvK6KTUxkbq" ,  
                'amount' => $amount,
                'orderId' => $orderId,
				'callbackUrl' => $callbackUrl,
				'authority' => $authority,
				'status' => $status
              );
	$sendParams = array($params) ;
    $res = $soapclient->call('PinPaymentRequest', $sendParams);
	$authority = $res['authority'];
	$status = $res['status'];
	
	
    if ( ($authority) and ($status==0) )  
    {
	   // this is a succcessfull connection
	   //$parsURL = "https://www.pec24.com/pecpaymentgateway/?au=".$authority ;
	   $parsURL="https://pec.shaparak.ir/pecpaymentgateway/?au=".$authority ;
       //redirectToURL ($parsURL) ;
       header('Location: '.$parsURL);  
	   exit() ;
	   die() ;
	   return;

    } 
    else
     {
		   // this is unsucccessfull connection
		  echo "<p dir=LTR>";
    	  if ($err=$soapclient->getError()) 
    	  {
		  	 echo "ERROR = $err <br /> " ;
		  }
		  //echo "$authority <br />" ;
		  echo "کد خطا : "."$status <br />" ;
		  echo " شماره سفارش : "."$orderId <br />" ;
		  echo "خطا در هنگام اتصال به درگاه بانک پارسیان" ;
		  echo "</p>";
    }

  }
}
?>
</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" dir=rtl>
<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
if ($_GET["step"]=="ret")		
{
  include("lib/nusoap.php");
  $authority = $_REQUEST['au'];
  $status = $_REQUEST['rs'];

  if ($status==0) {
	  $soapclient = new nusoap_client("https://pec.shaparak.ir/NewIPGServices/Sale/SaleService.asmx?WSDL",'wsdl');

	if ( (!$soapclient) OR ($err = $soapclient->getError()) ) 
	{
	   // this is unsucccessfull connection
       echo  $err . "<br />" ;

    } 
    else 
    {
	  $status = 1 ;   // default status
      $params = array(
	            'pin' => "WiaxeRn8QxvK6KTUxkbq" ,  
	 			'authority' => $authority,
                'status' => $status ) ; // to see if we can change it
	  $sendParams = array($params) ;
      $res = $soapclient->call('PinPaymentEnquiry', $sendParams);
	  $status = $res['status'];

	  if ($status==0) 
	  {
				list($tn,$te,$tm,$tdes,$price) = explode(',',$_SESSION["pay_info"]);
				date_default_timezone_set('Asia/Tehran');
				include "jdf.php";
				$pay_date=gregorian_to_jalali($y,$m,$d);
				$pay_date=$pay_date[0]."/".$pay_date[1]."/".$pay_date[2];

				$pay_time=date("Y-n-j G:i");
				$pay_time=explode(' ',$pay_time);
				$pay_time=$pay_time[1];
				$f10="PARSIAN";
					$re=mysql_query("insert into tbl_payment (f1,f2,f3,f4,f5,f6,f7,f9,f10,f12,f13,f14,f15) values ('0','-1','$price','$pay_date','$pay_time','1','3','$authority','$f10','$tn','$tm','$te','$tdes')");
				if($re)
				{					
					print "<font color='#DE3873'><b><span style='background-color: #FFFFFF'><center><br>"."تراکنش با موفقیت انجام شد"."</span><br></font>";
					print "<br>"."شماره پیگیری :"."<font color=#6600cc>".$authority."</font></b>";
					print "<br><br><a href=index.php>"."بازگشت به صفحه آغازین"."</a><br>";
				} 
				else
				{
						print "<font color='#DE3873'><b><span style='background-color: #FFFFFF'><center><br>"." تراکنش با موفقیت انجام شد اما خطایی در ثبت اطلاعات شما رخ داده است.لطفا با مدیر سایت تماس بگیرید"."</span><br></font>";
					print "<br>"."شماره پیگیری :"."<font color=#6600cc>".$authority."</font></b>";
				}

	  }
	  else 
	  {

	  	 // this is a UNsucccessfull payment
	  	 // we update our DataBase

	  	  echo  "خطا در هنگام تکمیل عملیات پرداخت"  ;
	  }

	}


  } 
  else 
  {
	    echo  "خطا در هنگام تکمیل عملیات پرداخت"  ;
  }


//=========================================
}
else
if($_POST["step"]=="go") // goto dargah
{
	gotoParsian(); 
}// of else		
?>
</body>
</html>