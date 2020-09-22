<?php 
$page = "promotion";
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
					<li class="active">promotion</li>
				</ul><!-- /.breadcrumb -->

				
			</div>

			<div class="page-content">

				<div class="row">
					<div class="col-xs-12"><br>
						<!-- PAGE CONTENT BEGINS -->
						<!-- ข้อมูล-->	
						<a href="#modal-form" role="button" data-toggle="modal" class="btn btn-primary">เพิ่มข้อมูลส่วนลด</a><br><br>
						<!-- /.modal add -->
						<div id="modal-form" class="modal" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="blue bigger">เพิ่มข้อมูลส่วนลด</h4>
									</div>

									<div class="modal-body">
										<form method="post" action="add_pro.php?todo=insert">
											<div class="row">
												<div class="col-md-12">
													<div class="col-md-6"> 
														<div class="form-group">
															<label>Code</label>
															<input  class="form-control" type="text" name="code" required>
														</div>
														<div class="form-group">
															<label>วันที่ booking</label>
															<input type="text" class="form-control date-picker" name="date_book" data-date-format="yyyy-mm-dd" readonly="" required="">
														</div>
														<div class="form-group">
															<label>วันที่ checkin</label>
															<input type="text" class="form-control date-picker" name="date_checkin" data-date-format="yyyy-mm-dd" readonly="" required="">
														</div>
														<div class="form-group">
														<label>จำนวนครั้ง</label>
														<input type="text" class="form-control" name="num" required="">
													</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">     
															<label >ส่วนลด</label><br>
															<input type="text" class="form-control" name="percent"   required="">
															<!-- <select class="form-control"  name="percent" required>
																<option value="">โปรเลือกส่วนลดเป็น Percent</option>
																<option value="10">10%</option>
																<option value="20">20%</option>
																<option value="30">30%</option>
																<option value="40">40%</option>
																<option value="50">50%</option>
																<option value="60">60%</option>
																<option value="70">70%</option>
																<option value="80">80%</option>
																<option value="90">90%</option>
															</select> -->
														</div>
														<div class="form-group">
															<label>สิ้นสุด booking</label>
															<input type="text" class="form-control date-picker" name="end_book" data-date-format="yyyy-mm-dd" readonly="">
														</div>
														<div class="form-group">
															<label>สิ้นสุด checkin</label>
															<input type="text" class="form-control date-picker" name="end_checkin" data-date-format="yyyy-mm-dd" readonly="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button class="btn btn-sm" data-dismiss="modal">
												<i class="ace-icon fa fa-times"></i>
												Cancel
											</button>
											<button class="btn btn-sm btn-primary">
												<i class="ace-icon fa fa-check"></i>
												Save
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div id="edit-form" class="modal" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="blue bigger">แก้ไขส่วนลด</h4>
									</div>

									<div class="modal-body">
										<form method="post" action="add_pro.php">
											<div class="row">
												<div class="col-md-12">
													<div class="col-md-6"> 
														<div class="form-group">
															<label>Code</label>
															<input class="form-control" type="text" id="procode" name="code" >
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">     
															<label >ส่วนลด</label><br>
															<select class="form-control"  name="percent" id="percent" >
																<option value="">โปรเลือกส่วนลดเป็น Percent</option>
																<option value="10">10%</option>
																<option value="20">20%</option>
																<option value="30">30%</option>
																<option value="40">40%</option>
																<option value="50">50%</option>
																<option value="60">60%</option>
																<option value="70">70%</option>
																<option value="80">80%</option>
																<option value="90">90%</option>
															</select>
														</div>
													</div>
												</div>
												<input type="hidden" name="id_pro" id="id_pro" >
												<input type="hidden" name="edit_pro" value="edit_pro" >
											</div>
										</div>
										<div class="modal-footer">
											<button class="btn btn-sm" data-dismiss="modal">
												<i class="ace-icon fa fa-times"></i>
												Cancel
											</button>
											<button class="btn btn-sm btn-primary">
												<i class="ace-icon fa fa-check"></i>
												Save
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- /.end modaladd -->
						<?php $sql = ( "SELECT * FROM promotion ORDER BY ID_pro DESC" );
						$res = mysqli_query($con,$sql);
						while ( $r = mysqli_fetch_assoc($res) ) { ?>

							<div class="col-md-3">
								<label><strong>code ส่วนลด ของปี
									<?php
									date_default_timezone_set("Asia/Bangkok");
									$sdate = $r['s_date'];
									$sdate1 = strtotime( $sdate );
									$che = date( 'Y', $sdate1 );
								 echo $che; ?>
								 	
								 </strong></label>
								<input type="text" name="" class="form-control" value="Code : <?php echo $r['code'];?>    รับส่วนลด <?php echo $r['percent'];?> %" readonly=""><br>
							<!--	<span> วันที่booking: <?php echo$r['s_date'];?></span>  <span> สิ้นสุดbooking: <?php echo$r['e_date'];?></span><br>
								<span> วันที่checkin: <?php echo$r['s_checkin'];?></span>  <span> สิ้นสุดcheckin: <?php echo$r['e_checkin'];?></span>  -->
								<p> <strong>จำนวนครั้งที่ใช้ได้:</strong> <?php echo$r['num'];?> <strong>จำนวนครั้งที่ใช้ไปแล้ว:</strong> <?php echo$r['e_num'];?></p>
								<br><br>
								<?php if($r['status']==1){?>
									<label>
										<a href="edit_por.php?type=0&ID_pro=<?php echo $r['ID_pro'];?>"><input checked name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" >
											<span class="lbl"></span></a>
										</label>
										<button class="btn btn-white btn-warning btn-bold" onclick="delete_pro(<?php echo$r['ID_pro'];?>)" style="float: right;" value="<?php echo$r['ID_pro'];?>" >
											<i class="ace-icon fa fa-trash-o bigger-100 orange"></i>
											ลบ
										</button>
										<a class="btn btn-white btn-info btn-bold" style="float: right;" onclick="edit_pro(<?php echo $r['ID_pro'];?>,'<?php echo $r['code'];?>',<?php echo $r['percent'];?>)" href="#edit-form" data-toggle="modal">
											<i class="ace-icon fa fa-trash-o bigger-100 blue"></i>
											แก้ไข
										</a>
										<hr>
									</div>

								<?php } else{?>
									<label>
										<a href="edit_por.php?type=1&ID_pro=<?php echo $r['ID_pro'];?>"><input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" >
											<span class="lbl"></span></a>
										</label>
										<button class="btn btn-white btn-warning btn-bold" style="float: right;" onclick="delete_pro(<?php echo$r['ID_pro'];?>)" style="float: right;" value="<?php echo$r['ID_pro'];?>">
											<i class="ace-icon fa fa-trash-o bigger-100 orange"></i>
											ลบ
										</button>
										<button class="btn btn-white btn-info btn-bold"  style="float: right;" onclick="edit_pro(<?php echo $r['ID_pro'];?>,'<?php echo $r['code'];?>',<?php echo $r['percent'];?>)">
											<i class="ace-icon fa fa-trash-o bigger-100 blue"></i>
											แก้ไข
										</button>
										<hr>
									</div>

								<?php } ?>
								
							<?php } ?>
							<!-- จบข้อมูล-->
							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
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
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.date-picker').datepicker({
				autoclose: true,
				todayHighlight: true
			});

		});
		function delete_pro(id_pro){
			var r = confirm("คุณแน่ใจต้องการลบข้อมูลนี้");
			if (r == true) {
				window.location.href = 'add_pro.php?id_pro='+id_pro+'&delete_pro='+'delete_pro';
			} else {
				return false;
			}
			
		}
		function edit_pro(id_pro,code,percent){
			//alert(code);
			document.getElementById("procode").value = code;
			document.getElementById("percent").value = percent;
			document.getElementById("id_pro").value = id_pro;
		}
	</script>

</body>
</html>
