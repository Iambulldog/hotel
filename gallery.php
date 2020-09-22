<?php session_start();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <!--<title>AKIRA LIPE RESORT SATUN THAILAND : Official Website</title>-->
    
	<meta name="keywords" content="Koh Lipe, Lipe resort, AKIRA BEACH RESORT, LIPE, Hotel in Satun, Resort, Thailand, Lipe Island, beach resort, beach in thailand, speed boat, kayaking, snorkeling, restaurant and bar, restaurant, bungalows, bungalows on koh lipe, Satun Thailand, online booking, Thai cooking class, Island Tour, Wedding Ceremony, diving, ที่พักเกาะหลีเป๊ะติดทะเล, ที่พัก หลีเป๊ะ, รีสอร์ท หลีเป๊ะ, อาคีรา รีสอร์ท, จองห้องพัก, จองห้องพักออนไลน์, ห้องพักติดสระว่ายน้ำ"/>
   	
	<meta name="description" content="AKIRA BEACH RESORT LIPE nestled on Pattaya Beach and near Walking Street just 5 minutes by stroll walk on the beach feature for 48 rooms with a bistro style, all rooms are equipped with elegant design and facilities."/>
   

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.ico"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        	<?php include("header.php");?>
        	<script>   $('#m5').addClass('current-menu-item'); </script>
        <!-- END / HEADER -->
         <?php 	$query="SELECT * FROM tbl_gallery_data  ";
				$resultfacility=mysqli_query($link,$query);
				
				$queryPic="SELECT * FROM `tbl_gallery_IMG`  ";
				$resultPic=mysqli_query($link,$queryPic);
		
			  	$path_product="uploadfile/"; 
		?> 
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2 style="font-family: 'Prompt', sans-serif; !important"><?php echo _menuGallery?></h2>
                        <p><?php echo _name_hotel?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->
        
        
        <!-- GALLERY -->
        <section class="section_page-gallery">
            <div class="container">
                <div class="gallery gallery-3">
                    <h1 class="element-invisible"><?php echo _menuGallery?></h1>
                    <!-- FILTER -->
                    <div class="gallery-cat text-center">
                        <ul class="list-inline">
                            <li class="active"><a href="#" data-filter="*"><?php echo _all?></a></li>
							 <?php while($currentData=mysqli_fetch_assoc($resultfacility)){
									$name[1] = $currentData['name_en'];
									$name[2] = $currentData['name_th'];
							 ?>   
                            <li><a href="#" data-filter="<?php echo ".".$currentData['id'] ?>"><?php echo $name[$_SESSION['lang']]; ?></a></li>
                        <?php } ?>    
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
								<?php while($Pic=mysqli_fetch_assoc($resultPic)){
									$query2="SELECT * FROM tbl_gallery_data WHERE id = '".$Pic['cate_id']."' ";
									$resultfacility2=mysqli_query($link,$query2);
									$currentData2=mysqli_fetch_assoc($resultfacility2);
								?>

                                <!-- ITEM -->
								 <div class="item-isotope <?php echo $currentData2['id'] ?>">
                                    <div class="gallery_item">
                                        <a href="<?php echo $path_product.$Pic['image_name'] ?>" class="mfp-image">
                                            <img src="<?php echo $path_product.$Pic['image_name'] ?>" alt="">
                                        </a>
                                        <h6 class="text">Akira Lipe Resort, Satun Thailand.</h6>
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
        <!-- END / GALLERY -->
        <!-- FOOTER -->
        <?php include("footer.php");?>
        <!-- END / FOOTER -->
    </div>
    <!-- END / PAGE WRAP -->

    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>


    <script language="javascript" src="https://www.bigbang.co.th/api/bt.js" charset="UTF-8"></script>
    
</body>
</html>