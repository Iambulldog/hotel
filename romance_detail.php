

<?php include_once('hea.php');
  $room = $_REQUEST["ID_room"];
  $type = $_REQUEST["type"];
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
                        <li id="liEN" ><a href="romance_detail.php?ID_room=<?php echo $room ;?>&type=<?php echo $type ;?>&lang=en"><img src="img/icon_en.png" height="25" width="25">    ENG</a></li>
                        <li id="liTH" ><a href="romance_detail.php?ID_room=<?php echo $room ;?>&type=<?php echo $type ;?>&lang=th"><img src="img/icon_th.png" height="25" width="25">    TH</a></li>
                        <li id="liTH" ><a href="romance_detail.php?ID_room=<?php echo $room ;?>&type=<?php echo $type ;?>&lang=cn"><img src="img/icon_cn.png" height="25" width="25">    CN</a></li>
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
                $sqlnum = "SELECT * FROM img_room where status=1 AND  ID_room = '$room' ";
                $sqlqu = mysqli_query( $con, $sqlnum );     
                $num = mysqli_num_rows($sqlqu);
                $sql = ( "SELECT * FROM img_room where status=1 AND ID_room = '$room' " );
                $res = mysqli_query( $con, $sql );
                while ( $r = mysqli_fetch_assoc( $res ) ) { 
            ?>




                    <li data-transition="fade">
                        <img src="img/imgroom/<?php echo $r['link'];?>" data-bgposition="center center" data-duration="14000" data-bgpositionend="center center" alt="">
                    </li>

            <?php } ?> 

            </ul>
        </div>
    </section>
 <!--------------------------------------------------- slider_wrapper -------------------------------------------------->



<section style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
    
    <!------------------------  ***  END booking  *** ----------------------->

  <div class="main clearfix" style="opacity:0.95;filter:alpha(opacity=95)">
<!--     <article id="hotel" class="main-inner">
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
          </div>
        </div>
      </section>
    </article> -->

  <div class="main clearfix" style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92)">
    <article id="hotel" class="main-inner">
      <section class="main-info-inner">
        <div class="container text-center clearfix">
          <div class="col-md-10 col-md-offset-1 clearfix">
            <header>
          <?php $font2 = ( "SELECT * FROM fontweb where type='$type ' " );
          $re2 = mysqli_query( $con, $font2 );
          $ro2 = mysqli_fetch_assoc( $re2 );?>
                    <p ><?php echo $ro2[$fde];?></p>
             

              <h2 class="title-2"></h2>
            </header>
            <p></p>
            <!-- <div class="button-hover-main blue mar-top-30">
              <div class="button-eff"></div>
              <a href="index.php" style="color: #000000">Book This HOME </a></div> -->
          </div>
        </div>
      </section>
    </article>

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



