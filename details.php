
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" xml:lang="th" lang="th> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" xml:lang="th" lang="th"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" xml:lang="th" lang="th"><!--<![endif]-->
<!-- html header -->
<?php 
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
<?php 

date_default_timezone_set("Asia/Bangkok");

$checkin3 = $_REQUEST['date_check_in'];
$checkout3 = $_REQUEST['date_check_out'];



$date1 = $_REQUEST['date_check_in'];
$date11 = str_replace('/', '-', $date1 );
$checkin = date("Y-m-d", strtotime($date11));


$date2 = $_REQUEST['date_check_out'];
$date22 = str_replace('/', '-', $date2 );
$checkout = date("Y-m-d", strtotime($date22));


$people = $_REQUEST['people'];

?>
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
<script src="js/bootstrap.min.js"></script>




</head>

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


        
        <!-- BANNER SLIDER -->
<section class="section-sub-banner" style="background-image: url(img/12.jpg);">
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2 style="font-family: 'Prompt', sans-serif; !important">GALLERY</h2>
                        <p>Ananya Lipe</p>
                    </div>
                </div>
            </div>
</section>

        <!-- END / BANNER SLIDER -->   

            <!-----------class="reservation-container"-------------- booking -------------------------------------------------->
<section  style="border-bottom:1px solid #e8e8e8;padding-top: 20px" >

<div class="col-sm-12" >
<form   action="details.php" name="idFormlg" id="idFormlg" >




<div class="col-sm-3 form-group">
<label for="checkin"><?php echo $checkins;?></label>
<div class="input-group date">
<input type="text" class="form-control input-sm" value="<?php echo $checkin3; ?>" id="data-arrival"  name="date_check_in" readonly style="background:#fff;">
<span class="input-group-addon" id="sizing-addon1"><!-- <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i> --></span>
</div>
</div>

<div class="col-sm-3 form-group">
<label for="checkin"><?php echo $checkouts;?></label>
<div class="input-group date">
    <input type="text" value="<?php echo $_GET["lang"];?>" name="lang" hidden>
<input type="text" class="form-control input-sm" value="<?php echo $checkout3 ; ?>" id="data-departure"  name="date_check_out" readonly style="background:#fff;">
 <span class="input-group-addon" id="sizing-addon1"><!--<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>--></span> 
</div>
</div>


<div class="col-sm-3 form-group">
<label for="destination"><?php echo $peoples;?></label>
<select class="form-control " id="selectdestination" name="people" required="">
<option value='<?php echo $people; ?>'><?php echo $people; ?> People</option>
<optgroup label='<?php echo $peoples;?>'>
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

<div class="col-sm-3 form-group">
    <label >&nbsp;</label>
    <input type="submit" name="submit" type="text" id="submit" value="<?php echo $booknow; ?>" class="form-control input-sm btn btn-sm btn-red" >
</div>

<!-- <div class="col-sm-2 form-group">
<label for="AccessCode">รหัสเข้าถึง</label>
<input type="text" class="form-control input-sm" placeholder="รหัสเข้าถึง" name="accesscode" id="accesscode">
</div>      
<div class="floatleft"  style="padding-top:13px;">
<a href="javascript:void(0);" class="btn btn-sm btn-red" onClick="bookbutton();"  style="width:80px;" target="_blank">search</a>
<input type="submit" name="submit" type="text" id="submit" value="<?php echo $booknow; ?>" class="btn btn-sm btn-red" >

<a href="#"><img src="img/PRICE-512.png" alt="best price promise" title="best price promise"></a>
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



            <!------------------------  END booking   ----------------------->











        <!--*** ROOM *** -->

<section >

  



        <link rel="stylesheet" type="text/css" href="css/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="css/css/jquery.validation.css">
       
        <link rel="stylesheet" href="http://www.centrumcloud.com/booking/assets/templates/default/style.css">
        <link rel="stylesheet" href="css/css/lightslider.min.css">


<style>
#containerBox {
  padding: 5px 5px 0;
}
#availableCalendarBtn {
  margin-top: 5px;
}
@media (max-width: 991px) {
  #containerBox {
    padding: 5px 5px 0 !important;
  }
  select {
    padding: 0 !important;
  }
  .booking-form{
    max-width: 100% !important;
  }
  #langBox{
    margin-top: -34px !important;
  }
}
#langBox {
    float: right;
    width: 100%;
    margin-top: -35px;
    text-align: right;
}
#langBox a {
    padding: 5px;
    background: #fff;
    /* border-radius: 16px; */
    border: 1px solid;
}
</style>
    <style type="text/css">.readmore-js-toggle, .readmore-js-section { display: block; width: 100%; } .readmore-js-section { overflow: hidden; }</style></head><body>

        <div id="containerBox">
            
  

<div id="availabilityBox">
    <div id="availabilityBody">
        <div id="navigator"><span id="closeAvaibilityBtn">×</span></div>
        <div align="center"><input type="text" class="form-control hasDatepicker" value="2019-03-15" id="avaibilityStartDate"></div>
        <div id="availabilityLoading"></div>
        <div>
            <div align="center" id="avaibilityTitle">
                <span class="avaibilityNav" data-action="backward">&lt;&lt;</span> 
                <span id="avaibilityFrom"></span> 
                to 
                <span id="avaibilityTo"></span> 
                <span class="avaibilityNav" data-action="forward">&gt;&gt;</span>
            </div>
            <div id="avaibilityTable" class="table-responsive">
                <table class="table table-condensed table-bordered">
                    <thead>
                        <tr id="headDay"></tr>
                        <tr id="headNumb"></tr>
                    </thead>
                    <tbody id="avaibility"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<form method="POST" action="booking.php" accept-charset="UTF-8" id="bookingForm"><input name="_token" type="hidden" value="27Pdxt5GiECJefl72ZWmbf9ZNEJ8HueKU21IF0CY">
<!--<div class="line-bottom margin-bottom-5px bg-white" id="form-ctrl">
    <div class="container">
  <div class="booking-form">
            <div class="row">

                <div class="col-md-3">
                    <div class="topicquick">จอง</div>
                    <div class="topicquick2">ห้องพัก</div>
                </div>
                <div class="col-md-6">
                    <div class="calendarBox">
                        <div class="dateBox datepickerBox bgdate" data-element="#bookingform-checkindate">
                            <div class="dateTitle"><?php echo $checkins;?></div>
                            <span class="daydate"></span>
                            <span class="month"></span>
                            <div align="left">
                                <input type="text" value="<?php echo $checkin; ?>" name="checkInDate" name="checkInDate" id="bookingform-checkindate">
                            </div>
                        </div>

                        <div class="navBox">TO</div>

                        <div class="dateBox datepickerBox bgdate" data-element="#bookingform-checkoutdate">
                            <div class="dateTitle"><?php echo $checkouts;?></div>
                            <span class="daydate"></span>
                            <span class="month"></span>
                            <div align="left">
                                <input type="text" value="<?php echo $checkout; ?>" name="checkOutDate" name="checkOutDate" id="bookingform-checkoutdate">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 btnAndCode">
                    <div class="calendarBox">
                        <div class="dateBox datepickerBox bgdate" data-element="#bookingform-checkindate">
                            <div class="dateTitle"><?php echo $sperson;?></div>
                            <span class="daydate"><?php echo $people; ?></span>
                            
                        </div>

                       
                    </div>
                </div>

                <!--<div class="col-sm-6 col-md-3 btnAndCode">
                    <div class="btnbookquick" id="findAvailableBtn">
                        <div><p>ตรวจสอบห้องว่าง</p></div>
                        <div><p>การันตีด้วยราคาที่ดีที่สุด</p></div>
                    </div>

                     <button type="button" id="availableCalendarBtn" class="btn">
                        <span class="glyphicon glyphicon-eye-open"></span> ตารางห้องว่าง
                    </button> ปิดปุ่ม check available
                </div>
            </div>
            <div id="specificationFields">
                                            </div>
        </div>
    </div>  
</div>-->

<div class="container">
    <div class="clearfix" id="rtBox">
        <div class="pull-left recommendText">
            <h2><?php echo $Selectroom; ?></h2>
            <!--<h5>คุณสามารถจองได้หลายห้องและหลายโปรโมชันได้ในครั้งเดียว</h5>-->
        </div>
        <div class="pull-right"></div>      
    </div>

    <div class="row">
        
            <!--<div id="availableList" style="display: none;" data-isallotment="false">

                <input style="width:25px; text-align:center;" type="text" id="availableRoom_1610080001" value="3" data-ratecategoryavailable="1" data-closeoutratecategory="" data-availablerate="7" data-closeoutrate="" data-inhouse="4" data-totalavailable="3" data-availabletariff="1" data-closeouttariff="" readonly="">

                 <span class="fontwhite">Lagoon View</span><br>

                 <input style="width:25px; text-align:center;" type="text" id="availableRoom_1610080002" value="3" data-ratecategoryavailable="1" data-closeoutratecategory="" data-availablerate="6" data-closeoutrate="" data-inhouse="3" data-totalavailable="3" data-availabletariff="1" data-closeouttariff="" readonly=""> 

                 <span class="fontwhite">Zone L</span><br>

                 <input style="width:25px; text-align:center;" type="text" id="availableRoom_1610080003" value="4" data-ratecategoryavailable="1" data-closeoutratecategory="" data-availablerate="13" data-closeoutrate="" data-inhouse="9" data-totalavailable="4" data-availabletariff="1" data-closeouttariff="" readonly="">

                  <span class="fontwhite">Zone R</span><br>
                  <input style="width:25px; text-align:center;" type="text" id="availableRoom_1610080004" value="2" data-ratecategoryavailable="1" data-closeoutratecategory="" data-availablerate="2" data-closeoutrate="" data-inhouse="" data-totalavailable="2" data-availabletariff="1" data-closeouttariff="" readonly="">

                <span class="fontwhite">Seaview</span><br>

                <input style="width:25px; text-align:center;" type="text" id="availableRoom_1706160001" value="2" data-ratecategoryavailable="1" data-closeoutratecategory="" data-availablerate="2" data-closeoutrate="" data-inhouse="" data-totalavailable="2" data-availabletariff="1" data-closeouttariff="" readonly="">
                <span class="fontwhite">Villa Deluxe</span><br>  

          </div>-->

<div class="col-md-7" id="roomList">
<div id="roomList">
<?php
$sql = ( "SELECT * FROM room " );
$res = mysqli_query( $con, $sql );
$num = mysqli_num_rows($res);
while ( $r = mysqli_fetch_assoc( $res ) ) { ?>

    <div class="roomBox">
    <div class="">
        <div class="info-gallery">
            <div class="clearfix propertyNameBox">
                <div class="pull-left">
                    <h3 class="roomtype-name" data-id="<?php echo $r['ID_room'];?>"><?php echo $r[ $nr ];?></h3>
                </div>
            </div>
            
            <div id="9436817" class="carousel slide gallery" data-ride="carousel">
        
               <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/imgroom/<?php echo $r['image_room'];?>" style="width: 100%; max-height: 100%"></div>

                    <!--*** วนรูปห้อง **-->
                    <?php
                        $img = ( "SELECT * FROM img_room WHERE  ID_room = '".$r['ID_room']."' AND status=1" );
                        $imgroom = mysqli_query( $con, $img );
                        while ( $img11 = mysqli_fetch_assoc( $imgroom ) ) { ?>
                    <div class="item ">
                        <img src="img/imgroom/<?php echo $img11['link'];?>" style="width: 100%; max-height: 100%">
                    </div>
                    <?php }?>

                </div>

           <!--   <a class="left carousel-control" href="#9436817" role="button" data-slide="prev">

                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#9436817" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
            </div>
    
         
        </div>
        <div class="info-detail">
            <div class="clearfix">
                <div class="pull-left">
                   <!--  <a href="javascript:void(0);" class="roomDetail">
                       <?php echo $RoomDetails; ?><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a> -->
                    <section class="roomDetailContent">
                        <div class="roomDescription">
                            <div><p><?php echo $r[ $nr ];?><span style="font-size: 12px;">&nbsp; &nbsp;• &nbsp; <?php echo $roomdetail; ?>  &nbsp;</span></p>
                            </div>
                        </div>
                    <hr class="descriptionLine">
                        <div class="roomDescription">
                            <div><h4> <?php echo $r[ $dt];?></h4></div>
                        </div>
                    <hr class="descriptionLine">
                    
                        <h4><?php echo $RoomFacilities; ?></h4>

                        <?php $sql9 = ( "SELECT * FROM facilties where ID_room ='".$r['ID_room']."'" );
                            $res9 =  mysqli_query($con, $sql9 ); ?>
                       
                        <div class="amenity">
                 
                        <?php while ($r9 =  mysqli_fetch_assoc($res9) ) {
                        $namefac9 = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `tb_fac` where id_fac = '". $r9['id_fac']."'"));
                        ?>
                            <li><?PHP  if($_GET['lang']=='th'){echo$namefac9['name_fac_th'];}elseif($_GET['lang']=='en'){echo$namefac9['name_fac_en'];}elseif($_GET['lang']=='cn'){echo$namefac9['name_fac_cn'];}?></li>
                                      <?php   }  ?> 

                        </div>
                    </section>
                </div>

    <?php    // -------------  ดึงราคา จากปฏิทิน ที่ตั้งราคาเอง  --------------------
    $sql_pr ="SELECT * FROM priceroom where date_start = '".$checkin."'  AND ID_room = ".$r['ID_room'];
         $query_pr = mysqli_query($con,$sql_pr);
        if($pr = mysqli_fetch_assoc($query_pr)) {
             // -------------- ตัวแปร ราคา ห้อง
         $prroom = $pr["price_room"];
        }else{
            //--------------- ดึงราคาปกติ หากไม่มีในฐานปฎิทิน ------------------
            $sql_p = ( "SELECT * FROM room where ID_room = ".$r['ID_room']);
                        $res_p = mysqli_query( $con, $sql_p );
                        if($r_p = mysqli_fetch_assoc( $res_p )){
                            // -------------- ตัวแปร ราคา ห้อง
                          $prroom = $r_p["price_room"];
                        }
        }?>

                
                <div class="pull-right">
                    <?php 
                    $price = $prroom/65;
                    $price1 = $price*100;
                    ?>
                    <strike><strong><?php echo $STARTFROM; ?>  THB <?php echo number_format($price1);?> /<?php echo $NIGHT;?></strong> </strike>
                </div>
            </div>
            <div class="row" style="display: none;">
                <div class="col-xs-4 col-sm-3 firstRate">
                    <div><strong><?php echo $STARTFROM; ?></strong></div>
                    <div>THB <?php echo $prroom;?></div>           
                    <div> / <?php echo $NIGHT;?></div> 
                </div>
            </div>
        </div>
    </div>
    <div class="booking-rate rate">
    <div class="promotion">
        <div class="rate-promotionName"><?php echo $INTERNET; ?></div>
        <div class="rate-promotionDescription">-</div>
        <div class="row roomDetails">
            <div class="col-sm-6">
                <span class="promotionDetail-sm"></span>
                <div class="policy">
                    <a href="javascript:void(0);" class="readPolicy"><!-- <span class="glyphicon glyphicon-exclamation-sign"></span> --> <?php echo $Policy;?></a>
                    <section>
                            <div class="policyBody">
                                <h2>Best Available Rate</h2>
                                <div>
                                    <p><span style="font-size: 14px;">
                                        <strong><u>Policy @ Koh Payam<br>เตียงเสริม:</u></strong>
                                    </span></p>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <img src="img/guest.png">               
            </div>
            <div class="col-sm-3 col-xs-6">
                <img src="img/breakfast.png" title="Breakfast Included" class="img">  
            </div>
        </div>
    </div>
    <div class="rate-rightBox">




        <div class="max">2×<i class="fa fa-user"></i></div>
        <div class="price">
            <div class="old-price"></div>
            <?php echo $discount; ?> 35% 
            <div class="new-price" style="color: #FF0000">THB <?php echo $prroom;?>.00 </div>
        </div>
        



        <?php
                            $id_room = $r['ID_room'];
                            //------------------------------------ ตรวจสอบห้องพัก ----------------------------------

                                    $sqln ="SELECT *, SUM(num_room) AS sumroom FROM booking WHERE STATUS <= 2 AND( ( checkin BETWEEN '$checkin 12:01:00' AND '$checkout 12:00:00' ) OR( checkout BETWEEN '$checkin 12:01:00' AND '$checkout 12:00:00' ) OR( '$checkin 12:01:00' BETWEEN checkin AND checkout ) OR( '$checkout 12:00:00' BETWEEN checkin AND checkout ) ) AND booking.ID_room = '$id_room'";
        
                                        
        
                                        $sqlcount = mysqli_query($con,$sqln);
                                        $resu = mysqli_fetch_array($sqlcount);
                                        $sqlnumrow = mysqli_num_rows($sqlcount);
                                        $balance = $r[ 'total_room' ] -  $resu['sumroom'];






                                   if ( $balance <= 0 ) 
                                   { 
                                ?>

             <div class="input">
            <input class="form-control roomInput" name="room[<?php echo $r['ID_room'];?>][nopromotion][]" data-idroomtype="<?php echo $r['ID_room'];?>" data-type="nopromotion" data-proid="" data-price="<?php echo $r['price_room'];?>" data-freenight="false" data-minstay="1" data-ratename="INTERNET RATE" data-ratesamepro="false" value="0" type="hidden">
            <button type="button" class="btn bookBtn btn-danger" disabled>sold out</button>
            </div>
                           

                            <?php  }else { ?>
                                       
                            <?php if($people/2 > $balance){?>

            <!--<div class="input">
            <input class="form-control roomInput" name="room[<?php echo $r['ID_room'];?>][nopromotion][]" data-idroomtype="<?php echo $r['ID_room'];?>" data-type="nopromotion" data-proid="" data-price="<?php echo $r['price_room'];?>" data-freenight="false" data-minstay="1" data-ratename="INTERNET RATE" data-ratesamepro="false" value="0" type="hidden">
            <button type="button" class="btn bookBtn btn-danger" disabled><?php echo $booknow?></button>
            </div> -->
                <div class="input"><a role="button" class="btn bookBtn btn-danger" disabled><?php echo $booknow?></a></div>
                                           
                                       <?php }else{ ?>

             <!--  <div class="input">
            <input class="form-control roomInput" name="room[<?php echo $r['ID_room'];?>][nopromotion][]" data-idroomtype="<?php echo $r['ID_room'];?>" data-type="nopromotion" data-proid="" data-price="<?php echo $r['price_room'];?>" data-freenight="false" data-minstay="1" data-ratename="INTERNET RATE" data-ratesamepro="false" value="0" type="hidden">
            <button type="button" class="btn bookBtn btn-danger" ><?php echo $booknow?></button>
            </div>-->

                         <div class="input"><a href="booking.php?idroom=<?php echo $r[ 'ID_room' ];?>&checkin=<?php echo $checkin ;?>&checkout=<?php echo $checkout ;?>&people=<?php echo $people ;?>&lang=<?php echo $_REQUEST["lang"];?>" role="button" class="btn bookBtn btn-danger" ><?php echo $booknow;?></a></div>

                               <?php  }?>
                            
                            
                            <?php      
                                   }
         
                            
                            ?>



<!--
                            
                            <?php if($_REQUEST["lang"]=='en'){
echo "<a  href ='../room_detail.php?checkin=".$checkin."&checkout=".$checkout."&people=".$_REQUEST['people']."&lang=en&idroom=".$r[ 'ID_room' ]."' role='button' class='btn bookBtn btn-primary' >".$roomdetail."</a>";          
                     
                                            }else if($_REQUEST["lang"]=='th'){
     
echo "<a  href ='../room_detail.php?checkin=".$checkin."&checkout=".$checkout."&people=".$_REQUEST['people']."&lang=th&idroom=".$r[ 'ID_room' ]."' role='button' class='btn bookBtn btn-primary' >".$roomdetail."</a>";
                    }else if($_REQUEST["lang"]=='cn'){
     
echo "<a  href ='../room_detail.php?checkin=".$checkin."&checkout=".$checkout."&people=".$_REQUEST['people']."&lang=cn&idroom=".$r[ 'ID_room' ]."' role='button' class='btn bookBtn btn-primary' >".$roomdetail."</a>";
                    } ?>
                            --> 
                            
                                  
                            
            <?php if($balance<=0){
                    echo "No vacancy<br>";}
            else {
                 if($r[ 'ID_room' ]==1){
                echo "<b>$Our_last <B style='color: #FF0000 ;font-size: 18px;margin:auto; 15%;'>".$balance." </B>$room!</b><br>";
                 }else{
                echo "<b>$Our_last <B style='color: #FF0000 ;font-size: 18px;margin:auto; 15%;'>".$balance." </B>$Bad!</b><br>";
                 }
                 }



?>



    </div>
    <div class="moreInfo">
        <div id="infoContent">  
        </div>
        <div class="clearfix">
            <div class="pull-right">
                <a href="javascript:void(0);" class="closeInfo btn bookBtn btn-success">Close</a>
            </div>
        </div>
    </div>
</div>
    <div class="booking-box bordered ">
    <div class="booking-rate-list"></div>           
    </div>
    <div class="row">
    </div>
</div>


<hr class="no-margin-bottom">

<?php }?>
</div>
</div>

















        <div class="col-md-5">
            <div class="summaryPanel sticky" style="max-height: 1007px;">
                <div class="line-bottom margin-bottom-5px bg-white" id="form-ctrl">
    <div class="container">


                <div class="col-md-4">
                    <div class="topicquick"><?php echo $ReservationDate;?></div>
                    <div class="topicquick2">-</div>

                    <div class="calendarBox">
                        <div class="dateBox datepickerBox bgdate" data-element="#bookingform-checkindate">
                            <div class="dateTitle"><?php echo $checkins;?></div>
                            <span class="daydate"></span>
                            <span class="month"></span>
                            <div align="left">
                                <input type="text" value="<?php echo $checkin; ?>" name="checkInDate" name="checkInDate" id="bookingform-checkindate">
                            </div>
                        </div>

                        <div class="navBox">TO</div>

                        <div class="dateBox datepickerBox bgdate" data-element="#bookingform-checkoutdate">
                            <div class="dateTitle"><?php echo $checkouts;?></div>
                            <span class="daydate"></span>
                            <span class="month"></span>
                            <div align="left">
                                <input type="text" value="<?php echo $checkout; ?>" name="checkOutDate" name="checkOutDate" id="bookingform-checkoutdate">
                            </div>
                        </div>
                    </div>


                    <div class="calendarBox">
                        <div class="dateBox datepickerBox bgdate" data-element="#bookingform-checkindate">
                            <div class="dateTitle"><?php echo $sperson;?></div>
                            <span class="daydate"><?php echo $people; ?></span>
                            <span class="daydate"><?php echo $sperson; ?></span>       
                        </div>   
                    </div>


                </div>
                
                
            </div>
            <br><div id="specificationFields"></div>
                                            
        </div>
                <div align="center"> 
                    <button type="button" onClick="footFunction();" class="btn btn-danger"><?php echo $Edit;?></button>
                   
                </div>
                <!--<button type="button" class="btn bookNowBtn" id="bookNowBtn">Book now</button>-->
            </div>
            </div>
        </div>
        <script type="text/javascript">
        function footFunction(){ 
         document.getElementById("data-arrival").focus();  
        }
        </script>

        <!--<div class="col-md-4">
            <div class="summaryPanel sticky" style="max-height: 1007px;">
                <div id="displayRoomSelectedBtn"><a href="javascript:void(0);" id="showDetailBtn"><span class="glyphicon glyphicon-triangle-top" title="show detail"></span></a></div>
                <div id="priceCol"><span class="totalPriceTxt">Total</span></div>
                <div id="summaryCol"><h4>THB <span class="totalPrice" id="summaryPrice">0.00</span></h4></div>
                <div id="boxSelected">
                    <div id="roomsCol"><span id="summaryRooms">0</span> rooms <span id="noOfNight">0</span> night</div>
                    <div id="roomSelectedBox" style="max-height: 867px; display: none;"></div>
                </div>
                <div id="roomMaximum"> Maximum rooms : </div>
                <div id="buttonCol" align="center">
                <button type="button" class="btn bookNowBtn" id="bookNowBtn">Book now</button></div>
            </div>
        </div>-->
    </div>
</div>
</form>
        </div>
     
            <div id="footerBox"></div>
            
        
      
        
    
    <script src="http://www.centrumcloud.com/booking/assets/packages/jquery/jquery-2.2.2.min.js"></script>
    <script src="http://www.centrumcloud.com/booking/assets/packages/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://www.centrumcloud.com/booking/assets/packages/jqueryUi/jquery-ui.min.js"></script>
    <script src="http://www.centrumcloud.com/booking/assets/packages/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="http://www.centrumcloud.com/booking/assets/js/main.js"></script>
    <script>
        var yourElement = document.getElementById('link_thankyou');
 yourElement.setAttribute('href', 'https://www.theblueskyresort.com/thank-you.html');

 setTimeout(function () {
       window.location.href = "https://www.theblueskyresort.com/thank-you.html"; //will redirect to your blog page (an ex: blog.html)
 }, 10000); //will call the function after 2 secs.

 var paragraph = document.getElementById("adddelay");
var text = document.createTextNode("You will be automatically redirected to the home page in 10 seconds.");

paragraph.appendChild(text);    </script>

    <script src="http://www.centrumcloud.com/booking/assets/packages/moment/moment.js"></script>
<script src="http://www.centrumcloud.com/booking/assets/packages/lightslider/js/lightslider.min.js"></script>
<script src="http://www.centrumcloud.com/booking/assets/packages/readmoreJs/readmore.min.js"></script>
<script>
$(document).ready(function() {
    var currency = 'THB';
    var maximumBooks = 5;
    var isAllotment = false;

    jQuery.fn.setElementDate = function (date){
        var element = $(this).parent().parent();
        if(typeof date == 'undefined'){
            date = $(this).val();
        }
        element.find('.daydate').html(moment(date).format('DD'));
        element.find('.month').html(moment(date).format('MMM YYYY'));
    }


    var app = {

        timer:0,

        run: function()
        {
            var thisApp = this;
            var noOfNight = this.diffDays();

            $('#bookingform-checkindate').setElementDate();

            $('#bookingform-checkindate').datepicker({
                dateFormat: 'yy-mm-dd', 
                minDate: 0,
                onSelect: function(dateText) {
                    $(this).val(dateText);
                    var date = moment(dateText);
                    $(this).setElementDate(date);
                    var minDate = moment(dateText).add(1, 'days').format('YYYY-MM-DD');
                    var endDate = moment(dateText).add(parseInt($('#noOfNight').text()), 'days').format('YYYY-MM-DD');
                    $('#bookingform-checkoutdate').datepicker("setDate", endDate);
                    $('#bookingform-checkoutdate').datepicker( "option", "minDate", minDate );
                    $('#bookingform-checkoutdate').setElementDate(endDate);
                    thisApp.updateLink();
                    thisApp.loadRoomList();
                }
            });

            $('#bookingform-checkoutdate').setElementDate();

            $('#bookingform-checkoutdate').datepicker({
                dateFormat: 'yy-mm-dd', 
                minDate: (0+1),
                onSelect: function(dateText) {
                    $(this).val(dateText);
                    var date = moment(dateText);
                    $(this).setElementDate(date);
                    thisApp.updateLink();
                    thisApp.loadRoomList();
                }
            });

            $('#avaibilityStartDate').datepicker({
                dateFormat: 'yy-mm-dd', 
                minDate: 0,
                onSelect: function(dateText) {
                    thisApp.loadAvaibility(dateText, null);
                }
            });


            $('body').on('click', '.avaibilityNav', function(){
                var action = $(this).data('action');
                var startDate = $('#avaibilityTitle').data('startdate');
                if(action=='backward')
                {
                    startDate = moment(startDate).add(-10, 'days').format('YYYY-MM-DD');
                }else{
                    startDate = moment(startDate).add(10, 'days').format('YYYY-MM-DD');
                }
                if(startDate<moment().format('YYYY-MM-DD')){
                    startDate = moment().format('YYYY-MM-DD');
                }
                $('#avaibilityStartDate').datepicker("setDate", moment(startDate).format('YYYY-MM-DD'));
                thisApp.loadAvaibility(moment(startDate).format('YYYY-MM-DD'), null);
            });

            $('body').on('click', '.datepickerBox', function(){
                var element = $(this).data('element');
                $(element).show().focus().hide();
            });


            var this_;
            var max = 0;
            $('body').on('focusin', '.roomInput', function(){

                this_ = $(this);
                if($.inArray(this_.data('type'), ['promotion'/*, 'code'*/]) != -1 && isAllotment == true){
                    max = parseInt($('#availableRoom_'+this_.data('idroomtype')).data('availabletariff'));
                }else{
                    max = parseInt($('#availableRoom_'+this_.data('idroomtype')).val());
                }
                $(this).data('val', this_.val());

            }).change(function(){

                var currentVal = parseInt(this_.data('val'));
                max += currentVal;

                var val = parseInt(this_.val());
                max -= val;

                var isPromotion = false;
                //var rateSamePro = this_.data('ratesamepro');
                if(isAllotment == false){
                    $('#availableRoom_'+this_.data('idroomtype')).val(max);
                }else{
                    /*if(rateSamePro==true){
                        $('#availableRoom_'+this_.data('idroomtype')).data('availabletariff', max);
                        $('#availableRoom_'+this_.data('idroomtype')).val(max);
                    }else{*/
                        if($.inArray(this_.data('type'), ['promotion'/*, 'code'*/]) != -1){
                            $('#availableRoom_'+this_.data('idroomtype')).data('availabletariff', max);
                            isPromotion = true;
                        }else{
                            $('#availableRoom_'+this_.data('idroomtype')).val(max);
                        }
                    /*}*/
                }

                var totalRoomThisType = 0;
                $.each($('.roomInput[data-idroomtype="'+this_.data('idroomtype')+'"]'), function(index, val){
                    totalRoomThisType += parseInt($(this).val());
                });
                $.each($('.roomInput[data-idroomtype="'+this_.data('idroomtype')+'"]'), function(index, val){
                    if($(this) != this_){
                        var isPromotion_ = false;
                        if($.inArray($(this).data('type'), ['promotion'/*, 'code'*/]) != -1){
                            isPromotion_ = true;
                        }

                        if((isPromotion_ == isPromotion) || isAllotment == false){ //rateSamePro == true ||
                            if(max==0){
                                $(this).parent().find('.bookBtn').prop('disabled', true);
                            }else{
                                $(this).parent().find('.bookBtn').prop('disabled', false);
                            }

                            /*var selectVal = parseInt($(this).val())+max;
                            $.each($('option', this), function(){
                                var optionVal = parseInt($(this).val());
                                if(optionVal > max && optionVal > selectVal)
                                {
                                    $(this).prop('disabled', true);
                                }else{
                                    $(this).prop('disabled', false);
                                }
                            });*/
                        }
                    }
                });

                var totalRooms = thisApp.calculatePrice();
                if(totalRooms > maximumBooks){
                    alert('Warning! You cannot book greater than '+maximumBooks+' rooms per time');
                    this_.trigger('focusin');
                    //this_.find('option[value="'+currentVal+'"]').prop('selected', true).trigger('change');
                    this_.val(currentVal).trigger('change');
                    var idRoomType = this_.data('idroomtype');
                    $('.roomSelectedList[data-id="'+idRoomType+'"]').find('.selectedItem').last().slideUp(function(){
                        $(this).remove();
                    });
                    //$('.bookNowBtn').prop('disabled', true);
                }else{
                    $('.bookNowBtn').prop('disabled', false);
                }
                this_.trigger('focusin');

            });

            $('body').on('click', '.rate-button', function(){
                var toggle = $(this).data('toggle');
                var bookingBox = $(this).parent().parent().parent().find('.booking-box');
                var btnBox = $(this).parent().parent();
                if(toggle == 'close')
                {
                    //bookingBox.removeClass('show-rate');
                    bookingBox.slideUp();
                    btnBox.removeClass('show-rate');
                }else{
                    //bookingBox.addClass('show-rate');
                    bookingBox.slideDown();
                    btnBox.addClass('show-rate');
                }
            });

            /*$('body').on('keyup', '#bookingform-promotioncode', function(){
                if (thisApp.timer) {
                    clearTimeout(thisApp.timer);
                }
                thisApp.timer = setTimeout(thisApp.resetTimer(), 1500); 
            });*/

            $('body').on('click', '#findAvailableBtn', function(){
                thisApp.updateLink();
                thisApp.loadRoomList();
            });

            $('body').on('click', '.bookNowBtn', function(){
                var totalRooms = thisApp.calculatePrice();
                if(totalRooms > maximumBooks){
                    alert('Warning! You cannot book greater than '+maximumBooks+' rooms per time');
                }else if(totalRooms > 0 && totalRooms <= maximumBooks){
                    $('#bookingForm').submit();
                }else{
                    alert('You must select some room.');
                }
            });

            $('body').on('click', '#availabilityBox', function(e){
                if( e.target != this ) {
                    return false;
                }else{
                    $(this).fadeOut();
                    $('body').css('overflow', '');
                }
            });
            
            $('body').on('click', '#closeAvaibilityBtn', function(){
                $('#availabilityBox').fadeOut();
                $('body').css('overflow', '');
            })

            $('body').on('click', '#availableCalendarBtn', function(){
                $('body').css('overflow', 'hidden');
                thisApp.loadAvaibility($('#bookingform-checkindate').val(), null);
                $('#availabilityBox').fadeIn();
            });


            $('body').on('click', '.bookBtn', function(){
                var element = $(this).parent().find('.roomInput');
                element.trigger('focusin');
                var val = parseInt(element.val());
                element.val(val+1);
                element.trigger('change');
            });

            $('body').on('click', '.removeRoom', function(){
                var element = $(this).parent().parent();
                var idRoomType = element.data('id');
                var dataType = element.data('datatype');
                var proid = element.data('proid');
                element.slideUp(function(){
                    var elementList = element.parent();
                    $(this).remove();
                    if(elementList.find('.selectedItem').length == 0){
                        elementList.slideUp(function(){
                            $(this).remove();
                        });
                    }
                });
                var inputElement = $('.roomInput[data-idroomtype="'+idRoomType+'"][data-type="'+dataType+'"][data-proid="'+proid+'"]');
                inputElement.trigger('focusin');
                var val = parseInt(inputElement.val());
                inputElement.val(val-1);
                inputElement.trigger('change');
            });

            $('body').on('click', '.roomDetail', function(){
                var roomtypeName = $(this).parent().parent().parent().parent().find('.roomtype-name').html();
                var gallery = $(this).parent().parent().parent().parent().find('.gallery img');
                var galleryList = '';
                var iGallery = 0;
                gallery.each(function(){
                    iGallery++;
                    var imgUrl = $(this).attr('src');
                    galleryList += '<li data-thumb="'+imgUrl+'" data-src="'+imgUrl+'"><img src="'+imgUrl+'"/></li>';
                });
                var content = '<h1 class="modalTitle"><?php echo $RoomDetails; ?></h1><div class="row">'+
                '<div class="col-md-7"><ul id="imageGallery">' + galleryList + '</ul></div>'+
                '<div class="col-md-5"><h1>' + roomtypeName + '</h1>' +$(this).parent().find('section.roomDetailContent').html()+'</div>'+
                '</div>';

                $('#modalBoxContent').html(content);

                var slider = $('#imageGallery').lightSlider({
                    gallery: true,
                    item: 1,
                    loop: true,
                    autoWidth: true,
                    //auto: true,
                    speed: 800,
                    thumbItem: 8,
                    slideMargin: 0,
                    enableDrag: true,
                    currentPagerPosition: 'left',
                    onSliderLoad: function(el) {
                        /*el.lightGallery({
                            selector: '#imageGallery .lslide'
                        });*/
                    }   
                });  

                /*$('#imageGallery').on('mouseover', function(){
                    slider.pause();    
                });

                $('#imageGallery').on('mouseout', function(){
                    slider.play(); 
                });*/

                thisApp.displayModal('#modalBox');


                /*$('#dialogTitle').html('<h1>'+roomtypeName+'</h1>');
                $('#dialogBody').html(content);
                $('#dialogBox').modal('show');*/
            });


            $(window).scroll(function(){ // scroll event
                thisApp.resizeRoomSelectedBox();
            });

            
            /*$(window).scroll(function(){ // scroll event
                if($('#bookNowBtn').isOnScreen()){
                    $('.scrollToTop').fadeOut();
                }else{
                    $('.scrollToTop').fadeIn();
                }
            });*/

            $('.scrollToTop').click(function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });

            $(window).resize(function() {
                thisApp.resizeRoomSelectedBox();
            });
            

            thisApp.resizeRoomSelectedBox();

            $('body').on('click', '#showDetailBtn', function(){
                $('#boxSelected').slideToggle();
            });

            $('body').on('click', '.readPromotion', function(){
                var content = $(this).parent().parent().parent().parent().find('.rate-promotionDescription').html();
                var element = $(this).parent().parent().parent().parent().parent().find('.moreInfo');
                element.find('#infoContent').html(content);
                element.slideDown();
            });

            $('body').on('click', '.readPolicy', function(){
                var promotionName = $(this).parent().parent().parent().parent().parent().find('.rate-promotionName').text();
                var policyBody = $(this).parent().find('.policyBody').html();
                var policyTitle = $(this).parent().find('.policyTitle').text();
                var roomtypeName = $(this).parent().parent().parent().parent().parent().parent().find('.roomtype-name').text();
                var element = $(this).parent().parent().parent().parent().parent();
                element.find('#infoContent').html(policyBody);
                element.find('.moreInfo').slideDown();
            });

            $('body').on('click', '.closeInfo', function(){
                $(this).parent().parent().parent().slideUp();
            });

            $('body').on('click', '#codeText a', function(){
                $(this).parent().fadeOut(function(){
                    $('#codeBox').fadeIn(); 
                });
            });

            if($('#bookingform-promotioncode').val()!=''){
                $('#codeText a').trigger('click');
            }

            $('body').on('click', '#closeCodeBtn', function(){
                $('#codeBox').fadeOut(function(){
                    //if($('#bookingform-promotioncode').val()!=''){
                        $('#bookingform-promotioncode').val('');
                        $('#findAvailableBtn').trigger('click');
                    //}
                    $('#codeText').fadeIn();
                });
            });

            $('body').on('click', '.closeModalBox', function(){
                $(this).parent().parent().fadeOut();
                $('body').css('overflow', '');
            });

            $(document).on('keyup', function(event){
                if(event.keyCode == 27 && $('#modalBox').is(':visible')){ //escape
                    $('#modalBox').find('.closeModalBox').trigger('click');
                }
            });

            $('body').on('click', '.modalBox', function(e){
                if(e.target == this){
                    $('.closeModalBox').trigger('click');
                }
            });

            thisApp.updateLink();
            thisApp.loadRoomList();

        },

        displayModal: function(element){
            $(element).fadeIn();
            $('body').css('overflow', 'hidden');
        },

        resizeRoomSelectedBox: function()
        {
            var topHeight = $('#header').height() + $('#rtBox').height() + $('.booking-form').height() + 21; //21 is margin 
            var selectedBoxHeight = $(window).height();
            if ($(window).scrollTop() > topHeight && $(window).width() > 974 ) { //if screen width > 974  and scroll top > 460 fix side bar
                if($('#footerBox').visibleHeight() > 0){
                    selectedBoxHeight -= $('#footerBox').visibleHeight();
                }
                $(".sticky").css({"top": ($(window).scrollTop()) - topHeight + "px"});
                $('.sticky').css('max-height', selectedBoxHeight);
                $('#roomSelectedBox').css('max-height', selectedBoxHeight-140); //138
            }else{
                $('.sticky').css('top', '');
                $('.sticky').css('max-height', selectedBoxHeight);
                $('#roomSelectedBox').css('max-height', selectedBoxHeight-140); //138
            }
        },

        loadAvaibility: function(startDate, allRoomtype)
        {
            $.ajax({
                url: 'http://www.centrumcloud.com/booking/reservation/BlueskyKohPayam/getAvaibility',
                type: 'get',
                data: {startDate: startDate, allRoomtype: allRoomtype},
                dataType: 'json',
                beforeSend: function(){
                    $('#headDay, #headNumb, #avaibility').empty();
                    $('#avaibilityTable, #avaibilityTitle').slideUp();
                    $('#availabilityLoading').html('<i class="fa fa-spinner fa-pulse"></i>');
                }
            }).error(function(){
                alert('Error cannot load avaibility');
            }).done(function(data){
                $('#avaibilityTitle').data('startdate', data.startDate);
                $('#avaibilityFrom').html(data.startDateText);
                $('#avaibilityTo').html(data.endDateText);
                $('#avaibilityTable, #avaibilityTitle').slideDown();
                $('#availabilityLoading').empty();
                var dayInfo = data.dayInfo;
                var roomInfo = data.roomInfo;
                var roomAvaibility = data.avaibility;
                $('#headDay').append('<th rowspan="2">Roomtypes / Days</th>');
                $.each(dayInfo, function(k, v) {
                    $('#headDay').append('<th>'+v.day+'</th>');
                    $('#headNumb').append('<th>'+v.num+'</th>');
                });

                $.each(roomInfo, function(k, v) {
                    var html = '<tr><td>'+v+'</td>';
                    $.each(roomAvaibility[k], function(day, variable) {
                        var icon = '✕';
                        var className = '';
                        if(parseInt(variable.avaibility)>0){
                            icon = '✓';
                            className = 'available';
                        }
                        html += '<td class="avaibilityTimes '+className+'">'+icon+'</td>';
                    })
                    html += '</tr>';
                    $('#avaibility').append(html);
                });
            }).always(function(){

            });
        },

        resetTimer: function()
        {
            this.timer = 0;
            this.updateLink();
            this.loadRoomList();
        },

        diffDays: function()
        {
            return moment($('#bookingform-checkoutdate').val()).diff(moment($('#bookingform-checkindate').val()), 'days');
        },

        disableInput: function()
        {
            
        },

        updateLink: function()
        {
            var specificationFields = '';
            if($('input[name="promotionId"]').val() != undefined){
                specificationFields += '&promotionId=' + $('input[name="promotionId"]').val();
            }
            if($('input[name="promotionName"]').val() != undefined){
                specificationFields += '&promotionName=' + $('input[name="promotionName"]').val();
            }
            window.history.pushState('', '', 'http://www.centrumcloud.com/booking/reservation/BlueskyKohPayam?checkInDate='+$('input[name="checkInDate"]').val()+'&checkOutDate='+$('input[name="checkOutDate"]').val()+'&promotionCode='+$('input[name="promotionCode"]').val()+specificationFields); // update link

        },

        loadRoomList: function()
        {
            var thisApp = this;
            var params = {checkInDate: $('input[name="checkInDate"]').val(), checkOutDate: $('input[name="checkOutDate"]').val(), promotionCode: $('input[name="promotionCode"]').val()};
            if($('input[name="promotionId"]').val() != undefined){
                params['promotionId'] = $('input[name="promotionId"]').val();
                $('input[name="promotionId"]').remove();
            }
            if($('input[name="promotionName"]').val() != undefined){
                params['promotionName'] = $('input[name="promotionName"]').val();
                $('input[name="promotionName"]').remove();
            }
            $.ajax({
                url: 'http://www.centrumcloud.com/booking/reservation/BlueskyKohPayam/getRoomAvailable',
                type: 'get',
                dataType: 'html',
                data: params,
                beforeSend: function(){
                    $('#roomList').html('<div class="uil-ripple-css" style="transform:scale(0.6);"><div>');
                }
            })
            .done(function(res) {
                $('#roomList').html(res);
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                alert('Error load data');
            })
            .always(function() {
                thisApp.calculatePrice();
                $('.roomDescription').readmore({
                    speed: 75,
                    maxHeight: 40
                });
                $('.amenity').readmore({
                    speed: 75,
                    maxHeight: 40
                });

                isAllotment = $('#availableList').data('isallotment');
            });
        },

        calcFreeNight: function(totalNight, stay, freeNight)
        {
            if(stay!=0){
                var calc = parseInt(totalNight/stay);
            }else{
                var calc = 1;
            }
            var free = parseInt(calc * freeNight);

            return free;
        },

        calculatePrice: function(){
            var thisApp = this;
            var numNight=this.diffDays();
            var totalPrice=0;
            var totalRoom=0;
            var selectedList = {};

            $.each($('.roomInput'), function(index, val){
                var total = parseInt($(this).val());
                var idroomtype = $(this).data('idroomtype');
                var datatype = $(this).data('type');
                var proid = $(this).data('proid');
                var price = parseFloat($(this).data('price')==''?0:$(this).data('price'));
                var freenight = parseInt($(this).data('freenight'));
                var minstay = parseInt($(this).data('minstay'));
                var rateName = $(this).data('ratename');
                var totalRoomPrice = total*(price*numNight);
                var totalPriceThisRoom = 1*(price*numNight);
                var summaryFreeNight = 0;
                var totalFreeNight = 0;

                var arrayKey = idroomtype+'_'+datatype+'_'+proid;

                totalRoom += total;
                if(freenight > 0){
                    summaryFreeNight = thisApp.calcFreeNight(numNight, minstay, freenight);
                    totalFreeNight = price*(summaryFreeNight*total);
                    totalRoomPrice -= totalFreeNight;
                    totalPriceThisRoom -= totalFreeNight;
                }

                totalPrice += totalRoomPrice;


                if(selectedList.hasOwnProperty(idroomtype)==false){
                    selectedList[arrayKey] = total;
                }else{
                    selectedList[arrayKey] += total;
                }

                if($('.roomSelectedList[data-id="'+idroomtype+'"]').length==0 && selectedList[arrayKey]>0){
                    var roomtypename = '<div class="roomSelectedList" data-id="'+idroomtype+'"><h4>'+$('.roomtype-name[data-id="'+idroomtype+'"]').text()+'</h4></div>';
                    $('#roomSelectedBox').append(roomtypename);
                }

                var summary = totalRoomPrice.format(2) +' '+currency;
                var summaryWithFreeNight = summaryFreeNight > 0 ? '<div class="row"><div class="col-md-12">Free '+summaryFreeNight+' <i class="fa fa-moon-o" title="free night"></i></div></div>' : ''; //  = '+totalFreeNight.format(2)+' '+currency+' /////  x '+total+' <i class="fa fa-bed" title="rooms"></i>

                var element = $('.selectedItem[data-id="'+idroomtype+'"][data-datatype="'+datatype+'"][data-proid="'+proid+'"]');

                var priceDetail = '<div class="selectedItem" data-id="'+idroomtype+'" data-datatype="'+datatype+'" data-proid="'+proid+'" style="display: none">'+
                '<strong>' + rateName + '</strong>'+
                '<div class="clearfix">'+
                '<div class="pull-left">'+
                '<div>'+price.format(2)+' x '+numNight+' <i class="fa fa-moon-o" title="night"></i></div>'+
                summaryWithFreeNight+
                '</div>'+
                '<div class="pull-right" align="right">'+
                currency + ' ' + totalPriceThisRoom.format(2) +
                '</div>'+
                '</div>'+
                '<div class="clearfix removeBtn" align="center"><a href="javascript:void(0);" class="removeRoom">Remove</a></div>'+
                '</div>';

                if(total>0)
                {
                    /*if(element.length>0)
                    {
                        element.replaceWith(priceDetail);
                    }else{
                        $('.roomSelectedList[data-id="'+idroomtype+'"]').append(priceDetail);
                        $('.selectedItem').slideDown();
                    }*/
                    if(element.length<total){
                        $('.roomSelectedList[data-id="'+idroomtype+'"]').append(priceDetail);
                        $('.selectedItem').slideDown();
                    }

                }else{
                    element.slideUp(function(){
                        $(this).remove();
                        if($('.roomSelectedList[data-id="'+idroomtype+'"]').find('.selectedItem').length==0){
                            $('.roomSelectedList[data-id="'+idroomtype+'"]').slideUp(function(){
                                $(this).remove();
                            });
                        }
                    });
                }

                $('#summaryRooms').html(totalRoom);
                $('#summaryPrice').html(totalPrice.format(2));
            });

            $('#noOfNight').html(numNight);

            if(totalRoom > 0){
                $('#roomSelectedBox').slideDown();
            }else{
                $('#roomSelectedBox').slideUp();
            }

            return totalRoom;
        }

    };

    app.run();
}); 
</script>

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body>




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

<script language="javascript" src="https://www.bigbang.co.th/api/bt.js" charset="UTF-8"></script>
</body>
</html>
