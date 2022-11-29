<?php session_start(); 
include "connect.php";
if ($_SESSION["s_sell_id"]!="")
{
	$isozv=$_POST["isozv"];
	if($isozv=="0")
	{


		$f1=1; // mostari adi
		$f2=3; // moshtari hast
		$f3=cleantxt($_POST["tn"]);
		$f6=cleantxt($_POST["tm"]);
		$f7=cleantxt($_POST["ta"]);
		$f8=cleantxt($_POST["te"]);
		$semat=cleantxt($_POST["semat"]);

		$str_sql="select auto_id from tbl_user_info where f8='$f8'";				
		$re=mysql_query($str_sql);
		if($re)
		{ 
			$num=mysql_num_rows($re);		
			if ($num>0)
			{
				echo -2;
				die();
			}	
		}
		else
		{
				echo -1;
				die();

		}		


		include "jdf.php";
		$t_date=gregorian_to_jalali($y,$m,$d); // register date
		$f9=$t_date[0]."/".$t_date[1]."/".$t_date[2];
		
		$f10=cleantxt($_POST["te"]);
		$f11=$_POST["tm"];
		$f13=1;// faal shavad
		$f22=cleantxt($_POST["tf"]);
		$f23=(int)$_POST["to"];
		$f24=(int)$_POST["tc"];

		$str_sql="insert into tbl_user_info(f1,f2,f3,f6,f7,f8,f9,f10,f11,f13,f22,f23,f24)values ($f1,$f2,'$f3','$f6','$f7','$f8','$f9','$f10','$f11','$f13','$f22',$f23,$f24)";				
		$re=mysql_query($str_sql); // insert master factor
		if($re)
		{ 
			$re=mysql_query("select auto_id from tbl_user_info where f8='$f8' limit 1");
			if (!$re)
			{
				echo "-1";
				//echo "eror in select from tbl_user"; 
			}	
			else
			{	
				list($user_code)=mysql_fetch_array($re);
				$_SESSION["s_user_id"]=$user_code;
				$_SESSION["s_user_type_id"] =3;
				$_SESSION["s_customer_type_id"]=1;
				$_SESSION["s_full_user_name"] =$f3." ".$f22;
				$_SESSION["s_user_off_persent"]=0;
				$_SESSION["s_user_semat"]=$semat;
				$sum_price=0;
				$str_sql="select sum(f3) from tbl_basket where f1='$_SESSION[s_sell_id]'";
				$re=mysql_query($str_sql);
				list($sum_price)=mysql_fetch_array($re);
				if ($sum_price>0)
				{
					//$_SESSION["s_bank_need"]=$sum_price;
					//$_SESSION["s_basket_status"]="connect2bank";
					echo $sum_price;
				}	
				else
				{
					echo -1;
					//echo "eror in select price";
				}	
			}		
		}
		else
		{
			echo -1;
			//echo "eror in insert tbl_user";
		}

	}//of if ozviat
	else
	{
		//echo -1;
		//echo "eror ozv ast";
	}// end else ozv has
}
else 
{
	echo -1;
	//echo "session nist";
}	
//---------------------------------------
?>