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





<?php include_once('hea.php'); ?>

<body>
  <div id="page-wrap">
    <?php 
      $logo = ( "SELECT * FROM fontweb where type='logo' " );
      $logo1 = mysqli_query( $con, $logo );
      $logo2 = mysqli_fetch_assoc( $logo1 );
    ?>


    <?php include_once('nav.php'); ?>

      





  <section class="ftco-section ftco-services">

    <style type="text/css">
*,
*::before,
*::after {
  box-sizing: border-box;
}

img {
  display: block;
}

.gallery {
  position: relative;
  z-index: 2;
  padding: 10px;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  transition: all .5s ease-in-out;
  transform: translateZ(0);

  &.pop {
    filter: blur(10px);
  }

  figure {
    flex-basis: 33.333%;
    padding: 10px;
    overflow: hidden;
    cursor: pointer;

    img {
      width: 100%;
      transition: all .3s ease-in-out;
    }
    
    figcaption {
      display: none;
    }
    
  }
}

.popup {
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background: #fff;
  opacity: 0;
  transition: opacity .5s ease-in-out .2s;


  &.pop {
    opacity: 1;
    transition: opacity .2s ease-in-out 0s;

    figure {
      margin-top: 0;
      opacity: 1;
    }
  }

  figure {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transform-origin: 0 0;
    margin-top: 30px;
    opacity: 0;
    animation: poppy 500ms linear both;

    img {
      position: relative;
      z-index: 2;
      //box-shadow: 0 1px 5px rgba(0, 0, 0, .2), 0 6px 30px rgba(0, 0, 0, .4);
    }
    
    figcaption {
      position: absolute;
      bottom: 50px;
      background: linear-gradient(180deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.78));
      z-index: 2;
      width: 100%;
      padding: 100px 20px 20px 20px;
      color: #fff;
      font-family: 'Open Sans', sans-serif;
      font-size: 32px;
      
      small {
        font-size: 11px;
        display: block;
        text-transform: uppercase;
        margin-top: 12px;
        text-indent: 3px;
        opacity: .7;
        letter-spacing: 1px;
      }
    }

    .shadow {
      position: relative;
      z-index: 1;
      top: -56px;
      margin: 0 auto;
      background-position: center bottom;
      background-repeat: no-repeat;
      width: 98%;
      height: 50px;
      opacity: .9;
      filter: blur(16px) contrast(1.5);
      transform: scale(0.95, -0.7);
      transform-origin: center bottom;
    }
  }

  .close {
    position: absolute;
    z-index: 3;
    top: 10px;
    right: 10px;
    width: 25px;
    height: 25px;
    cursor: pointer;
    background: url(#close);
    border-radius: 25px;
    background: rgba(0, 0, 0, .1);
    box-shadow: 0 0 3px rgba(0, 0, 0, .2);

    svg {
      width: 100%;
      height: 100%;
    }
  }
}

@keyframes poppy { 
  0% { transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  3.4% { transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1); }
  4.3% { transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1); }
  4.7% { transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1); }
  6.81% { transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1); }
  8.61% { transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1); }
  9.41% { transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1); }
  10.21% { transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1); }
  12.91% { transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1); }
  13.61% { transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1); }
  14.11% { transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1); }
  17.22% { transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1); }
  17.52% { transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1); }
  18.72% { transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1); }
  21.32% { transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1); }
  24.32% { transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1); }
  25.23% { transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1); }
  28.33% { transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1); }
  29.03% { transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1); }
  29.93% { transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1); }
  35.54% { transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1); }
  36.74% { transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1); }
  39.44% { transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1); }
  41.04% { transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1); }
  44.44% { transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1); }
  52.15% { transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1); }
  59.86% { transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1); }
  61.66% { transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1); }
  63.26% { transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1); }
  75.28% { transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1); }
  83.98% { transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1); }
  85.49% { transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1); }
  90.69% { transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1); }
  100% { transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1); } 
}
    </style>


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






    
          <?php } ?> 
   <?php }?>
    </div>
  

<!--

Photos from unsplash.com

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

-->
<div class="gallery">
  <figure>
    <img src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Daytona Beach <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1443890923422-7819ed4101c0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>
      Bad Pyrmont <small>Deutschland</small>
    </figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1439798060585-62ab242d7724?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Yellowstone National Park <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1441906363162-903afd0d3d52?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Highlands <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Daytona Beach <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1443890923422-7819ed4101c0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>
      Bad Pyrmont <small>Deutschland</small>
    </figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1439798060585-62ab242d7724?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Yellowstone National Park <small>United States</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1441906363162-903afd0d3d52?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Highlands <small>United States</small></figcaption>
  </figure>
</div>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
  <symbol id="close" viewBox="0 0 18 18">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
      S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
      l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
      c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
      s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
  </symbol>
</svg>

      <a class="slide" href=""><img src="img/imgroom/<?php echo $r['link'];?>" /></a>




<script type="text/javascript">
  popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });
    
    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}

popup.init()

</script>
  </section>










 <!--------------------------------------------------- slider_wrapper -------------------------------------------------->
    <section class="section-slider">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
            <ul>
                



                    <li data-transition="fade">
                        <img src="" data-bgposition="center center" data-duration="14000" data-bgpositionend="center center" alt="">
                    </li>
            

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
                        if (pro == 1) {
                          alert("Check Code");
                        }else{
                          if (pro > 100) {
                            alert("คุณได้ส่วนลด"+this.responseText+"บาทต่อคืนค่ะ");
                          }else{
                            alert("คุณได้ส่วนลด"+this.responseText+"% ค่ะ");
                          }
                          

                        }
                                                

                        var pro = document.getElementById( "txtHint" ).value;
                        var d = document.getElementById( "d" ).value;
                        var price = document.getElementById( "price" ).value;
                        var numroom = document.getElementById( "numroom" ).value;
                       

                        if (pro > 100) {
                          
                            if ( pro <= 0 || pro <= 1 ) {
                          pro = 1;
                          var price1 = document.getElementById( "total" ).value =  (price*pro).toFixed(0);
                          document.getElementById("show").innerHTML=price1;
                          alert(price1)
                        } else {
                          var price1 = document.getElementById( "total" ).value = (( price ) - ( pro* d)).toFixed(0);
                          document.getElementById("show").innerHTML=price1;
                        }
                        
                        }else{
                          if ( pro <= 0 || pro <= 1 ) {
                          pro = 1;
                          var price1 = document.getElementById( "total" ).value =  (price*pro).toFixed(0);
                          document.getElementById("show").innerHTML=price1;
                        } else {
                          pro = ( pro / 100 );

                          var price1 = document.getElementById( "total" ).value = (( price ) - ( price* pro)).toFixed(0);
                          document.getElementById("show").innerHTML=price1;
                        }
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

                        if(pro == 1 ){
                          alert("Check Code");
                                                    
                        }else{
                           alert("คุณได้ส่วนลด"+this.responseText+"% ค่ะ");
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
