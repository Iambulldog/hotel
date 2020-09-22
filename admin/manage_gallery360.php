<?php 
$page = "manage_gallery360";
session_start();
include_once('../connectdb.php');
if($_SESSION['UserID']=='')
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
					<li class="active">จัดการรูปห้องพัก 360</li>
				</ul><!-- /.breadcrumb -->

				
			</div>

			<div class="page-content">

				<div class="row">
					<div class="col-xs-12"><br>
						<!-- PAGE CONTENT BEGINS -->
						<!-- ข้อมูล-->
						<!-- modal add-->
						<a href="#modal-form" class="btn btn-primary" role="button" data-toggle="modal" >แก้ไขรูป360</a> <br><br>
						<div id="modal-form" class="modal" tabindex="-1">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="blue bigger">แก้ไขรูป360</h4>
									</div>

									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">
												<form action="file_upload.php" enctype="multipart/form-data" method="post">
													<div class="col-md-6">
														<div class="form-group">
															<label><strong>รูปภาพ</strong></label>
															<input type="file" id="id-input-file-2" name="file" />
															<input name="type" value="ga360" hidden>
														</div>
													</div>	
													<?php
													$sql = ( "SELECT * FROM room " );
													$res = mysqli_query( $con, $sql );
													?>
													<div class="col-md-6">
														<label for="form-field-select-3"><strong>เลือกห้องพักที่ต้องการเพิ่ม</strong></label>
														<br />
														<select name="room" class="chosen-select form-control" id="select_room" data-placeholder="Choose a State..." >
															<option value="">เลือกห้อง</option>
															<?php while ( $r_room = mysqli_fetch_assoc($res) ) { ?>
																<option value="<?php echo $r_room['ID_room']?>"><?php echo $r_room['name_room_th']?></option>
															<?php }?>
														</select>

													</div>	

												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button class="btn btn-sm" data-dismiss="modal">
												<i class="ace-icon fa fa-times"></i>
												Cancel
											</button>
											<button class="btn btn-sm btn-primary"  id="Save" type="submit"> 
												<i class="ace-icon fa fa-check"></i>
												Save
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- /.end modaladd -->

						<?php $sql = ( "SELECT * FROM room " );
						$res = mysqli_query( $con, $sql );


						while ( $r = mysqli_fetch_assoc( $res ) ) { 
							$sql2 = "SELECT * FROM gallery360 where ID_room='".$r['ID_room']."'";
							$res2 = mysqli_query( $con, $sql2 );
							?>
							<div class="col-md-4" >						
								<div class="widget-box widget-color-blue2">
									<div class="widget-header">
										<h4 class="widget-title lighter smaller"><?php echo $r['name_room_th'];?></h4>
									</div>
									<div class="widget-body">
										<br>
										<ul class="ace-thumbnails clearfix" style="">
											<?php 
											while($r2 = mysqli_fetch_assoc( $res2 )){?>
												<li>
													<a href="../img/img360/<?php echo $r2['link'];?>" data-rel="colorbox" >
														<img width="450" height="300" alt="450x300" src="../img/img360/<?php echo $r2['link'];?>" />
														<div class="text">
															<div class="inner"></div>
														</div>
													</a>
												
											</li>

										<?php  } ?>
									</ul>	

								</div>
							</div>
						</div>									
					<? }?>
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
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/jquery.colorbox.min.js"></script>


<script type="text/javascript">
	function update(type,id){
		//alert(type+id);
		var ch = 'g';
		window.location.href = "edit_gallery_up.php?type="+type+"&id="+id+"&ch="+ch;
	}
</script>
<script type="text/javascript">
	jQuery(function($) {
		var $overflow = '';
		var colorbox_params = {
			rel: 'colorbox',
			reposition:true,
			scalePhotos:true,
			scrolling:false,
			previous:'<i class="ace-icon fa fa-arrow-left"></i>',
			next:'<i class="ace-icon fa fa-arrow-right"></i>',
			close:'&times;',
			current:'{current} of {total}',
			maxWidth:'100%',
			maxHeight:'100%',
			onOpen:function(){
				$overflow = document.body.style.overflow;
				document.body.style.overflow = 'hidden';
			},
			onClosed:function(){
				document.body.style.overflow = $overflow;
			},
			onComplete:function(){
				$.colorbox.resize();
			}
		};

		$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
	
	
	$(document).one('ajaxloadstart.page', function(e) {
		$('#colorbox, #cboxOverlay').remove();
	});

	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
		no_file:'No File ...',
		btn_choose:'Choose',
		btn_change:'Change',
		droppable:false,
		onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
	$("#Save").click(function(){
		var chek_file = $("#id-input-file-2").val();
		var chek_room = $("#select_room").val();
		//alert(chek_file == );
		if (chek_file == '') {
			alert("กรุณาเลือกไฟล์รูป!");
			return false;
		}
		if (chek_room == '') {
			alert("กรุณาเลือกห้อง!");
			return false;
		}

	});

})
</script>

</body>
</html>
