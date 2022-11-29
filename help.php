<?php include "user_header.php"?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
	<style>
<!--
table.MsoTableGrid
	{border:1.0pt solid black;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	}
 li.MsoNormal
	{mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	text-align:right;
	line-height:107%;
	direction:rtl;
	unicode-bidi:embed;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	}
-->
</style>
</head>
<section id="do_action">
	<div class="responsive-tabs" id="about">
   		<div class="container">
   		
   	  		<div class="row">
				<div class="tabs-box clock wow bounceIn">
					<ul class="tabs-menu">
						<?php 
						$re=mysql_query("select auto_id,f1,f2 from tbl_help_koli where f6=1 order by f5 ");
						$num=0;
						while($row=mysql_fetch_array($re))
						{
						$num++;
						?>
							<li <?php if($num==1) print "class='active'" ?>><a href="#tab<?php print $row[auto_id]?>"><?php print $row["f1"]?></a></li>
						<?php }?>			
					</ul>
					<div class="clearfix"> </div>
					<div class="tab-grids">
<?php
					mysql_data_seek($re, 0);
					while($row=mysql_fetch_array($re))
						{
						?>
						<div id="tab<?php print $row[auto_id]?>" class="tab-grid">
							<div class="col-md-12 line1 ">
								<?php print $row["f2"]?>
							</div>
	                		<div class="clearfix"> </div>
       					</div>
					<?php }?>

					</div>
				</div>
			</div>
			
		<!--Script-->
		<script src="js/myscript.js"> </script>
`		<!--Script-->
	</div>
<!--Responsive-tabs-ends-Here-->
</div>
 		
	</section>
<?php include "user_footer.php"?>			
</body>
</html>