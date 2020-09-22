
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" xml:lang="th" lang="th> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" xml:lang="th" lang="th"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" xml:lang="th" lang="th"><!--<![endif]-->
<!-- html header -->
<?php include_once('connectdb.php');
session_start();
date_default_timezone_set("Asia/Bangkok");
if(empty($_GET["lang"]) ){
  $_GET["lang"]='en';
}
if($_GET["lang"]=='en'){
  include('en.php');
  
  $nr="name_room_en";
  $dt="detail_room_en";
  $fde="detail_en";

}else if($_GET["lang"]=='th'){
  include('th.php');
  
  $nr="name_room_th";
  $dt="detail_room_th";
  $fde="detail_th";
} else if($_REQUEST["lang"]=='cn'){
  include('cn.php');
  $nr="name_room_cn";
  $dt="detail_room_cn";
  $fde="detail_cn";
}
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="cache-control" content="no-transform" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akiralipe Thechiclipe - หาวันหยุดที่สมบูรณ์แบบของคุณ</title>
<meta name="description" content="โรงแรมเซ็นทารา | จองห้องพักที่นี่ตอนนี้เพื่อรับอัตราค่าห้องพักที่ดีที่สุด ทั่วประเทศไทยและในประเทศมัลดีฟส์ กาตาร์ ศรีลังกา โอมาน และเวียดนาม">
<meta name="subject" CONTENT="Centara Hotels and Resorts in Thailand & International">
<meta name="author" content="Centara Hotels and Resorts in Thailand & International">
<meta name="copyright" content="Centara Hotels and Resorts in Thailand & International">
<meta name="distribution" content="global">
<meta name="robots" content="all, index, follow">
<meta name="rating" content="general">

<link rel="author" href="https://plus.google.com/+Centarahotelsresorts/posts"/>
<link rel="publisher" href="https://plus.google.com/b/105773661876095556258"/>
<link rel="shortcut icon" href="img/logoananya.png">
<!-- hreflang -->

<link rel="alternate" href="https://www.centarahotelsresorts.com/" hreflang="x-default" />
<link rel="alternate" href="https://www.centarahotelsresorts.com/" hreflang="en" />
<link rel="alternate" href="https://www.centarahotelsresorts.com/th/" hreflang="th" />
<link rel="alternate" href="https://www.centarahotelsresorts.com/cn/" hreflang="zh" />
<link rel="alternate" href="https://www.centarahotelsresorts.com/de/" hreflang="de" />
<link rel="alternate" href="https://www.centarahotelsresorts.com/es/" hreflang="es" />
<link rel="alternate" href="https://www.centarahotelsresorts.com/fr/" hreflang="fr" />
<link rel="alternate" href="https://www.centarahotelsresorts.com/ru/" hreflang="ru" />
<link rel="alternate" href="https://www.centarahotelsresorts.com/ar/" hreflang="ar" />






<link href="css/bootstrap.min.css" type="text/css"  rel="stylesheet">




<link href="css/webfont.css" rel="stylesheet">
<link href="css/masterslider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
<link href="css/nav-magamenuv2.css">
<link href="css/main-css.css" rel="stylesheet" type="text/css">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">

<style>

.breadcrumb{background:none; margin:0; padding:0; margin:20px 0px;}
</style>
<!--Countdown Time -->



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>



<div id="cookiecontent" style="position:fixed; bottom:0; left:0; width:100%; background-color:rgba(0,0,0,0.7); padding-top:20px; padding-bottom:20px; color:#fff; text-align:center; font-size:13px; z-index:999999;display:none;">
<div class="container">
We use cookies to enhance your visit to our site and to bring you advertisements that might interest you. Read our <a href="https://www.centarahotelsresorts.com/privacy-policy/" class="privacy-link" target="_blank">Privacy Policy</a> to learn how to manage cookies on this site.<br><br>
<a onclick="cookiehide();" class="btn btn-accept">Accept and Close</a>&nbsp;&nbsp;<a href="#" class="btn btn-readmore" target="_blank">Read more</a></div>
</div>


<script>
  dataLayer = [{
    'destination': 'Centara',
    'knxpagecat': 'Corporate-Homepage',
    'knxgeo': 'TH',
    'knxhotelid': ''
  }];
</script>
<!-- Google Tag Manager by Centara Hotels & Resorts -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-9N5X"
height="0" width="0" style="position:absolute; top:0; display:none;visibility:hidden;"></iframe></noscript>
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-9N5X');</script>
<!-- End Google Tag Manager by Centara Hotels & Resorts -->



</head>

<body>

    <!-- ------------------------- navber ------------------------------------------>
                    <div class="header-sm"> 
    <div class="col-xs-12 gray"> 
        <div class="row"> 
            <div class="col-xs-3" style="float:left; text-align:left; padding-top:15px;"> 
                <a href="#menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i> </a>
                <nav id="menu"> 
                <ul> 
                    <li><a href='#'>
                         <?php if ($_GET["lang"] =='th') { ?>
                          <a  href="contact.php?lang=th" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_th.png" height="25" width="25">  ภาษาไทย</a>
                        <?php }elseif ($_GET["lang"] =='en') { ?>
                            <a  href="contact.php?lang=en" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_en.png" height="25" width="25">  English</a>
                        <?php }elseif ($_GET["lang"] =='cn') { ?>
                          <a  href="contact.php?lang=cn" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_cn.png" height="25" width="25">   中文</a>
                        <?php } ?>
                        </a>
                        <ul>
                    <li><a href="contact.php?lang=en" target="_self"><img src="img/icon_en.png" height="25" width="25"></i>English</a></li>
                    <li><a href="contact.php?lang=th" target="_self"><img src="img/icon_th.png" height="25" width="25"></i>ภาษาไทย</a></li>
                    <li><a href="contact.php?lang=cn" target="_self"><img src="img/icon_cn.png" height="25" width="25"></i>中文</a></li>
                        </ul>
                    </li>
        <?php include_once('navber.php'); ?>
                                <!-- // ** Lang //** -->
        <li class="menuitem_right"><br>

            <?php if ($_GET["lang"] =='th') { ?>
               <a href="contact.php?lang=th" class="menuitem_drop"><h5><img src="img/icon_th.png" height="25" width="25">ภาษาไทย</h5></a>
            <?php }elseif ($_GET["lang"] =='en') { ?>
                <a href="contact.php?lang=en" class="menuitem_drop"><h5><img src="img/icon_en.png" height="25" width="25">English</h5></a>
            <?php }elseif ($_GET["lang"] =='cn') { ?>
               <a href="contact.php?lang=cn" class="menuitem_drop"><h5><img src="img/icon_cn.png" height="25" width="25">中文</h5></a>
            <?php } ?>
            
            <div class="dropdown_1column dropdown_flyout dropdown_right"  style="min-width:150px;">
                <ul class="level">
                    <li><a href="contact.php?lang=en" target="_self"><img src="img/icon_en.png" height="25" width="25">English</a></li>
                    <li><a href="contact.php?lang=th" target="_self"><img src="img/icon_th.png" height="25" width="25">ภาษาไทย</a></li>
                    <li><a href="contact.php?lang=cn" target="_self"><img src="img/icon_cn.png" height="25" width="25">中文</a></li>
                </ul>
            </div>
        </li>   
        </ul>
        </div>
        </div>
                            
        <!-- End navigation -->
        <div class="clearfix"></div>    
        </div>
        </div>
        </div>
        </div>
        </header>


            <!------------------------- booking -------------------------------------------------->


            <!------------------------  END booking   ----------------------->











        <!--*** ROOM *** -->

<section style="padding-top: 150px">

  <div class="col-sm-12 col-lg-12" style="padding:15px;">
            <div class="container">
                <div class="shadow" style="border:1px solid #f5f5f5;">
                    <div class="col-sm-12" style="padding-bottom:15px;">
                    <?php $font22 = ( "SELECT * FROM fontweb where type='location' " );
          $re22 = mysqli_query( $con, $font22 );
          $ro22 = mysqli_fetch_assoc( $re22 );?>
                    <h1><?php echo $ro22['detail_en'];?></h1><br>

                  <div class="col-sm-6" style="padding-bottom:15px;">
                    <?php $font333 = ( "SELECT * FROM fontweb where type='img_location' " );
          $re333 = mysqli_query( $con, $font333 );
          $ro333 = mysqli_fetch_assoc( $re333 );?>
                    <img src="img/<?php echo $ro333['detail_th'];?>" width="100%" height="450" alt="" title="" ">
                   
                  </div>
                  
                  <div class="col-sm-6" style="padding-bottom:15px;">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3191.9612562099546!2d99.3053377!3d6.4866564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304c05cd7db7bd4f%3A0x3414d3de23ee252e!2sAnanya+Lipe+Resort!5e1!3m2!1sth!2sth!4v1566483324242!5m2!1sth!2sth" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

</div>
  
    <iframe  style="border:0" width="1" height="1"></iframe>


</section>


    <!--*** END ROOM *** -->
















<!-- Footer -->
<?php include_once('footer.php');?>

<!-- Default Call Script -->
<script id="fbparam" src="https://www.centarahotelsresorts.com/corporateweb/assets/fastbooking/fbparam.js" ></script>
<script src="https://www.centarahotelsresorts.com/corporateweb/assets/fastbooking/fblib.js" ></script>
<script id="preloader">jQuery(window).load(function () {$('#status').fadeOut();$('#preloader').delay(50).fadeOut(50);});</script>
<script>
jQuery(document).ready(function(){

/*Main Menu and Dropdown*/  
$(".dropdown").hover(
function() { $('.dropdown-menu', this).fadeIn("fast");
},
function() { $('.dropdown-menu', this).fadeOut("fast");
});
    
$('.navbar .dropdown > a').click(function(){
location.href = this.href;
});
$('.navbar .root > a').click(function(){
location.href = this.href;
});
/*  Scroll Top*/
$(window).scroll(function () {
 if ($(this).scrollTop() > 50) {
$('#back-to-top').fadeIn();
} else {
$('#back-to-top').fadeOut();
}
});
// scroll body to 0px on click
$('#back-to-top').click(function () {
$('#back-to-top').tooltip('hide');
$('body,html').animate({
scrollTop: 0
}, 800);
return false;
});
$('#back-to-top').tooltip('show');  
 
/*centara 1 Card*/
$('#centara1card').popover({ 
title: 'Member Price Guarantee',
trigger:'hover focus',
placement:'auto',
delay: {show: 500, hide: 1000}
});
var originalLeave = $.fn.popover.Constructor.prototype.leave;
$.fn.popover.Constructor.prototype.leave = function(obj){
var self = obj instanceof this.constructor ?
obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type)
var container, timeout;

originalLeave.call(this, obj);

  if(obj.currentTarget) {
    container = $(obj.currentTarget).siblings('.popover')
    timeout = self.timeout;
    container.one('mouseenter', function(){
      //We entered the actual popover – call off the dogs
      clearTimeout(timeout);
      //Let's monitor popover content instead
      container.one('mouseleave', function(){
        $.fn.popover.Constructor.prototype.leave.call(self, self);

});
})
}
};


/*Tooltip*/
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/* End document ready */
});
</script>
<script>
function irewards_logout(){
var dataString = "";
$.ajax
({
type: "POST",
url: "https://www.centarahotelsresorts.com/WEBSERVICE/API/CHRC1CLOGOUT.asp",
data: dataString,
cache: false,
success: function(html)
{
location.reload();
}
});
}
</script>


</body>
</html>
