<?php 
$page="lagoon_bar";
session_start();
include_once('../connectdb.php');
if(empty($_SESSION['UserID']))
{
	echo "<script> alert('Please Login!!');window.location.href='login.php';</script>";
	exit();
}
?>

<?php include_once("connectdb.php" );error_reporting(E_ALL & ~E_NOTICE);?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<body class="no-skin">
	<?php include('navbar.php'); ?>	
	<?php include('menu.php'); ?>	
	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>
					<li class="active">แก้ไขข้อความเกี่ยวกับ pattaya restaurents</li>
				</ul><!-- /.breadcrumb -->

			
			</div>

			<div class="page-content">
				<?php $font = ( "SELECT * FROM fontweb where type='lagoon_bar1' " );
					$re = mysqli_query( $con, $font);
					$ro = mysqli_fetch_assoc($re);
				?>
				<div class="row">
					<form action="save_fontweb.php"  method="post">
						<div class="col-xs-12">
							<div class="col-sm-12">
								<h4 class="header black">ข้อความเกี่ยวกับ lagoon bar ภาษาไทย</h4>
								<textarea name="detail_th" id="detail" rows="10"  cols="90%"><?php echo $ro['detail_th'];?></textarea>
							</div>
						</div>

						<div class="col-xs-12">				
							<div class="col-sm-12">
								<h4 class="header black">ข้อความเกี่ยวกับ lagoon bar ภาษาอังกฤษ</h4>
								<textarea name="detail_en" id="detail1" rows="10"  cols="90%"><?php echo $ro['detail_en'];?></textarea>
							</div>
						</div>

						<div class="col-xs-12">				
							<div class="col-sm-12">
								<h4 class="header black">ข้อความเกี่ยวกับ lagoon bar ภาษาจีน</h4>
								<textarea name="detail_cn" id="detail2" rows="10"  cols="90%"><?php echo $ro['detail_cn'];?></textarea>
								<input value="lagoon_bar1" name="type" hidden=""><br><br>
							</div>
							<center>
								<button type="submit" class="btn btn-danger">แก้ไข</button>
								<a href="index.php" type="submit" class="btn btn-success">กลับหน้าเเรก</a>
							</center><br><br>
						</div>

					</form>

					<!-- 	<div class="col-xs-6">
						<?php $font = ( "SELECT * FROM fontweb where type='img_lagoon_bar' " );
						$re = mysqli_query( $con, $font );
						$ro = mysqli_fetch_assoc($re);
						?>
						<form action="save_fontweb.php"  enctype="multipart/form-data" method="post">	
						<div class="col-sm-3"></div>					
							<div class="col-sm-5" align="center">
								<h4 class="header black">จัดการรูปภาพ lagoon bar  1</h4>

								<img src="../img/<?php echo $ro['detail_th'];?>" width="450" height="350">
								<hr>
								<input type="file" name="detail_th" id="detail" class="form-control" value="" >
								

								<input value="img_lagoon_bar1" name="type" hidden=""><br><br>

									<center><button type="submit" class="btn btn-danger">บันทึก</button>
								<a href="index.php" type="submit" class="btn btn-success">ยกเลิก</a></center>
							</div>
							
						

						
							</form>
						</div>

						<div class="col-xs-6">
						<?php $font = ( "SELECT * FROM fontweb where type='img_lagoon_bar' " );
						$re = mysqli_query( $con, $font );
						$ro = mysqli_fetch_assoc($re);
						?>
												<form action="save_fontweb.php"  enctype="multipart/form-data" method="post">	
						<div class="col-sm-3"></div>					
							<div class="col-sm-5" align="center">
								<h4 class="header black">จัดการรูปภาพ lagoon bar  2</h4>

								<img src="../img/<?php echo $ro['detail_en'];?>" width="450" height="350">
								<hr>
								<input type="file" name="detail_en" id="detail" class="form-control" value="" >
								<input value="img_lagoon_bar2" name="type" hidden=""><br><br>

									<center><button type="submit" class="btn btn-danger">บันทึก</button>
								<a href="index.php" type="submit" class="btn btn-success">ยกเลิก</a></center>
							</div>
							
						

						
							</form> -->
						</div>
						<!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->

		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">Error 404</span>
						Application &copy; 2013-2014
					</span>

					&nbsp; &nbsp;
					<span class="action-buttons">
						<a href="#">
							<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
						</a>
					</span>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="assets/js/jquery-2.1.4.min.js"></script>





	<script src="assets/js/bootstrap.min.js"></script>

	<!-- page specific plugin scripts -->

	<script src="assets/js/ace-elements.min.js"></script>
	<script src="assets/js/ace.min.js"></script>

	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace('detail');
                    function CKupdate() {
                    	for (instance in CKEDITOR.instances)
                    		CKEDITOR.instances[instance].updateElement();
                    }
                </script>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace('detail1');
                    function CKupdate() {
                    	for (instance in CKEDITOR.instances)
                    		CKEDITOR.instances[instance].updateElement();
                    }
                </script>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace('detail2');
                    function CKupdate() {
                    	for (instance in CKEDITOR.instances)
                    		CKEDITOR.instances[instance].updateElement();
                    }
                </script>



            </body>
            </html>
