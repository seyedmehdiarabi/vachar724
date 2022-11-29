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
	if($_SESSION["s_sell_id"]=="")
		header("Location: login.php?invalid_user");
		

		require_once("lib/nusoap.php");
		$client = new nusoap_client('https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl');
		$namespace='http://interfaces.core.sw.bps.com/';
		$terminalId = 1565095;
		$userName = 'haraj123';
		$userPassword = '27390904';

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
			print "<center><h3> انصراف از پرداخت و یا خطا در تایید نهایی تراکنش</h3>";
print "<br><br><a href=index.php>"."بازگشت به صفحه آغازین"."</a><br>";
			//print_r($result);
			echo '</pre>';
			die();
		} 
		else 
		
		{
	
				$resultStr = $result;
				$err=0;
				
				$f1=$_SESSION["s_sell_id"];
				$f2=$_SESSION["s_user_id"];
				$f3=$_SESSION["s_customer_type_id"];
				
				date_default_timezone_set('Asia/Tehran');
				include "jdf.php";
				$f4=gregorian_to_jalali($y,$m,$d);
				$f4=$f4[0]."/".$f4[1]."/".$f4[2];
				
				$t=date("Y-n-j G:i");
				$t=explode(' ',$t);
				$f5=$t[1];
				
				$f6="بابت خرید از سایت آرکا. کد رهگیری: ".$verifySaleReferenceId;
				$f7="0";
//------------------------------------------------------------------------------------				
				//---------------------------CEREATE MASTER FACTOR --------
				//---------------------------------------------------------

				$re=mysql_query("insert into tbl_recive_order_master (f1,f2,f3,f4,f5,f6,f7) values ('$f1','$f2','$f3','$f4','$f5','$f6','$f7')");
				if ($re)
				{
					$re=mysql_query("select auto_id from  tbl_recive_order_master where f1='$f1' order by auto_id desc limit 1");
					list($master_id)=mysql_fetch_array($re);
					//---------------------------UPDATE BASKET --------
					//-------------------------------------------------

					mysql_query("update tbl_basket set f1='$master_id' where f1='$_SESSION[s_sell_id]'");
				
					//---------------------------MOVE FROM BASKET INTO FACTOR DETAIL  --------
					//-------------------------------------------------

						mysql_query("INSERT INTO tbl_recive_order_detail(auto_id,f1,f2,f3,f4,f5,f6,f7,f8,f9,f10) SELECT auto_id,f1,f2,f3,f4,f5,f6,f7,f8,f9,f10 FROM tbl_basket where f1='$master_id'");

					//---------------------------UPDATE INTEM INFO --------
					//-------------------------------------------------

					$r_basket=mysql_query("select f2 as item_id,f5 as item_count from tbl_basket where f1='$master_id'");
					while($row=mysql_fetch_array($r_basket))
						mysql_query("update tbl_item_info set f8=f8-'$row[item_count]',f22=f22+'$row[item_count]' where auto_id='$row[item_id]'");

					//---------------------------DELETE FROM BASKET--------
					//-----------------------------------------------------

					mysql_query("delete from tbl_basket where f1=$master_id");	

					//---------------------------CREATE TRANSACTION LOG --------
					//----------------------------------------------------------
					//-1== vachar
						$sanad_des="بابت پرداخت هزینه فاکتور خرید کالا از سایت به شماره :".$master_id;

						$re=mysql_query("insert into tbl_payment (f1,f2,f3,f4,f5,f6,f7,f8,f9,f10) values 	('$_SESSION[s_user_id]','-1','$_SESSION[s_sum_fact]','$f4','$f5','1','2','$master_id','$verifySaleReferenceId','$sanad_des')");

					//---------------------------CREATE TRANSACTION LOG --------
					//----------------------------------------------------------
					//@@@@@@@@@@@send_sms();
					//////////////////////////////////////////////////////////////
					$_SESSION["s_sum_fact"]="";
					$_SESSION["s_sell_id"]="";
					session_unregister("s_sum_fact");
					session_unregister("s_sell_id");
						print "<font color='#DE3873'><b><span style='background-color: #FFFFFF'><center><br>"."تراکنش با موفقیت انجام شد"."</span><br></font>";
					print "<br>"."شماره پیگیری :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
print "<br><br><a href=index.php>"."بازگشت به صفحه آغازین"."</a><br>";
				} 
				else
				{
						print "<font color='#DE3873'><b><span style='background-color: #FFFFFF'><center><br>"." تراکنش با موفقیت انجام شد اما خطایی در ثبت فاکتور شما رخ داده است.لطفا با مدیر سایت تماس بگیرید"."</span><br></font>";
					print "<br>"."شماره پیگیری :"."<font color=#6600cc>".$verifySaleReferenceId."</font></b>";
print "<br><br><a href=index.php>"."بازگشت به صفحه آغازین"."</a><br>";
				}
				
		}// 
		
?>
</body>
</html>