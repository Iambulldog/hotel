<?php include_once('connectdb.php');


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


$checkin = $_REQUEST[ 'checkin' ];
$checkout = $_REQUEST[ 'checkout' ];
$people = $_REQUEST[ 'people' ];
$idroom = $_REQUEST[ 'idroom' ];

$checkin1 = strtotime( $checkin );
$checkinpri = date( 'Y-m-d', $checkin1 );

$date = $_REQUEST[ 'checkin' ];
$date = strtotime( $date );
$checkin3 = date( ' d-m-Y', $date );


$date1 = $_REQUEST[ 'checkout' ];
$date1 = strtotime( $date1 );
$checkout3 = date( ' d-m-Y', $date1 );
?>







<!DOCTYPE html>
<html class="no-js" xml:lang="th" lang="th">

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
<script src="js/jquery.min.js"></script>

<style>
.breadcrumb{background:none; margin:0; padding:0; margin:20px 0px;}
</style>


<?php include_once('hea.php'); ?>

<body> <!--<![endif]-->   

    
    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

      
<style>
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}

</style>

<?php $logo = ( "SELECT * FROM fontweb where type='logo' " );
                    $logo1 = mysqli_query( $con, $logo );
                    $logo2 = mysqli_fetch_assoc( $logo1 );?>

    <header id="header">
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">
                <span style="color:#000000">+66 (0) 91 634 6342 - 4</span> 
            </div>
            <div class="header_right float-right">
                <div class="dropdown language">
                    <span style="color:#000000">LANGUAGE</span>
                    <ul id="ch_lang">
                        <li id="liEN" ><a href="#"><img src="img/icon_en.png" height="25" width="25">    ENG</a></li>
                        <li id="liTH" ><a href="#"><img src="img/icon_th.png" height="25" width="25">    TH</a></li>
                        <li id="liTH" ><a href="#"><img src="img/icon_cn.png" height="25" width="25">    CN</a></li>
                    </ul>
                </div>
            </div>

            <!-- <div class="header_left float-right">
                <span style="color:#000000"><a href="#">Register</a></span>
            </div>
            <div class="header_left float-right">
                <span style="color:#000000">|</span>
            </div>
            <div class="header_left float-right">
                <span style="color:#000000"><a href="#">Login</a></span>
            </div> -->
        </div>
    </div>

<?php include_once('nav.php'); ?>
        </header> 
        <script> $('#m1').addClass('current-menu-item'); </script>





 <!--------------------------------------------------- slider_wrapper -------------------------------------------------->
    <section class="section-slider">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
            <ul>
                <?php
             $room3 = ( "SELECT * FROM room WHERE `ID_room` = '$idroom'" );
                $room4 = mysqli_query( $con, $room3 );
                while ( $room5 = mysqli_fetch_assoc( $room4 ) ) { 
                 $dt =$room5[$dt] ;
                 $nr =$room5[$nr] ;

                 ?>
                <?php   
                    $sqlnum = "SELECT * FROM img_room where status=1 AND  ID_room = '".$idroom."' ";
                    $sqlqu = mysqli_query( $con, $sqlnum );     
                    $num = mysqli_num_rows($sqlqu);
                    $sql = ( "SELECT * FROM img_room where status=1 AND ID_room = '".$idroom."' " );
                    $res = mysqli_query( $con, $sql );
                    while ( $r = mysqli_fetch_assoc( $res ) ) { 
            ?>



                    <li data-transition="fade">
                        <img src="img/imgroom/<?php echo $r['link'];?>" data-bgposition="center center" data-duration="14000" data-bgpositionend="center center" alt="">
                    </li>
             <?php } ?> 
            <?php }?>

            </ul>
        </div>
    </section>
 <!--------------------------------------------------- slider_wrapper -------------------------------------------------->

           

            <!------------------------  END booking   ----------------------->


    <?php    // -------------  ดึงราคา จากปฏิทิน ที่ตั้งราคาเอง  --------------------
    $sql_pr ="SELECT * FROM priceroom where date_start = '".$checkinpri."' AND ID_room = ".$idroom;
         $query_pr = mysqli_query($con,$sql_pr);
        if($pr = mysqli_fetch_assoc($query_pr)) {
             // -------------- ตัวแปร ราคา ห้อง
            $prroom = $pr["price_room"];
        }else{
            //--------------- ดึงราคาปกติ หากไม่มีในฐานปฎิทิน ------------------
           $sql_p = ( "SELECT * FROM room where ID_room = ".$idroom);
                        $res_p = mysqli_query( $con, $sql_p );
                        if($r_p = mysqli_fetch_assoc( $res_p )){
                            // -------------- ตัวแปร ราคา ห้อง
                            $prroom = $r_p["price_room"];
                            
                        }
        }?>

<section>
     <div class="container">
            <div class="row">
                <div class="col-sm-12"><label><h2><?php echo $ReservationDate; ?></h2></label></div>
                <div class="clearfix"></div>
           

                <div class="col-sm-6 overlay-container">


                        <p>
                          <label><h3><?php echo $nr;?></h3></label>
                          <label><h4><?php echo $dt;?></h4></label>
                        </p>
                        <h4><?php echo $RoomFacilities; ?></h4>
                        <div class="row">
                            <?php $sql = ( "SELECT * FROM facilties where ID_room =$idroom" );
                            $res =  mysqli_query($con, $sql );
                            ?>
                            <div class="col-md-4 col-sm-4">
                                <ul class="list_ok"> 
                                    <?php while ($r =  mysqli_fetch_assoc($res) ) {
                                       
                                         $namefac = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `tb_fac` where id_fac = '". $r['id_fac']."'"));
                                        ?>
                                          <li><?PHP  if($_GET['lang']=='th'){echo$namefac['name_fac_th'];}elseif($_GET['lang']=='en'){echo$namefac['name_fac_en'];}elseif($_GET['lang']=='cn'){echo$namefac['name_fac_cn'];}?></li>
                                      <?php   }  ?> 
                                </ul>
                            </div>
                        </div>

                      <?php $sql11 = ( "SELECT * FROM img_room where ID_room ='$idroom' and status=1");
                      $res11 = mysqli_query( $con, $sql11 );
                      while ( $r11 = mysqli_fetch_assoc( $res11 ) ) { ?>
                          <div class="col-sm-6" style="padding-top: 5px">
                            <img src="img/imgroom/<?php echo $r11['link'] ; ?>" >
                          </div>
                       
                      <?php }?>

                    
                </div>

                <div class="col-sm-6 overlay-container">



            <form name="form1" method="post" class="probootstrap-form" action="addbooking.php" id="add_meeting">
              <input name="room_type" id="room_type" type="hidden" value="Double room">
              <div class="row">
                <div class="col-md-12 col-sm-6">
                  <div class="form-group">
                    <input type="text" value="<?php echo $checkin; ?>" id="checkin" name="checkin" hidden>
                  </div>

                  <div class="form-group">
                    <input type="text" value="<?php echo $checkout; ?>" id="checkout" name="checkout" hidden>
                  </div>

                </div>

               
                <h4 align="center">
                  <?php echo $book;?>
                </h4>
                <ul>

                  <div class="col-sm-6">
                    <label><h3><?php echo $checkins;?> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</h3></label>
                    <b><?php echo $checkin3; ?></b>
                  </div>


                  <div class="col-sm-6">
                    <label> <h3><?php echo $checkouts;?> &nbsp;&nbsp;:&nbsp;&nbsp;</h3></label>
                    <b><?php echo $checkout3; ?></b> 

                    <input type="text" name="idroom" value="<?php echo $idroom; ?>" hidden>
                    <input type="text" name="people" value="<?php echo $people; ?>" hidden>
                    <input type="text" name="ck" value="B" hidden>
                  </div>


                  <div class="col-sm-12">

                  <?php
                  $price = 0;

                  $date1 = date_create( $checkin );
                  $date2 = date_create( $checkout );
                  $diff = date_diff( $date1, $date2 );
                  $d = $diff->format( "%a" );
                  echo " <input id ='d' type='text' name='night' value='" . $d . "' hidden>";
                  
                 
                    $sql = ( "SELECT * FROM room where ID_room=1" );
                    $res = mysqli_query( $con, $sql );
                    $r = mysqli_fetch_assoc( $res );
                    $price = $r[ 'price_room' ];?>

                    
                    <div class='col-md-12'>
                      <label><h4><?php echo $peoples." ".$people." ".$sperson ; ?></h4></label>
                      <label><h4><?php echo $totals ;?><?php echo round($people/2) ;?><?php echo $room ;?></h4></label>
                    </div>

                    <div class='col-md-6'>

                    <label><?php echo $code;?></label>
                    <input class='form-control' type='text' value='' id='pro' name='promotion'>
                    </div>

                    <div class='col-md-6'>
                    <label><?php echo $check;?></label>
                    <button class='btn btn-info form-control' type='button' onClick='fn3()'><?php echo $check ;?></button>
                    </div>

                    <div class='col-md-12'>
                      

                      <?php if ($checkin <= "2019-12-19") { ?>
                        <label><h4 align='center'><?php echo $cod ;?><font color='#FF0000'><b>ANANYA</b></h4></font>
                      <?php }elseif ($checkin < "2020-01-11") { ?>
                         
                      <?php }else{?>
                        <label><h4 align='center'><?php echo $cod ;?><font color='#FF0000'><b>ANANYALIPE</b></h4></font>
                      <?php } ?>

                     
                      

                    </label>
                    </div>
                      
                    <div class="col-md-12">
                      <input type='text' value='1' id='txtHint' hidden>
                      <label></label>

                      <?php
                        $prroom1 = $prroom * $d * round($people/2);
                        $people1 = round($people/2);
                       ?>
                        <input name='num_room' value='<?php echo $people1 ;?>' hidden>
                        <h3><?php echo $pri ;?>  <b id='show'>  <?php echo $prroom1;?> </b> THB</h3>
                        <input id='numroom' type='text' name='numroom' value='<?php echo $people1; ?>' hidden >
                        <input id='price' type='text' name='roomrate' value='<?php echo $prroom1; ?>' hidden>
                        <input id='total' type='text' name='totalprice' value='<?php echo $prroom1; ?>'  hidden>
                    </div>

                    <div class="col-md-12">
                      <input id="p1" value="<?php echo $r['price_room'];?>" hidden>
                      <input id="p2" value="<?php echo $r['price_room'];?>" hidden>
                      <input  value="0" name="status" hidden>


                    <div class="form-group">
                      <label>
                        <?php echo $Name;?>
                      </label>
                      <input type="text" class="form-control" name="names" id="name" placeholder="Name and Last name" required="">
                    </div>

                    <div class="form-group">
                      <label>
                        <?php echo $phone;?>
                      </label>
                      <input type="text" class="form-control" name="phone" id="phone" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" placeholder="phone" required="">
                      </div>

                    <div class="form-group">
                      <label>
                        <?php echo $Email;?>
                      </label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your email" required="">
                    </div>

                    <script language="javascript">
                  function fncShowHideInput( value ) {
                    var input1 = document.getElementById( 'names' );
                    var input2 = document.getElementById( 'Country' );
                    
                    

                    if ( value.checked ) { 
                       
                      input1.style.display = '';
                      input2.style.display = '';
                                           

                    } else {
                      input1.style.display = 'none';
                      input2.style.display = 'none';
                    }
                  }
                </script>


                  <div class="form-group">
                    <div class="col-md-12 col-sm-6">
                      <input type="checkbox" id="ch1" name="chkShowInput" value="Y" OnClick="JavaScript:fncShowHideInput(this);">

                      <label>
                        <?php echo $notstay;?>
                      </label>
                    </div>
                    <input type="text" class="form-control" name="name" id="names" placeholder="Your name" style="display:none">
                  </div>



                    </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                    <input name="lang" value="<?php echo $_REQUEST['lang']?>" hidden="">
                    <input type="submit" value="<?php echo $booknow;?>" name="submit" class="btn btn-md btn-red" id="submit-booking" onClick="check();">
                    </div>
                  </div>


                  
                  
                 

                 
           


 
                

                

            

            

             
            </form>
                    
              

         

            <div class="clearfix"></div>
            </div>
            </div>
  </section>







<script>
                  function fn3() {

                    var id = document.getElementById( 'pro' ).value;
                    var checkin = document.getElementById( 'checkin' ).value;

                    if ( id == "" ) {
                      document.getElementById( "txtHint" ).value = "";
                      return;
                    }
                    if ( window.XMLHttpRequest ) {
                      // code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                      xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
                    }

                    xmlhttp.onreadystatechange = function () {
                      if ( this.readyState == 4 && this.status == 200 ) {
                        document.getElementById( "txtHint" ).value = this.responseText;
                        var pro = document.getElementById( "txtHint" ).value;
                        var Check='<?=$Check?>';
                        var you='<?=$you?>';
                        if (pro == 1) {
                          alert(Check);
                        }else{
                          alert(you+this.responseText+"%");
                        }
                                                

                        var pro = document.getElementById( "txtHint" ).value;
                        var d = document.getElementById( "d" ).value;
                        var price = document.getElementById( "price" ).value;
                        var numroom = document.getElementById( "numroom" ).value;

                        if ( pro <= 0 || pro <= 1 ) {
                          pro = 1;
                          var price1 = document.getElementById( "total" ).value =  (price*pro).toFixed(0);
                          document.getElementById("show").innerHTML=price1;
                        } else {
                          pro = ( pro / 100 );

                          var price1 = document.getElementById( "total" ).value = (( price ) - ( price* pro)).toFixed(0);
                          document.getElementById("show").innerHTML=price1;
                        }
                        document.getElementById( "total" ).value = ( price1 ).toFixed(0);

                      }
                    }
                    xmlhttp.open( "GET", "promotion.php?q=" + id+"&checkin="+checkin, true );
                    xmlhttp.send();

                  }

                  var p1 = document.getElementById( "p1" ).value;
                  var d = document.getElementById( "d" ).value;

                  
                  
                  function fn2() {
                    var id = document.getElementById( 'pro' ).value;
                    var checkin = document.getElementById( 'checkin' ).value;
                    if ( id == "" ) {
                      document.getElementById( "txtHint" ).value = "";
                      return;
                    }
                    if ( window.XMLHttpRequest ) {
                      // code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                      xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
                    }

                    xmlhttp.onreadystatechange = function () {
                      if ( this.readyState == 4 && this.status == 200 ) {
                        document.getElementById( "txtHint" ).value = (this.responseText);
                        var pro = document.getElementById( "txtHint" ).value;
                        var Check='<?=$Check?>';
                        var you='<?=$you?>';
                        if(pro == 1 ){
                          alert(Check);
                                                    
                        }else{
                           alert(you+this.responseText+"%");
                        }
                          
                        document.getElementById( "txtHint" ).innerHTML = fn1();

                      }
                    }
                    xmlhttp.open( "GET", "promotion.php?q=" + id+"&checkin="+checkin, true );
                    xmlhttp.send();

                  }

                  function fn1() {
                    var pro = document.getElementById( "txtHint" ).value;
                    var x = document.getElementById( "mySelect1" ).value;

                    if ( pro <= 0 || pro <= 1 ) {
                      pro = 1;

                      var price1 = document.getElementById( "demo" ).value = x * p1 * d * pro;
                    } else {
                      pro = ( pro / 100 );

                      var price1 = document.getElementById( "demo" ).value = (( x * p1 * d ) - ( x * p1 * d * pro )).toFixed(0);
                    }

                    document.getElementById( "demo3" ).value = ( price1 ).toFixed(0);

                  }

                  function check() {
                    
                                        if (document.getElementById('ch1').checked) {
                                          document.getElementById('submit-booking').type='button';
                                          
                                                   if (document.getElementById('names').value=='') {
                                                        document.getElementById('names').focus();
                                                 
                                                     }else{
                                                      document.getElementById('submit-booking').type='submit';
                                                     }

                                               }else{
                                                document.getElementById('submit-booking').type='submit';
                  }
                  }
                </script>











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

<script language="javascript" src="https://www.bigbang.co.th/api/bt.js" charset="UTF-8"></script>

</body>
</html>
