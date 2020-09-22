
<?php include_once('hea.php');
    $room = $_REQUEST["ID_room"];
?>

<body>
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>

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

<?php   
    $logo = ( "SELECT * FROM fontweb where type='logo' " );
    $logo1 = mysqli_query( $con, $logo );
    $logo2 = mysqli_fetch_assoc( $logo1 );
?>

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
</header> 
<script> $('#m1').addClass('current-menu-item'); </script>


 


 <!--------------------------------------------------- slider_wrapper -------------------------------------------------->
    <section class="section-slider">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
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



                    <li data-transition="fade">
                        <img src="img/imgroom/<?php echo $r['link'];?>" data-bgposition="center center" data-duration="14000" data-bgpositionend="center center" alt="">
                    </li>
             <?php } ?> 
            <?php }?>

            </ul>
        </div>
    </section>
 <!--------------------------------------------------- slider_wrapper -------------------------------------------------->






<!--------------------------------------------------- booking -------------------------------------------------->
<section class="section-check-availability" style="background-color: #FFFFFF">
    <div class="container">
        <div class="check-availability">
            <div class="row">
                <div class="col-lg-12">
                    <form   action="details.php" name="idFormlg" id="idFormlg" >
                        <?php   date_default_timezone_set("Asia/Bangkok");
                        $checkin = date('d-m-Y');
                        $checkout=date("d-m-Y",strtotime($checkin."+1 day")); ?>
                        <div class="availability-form">
                            <input type="text" value="<?php echo $_GET["lang"];?>" name="lang" hidden>
                            <input type="text"  class="awe-calendar from"value="<?php echo $checkin ; ?>" id="data-arrival"  name="date_check_in" required>
                            <input type="text"  class="awe-calendar to" value="<?php echo $checkout; ?>" id="data-departure"  name="date_check_out" required>

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
    
    <!------------------------  ***  END booking  *** ----------------------->

  <div class="main clearfix" style="opacity:0.95;filter:alpha(opacity=95)">
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
           <!--  <div class="button-hover-main blue mar-top-30">
              <div class="button-eff"></div>
              <a href="index.php" style="color: #000000">Book This HOME </a></div> -->
          </div>
        </div>
      </section>
    </article>

    <head>

<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<div class="container mt-3">

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Room amenities</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Dining</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Entertainment</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Bathroom</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4">Room services</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
        <div class="row">
            <div class="col-sm-3">
                <img src="icon/01 Room amenities/1.42 sqm. Room size.png" alt="" class="img-responsive"><span>42 sqm. Room size</span>
                <img src="icon/01 Room amenities/4.6.5foot daybed.png" alt="" class="img-responsive"><span>6.5 foot day bed</span>
                <img src="icon/01 Room amenities/8.Usb Sockets.png" alt="" class="img-responsive"><span>Usb Sockets</span>
                <?php if ($room == "4") { ?>
                <?php }else if ($room == "5") { ?>
                    <img src="icon/01 Room amenities/12.Swimming pool ladders.png" alt="" class="img-responsive"><span>Swimming pool ladders</span>
                <?php } ?>
            </div>
            <div class="col-sm-3">
                <img src="icon/01 Room amenities/2.Air conditioned with individual climate control.png" alt="" class="img-responsive"><span>Air conditioned individual control</span>
                <img src="icon/01 Room amenities/5.balcony large round sofa lounger.png" alt="" class="img-responsive"><span>balcony large round sofa lounger</span>
                <img src="icon/01 Room amenities/9.safe deposit box.png" alt="" class="img-responsive"><span>safe deposit box</span>
            </div>
            <div class="col-sm-3">
                <img src="icon/01 Room amenities/3.1 king size bed.png" alt="" class="img-responsive"><span>king size bed</span>
                <img src="icon/01 Room amenities/6.Bedside control panel for lighting.png" alt="" class="img-responsive"><span>Bedside control panel for lighting</span>
                <img src="icon/01 Room amenities/10.slippers.png" alt="" class="img-responsive"><span>slippers</span>
            </div>
            <div class="col-sm-3">
                <img src="icon/01 Room amenities/3.2 twin bed.png" alt="" class="img-responsive"><span>twin bed</span>
                <img src="icon/01 Room amenities/7.build in desk and chair.png" alt="" class="img-responsive"><span>build in desk and chair</span>
                <img src="icon/01 Room amenities/11.umbrella.png" alt="" class="img-responsive"><span>umbrella</span>
            </div>
        </div>
    </div>

    <div id="menu1" class="container tab-pane fade"><br>
        <div class="col-sm-3">
            <img src="icon/02 dining/1.coffee maker machine.png" alt="" class="img-responsive"><span>coffee maker machine</span>
        </div>
        <div class="col-sm-3">
            <img src="icon/02 dining/2.Electric kettle.png" alt="" class="img-responsive"><span>Electric kettle</span>
        </div>
        <div class="col-sm-3">
            <img src="icon/02 dining/3.Mini Bar fridge.png" alt="" class="img-responsive"><span>Mini Bar fridge</span>
        </div>
        <div class="col-sm-3">

        </div>
    </div>

    <div id="menu2" class="container tab-pane fade"><br>
        <div class="col-sm-3">
            <img src="icon\03 entertainment/1.Digital TV with multi-lingual.png" alt="" class="img-responsive"><span>Digital TV with multi-lingual</span>
        </div>
        <div class="col-sm-3">
            <img src="icon\03 entertainment/2.Free high speed Wi-Fi.png" alt="" class="img-responsive"><span>Free high speed Wi-Fi</span>
        </div>
        <div class="col-sm-3">
            <img src="icon\03 entertainment/3.Telephone.png" alt="" class="img-responsive"><span>Telephone</span>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
        <div class="col-sm-3">
            <img src="icon/04 bathroom/1.closet.png" alt="" class="img-responsive"><span>closet</span>
            <img src="icon/04 bathroom/5.Bathroom amenities.png" alt="" class="img-responsive"><span>Bathroom amenities</span>
        </div>
        <div class="col-sm-3">
            <img src="icon/04 bathroom/2.Clothes hangers.png" alt="" class="img-responsive"><span>Clothes hangers</span>
            <img src="icon/04 bathroom/6.Bathrobes.png" alt="" class="img-responsive"><span>Bathrobes</span>
        </div>
        <div class="col-sm-3">
            <img src="icon/04 bathroom/3.shower.png" alt="" class="img-responsive"><span>shower</span>
            <img src="icon/04 bathroom/7.Hair dryer.png" alt="" class="img-responsive"><span>Hair dryer</span>
        </div>
        <div class="col-sm-3">
            <img src="icon/04 bathroom/4.Hot & Cold water.png" alt="" class="img-responsive"><span>Hot & Cold water</span>
        </div>
    </div>
    <div id="menu4" class="container tab-pane fade"><br>
        <div class="col-sm-3">
            <img src="icon/05 room services/1.Smoke detector in room.png" alt="" class="img-responsive"><span>Smoke detector in room</span>
        </div>
        <div class="col-sm-3">
            <img src="icon/05 room services/2.Non-smoking room.png" alt="" class="img-responsive"><span>Non-smoking room</span>
        </div>
        <div class="col-sm-3">
            <img src="icon/05 room services/3.Anti-mosquito machine.png" alt="" class="img-responsive"><span>Anti-mosquito machine</span>
        </div>
        <div class="col-sm-3">
            <img src="icon/05 room services/4.Wake-up call service (On request).png" alt="" class="img-responsive"><span>Wake-up call service (On request)</span>
        </div>
    </div>

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













