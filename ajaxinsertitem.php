<?php session_start(); 
include "connect.php";
	
		$val=cleantxt($_POST["te"]);
	
		$f1=cleantxt($_POST["f1"]);
		$f2=cleantxt($_POST["f2"]);
		$f3=cleantxt($_POST["f3"]);
		$f4=cleantxt($_POST["f4"]);
		$f5=cleantxt($_POST["f5"]);
		$f6=cleantxt($_POST["f6"]);
		$f7=cleantxt($_POST["f7"]);
		$f8=cleantxt($_POST["f8"]);
		$f10=cleantxt($_POST["f10"]);
		$f11=cleantxt($_POST["f11"]);
		$f12=cleantxt($_POST["f12"]);
		$f13=cleantxt($_POST["f13"]);
		$f14=cleantxt($_POST["f14"]);
		$f15=cleantxt($_POST["f15"]);
		$f16=cleantxt($_POST["f16"]);
		$f19=cleantxt($_POST["f19"]);
		$f20=cleantxt($_POST["f20"]);
		$f21=cleantxt($_POST["f21"]);
		$f23=cleantxt($_POST["f23"]);
		$f26=cleantxt($_POST["f26"]);
		$edit=$_POST["edit"];
		if($edit==1)
		{
			$item_id=cleantxt($_POST["item_id"]);
			if($item_id==""||$item_id==0)
			{
				echo "-1";
				die();
			}
			
		}	
		
		
		if($f2==""||$f2==0||$f1==""||$f1==0||$f3==""||$f4==""||$f4==0||$f8==""||$f8==0||$f26==""||$f26==0)
		{
			echo "-1";
			die();
		}
		
	if($edit==0)
	{
		$str_sql="insert into tbl_item_info(f1,f2,f3,f4,f5,f6,f7,f8,f10,f11,f12,f13,f14,f15,f16,f19,f20,f21,f23,f26)values ('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f10','$f11','$f12','$f13','$f14','$f15','$f16','$f19',$f20,'$f21','$f23','$f26')";				
		$re=mysql_query($str_sql); 
		if(!$re)
		{ 
			echo "-1";
			die();
		}
		else
		{
			$re=mysql_query("select auto_id from tbl_item_info where f2='$f2' order by auto_id desc limit 1");
			if (!$re)
			{
				echo "-1";
			}	
			else
			{	
				list($item_id)=mysql_fetch_array($re);
				echo $item_id;
			}		
			
		}
	}
	else
	if($edit==1)	
	{
		if ($_SESSION["s_user_type_id"]>2)
			$str_sql="update tbl_item_info set f1='$f1',f3='$f3',f4='$f4',f5='$f5',f6='$f6',f7='$f7',f8='$f8',f10='$f10',f11='$f11',f12='$f12',f13='$f13',f14='$f14',f15='$f15',f16='$f16',f20='$f20',f23='0',f26='$f26' where auto_id=$item_id";						
		else
			$str_sql="update tbl_item_info set f1='$f1',f2='$f2',f3='$f3',f4='$f4',f5='$f5',f6='$f6',f7='$f7',f8='$f8',f10='$f10',f11='$f11',f12='$f12',f13='$f13',f14='$f14',f15='$f15',f16='$f16',f20='$f20',f23='0',f26='$f26' where auto_id=$item_id";							

		$re=mysql_query($str_sql); 
		if(!$re)
		{ 
			echo "-1";
			die();
		}
		else
		{
			echo $item_id;
			die();
		}	
			
	}
//---------------------------------------
?>