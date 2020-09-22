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
<!DOCTYPE html>
<html lang="en">
<head>

    

  
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css1/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css1/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="https://www.akiralipe.com/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.akiralipe.com/css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="https://www.akiralipe.com/css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.akiralipe.com/css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="https://www.akiralipe.com/css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="https://www.akiralipe.com/css/lib/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css1/style.css">
    

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="cache-control" content="no-transform" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ananya Lipe - อนัญญา หลีเป๊ะ |ที่พักเกาะหลีเป๊ะ | รีสอร์ทหลีเป๊ะ</title>
<meta name="description" content="Ananya Lipe - อนัญญา หลีเป๊ะที่พักเกาะหลีเป๊ะสุดหรู โรงแรมหลีเป๊ะที่ประกอบไปด้วยสิ่งอำนวยความสะดวกมากมาย รีสอร์ทหลีเป๊ะตั้งอยู่บนหาดทรายสีขาวของเกาะหลีเป๊ะในทะเลอันดามัน ทั้งสระว่ายน้ำกลางแจ้ง และสระว่ายน้ำหลังห้อง ให้คุณได้สัมผัสการพักผ่อนที่แท้จริงกับ อนัญญาหลีเป๊ะ">
<meta name="subject" CONTENT="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
<meta name="author" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
<meta name="copyright" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
<meta name="distribution" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
<meta name="robots" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
<meta name="rating" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
<meta name="keywords" content="ที่พักเกาะหลีเป๊ะ, โรงแรมหลีเป๊ะ, รีสอร์ทหลีเป๊ะ, Ananya lipe, อนัญญา หลีเปีะ" />

<link rel="author" href=""/>
<link rel="publisher" href=""/>

<link href="img/logoananya.png" rel="shortcut icon" />
<!-- hreflang -->

<!-- CSS Files -->


<!-- New calendar -->

<link rel="stylesheet" type="text/css" href="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/style/etm_calendar.min.css" >

<!-- End New calendar --> 



<link rel="author" href=""/>
<link rel="publisher" href=""/>
<link rel="shortcut icon" href="img/logoananya.png">
<link href="css/bootstrap.min.css" type="text/css"  rel="stylesheet">

<link href="css/masterslider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
<link href="css/nav-magamenuv2.css">
<link href="css/main-css.css" rel="stylesheet" type="text/css">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">

</head>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154549477-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154549477-1');
</script>


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



  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "http://www.ananyalipe.com",
      "name": "ananyalipe.",
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Customer service"
      }
    }
    </script>