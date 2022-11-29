<!DOCTYPE html>
<html>
<head>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--webfont-->
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!--start slider -->
    <link rel="stylesheet" href="css/slider/fwslider.css" media="all">
    <script src="js/slider/jquery-ui.min.js"></script>
    <script src="js/slider/css3-mediaqueries.js"></script>
    <script src="js/slider/fwslider.js"></script>
<!--end slider -->
</head>
<body>
	  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
<?php
$r_s=mysql_query("SELECT auto_id,f1,f4 from tbl_adver_first_page where f5=1 order by f6 limit 10");
while($row_adver=mysql_fetch_array($r_s))
	{
?>	
    
       <div class="slide"> 
	        <a href="<?php print $row_adver[f4]?>"><img src="images/slider/<?php print $row_adver[auto_id];?>.jpg" class="img-responsive" alt="<?php print $row_adver[f1]?>"/></a> 
		</div>
<?php }?>
        </div>
        	<div class="timers"></div>
        	<div class="slidePrev"><span></span></div>
        	<div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
</body>
</html>