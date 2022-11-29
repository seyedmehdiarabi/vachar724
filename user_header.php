<?php include"connect.php"?>
<?php
if(isset($_GET["exit"]))
{
    $_SESSION["s_user_id"]=null;
    session_unregister("s_user_id");

    $_SESSION["s_user_type_id"] =null;
    session_unregister("s_user_type_id");

    $_SESSION["s_customer_type_id"]=$row["f1"];
    session_unregister("s_customer_type_id");

    $_SESSION["s_full_user_name"] =null;
    session_unregister("s_full_user_name");

    $_SESSION["s_user_off_persent"];
    session_unregister("s_user_off_persent");

    $_SESSION["s_user_semat"];
    session_unregister("s_user_semat");


}
?>
    <!DOCTYPE html>
    <html >
    <head>
        <meta property=”og:locale” content=”fa_IR” />
        <meta property=”og:type” content=”website” />
        <meta property=”og:title” content="مهندسی آرکا" />
        <meta property=”og:url” content=”https://www.arka.company/” />
        <meta property=”og:site_name” content=" مهندسی آرکا" />
        <meta property=”og:image” content=”https://arka.company/images/opengraph.jpg”/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="fa">
        <SCRIPT LANGUAGE=JAVASCRIPT>
            //if ((window.location.hostname!="www.arka.company")&&(window.location.hostname!="localhost"))
            //window.location="https://www.arka.company";

            if ((window.location.hostname=="")&&(window.location.hostname!="localhost"))
                window.location="https://www.arka.company";

        </script>
        <?php
        //------------------- SABAD TEST ------------------
        if ($_SESSION["s_sell_id"]!="")
        {
            $valid=array("0","1","2","3","4","5","6","7","8","9");
            $auto_id = preg_replace("/<.*?>/", "",$_SESSION['s_sell_id']);
            $i=strlen($auto_id);
            $i--;
            while ($i>=0)
            {
                if(!in_array($auto_id[$i],$valid))
                {
                    $err=1;
                    $auto_id="";
                    break;
                }
                $i--;
            }
            if($auto_id!="")
            {
                $_SESSION["s_sell_id"]=$auto_id;
                $r_s=mysql_query("SELECT count(`tbl_item_info`.`auto_id`)  FROM `tbl_basket` LEFT JOIN
   `tbl_item_info` ON `tbl_basket`.`f2` = `tbl_item_info`.`auto_id` where `tbl_basket`.`f1`='$_SESSION[s_sell_id]' order by `tbl_basket`.`auto_id` ");
                list($basket_count)=mysql_fetch_array($r_s);
            }
        }


        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="مهندسی آرکا ارائه دهنده راهکارهای مدیریت کسب و کار مبتنی بر فناوری اطلاعات">
        <meta name="keywords" content="        نرم افزار ، حسابداری ، هلو ، اسپاد ، هلیا ، هلو+ ، مالی ، یکپارچه ، خزانه داری ، حقوق و دستمزد ، کتابخانه ، اجاره کالا ، 200 پنل شغلی ، تعمیرات کامپیوتر ، خدمات ، پحش ، بازرگانی ، انبارداری ، حسابداری محض ، شرکتی ، تولیدی ، فروشگاهی ، جامع ، صنعتی">

        <meta name="author" content="خرید و فروش آنلاین">
        <title>مهندسی نرم افزار آرکا</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
        <link href="css/menu/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/menu/megamenu.js"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <script src="js/menu/menu_jquery.js"></script>

        <link rel="stylesheet" href="colorbox.css" />
        <script src="js/jquery.colorbox.js"></script>

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

<body>

<header id="header">
    <div class="header-middle" >
        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <div class="contactinfo">
                        <!--
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +98
                                915 130 77  26</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>
                                info@arka.company</a></li>
                            </ul>
                        -->
                        <div class="search_box pull-left">
                            <form name="frm_search" id="frm_search" method="post" action="show_items.php" dir="rtl" >
                                <input type="text" name="search_txt" id="search_txt" placeholder="جستجوی سریع" onkeypress="handleKeyPress(event,'search')"/>
                                <input type="submit" />
                                <!--<input type="hidden" name="sitesearch" value="https://www.arka.company" />-->
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">

                            <?php if ($_SESSION["s_user_id"]!='')
                            { ?>
                                <li><a href="index.php?exit"><i class="fa fa-sign-out"></i> خروج از پنل </a></li>
                                <li><a href="index_admin.php"><i class="fa fa-user"></i> کاربر جاری : <?php print $_SESSION["s_full_user_name"]?> ، <?php print $_SESSION["s_user_semat"]?>، ورود به پنل مدیریت</a></li>
                                <?php
                            }
                            else
                            {?>
                            <li><a href="login.php"><i class="fa fa-user"></i>
                                    کاربر جاری : کاربر میهمان </a>
                                <?php
                                }
                                ?>

                            <li ><a href="show_basket.php"><i class="fa fa-shopping-cart_1"></i>سبد خرید (<span id="slIil_22" name="slIil_22"><?php print $basket_count;?></span>) عدد</a></li>
                            <li><a href="login.php"><i class="fa fa-lock"></i>
                                    ورود اعضا</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->
    <!--=======================================================================-->
    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">

                <!--=================================================================-->
                <ul class="megamenu skyblue">
                    <li><a class="color3" href="index.php">صفحه آغازین</a></li>
                    <!--------------------------------------------->
                    <?php
                    $re=mysql_query("SELECT auto_id as sg_id,f1 as sg_name,f10 as pic_name from tbl_item_main_group  order by f3");
                    while($row=mysql_fetch_array($re))
                    {
                        $pic="images/sar_group_pic/".$row["pic_name"];
                        ?>

                        <li class="grid">
                            <a class="color3" href="#"><?php print $row["sg_name"]?></a>
                            <div class="megapanel" id="mnu1">
                                <div class="row" style="background:url(<?php print $pic?>) no-repeat left bottom;">
                                    <?php
                                    $re2=mysql_query("SELECT auto_id as g_id,f1 as g_name from tbl_item_group where f10='$row[sg_id]' order by f3");
                                    while($row2=mysql_fetch_array($re2))
                                    {
                                        ?>
                                        <div class="col1">
                                            <div class="h_nav">

                                                <h4><?php print $row2["g_name"]?></h4>
                                                <ul>
                                                    <?php
                                                    $re3=mysql_query("SELECT auto_id as sub_id,f2 as sub_name from tbl_item_sub_group where f1='$row2[g_id]' order by f4");
                                                    while($row3=mysql_fetch_array($re3))
                                                    {
                                                        if($row2["g_name"]=="املاک")
                                                            $link="show_amlak.php";
                                                        else if($row2["g_name"]=="خودرو")
                                                            $link="show_car.php";
                                                        else
                                                            $link="show_items.php";

                                                        ?>
                                                        <li><a href="<?php print $link?>?zaghsiyahemechoobnazanberarjandorostniya=<?php print $row3[sub_id]?>xpoqwqwqoisskakjxoisqwqwwsdwwsdwwcawwwasdeqadazdfkjoizxjcczjcizcnzmxchjzxchzxc"><?php print $row3["sub_name"]?></a></li>
                                                    <?php }// while sub_group?>
                                                </ul>
                                            </div>
                                        </div>

                                    <?php }// while group?>
                                </div>
                                <div class="row">
                                    <div class="col2"></div>
                                    <div class="col1"></div>
                                    <div class="col1"></div>
                                    <div class="col1"></div>
                                    <div class="col1"></div>
                                </div>
                            </div>
                        </li>
                        <!--------------------------------------------->
                    <?php }// while_sar grooh ?>
                    <li><a class="color3" href="singup.php">ثبت نام کنید</a></li>
                    <li><a class="color3" href="search_advance.php">جستجوی پیشرفته</a></li>

                    <!--				<li><a class="color10" href="contact.html">Contact</a>
                                        <div class="megapanel">
                                            <div class="row">
                                                <div class="col3">
                                                    <div class="h_nav">
                                                        <h4>contact us</h4>
                                                    </div>
                                                    <form class="contact">
                                                        <label for="name">Name</label>
                                                        <input id="name" type="text"/>
                                                        <label for="email">E-mail</label>
                                                        <input id="email" type="text"/>
                                                        <label for="message">Message</label>
                                                        <textarea rows="8" id="message"></textarea>
                                                        <input type="submit" value="Send"/>
                                                    </form>
                                                </div>
                                                <div class="col3">
                                                </div>
                                            </div>
                                        </div>
                                    </li>-->
                </ul>
                <!--=================================================================-->
            </div>
        </div>
    </div><!--/header-bottom-->
    <!--==================================================================-->
</header><!--/header-->
<?php
//=====================================================
function small_name($i_name,$len)
{

    $i_name=trim($i_name);
    if (strlen($i_name)<=$len)
        return $i_name;

    $min_name=trim(substr($i_name,0,$len));
    $last_sp=strripos($min_name," ");

    if($last_sp!=false)
        $i_name=substr($min_name,0,$last_sp)."...";
    else
        $i_name=$min_name."...";
    return $i_name;
}

?>