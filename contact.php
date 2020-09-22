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
                        <li id="liEN" ><a href="contact.php?lang=en"><img src="img/icon_en.png" height="25" width="25">    ENG</a></li>
                        <li id="liTH" ><a href="contact.php?lang=th"><img src="img/icon_th.png" height="25" width="25">    TH</a></li>
                        <li id="liTH" ><a href="contact.php?lang=cn"><img src="img/icon_cn.png" height="25" width="25">    CN</a></li>
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
                        <h2 style="font-family: 'Prompt', sans-serif; !important">CONTACT US</h2>
                        <p>Ananya Lipe</p>
                    </div>
                </div>
            </div>
</section>

        <!-- END / BANNER SLIDER -->   








 <!--  ///////////////** แพคเกจที่แนะนำ ** /////////////////////////////-->


                <!-- GALLERY -->
<section style="padding-top: 20px">
<div class="col-sm-12 overlay-container">
    <div class="col-sm-6"> 
      <?php $font33 = ( "SELECT * FROM fontweb where type='imgstyle' " );
          $re33 = mysqli_query( $con, $font33 );
          $ro33 = mysqli_fetch_assoc( $re33 );?>
          <img src="img/<?php echo $ro33[$fde];?>" title="All-Inclusive Holidays for less" alt="All-Inclusive Holidays for less" class="img-responsive">
    </div>
    <div class="col-sm-6">
        <?php $font2 = ( "SELECT * FROM fontweb where type='contact' " );
          $re2 = mysqli_query( $con, $font2 );
          $ro2 = mysqli_fetch_assoc( $re2 );?>
          <div align="center">
            <br><span><ul><?php echo $ro2[$fde];?></ul></span>
          </div>


 </div>
</div>
</section>

<!--  /////////////////////** จบ แพคเกจที่แนะนำ ** //////////////////////////////-->



<section >

  
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3191.9612562099546!2d99.3053377!3d6.4866564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304c05cd7db7bd4f%3A0x3414d3de23ee252e!2sAnanya+Lipe+Resort!5e1!3m2!1sth!2sth!4v1566483324242!5m2!1sth!2sth" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


</section>



<!--******************************** Footer ************************************************-->
<section class="content-container " style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
<?php include_once('footer.php');?>
</section>
<!--******************************** Footer ************************************************-->

            


 

   
</div>
</div>
</div>



<script language="javascript" src="https://www.bigbang.co.th/api/bt.js" charset="UTF-8"></script>
   
</body>
</html>



