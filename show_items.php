<?php include "user_header.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<!-- ---------------------------------------------------------- -->	
	<section>
		<div class="container">
			<div class="row">
		
<?php include "item_group.php"?>			
<!------------------------------------- Selected Group Pic------------------------>						
<?php 
$sub_id=(int)$_POST["sub_id"];
if($sub_id=="")
	$sub_id=(int)$_GET["sub_id"];
if($sub_id=="")	
	$sub_id=(int)$_GET["zaghsiyahemechoobnazanberarjandorostniya"];
/*if($sub_id=="")	
	header("Location: index.php");	
*/
/*if($sub_id=="")	
{

	$search_txt=cleantxt($_POST["search_txt"]);	
	if($search_txt=="")
			header("Location: index.php");	
	else
		$search=1;		
}*/
$str_search="";
$str_des="";
if($sub_id=="")	
{
	//print "<br>step1";
		if($_POST["btn_adv_search"])
		{
			//print "<br>step2";
			$logic=$_POST["txt_logic"];
			//print "<br>step3:$logic";
			if($_POST["txt_item_group"]!=-1)
			{
				$str_search.=" ".$logic." tbl_item_main_group.auto_id=".$_POST["txt_item_group"];
				$str_des.=" گروه کالا :";
			}	
			if($_POST["txt_price1"]!="")
			{
				$str_search.=" ".$logic." tbl_item_info.f4>=".$_POST["txt_price1"];
				$str_des.=" ،قیمت کالا از :".$_POST["txt_price1"];
			}	
			if($_POST["txt_price2"]!="")
			{
				$str_search.=" ".$logic." tbl_item_info.f4<=".$_POST["txt_price2"];
				$str_des.=" ،قیمت کالا تا :".$_POST["txt_price2"];
			}	
			if($_POST["txt_name"]!="")
			{
				
				
				$str_search.=" ".$logic." (tbl_item_info.f3 like '%$_POST[txt_name]%' or tbl_item_info.f10 like '%$_POST[txt_name]%')";
				$str_des.=" ، نام مشابه :".$_POST["txt_name"];
			}	
			$str_order="";	
			$sort=$_POST["txt_sort"];
			switch ($sort)
			{
				case 'date_up':{$str_order=" order by tbl_item_info.auto_id asc";break;}
				case 'date_down':{$str_order=" order by tbl_item_info.auto_id desc";break;}
				case 'price_up':{$str_order=" order by tbl_item_info.f4 asc ";break;}
				case 'price_down':{$str_order=" order by tbl_item_info.f4 desc";break;}
				case 'item_group_sort':{$str_order=" order by tbl_item_main_group.auto_id ";break;}
				
			}//of switch
			  //print $str_search;

			if($str_search=="")
				header("Location: index.php");	
			else
				$search=1;			
				
			
	}//btn_adv_search
	else if($_POST["btn_q_search"])
	{
		$search_txt=cleantxt($_POST["txt_q_search"]);	
		if($search_txt=="")
				header("Location: index.php");	
		else
		{
				$str_search=" and (tbl_item_info.f3 like '%$search_txt%' or tbl_item_info.f10 like '%$search_txt%')";
				$str_des.="  نام مشابه :".$search_txt;				
				$search=1;		
		}		
	}
	else
	{
		$search_txt=cleantxt($_POST["search_txt"]);	
		/*if($search_txt=="")
				header("Location: index.php");	
		else*/
		{
				$search=1;		
				$str_search=" and (tbl_item_info.f3 like '%$search_txt%' or tbl_item_info.f10 like '%$search_txt%')";
				$str_des.="  نام مشابه :".$search_txt;				
				
		}		
	}			
}

if($search==1)	
{
 	//$group_name=" نتایج جستجو برای  ";
 	//$sub_group_name=$str_des;
//@@@@@@@@
 	$str_des="";
 	

}
else
{
	$re=mysql_query("SELECT `tbl_item_sub_group`.`f2`,`tbl_item_group`.`f1`
	FROM
  `tbl_item_group` RIGHT JOIN
  `tbl_item_sub_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id` where `tbl_item_sub_group`.`auto_id`=$sub_id");
 	list($sub_group_name,$group_name)=mysql_fetch_array($re);
 }	
?>				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"><?php print $group_name." : ".$sub_group_name?></h2>


<?php 
if($search==1)	
{
	$str_sql="select tbl_item_info.auto_id,tbl_item_info.f3,tbl_item_info.f4,tbl_item_info.f5,tbl_item_info.f6,tbl_item_info.f10,tbl_item_info.f18,tbl_item_info.f8 
	FROM
  `tbl_item_group` RIGHT JOIN
  `tbl_item_sub_group` ON `tbl_item_sub_group`.`f1` = `tbl_item_group`.`auto_id`
  RIGHT JOIN
  `tbl_item_info` ON `tbl_item_info`.`f1` = `tbl_item_sub_group`.`auto_id`
  LEFT JOIN
  `tbl_item_main_group` ON `tbl_item_group`.`f10` =`tbl_item_main_group`.`auto_id` where tbl_item_info.f15=1 and f23=1 ".$str_search." ".$str_order;
  print "<!--".$str_sql."-->";
	$re=mysql_query($str_sql);
  
    }
else
	$re=mysql_query("select auto_id,f3,f4,f5,f6,f10,f18,f8 from tbl_item_info where (f23=1 or f23=3) and f15=1 and f1=$sub_id order by f21,f17");
	
while($row=mysql_fetch_array($re))
{
?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img onclick="show_item_detail(<?php print $row[auto_id]?>);" src="images/items_pic/<?php print $row["auto_id"]?>_larg_1.jpg" title="<?php print $row[f3]?>" alt="<?php print $row[f3]?> در آرکا" />
											<h2><?php print pool($row["f4"])?> ریال</h2>
											<p><?php print small_name($row["f3"],42)?></p>
<?php if ($row["f8"]>0){?>	
<input type=text value=1 id="t_<?php print $row[auto_id]?>" name="t_<?php print $row[auto_id]?>" width=5px class="t_sabad_count">
<a title="<?php print $row[f3]?>" onclick="mayom103x('<?php print $row[auto_id]?>','1');" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
به سبد اضافه کن
</a>
<?php 
}
else
{
?>									
<a title="<?php print $row[f3]?>" class="btn btn-default add-to-cart_no">
کالا فروخته شد
</a>
<?php }?>

										</div>
										<!--<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php print $row["f4"]?> ریال</h2>
												<p><?php print $row["f3"]." - ".$row["f10"]?></p>
												<a href="?add2b&item_id=<?php print $row[auto_id]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
												افزودن به سبد</a>
											</div>
										</div>-->
							<?php if ($row["f5"]==1) print "<img src='images/no.png' class='new' />";?>
							<?php if ($row["f5"]==2) print "<img src='images/nono.png' class='new' />";?>
							<?php if ($row["f5"]==3) print "<img src='images/daste2.png' class='new' />";?>
										<img src="images/<?php print $img1?>" class="new" alt="" />										
	 									 <?php if ($row["f8"]<=0){$img2="sold.png"; ?>
										<img src="images/<?php print $img2?>" class="forosh" alt="" />
										<?php } ?>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a title="<?php print $row[f3]?>" onclick="show_item_detail(<?php print $row[auto_id]?>);"><i class="fa fa-plus-square"></i>
										سایر تصاویر</a></li>
										<li><a title="<?php print $row[f3]?>" onclick="show_item_detail(<?php print $row[auto_id]?>);"><i class="fa fa-plus-square"></i>
										 توضیحات محصول</a></li>
									</ul>
								</div>
							</div>
						</div>
<?php }// of while?>						
<!------------------------------------------------------------->
<!------------------------------------------------------------->
					</div><!--features_items-->
<!--------------------------------------------------------------------->					
				</div>
			</div>
		</div>
	</section>
<p></p>
<p></p>	
<?php include "user_footer.php"?>