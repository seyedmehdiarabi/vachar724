<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<?php
function visit_counter()
{
    $max_time=90;
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        //check ip from share internet
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        //to check ip is pass from proxy
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    else
        $ip=$_SERVER['REMOTE_ADDR'];

    //print $ip;
    $re=mysql_query("select f2 from tbl_visit_temp where f1='".$ip."' order by auto_id desc limit 1");
    $num = mysql_num_rows($re);

    if ($num==0)
    {
        $today=date('d m Y');
        $now_time=time();
        mysql_query("update tbl_visit set f2=f2+1 where f1='$today'");
        mysql_query("insert into tbl_visit_temp values('','$ip',$now_time)");

    }
    else
    {
        list($v_time)=mysql_fetch_array($re);
        $now_time=time();
        $def=$now_time-$v_time;
        if ($def>$max_time)
        {
            $today=date('d m Y');
            mysql_query("update tbl_visit set f2=f2+1 where f1='$today'");
            $now_time=time();
            mysql_query("insert into tbl_visit_temp values('','$ip',$now_time)");

        } // of if

    }// of else
} // of proc
//------------------
$today=date('d m Y');
$str_sql="select auto_id from tbl_visit where f1='$today'";
$re = mysql_query($str_sql);
$num = mysql_num_rows($re);
if ($num==0)
{
    $str_sql="insert into tbl_visit values('','$today',1)";
    mysql_query($str_sql);
}
else
    visit_counter();


$re=mysql_query("select sum(f2) from tbl_visit where f1='$today'");
list($sum_today)=mysql_fetch_array($re);

$yesterday=date('d m Y',time()-86400);
$re=mysql_query("select sum(f2) from tbl_visit where f1='$yesterday'");
list($sum_yesterday)=mysql_fetch_array($re);

$re=mysql_query("select sum(f2) from tbl_visit ");
list($sum_all)=mysql_fetch_array($re);

$re=mysql_query("select count(auto_id) from tbl_visit_temp ");
list($sum_temp)=mysql_fetch_array($re);
if ($sum_temp>1000)
{
    mysql_query("delete from tbl_visit_temp ");
}


?>


<footer id="footer"><!--Footer-->
    <div class="footer-top" >
        <div class="container">
            <div class="row">

                <div class="col-sm-3">
                    <div class="address">
                        <img src="images/home/map.png" alt="بازاری امن برای تمام فروختنی های شما" />
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="video-gallery text-center">
                                <video class="" width="100%" height="100%" controls preload="none" loop>
                                    <source src="video/holoo8.mp4" type="video/mp4">
                                </video>
                                <p>فصل جدید کسب و کار با هلو 8</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="video-gallery text-center">
                                <video class="" width="100%" height="100%" controls preload="none" loop>
                                    <source src="video/kartnamayndgi.mp4" type="video/mp4">
                                </video>
                                <p>احراز هویت کارشناسان هلو</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--------------------------------------------------- -->
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span> مهندسی آرکا</span> در یک جمله : </h2>
                        <p>ارائه دهنده راهکارهای مدیریت کسب و کار مبتنی بر فناوری اطلاعات</p>
                    </div>
                </div>
                <!--------------------------------------------------- -->
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">

                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2 >عضویت در خبرنامه</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="ایمیل خود را وارد کنید" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i></button>
                            <!--<p>با ثبت ایمیل خود در خبرنامه ما عضو شوید <br /></p>-->
                        </form>

                        <div align="center">
                            <table border="0" width="100%" cellspacing="0" cellpadding="0" height="100">
                                <tr>

                                    <td align="right" colspan="3" height="25">
                                        &nbsp;</td>
                                </tr>
                                <tr>

                                    <td align="center" colspan="3" height="25"><b><font color=#cccccc size=3pt> آمار بازدید از آرکا </font></td>
                                </tr>
                                <tr>

                                    <td align="left" width="25%" rowspan="3">
                                        <img border="0" src="images/visit_amar.png" alt="آمار بازدید" width="36" height="40"></td>
                                    <td align="left" height="25" width="25%">
                                        <img border="0" src="images/dirooz.png" alt="" width="71" height="10"></td>
                                    <td align="right" height="25" width="50%"><b><font color=#FF4F4F size=2px>&nbsp;<?php print $sum_yesterday;?></font></b><font color=#ccc size=2pt> مرتبه</font></td>
                                </tr>
                                <tr>
                                    <td align="left" height="25" width="25%">
                                        <img border="0" src="images/emrooz.png" alt="" width="71" height="10"></td>
                                    <td align="right" height="25" width="50%"><b><font color=#FF4F4F size=2px>&nbsp;<?php print $sum_today;?></font></b><font color=#ccc size=2pt> مرتبه</font></td>
                                </tr>
                                <tr>
                                    <td align="left" height="25" width="25%">
                                        <img border="0" src="images/kol.png" alt="" width="71" height="10"></td>
                                    <td align="right" height="25" width="50%"><b><font color=#FF4F4F size="2 pt">&nbsp;<?php print $sum_all;?></b></font><font color=#ccc size="2 pt"> مرتبه</font></td>
                                </tr>
                            </table>
                        </div>
                        <!-- --------------------------------------------------- --->
                    </div>
                </div>


                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>خدمات مشتریان</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a target="_blank" href="#">بزودی</a></li>
                            <li><a target="_blank" href="#">بزودی</a></li>
                            <li><a target="_blank" href="#">بزودی</a></li>
                            <li><a target="_blank" href="#">بزودی</a></li>
                            <li><a target="_blank" href="#">بزودی</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>ترین‌ ها</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="tarinha.php?tar=visit">پربیننده‌ ترین</a></li>
                            <li><a href="tarinha.php?tar=arzan">ارزان‌ ترین</a></li>
                            <li><a href="tarinha.php?tar=new">جدیدترین</a></li>
                            <li><a href="tarinha.php?tar=geran">گرانترین</a></li>
                            <li><a href="tarinha.php?tar=mahboob">محبوب‌ ترین</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>خدمات ما</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="contact_us.php">ثبت شکایات</a></li>
                            <li><a href="pay_pool.php">پرداخت وجه مستقیم</a></li>
                            <li><a href="calc_post_price.php">محاسبه هزینه پست</a></li>
                            <li><a href="http://itemtracking.post.ir/" target="_blank">رهگیری مرسولات پستی</a></li>
                            <li><a href="#" target="_blank">پشتیبان آنلاین</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>درباره ما</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="about.php">معرفی آرکا</a></li>
                            <li><a href="contact_us.php">ارتباط با ما</a></li>
                            <li><a href="login.php">وروداعضاء</a></li>
                            <li><a href="singup.php">ثبت نام در آرکا</a></li>
                            <li><a href="help.php">قوانین و مقررات</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <p class="text-center">کلیه حقوق مادی و معنوی این وب سایت متعلق به مهندسی آرکا می‌باشد.©</p>
                </div>
            </div>
        </div>
    </div>

</footer><!--/Footer-->
<form method="post" action="show_amlak_details.php" name="frm_amlak_detail" id="frm_amlak_detail">
    <div id="show_amlak_id"></div>
</form>

<form method="post" action="show_car_details.php" name="frm_car_detail" id="frm_car_detail">
    <div id="show_car_id"></div>
</form>

<form method="post" action="show_item_details.php" name="frm_detail" id="frm_detail">
    <div id="show_item_id"></div>
</form>
<form method="post" action="show_items.php" name="frm_group" id="frm_group">
    <div id="show_group_id"></div>
</form>

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script language="javascript">
    //<!--------------------------------------------------------------------->
    var item_pos=1;
    function mayom103x(news_name,i_pos)
    {
        item_pos=i_pos;
        var item_count=0;
        var item_name="t_"+news_name;
        item_count=document.getElementById(item_name).value
//item_count=$('#'+item_name).val());
        if (isNaN(item_count)||item_count==0)
            return;
//alert(item_count);
        $.ajax({
            type: "POST",
            url: "the_min_gozar_ajx.php",
            data :({
                news_name:news_name,
                item_count:item_count
            }),
            cache: true,
            success: function(result){
//alert(result);
                if (result!=-1)
                    $('#slIil_22').html(result);
// $('#basket_msg').html(result);                   
                //setTimeout("$('#basket_msg').hide(); ", 3000); 

            }
        })
    }
    //<!--------------------------------------------------------------------->
    function nema_yom_103x(news_name)
    {
        $.ajax({
            type: "POST",
            url: "az_min_vardar_ajx.php",
            dataType: 'json',
            data :({
                news_name:news_name
            }),
            cache: true,
            success: function(data){
                if (data[0]>=0)
                {
                    var sum=0;
                    $('#sb_'+news_name).remove();
//	alert(data[0]);
                    $('#hamash').html(data[0]);
                    $('#slIil_22').html(data[1]);
                    $('#post_pool').html(data[2]);
                    sum1=parseInt(data[2])+parseInt(data[0]);
                    $('#halahamash').html(sum1);

                }
            }
        })
    }
    //<!--------------------------------------------------------------------->
    function show_car_detail(item_id)
    {
        $("#show_car_id").html("<input type=hidden id='item_id' name='item_id' value='"+item_id+"'>");
        frm_car_detail.submit();
    }

    function show_amlak_detail(item_id)
    {
        $("#show_amlak_id").html("<input type=hidden id='item_id' name='item_id' value='"+item_id+"'>");
        frm_amlak_detail.submit();
    }

    function show_item_detail(item_id)
    {
        $("#show_item_id").html("<input type=hidden id='item_id' name='item_id' value='"+item_id+"'>");
        frm_detail.submit();
    }
    function show_item_group(sub_id)
    {
        $("#show_group_id").html("<input type=hidden id='sub_id' name='sub_id' value='"+sub_id+"'>");
        frm_group.submit();
    }
    //---------------------------------------------------------------------
    $('.add-to-cart').on('click', function () {

        var cart = $('.fa-shopping-cart_1');
        var imgtodrag='';
        if   (item_pos==1)
            imgtodrag=$(this).parent('.productinfo').find("img").eq(0);
        else if (item_pos==2)
            imgtodrag=$(this).parent('.productinfo2').find("img").eq(0);
        else if (item_pos==3)
            imgtodrag=$('.view-product').find("img").eq(0);

        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                    top: imgtodrag.offset().top,
                    left: imgtodrag.offset().left
                })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
                })
                .appendTo($('body'))
                .animate({
                    'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
                }, 1000, 'easeInOutExpo');

            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                'height': 0
            }, function () {
                $(this).detach()
            });
        }
    });
    //==========================================
    //---------------------------------------------------
    function besendmail()
    {
        var te=(document.feramoosh.elements["te2"].value).trim();
//alert(te);
        $('#msg_singup_err').hide();
        $('#main_err').hide();
        $('#main_msg').hide();
        $('#msg_send_err').hide();
        $("#msg_send_ok").fadeIn(400).html('<img src="images/aseman_loading.gif" alt="" >');


        if (te==""){
            $('#msg_send_err').fadeIn(400).html("لطفا پست الکترونیک را درج کنید");
            document.feramoosh['te'].focus();
        }
        else if(!isValidEmailAddress(te) )
        {
            $('#msg_send_err').fadeIn(400).html("ایمیل وارد شده صحیح نمی باشد");
            document.feramoosh['te'].focus();
        }
        else
        {
            $.ajax({
                type: "POST",
                url: "ajaxrecoverpassword.php",
                data :({
                    te:te
                }),
                cache: true,
                success: function(data){
//alert(data);
                    $('#msg_send_ok').hide();
                    if (data==1)
                    {
                        $('#msg_send_ok').fadeIn(400).html("رمز عبور به ایمیل شما ارسال گردید");
                    }
                    else if (data==-2)
                    {
                        $('#msg_send_err').fadeIn(400).html("این ایمیل وجود ندارد.لطفا دوباره بررسی نمایید");
                    }
                    else if (data==-1)
                    {
                        $('#msg_send_err').fadeIn(400).html("خطایی درارسال ایمیل رخ داده است لطفا دقایقی بعد دوباره تلاش نمایید");
                    }
                }
            })
        }
    }
    //---------------------------------------------------
    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
        return pattern.test(emailAddress);
    };
    //========================================================
    function khebarbete(m,dtype){
//alert("asd");
        $.ajax({
            type: "POST",
            url: "ajaxkhebarbete.php",
            data :({
                m:m,
                dtype:dtype
            }),
            cache: false,
            success: function(result){
                // alert(result);
            }
        });
    }
    //===================================================
    function loadcity(loadId){

        if (loadId!=-1)
        {
            var dataString = 'loadId='+ loadId;
            $("#city_loader").show();
            $("#city_loader").fadeIn(400).html('<img src="images/aseman_loading.gif" alt="" >');
            $.ajax({
                type: "POST",
                url: "ajaxloadcity.php",
                data: dataString,
                cache: false,
                success: function(result){
                    $("#city_loader").hide();
                    $("#tc").html("<option value='-1'>شهر را انتخاب نمایید</option>");
                    $("#tc").append(result);
                }
            });
        }
    }
    //===============================================	
    function loadcity2(loadId){

        if (loadId!=-1)
        {
            var dataString = 'loadId='+ loadId;
            $("#city_loader2").show();
            $("#city_loader2").fadeIn(400).html('<img src="images/aseman_loading.gif" alt="" >');
            $.ajax({
                type: "POST",
                url: "ajaxloadcity.php",
                data: dataString,
                cache: false,
                success: function(result){
                    $("#city_loader2").hide();
                    $("#tc2").html("<option value='-1'>شهر را انتخاب نمایید</option>");
                    $("#tc2").append(result);
                }
            });
        }
    }
    //===============================================	
</script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>

<!-- Piwik -->
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="//arkaengineering.ir/piwik/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<noscript><p><img src="//arkaengineering.ir/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>
