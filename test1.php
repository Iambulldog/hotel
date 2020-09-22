
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

include_once('header.php');
?>

<!-- Start Stricky -->
<div id="sticky-header">
  <header class="border shadow-header">
    <div class="container-fluid">
      <div class="row">


<!------------------------ Mobile Header ------------------------->


<div class="mappear">
  <div class="mobileheader">
      <div class="col-xs-6">
        <a href="index.php">
          <img src="img/Ananya.png" class="logo" alt="Centara Hotels & Resorts" title="Ananya Lipe  Resorts">
        </a>
      </div>
      <div class="rightitem">  
        <div class="language">
          <div class="singlelavel">
            <ul>
            <li><u>EN</u>
              <ul class="text-left shadow border dropdown">
                <li><a href="#">English</a></li>
                <li><a href="#">ภาษาไทย</a></li>
                <li><a href="#">中文</a></li>
              </ul>
            </li>
            </ul>
          </div>
        </div>
        <div class="menu">
        <span class="mh-btns-right">
          <a href="#mlang"  class="mlang"><i class="fas fa-bars fa-2x"></i></a>
        </span>
        </div>
      </div>


<nav id="mlang">
  <ul>
    <li><a href="">Home</a></li>

    <li><a href="#">accommodation</a>
      <ul>
        <li><a href="deluxe_panoramic_view.php">deluxe panoramic view</a></li>
        <li><a href="deluxe_pool_access.php">deluxe pool access</a></li>
        <li><a href="#">royal suite panoramic view</a></li>
        <li><a href="#">royal suite pool view</a></li>
        <li><a href="#">royal suite seaview</a></li>
        <li><a href="#">penthouse suite</a></li>
        <li><a href="#">grand royal suite seaview</a></li>
      </ul>
    </li>

    <li><a href="#">dining</a>
      <ul>
        <li><a href="art_beach_club.php">art beach club</a></li>
         <li><a href="#">pattaya restaurents</a></li>
         <li><a href="steak_house.php">steak house</a></li>
         <li><a href="sukoi_teppanyaki.php">sukoi teppanyaki</a></li>
         <li><a href="#">sky bar</a></li>
         <li><a href="#">lagoon bar</a></li>
         <li><a href="shine_bar.php">shine bar</a></li>
      </ul>
    </li>    

    <li><a href="special-offers/">romance</a>
      <ul>
        <li><a href="wedding_styles.php">wedding styles</a></li>
        <li><a href="#">private candle light</a></li>
      </ul>
    </li>

    <li><a href="#">activities</a>
      <ul>
        <li><a href="#">excursions</a></li>
        <li><a href="#">fitness center</a></li>
        <li><a href="#">thai massage</a></li>
        <li><a href="#">kid club</a></li>
        <li><a href="#">beach activity center</a></li>
        <li><a href="#">yoga</a></li>
        <li><a href="#">Merit making to the monks</a></li>
        <li><a href="#">Thai cookery class</a></li>
      </ul>
    </li>

    <li><a href="location.php?lang=<?php echo $_GET["lang"]; ?>">location</a></li>
    <li><a href="Image.php?lang=<?php echo $_GET["lang"]; ?>"><?php echo $gallery ; ?></a></li>
    <li><a href="contact.php?lang=<?php echo $_GET["lang"]; ?>"><?php echo $contact ; ?></a></li>
    
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
    <li><a href="package.php?lang=<?php echo $_GET["lang"]; ?>">
      <span class="badge blink_me" style="background-color: #FF0000; position: absolute;  top: 6px;  right: 0px;  font-weight: 300;  padding: 8px 6px; "> Hot !!! </span>promotion</a>
    </li>

    <li><a href="#">member</a></li>
 
  </ul>
</nav>
<div class="clearfix"></div>
</div>
</div>





<!-------------------------------- Desktop Header ------------------------------------->
<div class="col-md-10 col-md-offset-1 mdisappear">
<div class="row">

<div class="col-md-2 logo">
<a href="https://www.centarahotelsresorts.com/">
<img src="img/Ananya.png" class="img-responsive" alt="Centara Hotels & Resorts" title="Centara Hotels & Resorts">
</a>
</div>

<div class="col-md-10">
<!-- Top -->
<div class="rightitem">

<!--------set dropdown=true/arrLangset empty---------->
<div class="leftitem language">
<div class="singlelavel">

<ul>
<li>EN&nbsp;&nbsp;<i class="fas fa-angle-down fa-1x"></i>
<ul class="shadow animated fadeIn dropdown">
<li><a href="https://www.centarahotelsresorts.com/">English</a></li>
<li><a href="https://www.centarahotelsresorts.com/th/">ภาษาไทย</a></li>
<li><a href="https://www.centarahotelsresorts.com/cn/">中文</a></li>

</ul>
</li>
</ul>

</div>
</div>


<!--------set dropdown=false / no download show---------->


<div class="leftitem member-login" style="text-transform:uppercase;">
<div class="singlelavel">
<ul>
<li>
  <b>CONTACT US +66 (0) 91 634 6340 1, +66 (0) 91 634 6341 ,+66 (0) 91 634 6343 4<b>GET 10%</b> OFF ALL ONLINE RATES, </b>
</li>
</ul>
</div>
</div>


<!-- End Member Login -->

<div class="clearfix"></div>
</div>

<!---------------- End Top -------------------->

<!--------------   Desktop Nav ---------------->


<div class="row">
<div class="col-md-12 menu-container">
<div class="menu">
<ul>

<li class="active">
  <a href="index.php">Home</a>
</li>

<li>
  <a href="#" class="underline">accommodation</a>
    <ul class="shadow" style="right:50%;">
      <li><a href="deluxe_panoramic_view.php"><h5>deluxe panoramic view</h5></a></li>
      <li><a href="deluxe_pool_access.php"><h5>deluxe pool access</h5></a></li>
      <li><a href="#">royal suite panoramic view</a></li>
      <li><a href="#">royal suite pool view</a></li>
      <li><a href="#">royal suite seaview</a></li>
      <li><a href="#">penthouse suite</a></li>
      <li><a href="#">grand royal suite seaview</a></li>
    </ul>
</li>

<li>
  <a href="#" class="underline">dining</a>
    <ul class="shadow" style="right:40%;">
      <li><a href="art_beach_club.php"><h5>art beach club</h5></a></li>
      <li><a href="#"><h5>pattaya restaurents</h5></a></li>
      <li><a href="steak_house.php">steak house</a></li>
      <li><a href="sukoi_teppanyaki.php">sukoi teppanyaki</a></li>
      <li><a href="sukoi_teppanyaki">royal suite seaview</a></li>
      <li><a href="#">sky bar</a></li>
      <li><a href="#">lagoon bar</a></li>
      <li><a href="shine_bar.php">shine bar</a></li>
    </ul>
</li>

<li>
  <a href="#" class="underline">romance</a>
    <ul class="shadow" style="right:35%;">
      <li><a href="wedding_styles.php"><h5>wedding styles</h5></a></li>
      <li><a href="#"><h5>private candle light</h5></a></li>
    </ul>
</li>

<li>
  <a href="#" class="underline">activities</a>
    <ul class="shadow" style="right:30%;">
      <li><a href="#">excursions </a></li>
      <li><a href="#">fitness center</a></li>
      <li><a href="#">thai massage</a></li>
      <li><a href="#">kid club</a></li>
      <li><a href="#">beach activity center</a></li>
      <li><a href="#">yoga</a></li>
      <li><a href="#">Merit making to the monks</a></li>
      <li><a href="#">Thai cookery class</a></li>         
    </ul>
</li>

<li><a href="location.php?lang=<?php echo $_GET["lang"]; ?>">location</a></li>
  
<li><a href="Image.php?lang=<?php echo $_GET["lang"]; ?>"><?php echo $gallery ; ?></a></li>
<li><a href="contact.php?lang=<?php echo $_GET["lang"]; ?>"><?php echo $contact ; ?></a></li>

<li><style>
      .blink_me {
      animation: blinker 1s linear infinite;
      }
      @keyframes blinker {
          50% {
                opacity: 0;
                }
              }
      </style>
      <a href="package.php?lang=<?php echo $_GET["lang"]; ?>" >promotion
            <span class="badge blink_me" style="background-color: #FF0000; position: absolute;  top: -15px;  right: 100px;  font-weight: 300;  padding: 3px 6px; "> Hot !!! </span></a> 
        </li>
<li><a href="#">member</a></li>


<li>

</ul>
</div>
</div>
</div>
<!--------------  End  Desktop Nav ---------------->
</div>

</div>
</div>

<div class="clearfix"></div>
</div>
</div>
</header>

<!--////////////////////// Body /////////////////////////// -->

<section class="mappear">
<div class="container-fluid">
<div class="col-md-12 text-center mmember">

<b>CONTACT US +66 (0) 91 634 6340 1, +66 (0) 91 634 6341 ,+66 (0) 91 634 6343 4<b>GET 10%</b> OFF ALL ONLINE RATES, </b>

</div>
</div>
</section><section class="reservation mdisappear">
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="row">

  

 
<!-- // Date Arrival Form // -->

    <div class="col-sm-12">
    	<form class="reservation-form" action="details.php" name="idFormlg" id="idFormlg">

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


		<div class="col-sm-2 form-group">
			<label for="destination"><?php echo $peoples;?></label>
			<select class="form-control" id="selectdestination" name="people" required="">
			<option value=''>เลือกจำนวนคนเข้าพัก</option>
			<optgroup label='Thailand'>
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

		<div class="col-sm-2 form-group">
			<label for="AccessCode">รหัสเข้าถึง</label>
			<input type="text" class="form-control input-sm" placeholder="รหัสเข้าถึง" name="accesscode" id="accesscode">
		</div>   

		<div class="col-sm-2 form-group">
			<label for="AccessCode"></label>
			<input type="submit" name="submit" type="text" id="submit" value="<?php echo $booknow; ?>" class="btn btn-sm btn-red" >
		</div>
	</div>
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


<script>
$('#destinationform').change(function() {
var $sel = $('#hotelform'),
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


$(function() {
//Set Default Date
var default_today = new Date();
var default_nextday = new Date();
default_nextday.setDate(default_nextday.getDate() + 1);

var default_dd = default_today.getDate();
var default_ndd = default_nextday.getDate();
var default_mm = default_today.getMonth()+1; 
var default_nmm = default_nextday.getMonth()+1; 
var default_yyyy = default_today.getFullYear();
var default_nyyyy = default_nextday.getFullYear();

default_arrival = default_dd+'/'+default_mm+'/'+default_yyyy;
default_departure = default_ndd+'/'+default_nmm+'/'+default_nyyyy;

document.getElementById("data-arrival").value = default_arrival;
document.getElementById("data-departure").value =default_departure;	
});
/* DatePicker */		
jQuery(document).ready(function ($) {
$(function () {
var checkout = $('#data-departure').datepicker({
weekStart: 1, 
todayHighlight: false, 
language:'en', 
autoclose: true, 
format: 'dd/mm/yyyy'
}).on('changeDate', function(event) {
var aaa = $('#data-arrival').val();
var bbb = $('#data-departure').val();
var tmp = aaa.split("/");
var tmp2 = bbb.split("/");
var ccc = new Date(tmp[1]+"/"+tmp[0]+"/"+tmp[2]);
var ddd = new Date(tmp2[1]+"/"+tmp2[0]+"/"+tmp2[2]);
var timeDiff = Math.abs(ddd - ccc);
var eee = Math.ceil(timeDiff / (1000 * 3600 * 24)); 

$("#nbdays").val(eee);
$("#md").text(showname(tmp2[1]));   //newDate.getMonth()+1);
});
///////////////////////////////////////////////////////////////////
var checkin = $('#data-arrival').datepicker({
weekStart: 1, 
todayHighlight: true,
language:'en',
autoclose: true,
format: 'dd/mm/yyyy',
startDate: show_current_date(),
endDate: show_max_date()
}).on('changeDate', function(event) {

var newDate = new Date(event.date)
newDate.setDate(newDate.getDate() + 1)
checkout.datepicker("setStartDate", newDate);
checkout.datepicker("update", newDate)
checkin.datepicker('hide');

var test = $('#data-arrival').val().split("/");
$("#nbdays").val('1');
$("#ma").text(showname(test[1]));   //newDate.getMonth()+1);
$("#md").text(showname(newDate.getMonth()+1));   //newDate.getMonth()+1);
});

});

});
function showname(d)
{
d = d-1;
var monthname = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
if(d >= 0 && d < 12)
{
return monthname[d];
} else {
return "Invalid";
}
}
function split_date()
{
var d = $("#data-arrival").val();
var tmp = d.split("/");
$("#fromday").val(tmp[0]);
$("#frommonth").val(tmp[1]);
$("#fromyear").val(tmp[2]);
}
$("#data-arrival").on('change', function(){
split_date();
});
</script>

<script>
function bookbutton()
{
var opt = $('#hotelform').val();
//var nbday = $('#nbdays').val();
var datecheckin = $('#data-arrival').val()
var deatecheckout = $("#data-departure").val();

	if(opt=='cosisamui' || opt =='cosipattaya')
	{
		if (opt == 'cosisamui')
		{
		var tmp1 = datecheckin.split("/");
		var datein = new Date(tmp1[1]+"/"+tmp1[0]+"/"+tmp1[2]);

		ddd = datein.getDate();
		mmm = datein.getMonth()+(1);
		yyy = datein.getFullYear();
		//checkin="checkInDate="+yyy+"-"+mmm+"-"+ddd;
		checkin="&gg="+ddd+"&mm="+mmm+"&aa="+yyy;

		var tmp2 = deatecheckout.split("/");
		var dateout = new Date(tmp2[1]+"/"+tmp2[0]+"/"+tmp2[2]);
		ddd = dateout.getDate();
		mmm = dateout.getMonth()+(1);
		yyy = dateout.getFullYear();
		//checkout="&checkOutDate="+yyy+"-"+mmm+"-"+ddd;
		checkout="&ggf="+ddd+"&mmf="+mmm+"&aaf="+yyy;
		finalurl="https://reservations.verticalbooking.com/premium/index2.html?tot_camere=1&tot_adulti=2&tot_bambini=0"+checkin+checkout+"&lingua_int=eng&id_albergo=19900&dc=9883&id_stile=14809";

		window.open(finalurl, "_blank");

//		window.location = finalurl;
		}else{
			var tmp1 = datecheckin.split("/");
			var datein = new Date(tmp1[1]+"/"+tmp1[0]+"/"+tmp1[2]);

			if (datein < new Date("10/18/2019"))
			{
				var datein = new Date("10/18/2019");
				var dateout = new Date("10/19/2019")
			}else{
				var tmp2 = deatecheckout.split("/");
				var dateout = new Date(tmp2[1]+"/"+tmp2[0]+"/"+tmp2[2]);
			}

		ddd = datein.getDate();
		mmm = datein.getMonth()+(1);
		yyy = datein.getFullYear();
		//checkin="checkInDate="+yyy+"-"+mmm+"-"+ddd;
		checkin="&gg="+ddd+"&mm="+mmm+"&aa="+yyy;

		ddd = dateout.getDate();
		mmm = dateout.getMonth()+(1);
		yyy = dateout.getFullYear();
		//checkout="&checkOutDate="+yyy+"-"+mmm+"-"+ddd;
		checkout="&ggf="+ddd+"&mmf="+mmm+"&aaf="+yyy;
		finalurl="https://reservations.verticalbooking.com/premium/index2.html?tot_camere=1&tot_adulti=2&tot_bambini=0"+checkin+checkout+"&lingua_int=eng&id_albergo=20529&dc=3346&id_stile=15447";

		window.open(finalurl, "_blank");

//		window.location = finalurl;

		}//end cosipattaya
	} //end if cosisamui or cosipattaya
	else 
	{
		var tmp1 = datecheckin.split("/");
		var datein = new Date(tmp1[1]+"/"+tmp1[0]+"/"+tmp1[2]);

		if (opt=='ASIATHASIHTLCentaraA' && datein < new Date("10/11/2019"))
		{
			//$("#selectdestination").val("crsascentral");
			$("#fromday").val(11);
			$("#frommonth").val(10);
			$("#fromyear").val(2019);
			hhotelDispoprice(document.idFormlg);
		} else {
			split_date();
			hhotelDispoprice(document.idFormlg);
		}
	}
}
</script>

</div>
    
</div>
</div>
</div>

<div class="clearfix"></div>

</div>


<!-- Master Slider -->
<section>
		<div class="master-slider ms-skin-default" id="masterslider">
       <?php $sql = ( "SELECT * FROM bg where status=1" );
            $res = mysqli_query( $con, $sql );
            while ( $r = mysqli_fetch_assoc( $res ) ) { ?>
			<div class="ms-slide slide-4" data-delay="4" onClick="dataLayer.push({'event':'banner-click', 'bannerclick':'TH - tropical escape - en - centara hotels & resorts | book an exciting escape now'});">


<img class="ms-layer" src="https://www.centarahotelsresorts.com/corporatechr/dist/plugin/masterslider/images/blank.gif" onload="dataLayer.push({'event':'banner-impression', 'bannerimpression':'TH - tropical escape - en - centara hotels & resorts | book an exciting escape now'});">
<img src="https://www.centarahotelsresorts.com/corporatechr/dist/plugin/masterslider/images/blank.gif" data-src="img/<?php echo $r['link'];?>" alt="tropical escape">





<img class="ms-layer" src="https://www.centarahotelsresorts.com/corporatechr/dist/plugin/masterslider/images/blank.gif" data-src="img/Ananya1.png" alt="tropical escape"
style="right: 0px; top: 620px;"
 data-type="image" 
 data-effect="back(300)" 
 data-duration="300"
 data-hide-effect="fade" 
 data-delay="900" 
/>


</div>
      <?php }?>
		</div>


<script src="https://www.centarahotelsresorts.com/corporatechr/dist/plugin/masterslider/js/masterslider.min.js"></script>
<script>
var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var calslider = (width * 10 / 100);
if (width >= 1920){
var screenwidth = width - calslider;
var screenheight = 720;
var autoheight = false;
var screenmode = "fill";
}else{
var screenwidth = 1550;
var autoheight = true;
var screenmode = "fit";
//var screenheight = 730;	
}
$('#masterslider').masterslider(
{
width           			: screenwidth,
height          			: screenheight,
minHeight     			: 0,
space           			: 0,
start           			: 1,
grabCursor  			: true,
swipe           			: true,
mouse     				: true,
keyboard    			: false,
layout      				: "fullwidth",
wheel           			: false,
autoplay  				: true,
instantStartLayers	:false,
loop            			: true,
shuffle         			: false,
preload         			: 2,
heightLimit     		: true,
autoHeight      		: autoheight,
smoothHeight    		: true,
endPause        		: false,
overPause       		: true,
fillMode        			: screenmode,
centerControls  		: false,
startOnAppear   		: false,
layersMode      		: "center",
autofillTarget  		: "",
hideLayers      		: false,
fullscreenMargin		: 0,
speed           			: 20,
dir             			: "h",
parallaxMode    		: 'swipe',
view            			: "fade",
controls : {
arrows : {autohide:true},
//bullets : {}
// more slider controls...
}
});
</script>

</section>


<style>
.reason{ padding:0;}
.reason .col3{ margin-bottom:0px;}
.reason .shadow:hover{background:#f8f8f8; cursor:pointer; border:1px solid #666;}
.reason .shadow{height:100%; background:#fff; border:1px solid #e8e8e8;}
.reason-icon{position: absolute; width:100%; left:0; text-align:center; top:50%;-webkit-transform: translateY(-50%);transform: translateY(-50%);}
@media(max-width: 1200px){.reason-icon{ position:relative; top:0; padding:30px 0px; -webkit-transform:none !important;transform:none !important;}}
</style>
<!--//////////////////////////////////// 3 Reasons Desktop ////////////////////////////////////-->
<style>
.reason-left{height:100%; background:#e8e8e8;}
.reason-left .number{position: absolute; width:100%; left:0; text-align:center; top:50%;-webkit-transform: translateY(-50%);transform: translateY(-50%);}
.reason-left .number img{max-width:100%; height:auto;}
.reason-content{ padding-top:15px;}
.reason-content h5{padding-bottom:0; margin-bottom:0; margin-bottom:5px; font-size:16px; text-transform:uppercase;}
</style>





<br><br><section class="content-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="margin-bottom:30px;">
                <div class="col-sm-12 col-lg-12" style="padding:15px;">
                    <div class="row">
                        <div class="shadow" style="border:1px solid #f5f5f5;">
                            <div class="col-sm-12" style="padding-bottom:15px;">
                                <h1>Lifestyle</h1>
                                <br>
                                <p>Imagine for a place where the sea and nature hold hands, this is the place of UNLIMITED turquiose Blue, Now imagine a hotel which takes you to the world of imigination with an amaze blend architechre and interior located with in vigin nature, Its is Anaya Lipe. Nestled on the white sandy powder Beach of Lipe Island, Andaman turquoise sea, Ananya Lipe lies along the coastal region of Thailand, Set against a dramatic backdrop of open blue sky, travelers can expect to discover a destination lauded for its natural beauty, with within easy accessibility from the resort. Anaya Lipe is only art inspired resort, this luxury comprises just 67 guest rooms and suites, all of which panoramic or ocean views. The resort’s interior design is a juxtaposition of modern meets art-deco infused with new southern touches. This sophisticated design theme is also communicated in its dining venues. From international to Japanese to the freshest of seafood, five varied options present a myriad of flavors and interior design intended to delight your five senses. Resort's Dream maker planners will also be pleased with the array of choices available. Pool access barcony accord an air of elegance to naturally-lit indoor spaces, while Beach club and the great outdoors are the perfect setting for a fairytale wedding venue. Surrounded by panoramic views of the Andaman sea Thailand and white sands landscape, the resort offers a wide range of recreational activities. Or Just simply pool and sunloungin, reconnect with nature and rejuvenate body and mind.
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












<section class="content-container ">
    <div class="container">
        <div class="row">
            <div class='col-sm-12'><h2 class='text-center'><?php echo $Unique; ?></h2></div>
                <div class='clearfix'></div>
                <!-- Start Item -->
                <div class="col-sm-6" style="margin-bottom:30px;">
                <div class="col-sm-12 col-lg-5">
                    <div class="row">
                        <div class="shadow" style="padding:5px;">
                            <img src="img/20171210153706.jpg" alt="WEDDING & EVENTS" title="WEDDING & EVENTS" style="width:100%;">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7" style="padding:15px;">
                    <div class="row">
                        <div class="shadow" style="border:1px solid #f5f5f5;">
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
        <div class="col-sm-6" style="margin-bottom:30px;">
            <div class="col-sm-12 col-lg-5">
                <div class="row">
                    <div class="shadow" style="padding:5px;">
                    <img src="img/212.jpg" alt="Making Merit in Thai Way." title="Making Merit in Thai Way." style="width:100%;">
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <div class="col-sm-12 col-lg-7" style="padding:15px;">
            <div class="row">
                <div class="shadow" style="border:1px solid #f5f5f5;">
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
        </div>
    </div>
</section>












<script type="text/javascript">
function echeck(str)
	{
		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length-1;
		var ldot=str.indexOf(dot);

		if (lat==-1 || lat < 1 || lat==lstr){
		   //alert("Invalid E-mail ID")
		   return false
		}

		if (ldot==-1 || ldot == 0 || ldot > lstr - 2){
		    //alert("Invalid E-mail ID");
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    //alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    //alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    //alert("Invalid E-mail ID");
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    //alert("Invalid E-mail ID");
		    return false;
		 }

 		 return true;
	}

	function validateEmail(id) 
	{
		/*var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/; 
		return emailPattern.test(id); */
		return echeck(id);
	}

function submitform()
{
	var newsletter = document.getElementById("newsletter").checked;

	if (newsletter == false )
	{
	alert ("Please check box to receive newsletter");	
	}else{
	
	var txt_mail = $('#txt_mail').val();
	var txt_language = $('#txt_language').val();
	var txt_country = $('#txt_country').val();
	var thirdparty = document.getElementById("thirdparty").checked;


	if(txt_mail==''||txt_language==''||txt_country=='')
	{
		alert("* are require");
		return false;
	}

	if(!validateEmail(txt_mail))
	{
		alert("Please check Email.");
		return false;
	}

	$.post('https://www.centarahotelsresorts.com/corporatechr/inc_file/json.asp',
		{	"email": txt_mail, 
			"language": txt_language, 
			"country": txt_country,
			"newsletter":newsletter,
			"thirdparty":thirdparty
		},
		function(data)
		{
			$('#txt_mail').val("");
			$('#txt_language').val("");
			$('#txt_country').val("");
			$('#newsletter').removeAttr('checked');
			$('#thirdparty').removeAttr('checked');
			window.location = "https://www.centarahotelsresorts.com/thankyou/";
		}
	);
	}

}
</script>



<footer class="footer">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Start Col -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">

                        <div class="stretch-colum">

                            <div class="col-md-2 footer-colum-border">
                                <h5 class="title"><b>Visitors</b></h5>
                                <div class="row">
                                  <div style="position:absolute; bottom:35%;">
                                    <a href="http://www.akiralipe.com" class="ctabtn btn btn-blue">
                                      <span data-hover='Akira Lipe'>
                                        <img src="https://www.akiralipe.com/images/logo-header.png" width="150" height="50">
                                      </span>
                                    </a>
                                  </div>

                                  <div style="position:absolute; bottom:65%;">
                                    <a href="http://www.thechiclipe.com" class="ctabtn btn btn-blue">
                                      <span data-hover='Thechic Lipe'>
                                        <img src="https://www.thechiclipe.com/img/logo1.png" width="150" height="50">
                                      </span>
                                    </a>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-3 footer-colum-border">

                                <?php $font2 = ( "SELECT * FROM fontweb where type='contact' " );
                                $re2 = mysqli_query( $con, $font2 );
                                $ro2 = mysqli_fetch_assoc( $re2 );?>
                                    <h5 class="title"><b><?php echo $ro2[$fde];?></b></h5>
                                    <div class="clearfix"></div>
                            </div>

                            <div class="col-md-2 footer-colum-border">
                                <h5 class="title"><b>ADD LINE</b></h5>
                                <?php $fontqr = ( "SELECT * FROM fontweb where type='qr' " );
                                $reqr = mysqli_query( $con, $fontqr );
                                $roqr = mysqli_fetch_assoc( $reqr );?>

                                    <a href="http://nav.cx/5BJDpTe">
                                        <img height="36" border="0" src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png">
                                    </a>
                                    <a href="http://nav.cx/5BJDpTe" target="_blank" rel="nofollow">
                                      <img src="img/<?php echo $roqr[$fde];?>" width="200" height="250" class="img-responsive">
                                    </a>
                                    <div class="clearfix"></div>
                            </div>
                            <div class="col-md-2 footer-colum-border">
                                <h5 class="title"><b><?php echo $Follow; ?></b></h5>
                                <a href="https://www.facebook.com/ananyalipe/" target="_blank" title="Facebook"><img src="img/Facebook.png" width="40" height="40"></a>
                                <a href="#" target="_blank" title="Facebook"><img src="img/instagram.png" width="40" height="40"></a>
                                <a href="#" target="_blank" title="Facebook"><img src="img/youtube.png" width="50" height="40"></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-2  footer-colum">
                                <h5 class="title"><b><?php echo $Register; ?></b></h5>
                                <a href="#" class="btn btn-sm btn-red" target="_blank">
                                    <?php echo $register1; ?>
                                </a>
                                <div class="clearfix"></div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- End Col -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="gray" style="background:#212121; border-top:1px solid #333;">
        <div class="container-fluid">
            <div class="row">

                <!-- Start Col -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-6" style="padding-top:30px;">
                            สงวนลิขสิทธิ์ <span id="copy"></span>. 2019 โรงแรมและรีสอร์ทในเครือ Akira Lipe
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </div>
</footer>



















<section class="footer-quicknav mappear" id="footer-mnav">
<div class="container-fluid">
<div class="row">
<div class="col-xs-2 text-center item home" onClick="qnavhome();">
<img src="https://www.centarahotelsresorts.com/corporatechr/dist/images/icon/home.png" alt="home" title="home">
</div>
<div class="col-xs-2 text-center item" onClick="qnavoffer();">
<img src="https://www.centarahotelsresorts.com/corporatechr/dist/images/icon/offer.png" alt="offer" title="offer">
</div>
<div class="col-xs-4 text-center booknow" onClick="qnavbooknow();">
BOOK NOW
</div>
<div class="col-xs-2 text-center item" onClick="qnavdestination();">
<img src="https://www.centarahotelsresorts.com/corporatechr/dist/images/icon/destination.png" alt="destination" title="destination">
</div>
<div class="col-xs-2 text-center" onClick="topFunction();">
<img src="https://www.centarahotelsresorts.com/corporatechr/dist/images/icon/arrow-up.png" alt="top" title="top">
</div>

<div class="clearfix"></div>
</div>
</div>
</section>

<script>
function qnavhome (){self.location = "https://www.centarahotelsresorts.com/";}
function qnavoffer (){self.location = "https://www.centarahotelsresorts.com/special-offers/";}
function qnavdestination (){self.location = "https://www.centarahotelsresorts.com/destination/";}
function qnavbooknow (){window.open('https://www.book-secure.com/index.php?s=group&group=ascentral','_blank');}
</script>
<script src="https://www.centarahotelsresorts.com/corporatechr/assets/fastbooking/fbparam.js" ></script>
<script src="https://www.centarahotelsresorts.com/corporatechr/assets/fastbooking/fblib.js" ></script>
<div class="scrolltop" id="scrolltop" onClick="topFunction();"><i class="fas fa-long-arrow-alt-up fa-1x"></i><br><font class="title">TOP</font></div>
<script>
//Scrool Function
$.fn.scrollView = function () {
return this.each(function () {
$('html, body').animate({
scrollTop: $(this).offset().top
}, 1000);
});
}
</script>


<script src="https://www.centarahotelsresorts.com/corporatechr/footer/function.js"></script>
</div></body></html>