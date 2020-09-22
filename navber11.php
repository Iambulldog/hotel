<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
<link rel="stylesheet" href="a/form-2/assets/css/form-elements.css">
<link rel="stylesheet" href="a/form-2/assets/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link href="https://www.centarahotelsresorts.com/corporateweb/assets/webfont/css/webfont.css" rel="stylesheet">

<style>
    p{
    font-family: 'Kanit', sans-serif;
    }
    h1{
    font-family: 'Kanit', sans-serif;
    }
    h2{
    font-family: 'Kanit', sans-serif;
    }
    h3{
    font-family: 'Kanit', sans-serif;
    }
    h4{
    font-family: 'Kanit', sans-serif;
    }
    h5{
    font-family: 'Kanit', sans-serif;
    }
    h6{
    font-family: 'Kanit', sans-serif;
    }
    b{
    font-family: 'Kanit', sans-serif;
    }
    li{
        font-family: 'Kanit', sans-serif;
    }
    label{
        font-family: 'Kanit', sans-serif;
    }
    select{
        font-family: 'Kanit', sans-serif;
    }
    ul{
        font-family: 'Kanit', sans-serif;
    }
    a{
        font-family: 'Kanit', sans-serif;
    }button{
         font-family: 'Kanit', sans-serif;
    }strong{
         font-family: 'Kanit', sans-serif;
    }option{
        font-family: 'Kanit', sans-serif;
    }select{
        font-family: 'Kanit', sans-serif;
    }span{
        font-family: 'Kanit', sans-serif;
    }
    

    
</style>    
    <!-- ------------------------- navber  ในโทรสับ------------------------------------------>
<!--<div class="header-sm"> 
    <div class="col-xs-12 gray"> 
        <div class="row"> 
            <div class="col-xs-3" style="float:left; text-align:left; padding-top:15px;"> 
                <a href="#menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i> </a>
                <nav id="menu"> 
                <ul> 
                    <li><a href='#'>
                         <?php if ($_GET["lang"] =='th') { ?>
                          <a  href="index.php?lang=th" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_th.png" height="25" width="25">  ภาษาไทย</a>
                        <?php }elseif ($_GET["lang"] =='en') { ?>
                            <a  href="index.php?lang=en" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_en.png" height="25" width="25">  English</a>
                        <?php }elseif ($_GET["lang"] =='cn') { ?>
                          <a  href="index.php?lang=cn" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/icon_cn.png" height="25" width="25">   中文</a>
                        <?php } ?>
                        </a>
                        <ul>
                    <li><a href="index.php?lang=en" target="_self"><img src="img/icon_en.png" height="25" width="25"></i>English</a></li>
                    <li><a href="index.php?lang=th" target="_self"><img src="img/icon_th.png" height="25" width="25"></i>ภาษาไทย</a></li>
                    <li><a href="index.php?lang=cn" target="_self"><img src="img/icon_cn.png" height="25" width="25"></i>中文</a></li>
                        </ul>
                    </li>-->


                    <li><a href='index.php?lang=<?php echo $_GET["lang"]; ?>' title='หน้าแรก' ><?php echo $home ; ?></a></li>
                    <li><a href='Room.php?lang=<?php echo $_GET["lang"]; ?>' title='ห้องพัก' ><?php echo $room ; ?></a></li>
                    <li><a href='Image.php?lang=<?php echo $_GET["lang"]; ?>' title='รูปภาพ' ><?php echo $gallery ; ?></a></li>
                    <li><a href='package.php?lang=<?php echo $_GET["lang"]; ?>' title='แพ๊จเกจ' ><?php echo $package ; ?></a></li>
                    <li><a href=#' title='โปรโมชั่นพิเศษทั้งหมด' ><?php echo $Allspecial ; ?></a>
                        <ul>
                            <li><a href='#' title='โปรโมชั่นพิเศษทั้งหมด'>โปรโมชั่นพิเศษทั้งหมด</a></li>
                            <li><a href='#' title='โปรโมชั่นห้องพักสุดพิเศษ'>โปรโมชั่นห้องพักสุดพิเศษ</a></li>
                        </ul>
                    </li>
                    

                    
                    
                    <li><a href='#' title='การประชุมและอีเว้นท์ต่างๆ' ><?php echo $Meetings ; ?></a>
                        <ul>
                            <li><a href='#' title='#' target='_blank'>#</a></li>
                            <li><a href='#' title='#' target='_blank'>#</a></li>
                            <li><a href='#' title='#' target='_blank'>#</a></li>
                        </ul>
                    </li>
                    <li><a href='map.php?lang=<?php echo $_GET["lang"]; ?>' title='การเดินทาง/แผนที่' ><?php echo $Travel ; ?></a></li>
                    <li><a href='contact.php?lang=<?php echo $_GET["lang"]; ?>' title='ติดต่อเรา' ><?php echo $contact ; ?></a></li>
                </ul>
                </nav> 


        <script type="text/javascript" src="js/jquery.mmenu.all.min.js" defer></script>
        <script type="text/javascript" defer>
        $(function() {
        $('nav#menu').mmenu();
        }); 
        </script>  

            </div>

            <div class="col-xs-5 text-center title" style="float:left;">
                <a href="index.php" alt="โรงแรมและรีสอร์ทใน Akiralipe">
                <?php $logo = ( "SELECT * FROM fontweb where type='logo' " );
                    $logo1 = mysqli_query( $con, $logo );
                    $logo2 = mysqli_fetch_assoc( $logo1 );?>
                <img src="img/<?php echo $logo2[$fde];?>" class="logo" alt="โรงแรมและรีสอร์ทใน Akiralipe">
                </a>
            </div>

            <div class="col-xs-4" style="float:left; text-align:left;">
            <div style="float:right; width:auto; max-width:100%;">
           <!--  <div class="nav navbar-nav navbar-right">
            <div class="dropdown">

               


                
            </div>
            </div> -->
            </div>
            </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-xs-12 gray" style="padding:10px 15px; margin-bottom:15px;">

        <div class="floatleft">
            <div class="col-sm-12" >
                <p><?php echo $discountbooking; ?></p>
            </div>
            <!--<div class="col-sm-12">
                <form action="#" method="post">
                <button type="submit" class="btn btn-link" style="padding:0; margin:0; font-size:13px;">เข้าสู่ระบบ   or </button>
                <a href="#" >ลงทะเบียน</a>
                </form>
            </div>-->
            
        </div>

        <div class="floatright">
        <div class="clearfix"></div>
        </div>
        </div>
        </div>

        <div class="clearfix"></div>
        </div>
        </div>
        <!-- ------------------------- ** END navber ในโทรสับ ** ------------------------------------------>


        <!-- ------------------------- ** navber ในคอม **------------------------------------------>


<style>
/*popup*/
.event{ z-index:3 !important; position:relative; padding:0; margin:0;}
.overlay {height: 0%;width: 100%;position: fixed;z-index:999;top: 0;left: 0; background-color: rgb(255,255,255); background-color: rgba(255,255,255, 0.9);overflow-y: hidden; transition: 0.5s;}
.overlay-content {position: relative; top: 5%;width: 100%;text-align: center;margin-top: 30px;margin:0 auto;}
.overlay a { padding: 8px; text-decoration: none; font-size: 36px; color: #818181; display: block;  transition: 0.3s;}
.overlay a:hover, .overlay a:focus {color: #f1f1f1;}
.overlay .closebtn {position: absolute;bottom:-25px; right: 21%; font-size: 60px;}
@media screen and (max-width: 1200px) {.event{display:none;}}
@media screen and (max-height: 450px) {
.overlay {overflow-y: auto;}
.overlay a {font-size: 20px}
.overlay .closebtn {font-size: 40px;top: -25px; right: 35px;}}
</style>





<style>
.header-area{background:url(img/newbg.jpg) bottom left; height:138px; position:relative; z-index:2; display:block;}
.navtop{width:100%; display:block; height:60px; line-height:60px;}
.navd{line-height:60px; width:100%; display:block; clear:both;}
.c1cmember{float:right;}
.dlogo{position:absolute; left:0; top:0; z-index:1; height:138px; padding:25px 40px 25px 10px; background:url(img/new-header-logo-bg.jpg) right top no-repeat;}
.dlogo img{width:180px; height:auto;}
.topbar-nav{ height:60px; padding-left:230px; padding-right:15px;}
.topbar-nav:after{content: '';display: table;clear: both;}
.topbar-nav .left{ float:left;}
.topbar-nav .right{ float: right; line-height:10px; padding-top:10px; text-transform:uppercase; text-align: right; color:#111; padding-left:120px; background:url(img/logoananya.png) top left no-repeat;}
.topbar-nav .right a{color:#b5121b;}
.reservation-container{z-index:1;}
@media all and (max-width:1200px){.header-area{display:none;}}
</style>

<header class='header-area'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='row'>
                    <div class='dlogo'>
                        <a href='index.php' title='akiralipe'>
                            <img src='img/<?php echo $logo2[$fde];?>' alt='akiralipe' title='akiralipe'></a></div>
                            <div class='topbar-nav'>
                                <div class='left'>

        <style>
        .tooltip{text-transform:none; z-index:12000;}
        .top-brand{width:100%; height:auto; display:inline-block; }
        .top-brand ul{padding:0; margin:0; font-family: 'opensans-regular', sans-serif;}
        .top-brand ul li{float:left; list-style:none; display:inline-block; }
        .top-brand ul li.brand{padding:0px 2px;}
        .top-brand .rightitem{float:right; background:rgba(243,243,243,1.00); padding:0; font-size:11px; margin-right:0;} 
        .top-brand .rightitem .selectlang{background:#fff;line-height:77px;}
        .top-brand .dropdown-toggle{font-size:11px; line-height:20px; color:#333;}
        .top-brand .dropdown-menu li a{font-size:11px;}
        /*logo*/
        .btn-chr{width:150px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 0px 0px;}
        .btn-grand{width:150px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 0px 0px;}
        .btn-grand:hover{width:150px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 849px 0px;}
        .btn-centara{width:160px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 695px 0px;}
        .btn-centara:hover{width:160px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 535px 0px;}
        .btn-residence{width:58px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 375px 0px;}
        .btn-residence:hover{width:58px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 316px 0px;}
        .btn-boutique{width:58px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 260px 0px;}
        .btn-boutique:hover{width:58px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 206px 0px;}
        .btn-centra{width:75px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 150px 0px;}
        .btn-centra:hover{width:75px; height:50px; display:inline-block; background:url(img/chr-allbrand-logo-v2.png) 75px 0px;}

        </style>

<!-- <div class="top-brand">
<ul>
    <li class="brand">
        <a href="https://www.Akiralipe.com" target="_blank" class="btn btn-grand" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Akiralipe"></a>
    </li>
    <li class="brand">
        <a href="https://thechiclipe.com" target="_blank" data-toggle="tooltip" class="btn btn-centara" data-placement="bottom" title="" data-original-title="Thechiclipe"></a>
    </li>
    <li class="brand">
        <a href="http://www.artbeachclub.com" target="_blank" class="btn btn-residence" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Art Beach Club Koh Lipe Thailand"></a>
    </li>
    <li class="brand">
        <a href="https://www.facebook.com/SugoiTeppanyaki" target="_blank" class="btn btn-boutique" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Sugoi Teppanyaki Japanese Restaurant Koh Lipe Thailand"></a>
    </li>
    <li class="brand">
        <a href="https://www.facebook.com/TheSteakHouseLipe/" target="_blank" class="btn btn-centra" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="The Steak House Koh Lipe Thailand"></a>
    </li> 
</ul>




</div> -->
</div>



<div class='right'>
<b>Contact us +66 (0) 91 634 6340 1, +66 (0) 91 634 6341 ,+66 (0) 91 634 6343 4 

</b>

<style>
.header-container .c1cwrapper{background:url(img/logoananya.png) #dedede top left; }
.loginform_{}
.loginform_wrapper { position: relative; /*margin-top: 1.5rem;*/display: inline-block;}
.loginform_content {opacity: 0;visibility: hidden;position: absolute;right: 0px;transform: translate(0,10px); text-align:left; background-color: #fff;padding: 15px;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);width:100%;min-width:300px;text-transform:none; color:#666;}
.loginform_content h3, .loginform_content h2{text-transform:uppercase; font-size:22px;}
.loginform_content hr{border-color:#111;}
.loginform_content:before { position: absolute;z-index: -1;content: '';right: calc(50% - 10px);top: -8px;border-style: solid;border-width: 0 10px 10px 10px;border-color: transparent transparent #fff transparent;transition-duration: 0.3s;transition-property: transform;}
.loginform_wrapper:hover .loginform_content { z-index: 10000; opacity: 1; visibility: visible;  transform: translate(0,0px);  transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97);}
.loginform_message {width:100%;text-align:left;}
.loginform_content h5{font-size:16; font-weight:700; color:#111; padding:0; margin:0; margin-bottom:10px;}
.loginform_.signin{padding:0; margin:0; color:#b5121b;}

</style>


<div class="loginform_wrapper">

<div >
    <br><p>.</p>
    <!--<form action='#' method='post' ><?php echo $discountbooking; ?>
        <input type='hidden' name='name' value=''>
        <p><button class="btn btn-link btn-xs signin">เข้าสู่ระบบ</button> Or  <a href="#">ลงทะเบียน</a></p>
    </form> -->   
 </div>  


<!--<div class="loginform_content"> 
    <h3>เป็นสมาชิกได้รับมากกว่า</h3>
    <hr>
    <p>มั่นใจได้ในราคาถูกที่สุดเมื่อคุณจองตรงกับเราที่นี่</p>
        <form action='#' method='post'>
        <input type='hidden' name='name' value=''>
        <button class='btn btn-red btn-sm' style='margin:10px 0px;'>เข้าสู่ระบบ</button>
        </form>
     
    
    <p>สิ่งที่สมาชิกจะได้รับ</p> 
        <ul>
            <li>ส่วนลดเพิ่ม 10% จากทุกราคา</li>
            <li>ฟรี Wi-Fi ตลอดการเข้าพัก</li>
            <li>สิทธิพิเศษเฉพาะสมาชิกเท่านั้น</li>
            <li>คะแนนสะสมทุกครั้งที่เข้าพัก</li>
            <li>ใช้คะแนนจ่ายแทนเงิน</li>
        </ul>
    <p>และอื่นๆ อีกมากมาย</p>
    
    
    <h5><b>คุณเป็นสมาชิกหรือยัง?</b></h5>
    <a href='#' class='red' target='_blank'><b>ลงทะเบียน</b></a>
        
</div>-->


</div>
</div></div><div class='clearfix'></div>
<link href="css/nav-magamenu.css" rel="stylesheet" type="text/css">

<div class="megamenu_wrapper megamenu_light_theme">
<div class="megamenu_container">
<ul class="megamenu" style="padding-left:230px; padding-right:15px;" >

<li><a href="index.php?lang=<?php echo $_GET["lang"]; ?>" class="menuitem_drop"><h5><br><?php echo $home ; ?></h5></a> </li>
<li><a href="Room.php?lang=<?php echo $_GET["lang"]; ?>" class="menuitem_drop"><h5><br><?php echo $room ; ?> </h5></a> </li>


<!--<li class="menuitem_fullwidth">
<a href="#" class="menuitem_drop" ><h5><br>ค้นหาโรงแรม</h5></a>
<div class="dropdown_fullwidth">

<div class='col_two_thirds firstcolumn'>

    <h2 >ประเทศไทย</h2>
    <div class='col_one_third'>
        <h3>กรุงเทพฯ</h3>
        <ul>
            <li><a href='#' title='เซ็นทาราแกรนด์และบางกอกคอนเวนชันเซ็นเตอร์ เซ็นทรัลเวิลด์' target='_blank'>เซ็นทาราแกรนด์และบางกอกคอนเวนชันเซ็นเตอร์ เซ็นทรัลเวิลด์</a></li>
            <li><a href='#' title='เซ็นทาราแกรนด์เซ็นทรัลพลาซา ลาดพร้าว กรุงเทพฯ' target='_blank'>เซ็นทาราแกรนด์เซ็นทรัลพลาซา ลาดพร้าว กรุงเทพฯ</a></li>
            
        </ul>
    </div>

    <div class='col_one_third'>
        <h3>พัทยา</h3>
        <ul>
            <li><a href='#' title='เซ็นทาราแกรนด์มิราจบีชรีสอร์ท พัทยา' target='_blank'>เซ็นทาราแกรนด์มิราจบีชรีสอร์ท พัทยา</a></li>
            <li><a href='#' title='เซ็นทาราแกรนด์พระตำหนัก พัทยา' target='_blank'>เซ็นทาราแกรนด์พระตำหนัก พัทยา</a></li>
           
        </ul>
    </div>

    <div class='col_one_third'><h3>ภูเก็ต</h3></div>

    <div class='clearfix'></div>
    <div class='col_one_third'><h3>กระบี่</h3></div>
    <div class='col_one_third'><h3>หัวหิน</h3></div>
    <div class='col_one_third'><h3>เกาะสมุย</h3></div>
    <div class='clearfix'></div>
    <div class='col_one_third'><h3>ระยอง</h3></div>
    <div class='col_one_third'><h3>เกาะช้าง</h3></div>
    <div class='col_one_third'><h3>ตราด</h3></div>
    <div class='clearfix'></div>
    <div class='col_one_third'><h3>เขาหลัก</h3></div>
    <div class='col_one_third'><h3>เชียงใหม่</h3></div>
    <div class='col_one_third'><h3>อุดรธานี</h3></div>
    <div class='clearfix'></div>
    <div class='col_one_third'><h3>หาดใหญ่</h3></div>
    <div class='col_one_third'><h3>แม่สอด</h3></div></div>

    <div class='col_one_third'>
        <h2 style='line-height:20px; font-size:16px; border-bottom:none; margin-bottom:0px; color:#888'>ต่างประเทศ</h2>
        <div class='firstcolumn'><h3>กาตาร์</h3>
            <ul>
                <li>
                    <a href='#' title='#' target='_blank'>Centara West Bay Residences & Suites Doha</a>
                </li>
            </ul>
        </div>
        <div class='firstcolumn'><h3>โอมาน</h3></div>
        <div class='firstcolumn'><h3>มัลดีฟส์</h3></div>
        <div class='clearfix'></div>
        <div class='firstcolumn'><h3>ศรีลังกา</h3></div>
        <div class='firstcolumn'><h3>เวียดนาม</h3></div>
    </div>



</div>
</li>-->

        <li><a href="Image.php?lang=<?php echo $_GET["lang"]; ?>" class="menuitem_drop" ><h5><br><?php echo $gallery ; ?></h5></a></li>
        <li>
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
            <a href="package.php?lang=<?php echo $_GET["lang"]; ?>" class="menuitem_drop" ><h5><br><?php echo $package ; ?>
            <span class="badge blink_me" style="background-color: #FF0000; position: absolute;  top: 6px;  right: 0px;  font-weight: 300;  padding: 3px 6px; "> Hot !!! </span></h5></a> 
        </li>
        
        <!--<li>
            <a href="#" class="menuitem_drop" ><h5><br><?php echo $Allspecial ; ?></h5></a>
            <div class="dropdown_1column dropdown_flyout">
                <ul class="levels">
                    <li><a href="#"  ><h5>โปรโมชั่นพิเศษทั้งหมด</h5></a></li>
                    <li><a href=#"  ><h5>โปรโมชั่นห้องพักสุดพิเศษ</h5></a></li>
                    <li><a href="#"  ><h5>แพคเกจแนะนำ</h5></a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#" class="menuitem_drop" ><h5><br><?php echo $Meetings ; ?></h5></a>
                <div class="dropdown_1column dropdown_flyout">
                <ul class="levels">
                    <li><a href="#"><h5>กิจกรรมขององค์กร</h5></a></li>
                    <li><a href="#"><h5>




                    </h5></a></li>
                    <li><a href="#"><h5>งานอีเวนต์สังคมต่างๆ</h5></a></li>
                </ul>
                </div>
        </li>-->


         <li><a href="#" class="menuitem_drop" ><h5><br><?php echo $Allspecial ; ?> </h5></a> </li>
        <li><a href="#" class="menuitem_drop" ><h5><br><?php echo $Meetings ; ?></h5></a> </li>
        <li><a href="map.php?lang=<?php echo $_GET["lang"]; ?>" class="menuitem_drop" ><h5><br><?php echo $Travel ; ?> </h5></a> </li>
        <li><a href="contact.php?lang=<?php echo $_GET["lang"]; ?>" class="menuitem_drop" ><h5><br><?php echo $contact ; ?></h5></a> </li>


