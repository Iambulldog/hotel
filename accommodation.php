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
                        <li id="liEN" ><a href="accommodation.php?lang=en"><img src="img/icon_en.png" height="25" width="25">    ENG</a></li>
                        <li id="liTH" ><a href="accommodation.php?lang=th"><img src="img/icon_th.png" height="25" width="25">    TH</a></li>
                        <li id="liTH" ><a href="accommodation.php?lang=cn"><img src="img/icon_cn.png" height="25" width="25">    CN</a></li>
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

                     <?php $sql = ( "SELECT * FROM bg where status=1 AND type = 2" );
                    $res = mysqli_query( $con, $sql );
                    while ( $r = mysqli_fetch_assoc( $res ) ) { ?>

                    <li data-transition="fade">
                        <img src="img/<?php echo $r['link'];?>" data-bgposition="center center" data-duration="14000" data-bgpositionend="center center" alt="">
                       <!--  <div style="padding-top: 80px" class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         <img src="img/<?php echo $logo2[$fde];?>"  width="250" height="50">
                        </div>
                        <div style="padding-top: 80px"  class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack" style="font-size: 30px !important">
                          ANANYA LIPE<br>
                          
                        </div> -->
                      

                        
                    </li>

                <?php }?>
                </ul>
            </div>
        </section>
 <!--------------------------------------------------- slider_wrapper -------------------------------------------------->






<!--------------------------------------------------- booking -------------------------------------------------->
              <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability" style="background-color: #FFFFFF">
            <div class="container">
                           <!--  <iframe width="100%" src="check_available.php"></iframe>-->
              
               <div class="check-availability">
                    <div class="row">
                        <!-- <div class="col-lg-3">
                            <img src="img/<?php echo $logo2[$fde];?>"  width="150" height="18">
                        </div> -->
                        <div class="col-lg-12">
                           
                           <!-- <form  action="Choose_Room.php" method="post" enctype="multipart/form-data" onSubmit="return CheckForm('1')" name="frm1"> -->
                            <form   action="details.php" name="idFormlg" id="idFormlg" >
                                <?php   date_default_timezone_set("Asia/Bangkok");
                                $checkin = date('d-m-Y');
                                $checkout=date("d-m-Y",strtotime($checkin."+1 day")); ?>
                          <div class="availability-form">
                             <input type="text" value="<?php echo $_GET["lang"];?>" name="lang" hidden>
                             <input type="text"  class="awe-calendar from"value="<?php echo $checkin ; ?>" id="data-arrival"  name="date_check_in" >
                             <input type="text"  class="awe-calendar to" value="<?php echo $checkout; ?>" id="data-departure"  name="date_check_out" >

                                  

                                    <select class="awe-select" id="selectdestination" name="people" required="">
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
                                    
                                    <div class="vailability-submit">
                                        <button class="awe-btn awe-btn-13" type="submit" value=""><?php echo $booknow; ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->


        
<!--------------------------------------------------- booking -------------------------------------------------->  

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

<section style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
    <div class="container">
        <div class="row">
            <div class='col-sm-12'><h2 class='text-center'>Accommodation</h2></div>
                <div class='clearfix'></div>
                <!-- Start Item -->
                <div class="col-sm-6" style="margin-bottom:30px;">
                <div class="col-sm-12 col-lg-5">
                    <div class="row">
                        <div class="shadow" style="padding:5px;">
                            <img src="img/imgroom/poolview.jpg" alt="WEDDING & EVENTS" title="WEDDING & EVENTS" style="width:100%;">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7" style="padding:15px;">
                    <div class="row">
                        <div >
                            <div class="col-sm-12" style="padding-bottom:15px;">
                            <h3 class="text16">Deluxe Pool View</h3>
                            <p></p>
                             <a href="rooms.php?ID_room=4" class="btn btn-info" role="button">Details</a>
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
                    <img src="img/imgroom/poolaccess.jpg" alt="Making Merit in Thai Way." title="Making Merit in Thai Way." style="width:100%;">
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <div class="col-sm-12 col-lg-7" style="padding:15px;">
            <div class="row">
                <div >
                    <div class="col-sm-12" style="padding-bottom:15px;">
                    <h3 class="text16">Deluxe Pool Access</h3>
                    <p></p>
                    <a href="rooms.php?ID_room=5" class="btn btn-info" role="button"> Details </a>
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



<!--******************************** Footer ************************************************-->
<section class="content-container " style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
<?php include_once('footer.php');?>
</section>
<!--******************************** Footer ************************************************-->

<script language="javascript" src="https://www.bigbang.co.th/api/bt.js" charset="UTF-8"></script>


</body>
</html>