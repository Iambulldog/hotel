<!DOCTYPE html>
<?php include_once('connectdb.php');
session_start();

if(empty($_GET["lang"]) ){
  $_GET["lang"] ='en';
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

<style type="text/css">
    html, body {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  line-height: 1.5;
}

body {
  background-color: #ddd;
}

body, main, aside, footer {
  margin-top: 50px;
}

p {
  font-family: 'Merriweather', serif;
}

/*HEADER*/

header, .navbar-default {
  background-color: #ddd;
}

.navbar-default {
  border-color: none !important;
}

.navbar-fixed-top {
  border-width: 0;
}

#brand, .navbar-default .navbar-nav>li>a, header h1, .arrow-down {
  color: #095057;
}

.navbar-default .navbar-nav>li>a:hover {
  color: #095057;
}

header nav a:after, .navbar-header a:after {
    content: '';
    display: block;
    margin: auto;
    height: 1px;
    width: 0%;
    background: transparent;
    transition: width .5s ease, background-color .5s ease;
}

header nav a:hover:after, .navbar-header a:hover:after {
    width: 100%;
    background: #D38947;
}

.welcome {
  padding: 200px;
  background: url("https://unsplash.it/g/1200/600/?image=6") center center no-repeat fixed;
  background-size: cover;
}

.upAndDown {
  transition: color 0.3s linear;
}

.upAndDown:hover {
  color: #D38947;
}

.arrow-down a {
  color: #095057;
}

.arrow-down a:hover {
  transition: color 0.3s linear;
  color: #D38947;
}

/*MAIN*/

main {
  background-color: #ddd;
}

main h2 {
  padding: 30px 0;
  color: #D38947;
  position: relative;
  text-align: center;
}

main h2 span {
  background: #ddd;
  padding: 0 15px;
  position: relative;
  z-index: 1;
}

main h2:before {
  background: #D38947;
  content: "";
  display: block;
  height: 1px;
  position: absolute;
  top: 50%;
  width: 100%;
}

h2:before {
  left: 0;
}

main .container {
  padding-bottom: 40px;
  border-bottom: 1px solid #D38947
}

.thumbnail {
    position:relative;
    overflow:hidden;
}
 
.caption {
    position: absolute;
    top: 0;
    right: 0;
    background: #D38947;
    width: 100%;
    height: 100%;
    padding-top: 2%;
    opacity: 0;
    text-align: center;
    color: #fff !important;
    z-index: 2;
}

.thumbnail .caption {
    padding: 25% 0;
}

/*ASIDE*/

aside {
  background-color: #D38947;
  padding: 200px 0 200px 0;
}

aside h3 {
  display: inline-block;
}

.profile-picture {
  width: 150px;
  height: 100%;
}

/*FOOTER*/

footer {
  background-color: #ddd;
  color: #095057;
  margin-bottom: 30px;
}
footer .social {
  margin: 80px 0;
}

footer h4 {
  margin-bottom: 40px;
}

footer a {
  color: #095057;
  transition: color 0.3s linear;
  margin-right: 20px;
}

footer a:hover {
  color: #D38947;
}

footer ul, footer small {
  display: inline;
}

footer small {
  margin: 5px 20px;
  font-size: 0.7em;
}

.list-inline>li {
  margin-top: 20px;
}

/*MEDIA QUERY*/

@media screen and (max-width: 990px) {
  .thumbnail .caption {
    padding: 20% 0;
  }
  
  .profile-picture.pull-right {
    float: none !important;
    margin: 40px auto 0 auto;
  }
  
  .description {
    text-align: center;
  }
}

@media screen and (max-width: 770px) {
  .navbar-default .navbar-collapse {
    border: none;
    text-align: center;
  }
  
  .navbar-default .navbar-collapse>li>a {
    display: inline-block;
    clear: both;
  }
  
  .thumbnail .caption {
    padding: 12% 0;
  }
  
  .navbar-default .navbar-toggle {
    border: 1px solid #095057;
  }
  
  .navbar-default .navbar-toggle .icon-bar {
    background-color: #095057;
  }
  
  header nav a:hover:after, .navbar-header a:hover:after {
    width: min-content;
    background: #D38947;
}
  
}

@media screen and (max-width: 660px) {
  .welcome h1 {
    font-size: 4em;
  }
}
</style>

<!--HEADER / Logo and Navigation-->

<header>
  <div class="container-fluid navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <?php $logo = ( "SELECT * FROM fontweb where type='logo' " );
                    $logo1 = mysqli_query( $con, $logo );
                    $logo2 = mysqli_fetch_assoc( $logo1 );?>

        <a id="brand" href="#welcome" class="navbar-brand .sliding-u-r-l"><img src="img/<?php echo $logo2[$fde];?>" height="30" width="120"></a>
        <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <nav>
        <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myCollapsible">
          <li><a href="#portfolio">PORTFOLIO</a></li>
          <li><a href="#about">ABOUT</a></li>
          
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </nav>
    </div>
  </div>

</header>

<!--MAIN / Portfolio-->


<script type="text/javascript">
    $(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
  
  
  $('.thumbnail').hover(
        function(){
            $(this).find('.caption').animate({opacity: 0.8}, 400); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').animate({opacity: 0}, 400); //.fadeOut(205)
        }
    );
  
  $("button").hover(function(){
    $(".icon-bar").css("background-color", "#D38947");
    $(".navbar-default .navbar-toggle").css({"border": "1px solid #D38947", "background-color": "transparent"});
  },
      function(){
    $(".icon-bar").css("background-color", "#095057");
    $(".navbar-default .navbar-toggle").css({"border": "1px solid #095057", "background-color": "transparent"});
  });
  
});
</script>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/parallax-theme/assets/wow.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js"></script>
</body>





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

<link rel="author" href=""/>
<link rel="publisher" href=""/>
<link rel="shortcut icon" href="img/logoananya.png">
<link href="css/bootstrap.min.css" type="text/css"  rel="stylesheet">
<link href="css/webfont.css" rel="stylesheet">
<link href="css/masterslider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
<link href="css/nav-magamenuv2.css">
<link href="css/main-css.css" rel="stylesheet" type="text/css">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/css/bootstrap-select.css">
<link rel="stylesheet" type="text/css"  href="https://lavelakhaolak.com/css/menuzord.css" id="main-css">
<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/css/style.css" />
<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/css/jquery-ui-1.8.4.custom.css" />
<!-- New calendar -->
<link href="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/bootstrap-touchspin-master/src/jquery.bootstrap-touchspin.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/style/etm_calendar.min.css" >
<link rel="stylesheet" type="text/css" href="https://lavelakhaolak.com/assets/vendors/ReadyTravelTech/style/custom_theme.css">
<!-- End New calendar -->   
    
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v4.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="240832646312348"
  theme_color="#d4a88c">
      </div>
<script>
fbq('init', '1258135310976183'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1258135310976183&ev=PageView&noscript=1" alt=""/>
</noscript>
<noscript>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=348597285586445&ev=PageView&noscript=1" alt="" />
</noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



    

<div class="wrapper">
    <div class="slide-fix">
        <article class="content">
        <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->    
        <div id="rev_slider_1059_1_wrapper" class="rev_slider_wrapper" data-alias="concept121" data-source="gallery" style="background-color:#000000;padding:0px;"> 
            <div id="rev_slider_1059_1" class="rev_slider rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                <ul> 
                    <?php $sql = ( "SELECT * FROM bg where status=1" );
            $res = mysqli_query( $con, $sql );
            while ( $r = mysqli_fetch_assoc( $res ) ) { ?>
                <!-- SLIDE  -->
                <li data-index="rs-2977" data-transition="scaledownfromright" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Fade and Slide from Right"   data-description=""> 
                <!-- MAIN IMAGE --> 
                <img src="img/<?php echo $r['link'];?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"> 
                <!-- LAYERS --> 
                </li>
                <!-- SLIDE  --> 
               <?php }?>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER --> 
        </article>
    </div>
  <div id="intro"></div>
  <!-- main -->
  <div class="main clearfix">


 

    <div style="background: url(https://lavelakhaolak.com/images/bg-st-2.jpg) no-repeat center center fixed; ">
      <!------class="reservation-container"------------------- booking -------------------------------------------------->
<section  style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
        <div class="col-sm-12" >
            <form   action="details.php" name="idFormlg" id="idFormlg" >
                <?php   date_default_timezone_set("Asia/Bangkok");
                $checkin = date('d-m-Y');
                $checkout=date("d-m-Y",strtotime($checkin."+1 day")); ?>

                <div class="col-sm-3 form-group">
                    <label for="checkin"><?php echo $checkins;?></label>
                    <input type="text" class="form-control input-sm" value="<?php echo $checkin ; ?>" id="data-arrival"  name="date_check_in" readonly style="background:#fff;">
                    <input type="text" value="<?php echo $_GET["lang"];?>" name="lang" hidden>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="checkin"><?php echo $checkouts;?></label>
                    <input type="text" class="form-control" value="<?php echo $checkout; ?>" id="data-departure"  name="date_check_out" readonly style="background:#fff;">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="destination"><?php echo $peoples;?></label>
                    <select class="form-control" id="selectdestination" name="people" required="">
                        <optgroup label='เลือกจำนวนคนเข้าพัก'>
                            <option value='1'>1 <?php echo $sperson;?></option>
                            <option value='2'>2 <?php echo $sperson;?></option>
                            <option value='3'>3 <?php echo $sperson;?></option>
                            <option value='4'>4 <?php echo $sperson;?></option>
                            <option value='5'>5 <?php echo $sperson;?></option>
                            <option value='6'>6 <?php echo $sperson;?></option>
                            <option value='7'>7 <?php echo $sperson;?></option>
                            <option value='8'>8 <?php echo $sperson;?></option>
                            <option value='9'>9 <?php echo $sperson;?></option>
                            <option value='10'>10 <?php echo $sperson;?></option>
                            <option value='11'>11 <?php echo $sperson;?></option>
                            <option value='12'>12 <?php echo $sperson;?></option>
                        </optgroup>
                    </select>
                </div>

                <!-- <div class="col-sm-2 form-group">
                    <label for="AccessCode">รหัสเข้าถึง</label>
                    <input type="text" class="form-control input-sm" placeholder="รหัสเข้าถึง" name="accesscode" id="accesscode">
                </div>   -->  

                <div class="col-sm-3 form-group">
                    <label >&nbsp;</label>
                     <input type="submit" name="submit" type="text" id="submit" value="<?php echo $booknow; ?>" class="form-control input-sm btn btn-sm btn-red" >
                </div>

                <!-- <div class="floatleft center"  style="padding-top:13px; align-self: center;">
                    <input type="submit" name="submit" type="text" id="submit" value="<?php echo $booknow; ?>" class="btn btn-sm btn-red" >
                </div> -->
            </form>
        </div>
        <div class="clearfix"></div>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/bootstrap-datepicker.th.min.js"></script>

<script>
$('#selectdestination').change(function() {
var $sel = $('#hotels'),
val = $(this).val(),
destination = $('option:selected', this).text();
if (val === 'crsascentral') {
$('option,optgroup', $sel).show();
}
else {
$('optgroup, optgroup > option', $sel).hide();
$('optgroup[label ="' + destination + '"]', $sel).children().andSelf().show();
}
$('#hotels').prop('selectedIndex',0);   
});

$('#hotels').change(function() {
var hotel = $('#hotels').val();
});

/* Arrival and Departure Date*/     
jQuery(document).ready(function ($) {
$(function () {
    var checkout = $('#data-departure').datepicker({
    weekStart: 1, 
    todayHighlight: false, 
    language:'en', 
    autoclose: true, 
    format: 'dd-mm-yyyy'
    }).on('changeDate', function(event) {
    var aaa = $('#data-arrival').val();
    var bbb = $('#data-departure').val();
    var tmp = aaa.split("-");
    var tmp2 = bbb.split("-");
    var ccc = new Date(tmp[1]+"-"+tmp[0]+"-"+tmp[2]);
    var ddd = new Date(tmp2[1]+"-"+tmp2[0]+"-"+tmp2[2]);
    var timeDiff = Math.abs(ddd - ccc);
    var eee = Math.ceil(timeDiff / (1000 * 3600 * 24)); 

    $("#nbdays").val(eee);
    //$("#md").text(showname(tmp2[1]));   //newDate.getMonth()+1);
    });
///////////////////////////////////////////////////////////////////
    var checkin = $('#data-arrival').datepicker({
    weekStart: 1, 
    todayHighlight: true,
    
    orientation: "bottom left",
    
    autoclose: true,
    
    language: "th",
    
    autoclose: true,
    format: 'dd-mm-yyyy',
    startDate: show_current_date(),
    endDate: show_max_date()
    }).on('changeDate', function(event) {

    var newDate = new Date(event.date)
    newDate.setDate(newDate.getDate() + 1)
    checkout.datepicker("setStartDate", newDate);
    checkout.datepicker("update", newDate)
    checkin.datepicker('hide');

    var test = $('#data-arrival').val().split("-");
    $("#nbdays").val('1');
    //$("#ma").text(showname(test[1]));   //newDate.getMonth()+1);
    //$("#md").text(showname(newDate.getMonth()+1));   //newDate.getMonth()+1);
    });

});
});

function show_current_date()
{
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1;//January is 0!
var yyyy = today.getFullYear();
if(dd < 10)
{
dd = '0' + dd;
}
if(mm < 10)
{
mm = '0' + mm;
}
var set_today = dd+"-"+mm+"-"+yyyy;
return set_today;
}

function show_max_date()
{
var today = new Date();
var yyyy = today.getFullYear() + 1;
var set_today = "31-12-"+yyyy;
return set_today;
}
function split_date()
{
var d = $("#data-arrival").val();
var tmp = d.split("-");
$("#fromday").val(tmp[0]);
$("#frommonth").val(tmp[1]);
$("#fromyear").val(tmp[2]);
}
$("#data-arrival").on('change', function(){
split_date();
});
</script>

</section>
<div class="clearfix"></div>

<script>
function bookbutton()
{
var opt = $('#hotels').val();
//var nbday = $('#nbdays').val();
var datecheckin = $('#data-arrival').val()
var deatecheckout = $("#data-departure").val();

    if(opt=='cosisamui')
    {
        if ( datecheckin != "")
        {
            var tmp1 = datecheckin.split("-");
            var datein = new Date(tmp1[1]+"-"+tmp1[0]+"-"+tmp1[2]);
        } else {
            var datein = new Date();
        }

        ddd = datein.getDate();
        mmm = datein.getMonth()+(1);
        yyy = datein.getFullYear();
        //checkin="checkInDate="+yyy+"-"+mmm+"-"+ddd;
        checkin="&gg="+ddd+"&mm="+mmm+"&aa="+yyy;

        var tmp2 = deatecheckout.split("-");
        var dateout = new Date(tmp2[1]+"-"+tmp2[0]+"-"+tmp2[2]);
        ddd = dateout.getDate();
        mmm = dateout.getMonth()+(1);
        yyy = dateout.getFullYear();
        //checkout="&checkOutDate="+yyy+"-"+mmm+"-"+ddd;
        checkout="&ggf="+ddd+"&mmf="+mmm+"&aaf="+yyy;
        finalurl="https://reservations.verticalbooking.com/premium/index2.html?tot_camere=1&tot_adulti=2&tot_bambini=0"+checkin+checkout+"&id_stile=14809&lingua_int=eng&id_albergo=19900&dc=9883";

        //finalurl="https://centrumfo.com/centara/booking/reservation/cosi?"+checkin+checkout+"&promotionCode=";
        window.open(finalurl, "_blank");
    } 
    else 
    {
        split_date();
        hhotelDispoprice(document.idFormlg);
    }
}
</script>

    <!--  ///////////////** แพคเกจที่แนะนำ ** /////////////////////////////-->


<section class="content-container" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="margin-bottom:30px;">
                <div class="col-sm-12 col-lg-12" style="padding:15px;">
                    <div class="row">
                        <div  >
                            <div class="col-sm-12" style="padding-bottom:15px;">
                                <h1 align="center">Lifestyle</h1><br>
                                <p>Imagine for a place where the sea and nature hold hands, this is the place of UNLIMITED turquiose Blue, Now imagine a hotel which takes you to the world of
                        imigination with an amaze blend architechre and interior located with in vigin nature, Its is Anaya Lipe. 
                        Nestled on the white sandy powder Beach of Lipe Island, Andaman turquoise sea, Ananya Lipe lies along the coastal region of Thailand, 
                        Set against a dramatic backdrop of open blue sky, travelers can expect to discover a destination lauded for its natural beauty, with within easy accessibility from the resort.
                        Anaya Lipe is only art inspired resort, this luxury comprises just 67 guest rooms and suites, all of which panoramic or ocean views. 
                        The resort’s interior design is a juxtaposition of modern meets art-deco infused with new southern touches. 
                        This sophisticated design theme is also communicated in its dining venues.
                        From international to Japanese to the freshest of seafood, five varied options present a myriad of flavors and interior design intended to delight your five senses. 
                        Resort's Dream maker planners will also be pleased with the array of choices available. 
                        Pool access barcony accord an air of elegance to naturally-lit indoor spaces, while Beach club and the great outdoors are the perfect setting for a fairytale wedding venue.
                        Surrounded by panoramic views of the Andaman sea Thailand and  white sands landscape, the resort offers a wide range of recreational activities. 
                        Or Just simply pool and sunloungin, reconnect with nature and rejuvenate body and mind.
                    </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</section>
<!--  /////////////////////** จบ แพคเกจที่แนะนำ ** //////////////////////////////-->




<section class="content-container " style="">
    <div class="container">
        <div class="row">
            <div class='col-sm-12'><h2 class='text-center'><?php echo $Unique; ?></h2></div>
                <div class='clearfix'></div>
                <!-- Start Item -->
                <div class="col-sm-4" style="margin-bottom:30px;">
                <div class="col-sm-12 col-lg-5">
                    <div class="row">
                        <div  style="padding:5px;">
                            <img src="img/20171210153706.jpg" alt="WEDDING & EVENTS" title="WEDDING & EVENTS" style="width:100%;height:150px">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7" style="padding:15px;">
                    <div class="row">
                        <div >
                            <div class="col-sm-12" style="padding-bottom:15px;">
                            <h3 class="text16">WEDDING & EVENTS</h3>
                            <p>A wedding beyond compare. A fantasy created from the depths of your imagination</p>
                            
                            </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                </div>

        <!-- Start Item -->
        <div class="col-sm-4" style="margin-bottom:30px;">
            <div class="col-sm-12 col-lg-5">
                <div class="row">
                    <div style="padding:5px;">
                    <img src="img/212.jpg" alt="Making Merit in Thai Way." title="Making Merit in Thai Way." style="width:100%;height:150px">
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <div class="col-sm-12 col-lg-7" style="padding:15px;">
            <div class="row">
                <div >
                    <div class="col-sm-12" style="padding-bottom:15px;">
                    <h3 class="text16">Making Merit in Thai Way.</h3>
                    <p>Experience a merit making activities in early morning around 6.30 - 7.00 am</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        </div>

                <!-- Start Item -->
        <div class="col-sm-4" style="margin-bottom:30px;">
            <div class="col-sm-12 col-lg-5">
                <div class="row">
                    <div style="padding:5px;">
                    <img src="img/555.jpg"  style="width:100%;height:150px">
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <div class="col-sm-12 col-lg-7" style="padding:15px;">
            <div class="row">
                <div >
                    <div class="col-sm-12" style="padding-bottom:15px;">
                    <h3 class="text16">Do it by heart save lipe.</h3>
                    <p>Every monday Clean the island around kho lipe. meet 10am Ananya Beach front.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        </div>
        </div>
    </div>
</section>



<!-- Footer -->
<section class="content-container " style="background-color: #FFFFFF">
<?php include_once('footer.php');?>
</section>


            

            <!------------------------  ***  END booking  *** ----------------------->
    </div>


   
  </div>
  <!-- /main --> 
  

  
</div>



<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery-1.10.2.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery-ui-1.8.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/menuzord.js"></script> 
<!--<script type="text/javascript" src="js/calendar-config.js"></script> -->
<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery-migrate-1.1.1.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/bootstrap.min.js"></script> 
<!--<script type="text/javascript" src="js/jquery.bootstrap-touchspin.js"></script> -->
<script type="text/javascript" src="https://lavelakhaolak.com/js/bootstrap-select.js"></script> 
<!--<script type="text/javascript" src="js/moment.min.js"></script> -->
<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery.appear.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/owl.carousel.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery.fancybox.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/revolution/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/revolution/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/revolution/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/plugins.js"></script> 
<!-- New calendar -->
<script src="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/bootstrap-touchspin-master/src/jquery.bootstrap-touchspin.min.js" ></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"  ></script>
<script src="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/daterangepicker/daterangepicker.js" ></script>
<script src="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/calendar_engine/Engine.js" ></script>
<!-- End New calendar -->   
<script type="text/javascript" >
(function($){
    $('body').readyengine({
        daterange: 1,
        minofRoom : 1,
        minofAdult : 1,
        maxofAdult : 3,
        maxofRoom : 12
    });
})(jQuery);
</script>
<script>
$(document).ready(function() {
 
  $("#slide-offer").owlCarousel({
        items : 3, //10 items above 1000px browser width
        itemsDesktop : [1300,3], //5 items between 1000px and 901px
        itemsDesktopSmall : [1200,2], // betweem 900px and 601px
        itemsTablet: [767,1], //2 items between 600 and 0
        itemsMobile : false ,
        autoPlay : 9000,
        stopOnHover : true,
        navigation: true,
        paginationSpeed : 4000,
        goToFirstSpeed : 5000,
        autoHeight : false,
        transitionStyle:"fade",
        
      });     
});
</script>  
<script> 
$(document).ready(function(){
    $(".box-contactus").click(function(){
       $(".box-contactus-inner").slideToggle("slow");
        icon = $(this).find("i");
        icon.toggleClass("glyphicon glyphicon-menu-up glyphicon glyphicon-menu-down");
       
    });
    $(".btn-show-offer").click(function() {
        $("#hide-offer-box").fadeToggle("5");
        $(this).toggleClass("active");
        return false;
    });
});
</script> 
<script type="text/javascript">
    $(document).ready(function() {
        /**/
        $('.fancybox').fancybox({
            padding:0,
//          afterShow: function () {
//             $(".fancybox-image").wrap($("<a />", {
//                 // set anchor attributes
//                 href: 'thaitiewthai-46.html', //or your target link
//                 target: "_blank" // optional
//             }));
//          }
        }).eq(0).trigger("click");
        /**/
    });
</script> 
<script>
function countdown(dateEnd) {
  var timer, days, hours, minutes, seconds;
  dateEnd = new Date(dateEnd);
  dateEnd = dateEnd.getTime();
  if ( isNaN(dateEnd) ) {return;}
  timer = setInterval(calculate, 1000);
  function calculate() {
    var dateStart = new Date();
    var dateStart = new Date(dateStart.getUTCFullYear(),
                             dateStart.getUTCMonth(),
                             dateStart.getUTCDate(),
                             dateStart.getUTCHours(),
                             dateStart.getUTCMinutes(),
                             dateStart.getUTCSeconds());
    var timeRemaining = parseInt((dateEnd - dateStart.getTime()) / 1000)
    if ( timeRemaining >= 0 ) {
      days    = parseInt(timeRemaining / 86400);
      timeRemaining   = (timeRemaining % 86400);
      hours   = parseInt(timeRemaining / 3600);
      timeRemaining   = (timeRemaining % 3600);
      minutes = parseInt(timeRemaining / 60);
      timeRemaining   = (timeRemaining % 60);
      seconds = parseInt(timeRemaining);

      document.getElementById("days").innerHTML    = parseInt(days, 10);
      document.getElementById("hours").innerHTML   = ("0" + hours).slice(-2);
      document.getElementById("minutes").innerHTML = ("0" + minutes).slice(-2);
      document.getElementById("seconds").innerHTML = ("0" + seconds).slice(-2);
    } else {
      return;
    }
  }
  function display(days, hours, minutes, seconds) {}
}
countdown('11/11/2018 00:00:00');   
</script>
</body>
</html>
