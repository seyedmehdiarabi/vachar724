<?php session_start(); 
include "connect.php";
	
		$val=cleantxt($_POST["te"]);
		if ($val!="")
		{
			$str_sql="select auto_id from tbl_user_info where f8='$val'";				
			$re=mysql_query($str_sql);
			if($re)
			{ 
				$num=mysql_num_rows($re);		
				if ($num>0)
					echo -2;
				else
				{

		$f1=1; // moshtari adi
		$f2=3; // moshtari hast
		$f3=cleantxt($_POST["tn"]);
		$f6=cleantxt($_POST["tm"]);
		$f7=cleantxt($_POST["ta"]);
		$f8=cleantxt($_POST["te"]);
		
		
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
		$re=mysql_query($str_sql); 
		if($re)
		{ 
			$re=mysql_query("select auto_id from tbl_user_info where f8='$f8' limit 1");
			if (!$re)
			{
				echo "-1";
			}	
			else
			{	
				list($user_code)=mysql_fetch_array($re);
				$_SESSION["s_user_id"]=$user_code;
				$_SESSION["s_user_type_id"] =3;
				$_SESSION["s_customer_type_id"]=1;
				$_SESSION["s_full_user_name"] =$f3." ".$f22;
				$_SESSION["s_user_off_persent"]=0;
				$_SESSION["s_user_semat"]="New Member";
				echo 1;
			}		
		}
		else
		{
			echo -1;
			//echo "eror in insert tbl_user";
		}

				
				}	
			}
			else
				echo -1;
		}	
		else 
			echo -1;
		

//---------------------------------------
?>