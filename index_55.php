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
    
    <?php include_once('nav.php'); ?>
        <li><a href="#">ภาษา</a>
        <ul class="dropdown">
          <li><a href="index.php?lang=en" target="_self"><img src="img/icon_en.png" height="25" width="25"></i>English</a></li>
          <li><a href="index.php?lang=th" target="_self"><img src="img/icon_th.png" height="25" width="25"></i>ภาษาไทย</a></li>
          <li><a href="index.php?lang=cn" target="_self"><img src="img/icon_cn.png" height="25" width="25"></i>中文</a></li>
        </ul>
    </li>
  </ul>
</div>
</div>


 <!--------------------------------------------------- slider_wrapper -------------------------------------------------->
<div class="wrapper">
  <div class="slide-fix">
    <article class="content">
        <div id="rev_slider_1059_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept121" data-source="gallery" style="background-color:#000000;padding:0px;">
            <div id="rev_slider_1059_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                <ul>

                    <?php $sql = ( "SELECT * FROM bg where status=1" );
                    $res = mysqli_query( $con, $sql );
                    while ( $r = mysqli_fetch_assoc( $res ) ) { ?>
                        <li data-index="rs-2972" data-transition="scaledownfromright" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Fade and Slide from Right"   data-description="">
                            <img src="img/<?php echo $r['link'];?>"  alt=""  data-bgposition="center center" data-bgfit="cover" >
                        </li>
                    <?php }?>

                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    </article>
</div>
<div id="intro"></div>
 <!--------------------------------------------------- slider_wrapper -------------------------------------------------->
 


 


<!--------------------------------------------------- booking -------------------------------------------------->
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
<!--*********************************************  END booking  ****************************************************************-->



 <!--  ///////////////** แพคเกจที่แนะนำ ** /////////////////////////////-->
<section class="content-container"style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="margin-bottom:30px;">
                <div class="col-sm-12 col-lg-12" style="padding:15px;">
                    <div class="row">
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
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<!--  /////////////////////** จบ แพคเกจที่แนะนำ ** //////////////////////////////-->



<!--  *******************************  UNIQUE EXPERIENCE *******************************-->
<section class="content-container " style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
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
<!--  *******************************  UNIQUE EXPERIENCE *******************************-->


<!--******************************** Footer ************************************************-->
<section class="content-container " style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
<?php include_once('footer.php');?>
</section>
<!--******************************** Footer ************************************************-->

            


 

   
</div>
</div>
</div>



<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery-1.10.2.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery-ui-1.8.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/menuzord.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/jquery-migrate-1.1.1.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="https://lavelakhaolak.com/js/bootstrap-select.js"></script> 
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
<script src="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/bootstrap-touchspin-master/src/jquery.bootstrap-touchspin.min.js" ></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"  ></script>
<script src="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/daterangepicker/daterangepicker.js" ></script>
<script src="https://ready.instant-thailand.com/assets/vendors/ReadyTravelTech/calendar_engine/Engine.js" ></script>
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

</script> 
<script type="text/javascript">
  $( document ).ready( function () {
    // banner
    $( '.block-theamintro' ).hover( function () {
        $( '.block-theamintro' ).not( this ).addClass( "nothover" );
      },
      function () {
        $( '.block-theamintro' ).not( this ).removeClass( "nothover" );
      } );



  } );
</script>
</body>
</html>