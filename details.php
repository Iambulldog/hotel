
<!DOCTYPE html>
<html class="no-js" xml:lang="th" lang="th"><!--<![endif]-->

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


<?php include_once('hea.php'); ?>

<body> 

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

        </div>
    </div>

<?php include_once('nav.php'); ?>

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
            <h2 class="subheading">Welcome to TSUSLOW HOSTEL</h2>
            <h1 class="mb-4">TSUSLOW HOSTEL</h1>
            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-4">
                      <form   action="details.php" name="idFormlg" id="idFormlg" class="appointment-form">
                        <?php   
                            date_default_timezone_set("Asia/Bangkok");
                            $checkin = date('d-m-Y');
                            $checkout=date("d-m-Y",strtotime($checkin."+1 day")); 
                        ?>
                        <input type="text" value="<?php echo $_GET["lang"];?>" name="lang" hidden>
                            <h3 class="mb-3"><?php echo $checkins;?></h3>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" class="form-control appointment_date-check-in" value="<?php echo $checkin3; ?>" id="data-arrival"  name="date_check_in" readonly style="background:#fff;">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" class="form-control appointment_date-check-out" value="<?php echo $checkout3 ; ?>" id="data-departure"  name="date_check_out" readonly style="background:#fff;">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="fa fa-chevron-down"></span></div>
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
                          </div>
                                </div>
                                </div>

                               
                               
                                <div class="col-md-12">
                                    <div class="form-group">
                          <input name="submit" type="submit" id="submit"  class="btn btn-primary py-3 px-4">
                        </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    
    <section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
            <div class="container-fluid px-md-0">
                <div class="row no-gutters">

              <?php
$sql = ( "SELECT * FROM room " );
$res = mysqli_query( $con, $sql );
$num = mysqli_num_rows($res);
while ( $r = mysqli_fetch_assoc( $res ) ) { ?>
      

                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url(img/imgroom/<?php echo $r['image_room'];?>);"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>

                            <?php // -------------  ดึงราคา จากปฏิทิน ที่ตั้งราคาเอง  --------------------
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
                                <?php 
                                    $price = $prroom/65;
                                    $price1 = $price*100;
                                ?>

                                <p class="mb-0">
                                    <span class="price mr-1"><?php echo $STARTFROM; ?> <?php echo number_format($prroom);?> </span>
                                    <span class="per"><?php echo $NIGHT;?></span>
                                </p>

                                <h3 class="mb-3"><a href="rooms.html"><?php echo $r[ $nr ];?></a></h3>
                                <ul class="list-accomodation">
                                    <li><span><?php echo $STARTFROM; ?>:</span> THB <?php echo $prroom;?> <?php echo $NIGHT;?></li>
                                </ul>

                                <?php
                            $id_room = $r['ID_room'];
                            //------------------------------------ ตรวจสอบห้องพัก ----------------------------------

                                    $sqln ="SELECT *, SUM(num_room) AS sumroom FROM booking WHERE STATUS <= 2 AND( ( checkin BETWEEN '$checkin 12:01:00' AND '$checkout 12:00:00' ) OR( checkout BETWEEN '$checkin 12:01:00' AND '$checkout 12:00:00' ) OR( '$checkin 12:01:00' BETWEEN checkin AND checkout ) OR( '$checkout 12:00:00' BETWEEN checkin AND checkout ) ) AND booking.ID_room = '$id_room'";

                                    $sqlcount = mysqli_query($con,$sqln);
                                    $resu = mysqli_fetch_array($sqlcount);
                                    $sqlnumrow = mysqli_num_rows($sqlcount);
                                    $balance = $r[ 'total_room' ] -  $resu['sumroom'];
                                       

                                    if ( $balance <= 0 ) 

                                    {  ?>

                                    <p class="pt-1">
                                        <a href="#" class="btn-custom px-3 py-2">sold out
                                            <span class="icon-long-arrow-right"></span>
                                        </a>
                                    </p>

                                    <?php  }else { ?>

                                        <?php if($people/2 > $balance){?>
                                        <p class="pt-1">
                                            <a href="#" class="btn-custom px-3 py-2"><?php echo $booknow?>
                                                <span class="icon-long-arrow-right"></span>
                                            </a>
                                        </p>
                                    <?php } else { ?>
                                        <p class="pt-1">
                                            <a href="booking.php?idroom=<?php echo $r[ 'ID_room' ];?>&checkin=<?php echo $checkin ;?>&checkout=<?php echo $checkout ;?>&people=<?php echo $people ;?>&lang=<?php echo $_REQUEST["lang"];?>" class="btn-custom px-3 py-2"><?php echo $booknow;?>
                                                <span class="icon-long-arrow-right"></span>
                                            </a>
                                        </p>
                                    <?php  }?>
                            
                            
                            <?php   } ?>



                            </div>
                        </div>
                    </div>
                </div>

<?php }?>



           

             
            </div>
            </div>
        </section>
        
  
  




















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






            <!------------------------  END booking   ----------------------->






  


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
    <style type="text/css">
    .readmore-js-toggle, .readmore-js-section {
     display: block; width: 100%; 
 } .readmore-js-section 
{ overflow: hidden; }
</style>


<body>







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
