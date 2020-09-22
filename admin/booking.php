<?php 
$page = "booking";
session_start();
include_once('../connectdb.php');
if(empty($_SESSION['UserID']))
{
	echo "<script> alert('Please Login!!');window.location.href='login.php';</script>";
	exit();
}
if(isset($_GET["delete"])) {
	$sql_delete="DELETE FROM `booking` WHERE `booking`.`ID_booking` = '".$_GET["id_booking"]."'";
	//echo$sql_delete;
	mysqli_query($con,$sql_delete);
	header("Location: booking.php"); 
}

?>

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
					<li class="active">ข้อมูลการจอง</li>
				</ul><!-- /.breadcrumb -->

			</div>

			<div class="page-content">

				<div class="row">
					<div class="col-xs-12"><br>
						<!-- PAGE CONTENT BEGINS -->
						<!-- ข้อมูล-->						
						
						<a href="#modal-add" class="btn btn-primary" role="button" data-toggle="modal" >เพิ่มข้อมูลการจอง</a>	

						<div class="col-xs-12"><br><hr>
<?php
$date_s = date("Y-m-d");
$date_e   =  date( "Y-m-d", strtotime( $date_s." -7 day" ) ); 
?>
							
							<div class="col-xs-1">
								<form a>
									<input type="hidden" name="date_s" value="<?php echo $date_s ?>">
									<input type="hidden" name="date_e" value="<?php echo $date_s ?>">

									<button type="submit" class="btn btn-success">การจองวันนี้</button>  
								</form>
								
							</div> 
							<div class="col-xs-3">
								<form a>
									<input type="hidden" name="date_s" value="<?php echo $date_e ?>">
									<input type="hidden" name="date_e" value="<?php echo $date_s ?>">

									<button type="submit" class="btn btn-info">การจอง 7วันย้อนหลัง</button> 
								</form>
								
								
							</div> 
								<div class="col-xs-8">
									<form class="form-inline" action="/action_page.php">
									  <label for="วันที่เริ่มต้น">วันที่เริ่มต้น:</label>
									  <input type="date" class="form-control" placeholder="วันที่เริ่มต้น" id="date_s" name="date_s">
									  <label for="วันที่สิ้นสุด">วันที่สิ้นสุด:</label>
									  <input type="date" class="form-control" placeholder="วันที่สิ้นสุด" id="date_e" name="date_e">
									  <button type="submit" class="btn btn-primary">ค้นหา</button>
									</form>
								</div>
								
						</div>
							
							<hr>

							<div class="col-xs-12">
								<br><div class="table-header">
								ข้อมูลการจอง
							</div>



							<!-- div.table-responsive -->

							<!-- div.dataTables_borderWrap -->
							<div class="table-responsive">
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead> 
										<tr>
											<th>ลำดับ</th>
											<th >ID Booking</th>
											<th >ห้องพัก</th>
											<th >ชื่อ</th>
											<th>เบอร์โทรศัพท์</th>
											<th >E-maail</th>
											<th >checkin</th>
											<th>checkout</th>
											<th >ผู้เข้าพัก</th>
											<th>จำนวนคืน</th>
											<th >ราคารวม</th>
											<th >ธนาคาร</th>
											<th >สลิป</th>
											<th >เปลี่ยนสถานะการชำระ</th>
											<th >invoice</th>
											<th >เเก้ไข</th>
											<th >ลบ</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i =1;
										$sql ="SELECT * FROM `booking` INNER JOIN `room` ON booking.ID_room = room.ID_room WHERE not status=2 order by booking.ID_booking DESC ";
										$query = mysqli_query($con,$sql);
										while ($results = mysqli_fetch_assoc($query)) { ?>


											<tr>
												<td><?php echo$i++?></td>
												<td><?php echo $results["num_book"]?></td>
												<td><?php echo $results["name_room_th"]?></td>
												<td><?php echo $results["names"]?></td>
												<td><?php echo $results["phone"]?></td>
												<td><?php echo $results["email"]?></td>
												<td><?php echo date('d-m-Y', strtotime($results["checkin"]))?></td>
												<td><?php echo date('d-m-Y', strtotime($results["checkout"]))?> </td>
												<td><?php echo $results["number_guest"]?></td>
												<td><?php echo $results["day"]?></td>
												<td><?php echo $results["totalprice"]?></td>
												<td><?php echo $results["bank"]?></td>
												<td>
													
										<?php if ($results["silps"] == "") { ?>
											<b>ยังไม่ได้ชำระ</b>
										<?php }else{ ?>
											<ul class="ace-thumbnails clearfix">
										<?php if ($results["silps"] == "") { ?>
											
										<?php }else if ($results["silps"] == "-") { ?>
										<li>
											<a href="../img/slips/paypal.png" data-rel="colorbox">
											<img width="75" height="75" src="../img/slips/paypal.png" />
											</a>
										</li>
											<?php }else { ?>
												<li>
											<a href="../img/slips/<?php echo $results["silps"]?>" data-rel="colorbox">
											<img width="75" height="75" src="../img/slips/<?php echo $results["silps"]?>" />
											</a>
										</li>
											<?php } ?>
											
										</ul>
									<?php 	} ?>



											
									



													</td>
												<td align="center">
													<?php

													switch ($results['status']) {
														case 0: ?>
														<div class="btn-group">
															<button data-toggle="dropdown" class="btn btn-warning dropdown-toggle" aria-expanded="false">
																ยังไม่จ่าย
																<i class="ace-icon fa fa-angle-down icon-on-right"></i>
															</button>

															<ul class="dropdown-menu">
																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=0">ยังไม่จ่าย</a>
																</li>

																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=1">จ่ายแล้ว</a>
																</li>
																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=4">ยกเลิก</a>
																</li>

																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=3">ไม่ทันกำหนด</a>
																</li>
															</ul>
														</div>
														<?php	break; 
														case 1 : ?>
														<div class="btn-group">
															<button data-toggle="dropdown" class="btn btn-success dropdown-toggle" aria-expanded="false">
																จ่ายแล้ว
																<i class="ace-icon fa fa-angle-down icon-on-right"></i>
															</button>
															<ul class="dropdown-menu">
																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=0">ยังไม่จ่าย</a>
																</li>

																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=1">จ่ายแล้ว</a>
																</li>
																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=4">ยกเลิก</a>
																</li>

																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=3">ไม่ทันกำหนด</a>
																</li>
															</ul>
														</div>
														<?	break;
														case 3 : ?>
														<div class="btn-group">
															<button data-toggle="dropdown" class="btn btn-info dropdown-toggle" aria-expanded="false">
																ไม่ทันกำหนด
																<i class="ace-icon fa fa-angle-down icon-on-right"></i>
															</button>
															<ul class="dropdown-menu">
																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=0">ยังไม่จ่าย</a>
																</li>

																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=1">จ่ายแล้ว</a>
																</li>
																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=4">ยกเลิก</a>
																</li>

																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=3">ไม่ทันกำหนด</a>
																</li>
															</ul>
														</div>
														<?php	break;
														case 4 : ?>
														<div class="btn-group">
															<button data-toggle="dropdown" class="btn btn-danger dropdown-toggle" aria-expanded="false">
																ยกเลิก
																<i class="ace-icon fa fa-angle-down icon-on-right"></i>
															</button>
															<ul class="dropdown-menu">
																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=0">ยังไม่จ่าย</a>
																</li>

																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=1">จ่ายแล้ว</a>
																</li>
																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=4">ยกเลิก</a>
																</li>

																<li>
																	<a href="up_payment.php?mm=<?php echo $results["ID_booking"]?>&st=3">ไม่ทันกำหนด</a>
																</li>
															</ul>
														</div>
														<?php	break;
													}
													?>
													
												</td>
												<td><b><a href="newinvoice.php?id_booking=<?php echo$results['ID_booking']?>"> invoice </a></b></td>
												<td><a href="#modal_edit"  class="btn btn-xs btn-warning no-radius" role="button" data-toggle="modal" onclick="edit_booking('<?php echo $results["ID_room"]?>','<?php echo $results["names"]?>','<?php echo $results["phone"]?>','<?php echo $results["email"]?>','<?php echo date('Y-m-d', strtotime($results["checkin"]))?>','<?php echo date('Y-m-d', strtotime($results["checkout"]))?>','<?php echo $results["number_guest"]?>','<?php echo $results["ID_booking"]?>')">
													<i class="ace-icon fa fa-pencil-square-o "></i>Edit
												</a>
											</td>
											<td><a href="booking.php?delete=delete&id_booking=<?php echo$results['ID_booking']?>" class="btn btn-xs btn-danger no-radius"  onclick="return confirm('คุณแน่ใจว่าต้องการลบข้อมูลนี้ !');">
												<i class="ace-icon fa fa-trash-o"></i>Delete
											</a>
										</td>
									</tr>




								<?php }
								?>
							</tbody>
						</table>							
					</div>
				</div>


				<!-- /.modal add -->
				<div id="modal-add" class="modal" tabindex="-1">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="blue bigger">เพิ่มข้อมูลห้องพัก</h4>
							</div>

							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<form action="addbooking.php" >
											<div class="col-md-6">
												<div class="form-group">
													<label>ชื่อห้องพัก</label>
													<?php 
													$sqlnameroom = "SELECT * FROM room " ;
													$renameroom = mysqli_query( $con, $sqlnameroom );

													?>
													<select name="idroom"  class="form-control">
														<?php 
														while($snameroom = mysqli_fetch_assoc( $renameroom )){

															echo "<option value='".$snameroom['ID_room']."'>".$snameroom['name_room_th']."</option>"; 
														}
														?>
													</select>

												</div>
												<div class="form-group">
													<label>ชื่อ</label>
													<input type="text" class="form-control" name="names" placeholder="ระบุ ชื่อ" required>
												</div>
												<div class="form-group">
													<label>เบอร์โทรศัพท์</label>
													<input type="text" class="form-control" name="phone" placeholder="ระบุ เบอร์โทรศัพท์" required>
												</div>
												<div class="form-group">
													<label>E-mail</label>
													<input type="text" class="form-control" name="email" placeholder="thechic@thechic.com" required>
												</div>
											</div>
											<div class="col-md-6">


												<div class="form-group">
													<label>checkin</label>
													<input type="date" class="form-control" name="checkin" placeholder="ระบุ checkin" required>
												</div>
												<div class="form-group">
													<label>checkout</label>
													<input type="date" class="form-control" name="checkout" placeholder="ระบุ checkout" required>
												</div>

												<div class="form-group">
													<label>จำนวนเข้าพัก</label>
													<select class="form-control" name="people" required>
														<?php 
														for($i=1;$i<=10;$i++){

															echo "<option value='".$i."'>".$i."&nbsp;คน</option>"; 
														}
														?>
													</select>

												</div>
												<div class="form-group">
													<label>สถานะ  </label>
													<select class="form-control" name="status" required>
														<option value="">โปรดเลือกรายการ</option>
														<option value="2">จองจากเว็บอื่น</option>
														<option value="0">ยังไม่จ่าย</option>
														<option value="1">จ่ายแล้ว</option>
														<option value="4">ยกเลิก</option>
														<option value="3">จ่ายไม่ทันกำหนด</option>
													</select>

												</div>
											</div>
											<input type="text" name="ck" value="A" hidden>

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
				<!-- /.end modaladd -->
				<!-- /.modal edit -->
				<div id="modal_edit" class="modal" tabindex="-1">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="blue bigger">แก้ไขข้อมูลห้องพัก</h4>
							</div>

							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<form action="update_booking.php" enctype="multipart/form-data" method="post">
											<div class="col-md-6">
												<div class="form-group">
													<label>ชื่อห้องพัก</label>
													<?php 
													$sqlnameroom = "SELECT * FROM room " ;
													$renameroom = mysqli_query( $con, $sqlnameroom );

													?>
													<select name="idroom" class="form-control" id="id_room" >
														<?php 
														while($snameroom = mysqli_fetch_assoc( $renameroom )){

															echo "<option value='".$snameroom['ID_room']."'>".$snameroom['name_room_th']."</option>"; 
														}
														?>
													</select>

												</div>
												<div class="form-group">
													<label>ชื่อ</label>
													<input type="text" class="form-control" name="names" id="names" placeholder="ระบุ ชื่อ" required>
												</div>
												<div class="form-group">
													<label>เบอร์โทรศัพท์</label>
													<input type="text" class="form-control" name="phone" id="phone" placeholder="ระบุ เบอร์โทรศัพท์" required>
												</div>
												<div class="form-group">
													<label>E-mail</label>
													<input type="text" class="form-control" name="email" id="email" placeholder="thechic@thechic.com" required>
												</div>
											</div>
											<div class="col-md-6">


												<div class="form-group">
													<label>checkin</label>
													<input type="date" class="form-control" name="checkin" id="checkin" placeholder="ระบุ checkin" required>
												</div>
												<div class="form-group">
													<label>checkout</label>
													<input type="date" class="form-control" name="checkout" id="checkout" placeholder="ระบุ checkout" required>
												</div>

												<div class="form-group">
													<label>จำนวนเข้าพัก</label>
													<select class="form-control" name="people"  id="people" required>
														<?php 
														for($i=1;$i<=10;$i++){

															echo "<option value='".$i."'>".$i."&nbsp;คน</option>"; 
														}
														?>
													</select>

												</div>
											</div>		

										</div>
									</div>
								</div>
								<input type="hidden" name="id_booking" id="id_booking" >
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
				<!-- /.end modal edit -->
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
</div>
<!-- /.main-container -->














<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
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
<!--[if !IE]> -->






<script src="assets/js/bootstrap.min.js"></script>
<!-- page specific plugin scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="assets/js/dataTables.buttons.min.js"></script>
<script src="assets/js/buttons.flash.min.js"></script>
<script src="assets/js/buttons.html5.min.js"></script>
<script src="assets/js/buttons.print.min.js"></script>
<script src="assets/js/buttons.colVis.min.js"></script>
<script src="assets/js/dataTables.select.min.js"></script>

<script type="text/javascript">
	jQuery(function($) {
				//initiate dataTables plugin
				var myTable = $('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					{ "bSortable": false },
					null,null, null,null, null, null,null, null,null, null, null,null,null, null, null,
					{ "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			        
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
					
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
					
					"iDisplayLength": 25,
					
					
					select: {
						style: 'multi'
					}
				} );
				
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					{
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					},
					{
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					},
					{
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					},
					{
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					},
					{
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					},
					{
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					}		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
				
				////
				
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
				
				
				
				
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
				
				
				
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
				
				
				
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
					
					var off2 = $source.offset();
					//var w2 = $source.width();
					
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
				
				
			})
		</script>
		<script type="text/javascript">
			function edit_booking(id_room,names,phone,email,checkin,checkout,people,id_booking){
				
				document.getElementById("id_room").value=id_room;
				document.getElementById("names").value=names;
				document.getElementById("phone").value=phone;
				document.getElementById("email").value=email;
				document.getElementById("checkin").value=checkin;
				document.getElementById("checkout").value=checkout;
				document.getElementById("people").value=people;
				document.getElementById("id_booking").value=id_booking;
			}
		</script>
		
	</body>
	</html>
