<?php include "user_header.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
	<section id="do_action">
	<p></p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
		<div class="container">
			<div class="row">
	    		<div class="col-sm-12">
				<div class="chose_area" id="address_info">
  					<div id="msg_title" name="msg_title">درباره آرکا</div>
  					<img src=images/aseman_about.png>
<?php 
$re=mysql_query("select f9,f10,f11,f12,f13 from tbl_shop_info");
$row=mysql_fetch_array($re);
?>	    				
	    					<div class="p_title">شرکت مهندسی نرم افزار آرکا</div> 
							<div class="p_des"><?php print cleantxt($row["f9"]);?></div>
							<div class="p_title"><?php print cleantxt($row["f10"]);?></div>
							<div class="p_des"><?php print cleantxt($row["f11"]);?></div>
							<div class="p_title"><?php print cleantxt($row["f12"]);?></div>
							<div class="p_des"><?php print cleantxt($row["f13"]);?></div>
					<!--		
  					<div id="msg_title" name="msg_title">آدرس ما بروی نقشه</div>
  						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3257.129756982342!2d59.22035400000001!3d35.277899999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f1304c0bfa40fe5%3A0x99d54efa86e10afe!2z2LHYp9uM2YXZhtiv2b7amNmI2Yc!5e0!3m2!1sen!2sir!4v1415997395844"  width="100%" name="f1" border="0" frameborder="0" scrolling="no"></iframe>
	    			</div>
	    			-->
				</div>		
				</div>
				</div>
	</section>
<?php include "user_footer.php"?></body></html>