<?php session_start(); 
include "connect.php";
		$user=cleantxt($_POST["tu"]);
		$pass=cleantxt($_POST["tp"]);
		if ($user==""||$pass=="")
		{
			echo -1;
			die();
		}
		$str_where=" where `tbl_user_info`.`f8`='$user' and `tbl_user_info`.`f11`='$pass' and `tbl_user_info`.`f13`=1";				
		$str_sql="SELECT
		  `tbl_user_info`.`auto_id`, `tbl_user_info`.`f1`, `tbl_user_info`.`f2`, `tbl_user_info`.`f3`,`tbl_user_info`.`f14` as shop_id,
		   `tbl_user_info`.`f5`,`tbl_user_info`.`f6`, `tbl_user_info`.`f7`, `tbl_user_info`.`f22`, `tbl_user_info`.`f8`, `tbl_user_type`.`f1` as semat
			FROM
			`tbl_user_info` LEFT JOIN
			`tbl_user_type` ON `tbl_user_info`.`f2` = `tbl_user_type`.`auto_id`".$str_where;
		$re =mysql_query($str_sql);

		$re=mysql_query($str_sql);
		if(!$re)
		{ 
			echo -1;
			die();
		}
		$num=mysql_num_rows($re);		
		if ($num<=0)
		{
			echo -1;
			die();
		}
		$user_info=mysql_fetch_array($re);
		$_SESSION["s_user_id"]=$user_info["auto_id"];
		$_SESSION["s_user_type_id"] =$user_info["f2"];
		$_SESSION["s_full_user_name"] =$user_info["f3"]." ".$user_info["f22"];
		$_SESSION["s_customer_type_id"]=$user_info["f1"];
		$_SESSION["s_user_semat"]=$user_info["semat"];
		$_SESSION["s_shop_id"]=$user_info["shop_id"];
	 	$result =mysql_query("select f3 from tbl_customer_type where auto_id='$user_info[f1]'");
	 	list($_SESSION["s_user_off_persent"])=mysql_fetch_array($result);

		echo 1;
		//header("Location: index_admin.php");					
	
//---------------------------------------
?>