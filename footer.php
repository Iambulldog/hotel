<footer><!--style="background-image: url(img/20170612150437.jpg)"-->
<div  class="footer-quicklink">

<div class="container">
<div class="row">



<div class="col-sm-2">
	<h3><b>VISITORS</b></h3>
	<div class="row">
		<div class="col-sm-12">
			<a href='http://www.akiralipe.com' title='Akira Lipe'>
				<img src="https://www.akiralipe.com/images/logo-header.png" width="150" height="50" alt="ananyalipe">
			</a><br><br>
		</div>
		<div class="col-sm-12">
			<a href='http://www.thechiclipe.com' title='Thechic Lipe'>
				<img src="https://www.thechiclipe.com/img/logo1.png" width="150" height="30" alt="ananyalipe">
			</a>
		</div>
	</div>
</div>



<div class="col-sm-3">
  <h3><b>LOCATIONS</b></h3>
	<?php $font2 = ( "SELECT * FROM fontweb where type='contact' " );
		$re2 = mysqli_query( $con, $font2 );
		$ro2 = mysqli_fetch_assoc( $re2 );?>
		<h5><?php echo $ro2[$fde];?></h5>
</div>

<div class="col-sm-2">
	<h3><b>ADD LINE</b></h3>
	<?php $fontqr = ( "SELECT * FROM fontweb where type='qr' " );
          $reqr = mysqli_query( $con, $fontqr );
          $roqr = mysqli_fetch_assoc( $reqr );?>

          <a href="http://nav.cx/5BJDpTe">
          	<img height="36" border="0" src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png" alt="ananyalipe">
          </a>
          <a href="http://nav.cx/5BJDpTe" target="_blank" rel="nofollow">
          	<img src="img/<?php echo $roqr[$fde];?>" width="200" height="250" class="img-responsive" alt="ananyalipe">
          </a>
</div>

<div class="col-sm-2">
  <h3><b><?php echo $Follow; ?></b></h3>
    <a href="https://www.facebook.com/ananyalipe/" target="_blank" title="Facebook" ><img src="img/Facebook.png" width="40" height="40" alt="ananyalipe"></a>

    <a href="https://www.instagram.com/ananyalipe/" target="_blank" title="instagram" ><img src="img/instagram.png" width="40" height="40" alt="ananyalipe"></a>

    <a href="https://www.youtube.com/channel/UC2tLVaBhdN2u516DEKgDIUQ" target="_blank" title="youtube" ><img src="img/youtube.png" width="50" height="40" alt="ananyalipe"></a>

  
</div>

<div class="col-sm-2">
  <h3><b>CONTENTS</b></h3>
  <a href="index.php" ><b style="font-size: 1.3em;"><?php echo $home; ?></b></a><br><br>
  <a href="dining.php" ><b style="font-size: 1.3em;"><!-- <?php echo $dining; ?> -->dining</b></a><br><br>
  <a href="romance.php" ><b style="font-size: 1.3em;"><!-- <?php echo $romance; ?> -->romance</b></a><br><br>
  <a href="activities.php" ><b style="font-size: 1.3em;"><!-- <?php echo $activities; ?> -->activities</b></a><br><br>
  <a href="Image.php" ><b style="font-size: 1.3em;"><!-- <?php echo $Gallery; ?> -->Gallery</b></a><br><br>
  <a href="contact.php" ><b style="font-size: 1.3em;"><!-- <?php echo $Contact; ?> -->Contact</b></a><br><br>
  <a href="package.php?lang=en" ><b style="font-size: 1.3em;"><!-- <?php echo $promotion; ?> -->promotion</b></a> <br><br>
  <a href="map.php" ><b style="font-size: 1.3em;"><!-- <?php echo $travel; ?> -->travel</b></a> <br><br>
  <a href="#" ><b style="font-size: 1.3em;"><!-- <?php echo $member; ?> -->member</b></a><br><br>
  <a href="#" ><b style="font-size: 1.3em;"><?php echo $Terms_and; ?></b></a>
</div>





<div class="clearfix"></div>
</div>
</div>
</div>


<div class="footer-copyright">
<div class="container">
<div class="row">

<div class="col-sm-6 text-left" >
<a href="">สงวนลิขสิทธิ์ 2019 โรงแรมและรีสอร์ทในเครือ Akira Lipe</a>
</div>
<!-- <div class="col-sm-6">
<style>
.creditcard{padding:0; margin:0; position:relative; display:block; float:right;}
.creditcard ul{padding:0; margin:0;}
.creditcard ul li{display:block; float:left; background:#f5f5f5;}
.creditcard .visa{ width:90px; height:51px; background:url(img/logo_Akira_group_03.jpg) center center no-repeat;}
.creditcard .master{width:90px; height:51px; background:url(img/logo_Akira_group_04.jpg) center center no-repeat;}
.creditcard .paypal{width:90px; height:51px; background: url(img/logo_Akira_group_05.jpg) center center no-repeat;}
.creditcard .express{width:90px; height:51px; background:url(img/logo_Akira_group_06.jpg) center center no-repeat;}
.creditcard .express11{width:90px; height:51px; background:url(img/logo_Akira_group_07.jpg) center center no-repeat;}
.creditcard .express22{width:90px; height:51px; background:url(img/logo_Akira_group_08.jpg) center center no-repeat;}
@media (max-width:640px){.creditcard{float:none; padding:0; margin:0; position:relative; display:block; float:left;}}
</style>

<div class="creditcard">
<ul>
<li class="visa"></li>
<li class="master"></li>
<li class="paypal"></li>
<li class="express"></li>
<li class="express11"></li>
<li class="express22"></li>
</ul>

</div>
</div> -->
<div class="clearfix"></div>
</div>
</div>
</div>

</footer>

<!--- Quick navigation for ipad -->
<!--- quick button for ipad -->
<div class="quick-menu">
<div class="container-fluid">
<div class="row">
<div class="col-xs-2 home" style="float:left;">
<div class="text-ellipsis"><b><a href="index.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></b></div>
</div>
<!-- <div class="col-xs-5 offer" style="float:left;">
<div class="text-ellipsis"><b><a >โปรโมชั่นพิเศษทั้งหมด</a></b></div>
</div> -->

<div class="col-xs-10 offer" style="float:left;">
<div class="text-ellipsis"><b><a href="#"   onClick="footFunction();"><?php echo $booking; ?></a></b></div>
</div>

<div class="clearfix"></div>
</div>
</div>
</div>
<!-- Balck to the top -->
<a id="back-to-top" href="#" class="btn btn-gotop btn-lg back-to-top" role="button" ><i class="fa fa-angle-up fa-lg" aria-hidden="true"></i></>


	  <script type="text/javascript">
        function footFunction(){ 
         document.getElementById("data-arrival").focus();  
        }
        </script>



 <!--**************************************************-->
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



    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery-1.11.0.min.js"></script>    
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/SmoothScroll.js"></script>
    <!-- validate -->
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery.form.min.js"></script>
    <script type="text/javascript" src="https://www.akiralipe.com/js/lib/jquery.validate.min.js"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="https://www.akiralipe.com/js/scripts.js"></script>
    