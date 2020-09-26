<?php include_once('hea.php'); ?>


<?php include_once('nav.php'); ?>

<?php $sql = ( "SELECT * FROM bg where status=1 AND type = 1" );
                    $res = mysqli_query( $con, $sql );
                    while ( $r = mysqli_fetch_assoc( $res ) ) { ?>
<?php }?>

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
                            <h3 class="mb-3">Book your apartment</h3>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" class="form-control appointment_date-check-in" value="<?php echo $checkin ; ?>" id="data-arrival"  name="date_check_in"  required="">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" class="form-control appointment_date-check-out" value="<?php echo $checkout; ?>" id="data-departure"  name="date_check_out" required="">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="fa fa-chevron-down"></span></div>
                          <select id="selectdestination" name="people" required="" class="form-control">
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
                          </div>
                                </div>
                                </div>

                               
                               
                                <div class="col-md-12">
                                    <div class="form-group">
                          <input type="submit" value="<?php echo $booknow; ?>" class="btn btn-primary py-3 px-4">
                        </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   
    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <?php
                $room = ( "SELECT * FROM room LIMIT 3;" );
                $room1 = mysqli_query( $con, $room );
                while ( $room2 = mysqli_fetch_assoc( $room1 ) ) { ?>
        <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url(img/imgroom/<?php echo $room2['image_room'];?>);"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading"><?php echo $room2[$nr];?>n</h3>
                <p><?php echo $room2[$dt];?></p>
                
              </div>
            </div>      
        </div>

            <?php }?>    


          
        
        
        </div>
        </div>
    </section>


<!-- สิ่งรอบๆๆโรงเเรม   -->
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Unique experience</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
                            <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/2020.9.25_200926_2.jpg)">
                  </div>
                  <div class="text pl-4">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>A wedding beyond compare. A fantasy created from the depths of your imagination</p>
                    <p class="name">WEDDING & EVENTS</p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/2020.9.25_200926_9.jpg)">
                  </div>
                  <div class="text pl-4">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Experience a merit making activities in early morning around 6.30 - 7.00 am</p>
                    <p class="name">Making Merit in Thai Way.</p>

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/2020.9.25_200926_11.jpg)">
                  </div>
                  <div class="text pl-4">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Every monday Clean the island around kho lipe. meet 10am Ananya Beach front.</p>
                    <p class="name">Do it by heart save lipe.</p>

                  </div>
                </div>
              </div>
            
            
                        </div>
          </div>
        </div>
      </div>
    </section>
<!-- สิ้นสุด สิ่งรอบๆๆโรงเเรม   -->

<!-- lifestyle โรงเเรม   -->
    <section class="ftco-section bg-light">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 wrap-about">
                        <div class="img img-2 mb-4" style="background-image: url(images/about.jpg);">
                        </div>
                        <!-- <h2><?php echo $lifestyle; ?></h2> -->
                       
                    </div>
                    <div class="col-md-6 wrap-about ftco-animate">
              <div class="heading-section">
                <div class="pl-md-5">
                    <h2 class="mb-2"><?php echo $lifestyle; ?></h2>
                </div>
              </div>
              <div class="pl-md-5">
                <?php 
                    $Lifestyle = ( "SELECT * FROM fontweb where type='sl' " );
                    $Lifestyle1 = mysqli_query( $con, $Lifestyle );
                    $Lifestyle2 = mysqli_fetch_assoc( $Lifestyle1 );
                ?>

                            <p><?php echo $Lifestyle2[$fde];?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- สิ้นสุด lifestyle โรงเเรม   -->
        
        <!-- รายละเอียด โรงเเรม   -->

        <section class="ftco-intro" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center">
                        <h2>Welcome to TSUSLOW HOSTEL</h2>
                        <p class="mb-4">TSUSLOW HOSTEL.</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Book now</a> <a href="#" class="btn btn-white px-4 py-3">Contact us</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- สิ้นสุด รายละเอียด โรงเเรม   -->

        <!-- ห้อง โรงเเรม   -->

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>ROOMS</h2>
          </div>
        </div>
        <div class="row d-flex">

            <?php
                $room = ( "SELECT * FROM room " );
                $room1 = mysqli_query( $con, $room );
                while ( $room2 = mysqli_fetch_assoc( $room1 ) ) { ?>

                    <div class="col-md-4 d-flex ftco-animate" >
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('img/imgroom/<?php echo $room2['image_room'];?>');">
              </a>
              <div class="text p-4 text-center" style="width: 380px;">
                <h3 class="heading"><a href="#"><?php echo $room2[$nr];?></a></h3>
                <div class="meta mb-2">
                  <div><a href="#">TSUSLOW HOSTEL</a></div>
                  
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <p><?php echo $room2[$dt];?></p>
              </div>
            </div>
          </div>

            <?php }?>    



       
        
        </div>
      </div>
    </section>

    <!-- สิ้นสุด ห้อง โรงเเรม   -->
  



        



        
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





<section class="content-container " style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
<?php include_once('footer.php');?>
</section>
<!--******************************** Footer ************************************************-->











