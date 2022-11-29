<?php session_start(); 
include "connect.php";
		$pic_name=cleantxt($_POST["p_name"]);
		$pic_code=cleantxt($_POST["p_code"]);
		$str_where=" where tbl_user_info.f8='$pic_name'  and  tbl_user_info.f11='$pic_code' and tbl_user_info.f13=1";
 		$result =mysql_query("SELECT
    	`tbl_user_info`.`auto_id`, `tbl_user_info`.`f1`, `tbl_user_info`.`f2`, `tbl_user_info`.`f3`,
    	`tbl_user_info`.`f5`,`tbl_user_info`.`f6`, `tbl_user_info`.`f7`, `tbl_user_info`.`f8`, `tbl_user_type`.`f1` as semat
		FROM
		`tbl_user_info` LEFT JOIN
		`tbl_user_type` ON `tbl_user_info`.`f2` = `tbl_user_type`.`auto_id`".$str_where);
		 $num = mysql_num_rows($result);
		if($num==0)
			echo -1;
		else
			{
				$user_info=mysql_fetch_array($result);
				$_SESSION["s_user_id"]=$user_info["auto_id"];
				$_SESSION["s_user_type_id"] =$user_info["f2"];
				$_SESSION["s_full_user_name"] =$user_info["f3"];
				$_SESSION["s_customer_type_id"]=$user_info["f1"];
				$_SESSION["s_user_semat"]=$user_info["semat"];
			 	echo 1;
			}

	
//---------------------------------------
?>