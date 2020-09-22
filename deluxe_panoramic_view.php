
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

 $room = $_REQUEST["ID_room"];
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="cache-control" content="no-transform" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ananya Lipe  - เกาะหลีเป๊ะ</title>
<meta name="description" content="">
<meta name="subject" CONTENT="">
<meta name="author" content="">
<meta name="copyright" content="">
<meta name="distribution" content="global">
<meta name="robots" content="all, index, follow">
<meta name="rating" content="general">







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
                          <a  href="deluxe_panoramic_view.php?lang=th&ID_room=<?php echo $room ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_th.png" height="25" width="25">  ภาษาไทย</a>
                        <?php }elseif ($_GET["lang"] =='en') { ?>
                            <a  href="deluxe_panoramic_view.php?lang=en&ID_room=<?php echo $room ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_en.png" height="25" width="25">  English</a>
                        <?php }elseif ($_GET["lang"] =='cn') { ?>
                          <a  href="deluxe_panoramic_view.php?lang=cn&ID_room=<?php echo $room ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_cn.png" height="25" width="25">   中文</a>
                        <?php } ?>
                        </a>
                        <ul>
                    <li><a href="deluxe_panoramic_view.php?lang=en&ID_room=<?php echo $room ?>" target="_self"><img src="img/icon_en.png" height="25" width="25"></i>English</a></li>
                    <li><a href="deluxe_panoramic_view.php?lang=th&ID_room=<?php echo $room ?>" target="_self"><img src="img/icon_th.png" height="25" width="25"></i>ภาษาไทย</a></li>
                    <li><a href="deluxe_panoramic_view.php?lang=cn&ID_room=<?php echo $room ?>" target="_self"><img src="img/icon_cn.png" height="25" width="25"></i>中文</a></li>
                        </ul>
                    </li>
        <?php include_once('navber.php'); ?>
                                <!-- // ** Lang //** -->
        <li class="menuitem_right"><br>

            <?php if ($_GET["lang"] =='th') { ?>
               <a href="deluxe_panoramic_view.php?lang=th&ID_room=<?php echo $room ?>" class="menuitem_drop"><h5><img src="img/icon_th.png" height="25" width="25">ภาษาไทย</h5></a>
            <?php }elseif ($_GET["lang"] =='en') { ?>
                <a href="deluxe_panoramic_view.php?lang=en&ID_room=<?php echo $room ?>" class="menuitem_drop"><h5><img src="img/icon_en.png" height="25" width="25">English</h5></a>
            <?php }elseif ($_GET["lang"] =='cn') { ?>
               <a href="deluxe_panoramic_view.php?lang=cn&ID_room=<?php echo $room ?>" class="menuitem_drop"><h5><img src="img/icon_cn.png" height="25" width="25">中文</h5></a>
            <?php } ?>
            
            <div class="dropdown_1column dropdown_flyout dropdown_right"  style="min-width:150px;">
                <ul class="level">
                    <li><a href="deluxe_panoramic_view.php?lang=en&ID_room=<?php echo $room ?>" target="_self"><img src="img/icon_en.png" height="25" width="25">English</a></li>
                    <li><a href="deluxe_panoramic_view.php?lang=th&ID_room=<?php echo $room ?>" target="_self"><img src="img/icon_th.png" height="25" width="25">ภาษาไทย</a></li>
                    <li><a href="deluxe_panoramic_view.php?lang=cn&ID_room=<?php echo $room ?>" target="_self"><img src="img/icon_cn.png" height="25" width="25">中文</a></li>
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
<!-- <section style="padding-top: 150px">
        <link rel="stylesheet" type="text/css" href="css/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="css/css/jquery.validation.css">
        <link rel="stylesheet" href="css/css/lightslider.min.css">
        <header id="header" role="banner">  
        </header>
</section> -->


            <!------------------------  END booking   ----------------------->


<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/css/jquery-ui-1.8.4.custom.css" />
<link href="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/bootstrap-touchspin-master/src/jquery.bootstrap-touchspin.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/style/etm_calendar.min.css" >
<link rel="stylesheet" type="text/css" href="assets/vendors/ReadyTravelTech/style/custom_theme.css">


<div class="wrapper">
  <div class="slide-fix">
    <article class="content">
      <div id="rev_slider_1059_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept121" data-source="gallery" style="background-color:#000000;padding:0px;"> 
        <div id="rev_slider_1059_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
        <ul>

              <?php
    $room3 = ( "SELECT * FROM room WHERE `ID_room` = '$room'" );
    $room4 = mysqli_query( $con, $room3 );
    while ( $room5 = mysqli_fetch_assoc( $room4 ) ) { ?>

            <?php   
                $sqlnum = "SELECT * FROM img_room where status=1 AND  ID_room = '".$room5['ID_room']."' ";
                $sqlqu = mysqli_query( $con, $sqlnum );     
                $num = mysqli_num_rows($sqlqu);
                $sql = ( "SELECT * FROM img_room where status=1 AND ID_room = '".$room5['ID_room']."' " );
                $res = mysqli_query( $con, $sql );
                while ( $r = mysqli_fetch_assoc( $res ) ) { 
            ?>

        <li data-index="rs-2972" data-transition="scaledownfromright" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off"  data-title="Fade and Slide from Right" data-description=""> 
        <img src="img/imgroom/<?php echo $r['link'];?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"> 
        </li>

      <?php } ?> 
    <?php }?>


       

        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div>
    </article>
  </div>
  <div id="intro"></div>

  <div class="main clearfix">
    <article id="hotel" class="main-inner">
      <section class="main-info-inner">
        <div class="container text-center clearfix">
          <div class="col-md-10 col-md-offset-1 clearfix">
            <header>
          <?php $font333 = ( "SELECT * FROM room where ID_room='$room' " );
          $re333 = mysqli_query( $con, $font333 );
          $ro333 = mysqli_fetch_assoc( $re333 );?>

              <h2 class="title-2"><?php echo $ro333[$nr];?></h2>
            </header>
            <p><?php echo $ro333[$dt];?></p>
            <div class="button-hover-main blue mar-top-30">
              <div class="button-eff"></div>
              <a href="index.php">Book This HOME </a></div>
          </div>
        </div>
      </section>
    </article>

<section class="main-sec-bg">
    <div class="container">
        <div class="row">
            <div class="box-accom-info clearfix">
                <div class="tab-acc">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#room3" aria-controls="room3" role="tab" data-toggle="tab">Facilities</a></li>
                        
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="room3">
                            <div class="row-inner clearfix">
                                <div class="box-accom-info clearfix">
                                    <div class="box-accom">
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="box-accom-list clearfix">
                                                    <h4>Bathroom:</h4>
                                                    <ul>
                                                        <li><img src="icon/bathroom/Bathrobes.png" alt="" class="img-responsive"><span>Bathrobes</span></li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="box-accom-list clearfix">
                                                    <h4>Dining:</h4>
                                                    <ul>
                                                        <li><img src="icon/dining/Electric kettle.png" alt="" class="img-responsive"><span>Electric kettle</span></li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="box-accom-list clearfix">
                                                    <h4>Entertainment:</h4>
                                                    <ul>
                                                        <li><img src="icon\entertainment/Digital TV with multi-lingual movies and news.png" alt="" class="img-responsive"><span>Digital TV with multi-lingual movies and news</span></li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="box-accom-list clearfix">
                                                    <h4>Room amenities:</h4>
                                                    <ul>
                                                        <li><img src="icon/Room amenities/5-foot daybed.png" alt="" class="img-responsive"><span>5-foot daybed</span></li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="box-accom-list clearfix">
                                                    <h4>Room services :</h4>
                                                    <ul>
                                                        <li><img src="icon/room services/Anti-mosquito machine.png" alt="" class="img-responsive"><span>Anti-mosquito machine</span></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  </div>
</div>




<script type="text/javascript" src="https://lavelakhaolak.com/js/menuzord.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery.appear.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/owl.carousel.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery.fancybox.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/revolution/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/revolution/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/plugins.js"></script> 
<script src="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/bootstrap-touchspin-master/src/jquery.bootstrap-touchspin.min.js" ></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"  ></script>
<script src="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/daterangepicker/daterangepicker.js" ></script>
<script src="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/calendar_engine/Engine.js" ></script>
     

        <!--*** ROOM *** -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-grid.css">
<div class="main clearfix">

  <!-- Footer -->
<?php include_once('footer.php');?>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
<script>
    baguetteBox.run('.tz-gallery');
</script>



    <!--*** END ROOM *** -->







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
