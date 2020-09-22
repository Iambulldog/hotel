<?php
session_start();
require_once("connectdb.php");
if (isset($_POST["login"])) {
	$strUsername =$_POST['Username'];
	$strPassword = $_POST['Password'];
	$strSQL = "SELECT * FROM adminlog WHERE Username = '".$strUsername."' 
	and Password = '".$strPassword."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "<script>alert('กรุณาตรวจสอบ username และ password !')</script>";
	}
	else
	{
		if($objResult["LoginStatus"] == "1")
		{
			$sql = "UPDATE adminlog SET LoginStatus = '0'  WHERE Username = '".$strUsername."' ";
			mysqli_query($con,$sql);
			
			header("location:index.php");
			exit();
		}
		else
		{
			//*** Update Status Login
			$sql = "UPDATE adminlog SET LoginStatus = '1' , LastUpdate = NOW() WHERE UserID = '".$objResult["UserID"]."' ";
			$query = mysqli_query($con,$sql);

			//*** Session
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Username"] = $objResult["Username"];
			$_SESSION["Name"] = $objResult["Name"];
			session_write_close();

			//*** Go to Main page
			header("location:index.php");
		}

	}
	mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>ArtBeach  Control For Admin</title>
	<link rel="icon" type="image/png" href="../img/W3.png"/>
	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
	<link rel="stylesheet" href="assets/css/ace.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

</head>

<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
				<br><br><br><br><br><img src="../img/AKIRA-LOGO.png" width="400" height="140">
						<div class="center">

							<h1>
								<i class="ace-icon fa fa-user green"></i>
								<span class="red">AKIRA</span>
								<span class="white" id="id-text2">Lipe</span>
							</h1>
							<h4 class="blue" id="id-company-text">&copy; Admin Control</h4>
						</div>

						<div class="space-6"></div>

						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="ace-icon fa fa-coffee green"></i>
											Please Enter Your Information

										</h4>

										<div class="space-6"></div>

										<form action="login.php" method="POST" >
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" class="form-control" name="Username" placeholder="Username" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" class="form-control" name="Password" placeholder="Password" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<div class="space"></div>

												<div class="clearfix">
													

													<button type="submit" class="width-35 pull-right btn btn-sm btn-danger"  value="login" name="login">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
												</div>

												<div class="space-4"></div>
											</fieldset>
										</form>

										<div class="social-or-login center">
											<span class="bigger-110">Or Login Using</span>
										</div>

									<!--	<div class="space-6"></div>

										<div class="social-login center">
											<a class="btn btn-primary">
												<i class="ace-icon fa fa-facebook"></i>
											</a>

											<a class="btn btn-info">
												<i class="ace-icon fa fa-twitter"></i>
											</a>

											<a class="btn btn-danger">
												<i class="ace-icon fa fa-google-plus"></i>
											</a>
										</div>-->
									</div><!-- /.widget-main -->


								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->
							
						</div><!-- /.position-relative -->

					
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="assets/js/jquery-2.1.4.min.js"></script>

	<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		$(document).on('click', '.toolbar a[data-target]', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			});
	});



			//you don't need this, just used for changing background
			jQuery(function($) {
				$('#btn-login-dark').on('click', function(e) {
					$('body').attr('class', 'login-layout');
					$('#id-text2').attr('class', 'white');
					$('#id-company-text').attr('class', 'blue');

					e.preventDefault();
				});
				$('#btn-login-light').on('click', function(e) {
					$('body').attr('class', 'login-layout light-login');
					$('#id-text2').attr('class', 'grey');
					$('#id-company-text').attr('class', 'blue');

					e.preventDefault();
				});
				$('#btn-login-blur').on('click', function(e) {
					$('body').attr('class', 'login-layout blur-login');
					$('#id-text2').attr('class', 'white');
					$('#id-company-text').attr('class', 'light-blue');

					e.preventDefault();
				});

			});
		</script>
	</body>
	</html>
