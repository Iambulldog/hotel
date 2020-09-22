
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
<!-- hreflang -->



<!-- facebook -->
<meta property="og:url" content="https://www.centarahotelsresorts.com/th/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="โรงแรมเซ็นทาราเว็บไซต์อย่างเป็นทางการ - หาวันหยุดที่สมบูรณ์แบบของคุณ" />
<meta property="og:description" content="โรงแรมเซ็นทารา | จองห้องพักที่นี่ตอนนี้เพื่อรับอัตราค่าห้องพักที่ดีที่สุด ทั่วประเทศไทยและในประเทศมัลดีฟส์ กาตาร์ ศรีลังกา โอมาน และเวียดนาม" />
<meta property="og:image" content="https://www.centarahotelsresorts.com/corporateweb/dist/images/logo-centara-hotels-resorts-200x200.jpg" />
<!-- twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@ExploreCentara" />
<meta name="twitter:title" content="โรงแรมเซ็นทาราเว็บไซต์อย่างเป็นทางการ - หาวันหยุดที่สมบูรณ์แบบของคุณ">
<meta name="twitter:description" content="โรงแรมเซ็นทารา | จองห้องพักที่นี่ตอนนี้เพื่อรับอัตราค่าห้องพักที่ดีที่สุด ทั่วประเทศไทยและในประเทศมัลดีฟส์ กาตาร์ ศรีลังกา โอมาน และเวียดนาม"><!--twitter description less than 200 characters-->
<meta name="twitter:creator" content="@ExploreCentara" />
<meta name="twitter:image" content="https://www.centarahotelsresorts.com/corporateweb/dist/images/logo-centara-hotels-resorts-280x150.jpg" /><!-- size 280x150px -->
<!-- canonical -->
<link rel="canonical" href="https://www.centarahotelsresorts.com/th/" />
<meta name="baidu-site-verification" content="dia3VA7sMO" />





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
                          <a  href="map.php?lang=th" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_th.png" height="25" width="25">  ภาษาไทย</a>
                        <?php }elseif ($_GET["lang"] =='en') { ?>
                            <a  href="map.php?lang=en" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_en.png" height="25" width="25">  English</a>
                        <?php }elseif ($_GET["lang"] =='cn') { ?>
                          <a  href="map.php?lang=cn" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_cn.png" height="25" width="25">   中文</a>
                        <?php } ?>
                        </a>
                        <ul>
                    <li><a href="map.php?lang=en" target="_self"><img src="img/icon_en.png" height="25" width="25"></i>English</a></li>
                    <li><a href="map.php?lang=th" target="_self"><img src="img/icon_th.png" height="25" width="25"></i>ภาษาไทย</a></li>
                    <li><a href="map.php?lang=cn" target="_self"><img src="img/icon_cn.png" height="25" width="25"></i>中文</a></li>
                        </ul>
                    </li>
        <?php include_once('navber.php'); ?>
                                <!-- // ** Lang //** -->
        <li class="menuitem_right"><br>

            <?php if ($_GET["lang"] =='th') { ?>
               <a href="map.php?lang=th" class="menuitem_drop"><h5><img src="img/icon_th.png" height="25" width="25">ภาษาไทย</h5></a>
            <?php }elseif ($_GET["lang"] =='en') { ?>
                <a href="map.php?lang=en" class="menuitem_drop"><h5><img src="img/icon_en.png" height="25" width="25">English</h5></a>
            <?php }elseif ($_GET["lang"] =='cn') { ?>
               <a href="map.php?lang=cn" class="menuitem_drop"><h5><img src="img/icon_cn.png" height="25" width="25">中文</h5></a>
            <?php } ?>
            
            <div class="dropdown_1column dropdown_flyout dropdown_right"  style="min-width:150px;">
                <ul class="level">
                    <li><a href="map.php?lang=en" target="_self"><img src="img/icon_en.png" height="25" width="25">English</a></li>
                    <li><a href="map.php?lang=th" target="_self"><img src="img/icon_th.png" height="25" width="25">ภาษาไทย</a></li>
                    <li><a href="map.php?lang=cn" target="_self"><img src="img/icon_cn.png" height="25" width="25">中文</a></li>
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


<style >
.slide {
  position: relative;
  /* height: 264px;*/
  height: 600px;
  /* width: 960px; */
  width: 100%;
  max-width: 1024px; 
  margin: 2em auto;
  padding: 0 2em 4em;
  border-radius: 1em;
  overflow: hidden;
  box-sizing: border-box;
}

.slide_list { 
  margin: 0 0 0 2em;
  padding: 0;
  position: absolute;
  top:0;right:0;left:0;
  list-style: none;
  overflow: hidden;
}

.slide_list li {
  float: left;
  width: 960px;
  height: 600px;
}
.slide-dot {
  margin: 0;
  padding: 0;
  position: absolute;
  right:0;bottom:0;left:2em;
  /* outline: 1px dotted red; */
  list-style: none;
  text-align: center;
}
.slide-dot li {
  float: left;
  padding: .25em 1.125em .35em;
  margin: 0;
  cursor: pointer;
  color: hsl(190, 50%, 30%);
  background-color: hsl(190, 50%, 94%);
  border: 1px solid hsl(190, 50%, 84%);
}
.slide-dot .slide-active {
  background-color: hsl(190, 50%, 64%);
  color: #fff;
}
[class*="slide-control-"] {
  position: absolute;
  top:0;bottom:0;
  width: 2em;
  background-color: #444;
  z-index: 2;
  cursor: pointer;
}
.slide-control-prev {
  left: 0;
  background: #444 url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 12'%3E%3Cpolygon fill='hsl(185, 53%, 94%)' points='6,12 6,0 0,6'/%3E%3C/svg%3E") .65em 45% no-repeat; 
  border-top-left-radius: 1em;
  border-bottom-left-radius: 1em;
}
.slide-control-next {
  right: 0;
  background: #444 url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 12'%3E%3Cpolygon fill='hsl(185, 53%, 94%)' points='0,12 0,0 6,6'/%3E%3C/svg%3E") .7em 45% no-repeat; 
  border-top-right-radius: 1em;
  border-bottom-right-radius: 1em;
  
}
/* general styles */
* {
  box-sizing: inherit;
  /* outline: 1px dotted gray; */
}
body {
  font: 100%/1.5 sans-serif;
  box-sizing: border-box;
}
img {
  max-width: 100%;
}


            </style>


<section style="padding-top: 150px">

  <div class="col-sm-12 col-lg-12 overlay-container" style="padding:15px;">
    <div class="container">
      <?php $font2 = ( "SELECT * FROM fontweb where type='kid_club1' " );
      $re2 = mysqli_query( $con, $font2 );
      $ro2 = mysqli_fetch_assoc( $re2 );?>
      <p><?php echo $ro2['detail_en'];?></p>
    </div>
  </div>

  <div id="slide" class="slide">
    <ul class="slide_list">
     <?php 
     $sqlnum = "SELECT * FROM img_room where status=1 AND  ID_room = '2003' ";
     $sqlqu = mysqli_query( $con, $sqlnum );     
     $num = mysqli_num_rows($sqlqu);
     $sql = ( "SELECT * FROM img_room where status=1 AND ID_room = '2003' " );
     $res = mysqli_query( $con, $sql );
      while ( $r = mysqli_fetch_assoc( $res ) ) { 
      ?>
      <li><img src="img/imgroom/<?php echo $r['link'];?>"></li>
<?php } ?>
    </ul>
  </div>

  <script type="text/javascript">
// https://github.com/qingguoing/SlideJS
var Animation = (function() {
  var Slide = function(config) {
    this.config = typeof config === 'object' ? config : {};
    this.targetElement = this.config.target || 'slide';
    // show slide marker
    this.showMarker = this.config.showMarker || false;
    this.mark = this.config.marker || false;
    this.marker = this.config.setClass && this.config.setClass.marker || '';
    this.active = this.config.setClass && this.config.setClass.active || '';
    this.unactive = this.config.setClass && this.config.setClass.unactive || '';
    // show left and right controller
    this.showController = this.config.showController || false;
    this.controllerPrev = this.config.setClass && this.config.setClass.controllerPrev || '';
    this.controllerNext = this.config.setClass && this.config.setClass.controllerNext || '';

    this.miliTime = this.config.miliTime || 50;
    this.aboutTime = this.config.aboutTime || 3000;
    this.currentTimer = null;
    this.timer = null;
    this.speed = 0;
    this.nextPic = 0;

    this.init();
    this.handleEvent();
  };

  Slide.prototype = {
    init: function() {
      this.oTarget = document.getElementById(this.targetElement);
      this.oUl = this.oTarget.getElementsByTagName('ul')[0];
      var oULi = this.oUl.getElementsByTagName('li');
      this.width = oULi[0].offsetWidth;
      this.number = oULi.length;
      this.oUl.style.width = this.number * this.width + 'px';
      this.start = this.oUl.offsetLeft;

      // marker
      if (this.showMarker) {
        var oOl = document.createElement('ol'),
          oOlis = [];

        oOl.className = this.marker;

        for (var i = 1; i <= this.number; i++) {
          this.mark ? oOlis.push('<li class="' + this.unactive + '">' + i + '<\/li>') : oOlis.push('<li class="' + this.unactive + '">' + "" + "<\/li>");
        }

        oOl.innerHTML = oOlis.join('');
        this.oTarget.appendChild(oOl);

        this.oOli = oOl.getElementsByTagName('li');
        this.oOli[0].className = this.active;
      }

      // controller
      if (this.showController) {
        this.oPrev = document.createElement('span');
        this.oNext = document.createElement('span');
        this.oPrev.className = this.controllerPrev;
        this.oNext.className = this.controllerNext;

        this.oTarget.appendChild(this.oPrev);
        this.oTarget.appendChild(this.oNext);
      }
    },

    handleEvent: function() {
      var that = this;
      this.currentTimer = setInterval(function() {
        that.next();
      }, this.aboutTime);

      // initialize the addEvent function
      this.addEvent();

      this.addEvent(this.oTarget, 'mouseover', function() {
        clearInterval(that.currentTimer);
      });

      this.addEvent(this.oTarget, 'mouseout', function() {
        that.currentTimer = setInterval(function() {
          that.next();
        }, that.aboutTime);
      });

      if (this.showMarker) {
        for (var i = 0; i < this.number; i++) {
          var element = this.oOli[i];
          (function(i) {
            that.addEvent(element, 'mouseover', function() {
              that.go(i);
            });
          })(i);
        }
      }

      if (this.showController) {
        this.addEvent(this.oPrev, 'click', function() {
          that.prev();
        });

        this.addEvent(this.oNext, 'click', function() {
          that.next();
        });
      }
    },

    prev: function() {
      this.go(--this.nextPic);
    },

    next: function() {
      this.go(++this.nextPic);
    },

    go: function(index) {
      if (index < 0) index = this.number - 1;
      if (index >= this.number) index = 0;

      var that = this,
        left = -index * this.width;

      this.nextPic = index;

      if (this.showMarker) {
        for (var i = 0; i < this.number; i++) {
          i === index ? this.oOli[i].className = this.active : this.oOli[i].className = this.unactive;
        }
      }

      if (this.timer) {
        clearInterval(this.timer);
      }

      this.timer = setInterval(function() {
        that.move(left);
      }, this.miliTime);
    },

    move: function(left) {
      this.oUl.style.left = this.speed + 'px';
      leftOffset = this.oUl.offsetLeft - this.start;
      this.speed += (left - leftOffset) / 3;

      if (Math.abs(left - leftOffset) === 0) {
        this.oUl.style.left = left + 'px';
        clearInterval(this.timer);
        this.timer = null;
      }
    },

    addEvent: function(ele, type, fn) {
      if (window.addEventListener) {
        this.addEvent = function(ele, type, fn) {
          return ele.addEventListener(type, fn, false);
        };
      }

      if (window.attachEvent) {
        this.addEvent = function(ele, type, fn) {
          ele.attachEvent('on' + type, fn);
        };
      }
    }
  };

  return {
    slide: function(config) {
      new Slide(config);
    }
  }
})();
Animation.slide({
  target: 'slide',
  showMarker: true,
  marker: true,
  showController: true,
  setClass: {
    marker: 'slide-dot',
    active: 'slide-active',
    unactive: '',
    controllerPrev: 'slide-control-prev',
    controllerNext: 'slide-control-next'
  }
});
</script>
<!-- <section style="padding-top: 150px">

<div class="col-sm-12 overlay-container">
    <div class="col-sm-6"> 
     <?php $font33 = ( "SELECT * FROM fontweb where type='img_kid_club' " );
          $re33 = mysqli_query( $con, $font33 );
          $ro33 = mysqli_fetch_assoc( $re33 );?>
          <img src="img/<?php echo $ro33['detail_th'];?>" width="140" height="430" alt="" title="" style="width:100%;">
    </div>
    <div class="col-sm-6">
     <?php $font2 = ( "SELECT * FROM fontweb where type='kid_club1' " );
          $re2 = mysqli_query( $con, $font2 );
          $ro2 = mysqli_fetch_assoc( $re2 );?>
          <h1 ><?php echo $ro2['detail_en'];?></h1><br>
        </div>
      </div>
<div class="col-sm-12 overlay-container">
  <div class="col-sm-6">
    <div class="col-sm-12" style="padding-bottom:15px;">
          <?php $font22 = ( "SELECT * FROM fontweb where type='kid_club2' " );
          $re22 = mysqli_query( $con, $font22 );
          $ro22 = mysqli_fetch_assoc( $re22 );?>
          <h1 ><?php echo $ro22['detail_en'];?></h1><br>
        </div>
  </div>
 <div class="col-sm-6"> 
       <?php $font333 = ( "SELECT * FROM fontweb where type='img_kid_club' " );
          $re333 = mysqli_query( $con, $font333 );
          $ro333 = mysqli_fetch_assoc( $re333 );?>
          <img src="img/<?php echo $ro333['detail_en'];?>" alt="" title="" style="width:100%;">
 </div>
</div> -->





</section>


            <!------------------------  END booking   ----------------------->











        <!--*** ROOM *** -->

<section >

  <iframe width="1%" height="1" frameborder="0" style="border:0" allowfullscreen></iframe>


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
