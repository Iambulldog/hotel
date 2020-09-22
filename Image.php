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
                        <li id="liEN" ><a href="Image.php?lang=en"><img src="img/icon_en.png" height="25" width="25">    ENG</a></li>
                        <li id="liTH" ><a href="Image.php?lang=th"><img src="img/icon_th.png" height="25" width="25">    TH</a></li>
                        <li id="liTH" ><a href="Image.php?lang=cn"><img src="img/icon_cn.png" height="25" width="25">    CN</a></li>
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








 <!--  ///////////////** แพคเกจที่แนะนำ ** /////////////////////////////-->


                <!-- GALLERY -->
        <section class="section_page-gallery">
            <div class="container">
                <div class="gallery gallery-3">
                    <h1 class="element-invisible"><?php echo _menuGallery?></h1>
                    <!-- FILTER -->
                    <div class="gallery-cat text-center">
                        <ul class="list-inline">
                            <li class="active"><a href="#" data-filter="*"><?php echo $ALL; ?></a></li>
                             <?php
                            $room = ( "SELECT * FROM room " );
                            $room1 = mysqli_query( $con, $room );
                            while ( $room2 = mysqli_fetch_assoc( $room1 ) ) { ?>
                          <li><a href="#" data-filter=".<?php echo $room2['ID_room'];?>"><?php echo $room2[$nr];?></a></li>
                            <?php }?>    
                        </ul>
                    </div>
                    <!-- END / FILTER -->

                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">
                        <div class="row">
                            <div class="gallery-isotope col-4">

                                <!-- ITEM SIZE -->
                                <div class="item-size"></div>
                                <!-- END / ITEM SIZE -->
                                 <?php   
                $sqlnum = "SELECT * FROM img_room where status=1 AND  ID_room < 888 LIMIT 1,4";
                $sqlqu = mysqli_query( $con, $sqlnum );     
                $num = mysqli_num_rows($sqlqu);
                $sql = ( "SELECT * FROM img_room where status=1 AND  ID_room < 888 ORDER BY ID_imgroom DESC" );
                $res = mysqli_query( $con, $sql );
                  while ( $r = mysqli_fetch_assoc( $res ) ) { 
            ?>

                                <!-- ITEM -->
                                 <div class="item-isotope <?php echo $r['ID_room'];?>">
                                    <div class="gallery_item">
                                        <a href="img/imgroom/<?php echo $r['link'];?>" class="mfp-image">
                                            <img src="img/imgroom/<?php echo $r['link'];?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                 <?php } ?> 

                                <!-- END / ITEM -->
                            </div>
                        </div>

                    </div>
                    <!-- GALLERY CONTENT -->

                </div>
            </div>       
        </section>
<!--  /////////////////////** จบ แพคเกจที่แนะนำ ** //////////////////////////////-->





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

