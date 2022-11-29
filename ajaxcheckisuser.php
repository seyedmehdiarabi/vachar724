<?php session_start(); 
include "connect.php";
		$val=cleantxt($_POST["userid"]);
		if ($val!="")
		{
			$str_sql="select auto_id from tbl_user_info where f8='$val'";				
			$re=mysql_query($str_sql);
				if($re)
			{ 
				$num=mysql_num_rows($re);		
				echo $num;
			}
			else
				echo -1;
		}
			else
				echo -1;
	
//---------------------------------------
?>