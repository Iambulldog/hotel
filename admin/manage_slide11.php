<?php 
$page = "manage_slide";
session_start();
include_once('../connectdb.php');
if(empty($_SESSION['UserID']))
{
	echo "<script> alert('Please Login!!');window.location.href='login.php';</script>";
	exit();
}
if(isset($_GET["delete"])) {
	$sql_delete="DELETE FROM `bg` WHERE `bg`.`id` = '".$_GET["id"]."'";
	//echo$sql_delete;
  //$con->query($sql);
	mysqli_query($con,$sql_delete);
	unlink("../img/".$_GET['link']);
	echo "<script> alert('ได้ลบรูปภาพเรียบร้อยเเล้วค่ะ!!');window.location.href='manage_slide.php';</script>";
	//header("Location: manage_slide.php"); 
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
					<li class="active">จัดการภาพสไลด์</li>
				</ul><!-- /.breadcrumb -->

			</div>

			<div class="page-content">

				<div class="row">
					<div class="col-xs-12"><br>
						<!-- PAGE CONTENT BEGINS -->
						<!-- ข้อมูล-->						
						<a href="#modal-form" class="btn btn-danger" role="button" data-toggle="modal" >เพิ่มรูปสไลด์</a> <br><br>
						<div id="modal-form" class="modal" tabindex="-1">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="blue bigger">เพิ่มข้อรูปสไลด์</h4>
									</div>

									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">
												<form method="post" action="file_upload.php" enctype="multipart/form-data">
												<div class="col-md-6">
													<div class="form-group">
															<label><strong>รูปภาพสไลด์ <font style="color: #FF0000">***ขนาดภาพ 1900*800</font></strong></label>
															<input type="file" id="id-input-file-2" name="file[]" />
															<label><strong>รูปภาพโปรโมชั่นที่1 <font style="color: #FF0000">***ขนาดภาพ 550*525 </font></strong></label>
															<input type="file" id="id-input-file-2" name="file[]" />
															<label><strong>รูปภาพโปรโมชั่นที่2 <font style="color: #FF0000">***ขนาดภาพ 620*80 </font></strong></label>
															<input type="file" id="id-input-file-2" name="file[]" />
															<input type="hidden" name="type" value="sl" >
													</div>
												</div>	
												<div class="col-md-6">
													<label><strong>คำบรรยาย</strong></label>
													<textarea class="form-control" name="detail" id="form-field-8" rows="7" placeholder="คำบรรยายรูปภาพ"></textarea>
													
												</div>	
												
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-sm btn-danger" data-dismiss="modal">
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

							<ul class="ace-thumbnails clearfix">
								<?php $sql = ( "SELECT * FROM bg " );
								$res = mysqli_query( $con, $sql );
								while ( $r = mysqli_fetch_assoc( $res ) ) { ?>
									<li>
										<label><h4 align="center">รูปสไลค์</h4></label>
										<a href="../img/<?php echo $r['link'];?>" data-rel="colorbox">
											<img width="300" height="250" alt="300x250" src="../img/<?php echo $r['link'];?>" />
											<div class="text">
												
											</div>
										</a>
										
										<a href="../img/<?php echo $r['link1'];?>" data-rel="colorbox">
											<img width="300" height="250" alt="300x250" src="../img/<?php echo $r['link1'];?>" />
											<div class="text">
												
											</div>
										</a>

										<a href="../img/<?php echo $r['link2'];?>" data-rel="colorbox">
											<img width="300" height="250" alt="300x250" src="../img/<?php echo $r['link2'];?>" />
											<div class="text">
												
											</div>
										</a>
										<hr>
										<center><a href="manage_slide.php?delete=delete&id=<?php echo$r['id']?>&link=<?php echo$r['link']?>" class="btn btn-danger" role="button">ลบ</a>
										<?php if($r['status']==1){?>
										<input checked name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" onclick="update(0,'<?php echo $r['id'];?>')">
											<span class="lbl"></span>
									</li>
									<?php } else{ ?>
											<input  name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" onclick="update(1,'<?php echo $r['id'];?>')">
											<span class="lbl"></span>
									</li>
								<?php	} } ?>
								</center></ul>
							<!-- PAGE CONTENT ENDS -->
						
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

<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="assets/js/jquery.colorbox.min.js"></script>

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	function update(type,id){
		//alert(type+id);
		var update = 'update';
		window.location.href = "edit_slide_up.php?type="+type+"&id="+id+"&update="+update;
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
		//alert(chek_file == );
		if (chek_file == '') {
			alert("กรุณาเลือกไฟล์!");
			return false;
		}
       
    });

})
</script>
</body>
</html>
