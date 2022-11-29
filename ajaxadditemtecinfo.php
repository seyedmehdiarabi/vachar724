<?php session_start(); 
include "connect.php";
	
		$f1=cleantxt($_POST["item_id"]);
		$f2=cleantxt($_POST["p"]);
		$f3=cleantxt($_POST["v"]);
		$tbl_name="tbl_item_info_tec";
		if($f2==""||$f3==""||$f1==""||$f1==0)
		{
			echo -1;
			die();
		}
		
		$str_sql="insert into $tbl_name (f1,f2,f3)values ('$f1','$f2','$f3')";				
		$re=mysql_query($str_sql); 
		if(!$re)
		{ 
			echo "-1";
			die();
		}
		else
		{
			$re=mysql_query("select auto_id from $tbl_name where f1='$f1' and f2='$f2' order by auto_id desc limit 1");
			if (!$re)
			{
				echo "-1";
				die();
			}	
			else
			{	
				list($tec_id)=mysql_fetch_array($re);
				echo $tec_id;
			}		
			
		}
//---------------------------------------
?>