<?php
include "connect.php";
			$user_email=$_POST["te"];
			//echo $user_email;
			if($user_email=="")
			{
				echo "step1";
				die();
			}	

	//===============GET USER PASSWORD =================
				$re=mysql_query("select f11 from tbl_user_info where f8='$user_email'");
				if(!re)
				{
					echo "step1_2";
					die();
				}
				else if (mysql_num_rows($re)<=0)
				{
					echo -2;
					die();
				}
				else	
			list($user_pass)=mysql_fetch_array($re);
			$body="<p dir=rtl align=right><span lang=fa><font face=Tahoma size=2>";
				$body=$body."�&#1740;� �&#1740;�&#1740;� �� ������� ��� ���&#1740; ���&#1740;��&#1740; ��� ���� ��� �� ��&#1740;� �&#1740;�����&#1740; �Ǎ��724 ����� ���&#1740;�� ���";
			$body=$body."<br>"."������� �����&#1740; ��� �� ��&#1740;� �Ǎ�� 724 ������� �� :";
			$body=$body."<br>"."��� �����&#1740; :<br>".$user_email;
			$body=$body."<br>"."��� ���� :<br>".$user_pass;
			$body=$body."<br>"."�&#1740;� �&#1740;�&#1740;� �� ���� ��Ϙ�� ���&#1740; ��� ����� ��� ��� ���� �� �� ���� ���&#1740;�";
			$body=$body."<br>"."���Ԑ�� �&#1740;�����&#1740; �Ǎ�� 724. ���&#1740;� �����&#1740;� . ��� ���&#1740;�";
			$body=$body."<br><a href=https://www.arka.company>www.arka.company</a>";
			$body=$body."</font></span></p>";
			
			
			
			
			
			$res=send_mail($body,$user_email);	
			echo $res;
			
	
//---------------------------------------
?>