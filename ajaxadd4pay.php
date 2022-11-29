<?php session_start(); 
include "connect.php";
	
		$item_id=cleantxt($_POST["item_id"]);
		if ($_SESSION["s_user_id"]==""||$item_id==0||$item_id=="")
		{
			echo -1;
			die();
		}	
			
		$act=cleantxt($_POST["act"]);
		if($act==0)
		{
			$re=mysql_query("delete from tbl_item_reg_d_factor_t where f2=$item_id");
			if($re)
				echo 1;
			else
				echo -1; 		
			die();
		}
		else
		{
			$reg_price=cleantxt($_POST["reg_price"]);
			$item_price=cleantxt($_POST["item_price"]);
			$item_type=cleantxt($_POST["item_type"]);
			$item_sell_type=cleantxt($_POST["item_sell_type"]);
			$item_count=cleantxt($_POST["item_count"]);
			$user_id=$_SESSION["s_user_id"];
			$re=mysql_query("select count(auto_id) from tbl_item_reg_d_factor_t where f2=$item_id");
			list($count)=mysql_fetch_array($re);
			//$str_sql="select count(auto_id) from tbl_item_reg_d_factor_t where f2=$item_id";
			//echo $str_sql;

			if($count==0)
				$re=mysql_query("insert into tbl_item_reg_d_factor_t values('',$user_id,$item_id,$item_price,$item_count,$reg_price,$item_type,$item_sell_type)");
			if($re)
				echo 1;
			else
				echo -1; 		
			die();

		}	

//---------------------------------------
?>