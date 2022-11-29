<?php session_start(); 
include "connect.php";
if ($_SESSION["s_sell_id"]!="")
{
				$sum_price=0;
				$all_sum=0;
				$sum_post_price=0;
				$str_sql="select sum(f4)*f5,sum(f9) from tbl_basket where f1='$_SESSION[s_sell_id]'";
				
				$re=mysql_query($str_sql);
				list($sum_price,$sum_post_price)=mysql_fetch_array($re);
				$all_sum=$sum_price+$sum_post_price;
				if ($sum_price>0)
				{
					$_SESSION["s_sum_fact"]=$all_sum;
					$_SESSION["s_basket_status"]="connect2bank";
					echo $all_sum;
				}	
				else
				{
					echo -1;
				}	
					
}
else 
{
	echo -1;
}	
//---------------------------------------
?>