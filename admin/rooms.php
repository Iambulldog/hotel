<?php 
$page = 'rooms';
session_start();
include_once('../connectdb.php');
if(empty($_SESSION['UserID']))
{
	echo "<script> alert('Please Login!!');window.location.href='login.php';</script>";
	exit();
}
?>

<?php include_once( "connectdb.php" );error_reporting(E_ALL & ~E_NOTICE);?>
<?php
if(isset($_GET["delete"])) {
	$sql_delete="DELETE FROM room WHERE ID_room = '".$_GET["id_room"]."'";
	//echo$sql_delete;
	mysqli_query($con,$sql_delete);
	header("Location: rooms.php"); 
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
					<li class="active">รายละเอียดห้อง</li>
				</ul><!-- /.breadcrumb -->

				
			</div>

			<div class="page-content">

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<!-- ข้อมูล-->						
						

						<div class="col-xs-12">
							<br>
							<a href="#modal-form" class="btn btn-danger" role="button" data-toggle="modal">เพิ่มข้อมูล</a>
							<div class="clearfix">
								<br>
							</div>

							<div class="table-header">
								รายละเอียดห้อง
							</div>

							<!-- div.table-responsive -->

							<!-- div.dataTables_borderWrap -->
							<div class="table-responsive">
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead> 
										<tr>
											<th>ลำดับ</th>
											<th>ชื่อห้องพัก(ภาษาไทย)</th>
											<th>ชื่อห้องพัก(ภาษาอังกฤษ)</th>
											<th>ชื่อห้องพัก(ภาษาจีน)</th>
											<th>รายละเอียดห้อง(ภาษาไทย)</th>
											<th>รายละเอียดห้อง(ภาษาอังกฤษ)</th>
											<th>รายละเอียดห้อง(ภาษาจีน)</th>
											<th>ราคา</th>
											<th>จำนวนเตรียง</th>
											<th>ภาพ</th>
											<th>แก้ไขรายละเอียดห้อง</th>
											<th>แก้ไข</th>
											<th>ลบ</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i =1;
										$sql ="SELECT * FROM room ";
										$query = mysqli_query($con,$sql);
										while ($results = mysqli_fetch_assoc($query)) { ?>
											<tr>
												<td align="center"><?php echo$i++?></td>
												<td><?php echo $results["name_room_th"]?></td>
												<td><?php echo $results["name_room_en"]?></td>
												<td><?php echo $results["name_room_cn"]?></td>
												<td><?php echo $results["detail_room_th"]?></td>
												<td><?php echo $results["detail_room_en"]?></td>
												<td><?php echo $results["detail_room_cn"]?></td>
												<td><?php echo $results["price_room"]?> </td>
												<td><?php echo $results["total_room"]?></td>
												<td><?php echo $results["image_room"]?></td>
												<td align="center"><a href="edit_detail_room.php?ID_room=<?php echo $results["ID_room"]?>" class="btn btn-xs btn-info no-radius" ><i class="ace-icon fa fa-pencil-square-o "></i>Edit</a></td>

												<td><a href="#modal_edit" class="btn btn-xs btn-warning no-radius" role="button" data-toggle="modal" onclick="edit(<?php echo $results['ID_room']?>,'<?php echo $results['name_room_th']?>','<?php echo $results['name_room_en']?>','<?php echo $results['name_room_cn']?>',<?php echo $results['price_room']?>,<?php echo $results['total_room']?>,'<?php echo $results['image_room']?>');">
													<i class="ace-icon fa fa-pencil-square-o "></i>Edit
												</a></a></td>
												<td><a href="rooms.php?delete=delete&id_room=<?php echo$results['ID_room']?>" class="btn btn-xs btn-danger no-radius"  onclick="return confirm('คุณแน่ใจว่าต้องการลบข้อมูลนี้ !');">
													<i class="ace-icon fa fa-trash-o"></i>Delete</a>
												</td>
											</tr>
										<?php }
										?>
									</tbody>
								</table>							
							</div>
						</div>
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

<!-- /.modal add -->
<div id="modal-form" class="modal" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="blue bigger">เพิ่มข้อมูลห้องพัก</h4>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<form action="file_upload.php" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label >ชื่อห้องพัก(ภาษาไทย)</label>
									<input type="text" class="form-control" name="name_room_th"  placeholder="ระบุ ชื่อห้องพัก(ภาษาไทย)">
								</div>
								<div class="form-group">
									<label >ชื่อห้องพัก(ภาษาอังกฤษ)</label>
									<input type="text" class="form-control" name="name_room_en"  placeholder="ระบุ ชื่อห้องพัก(ภาษาอังกฤษ)">
								</div>
								<div class="form-group">
									<label >ชื่อห้องพัก(ภาษาจีน)</label>
									<input type="text" class="form-control" name="name_room_cn"  placeholder="ระบุ ชื่อห้องพัก(ภาษาจีน)">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label >รูปโชว์ห้องพัก</label>
									<input type="file" class="form-control" name="file" required>
								</div>
								<div class="form-group">
									<label >ราคาห้อง</label>
									<input type="text" class="form-control" name="price_room"  placeholder="ระบุ ราคาห้อง">
								</div>

								<div class="form-group">
									<label >จำนวนห้อง</label>
									<input type="text" class="form-control" name="total_room"  placeholder="ระบุ จำนวนห้อง">
									<input name="type" value="adroom" hidden>
								</div>
							</div>
							<div class="form-group">
								<label >รายละเอียด(ภาษาไทย)</label>   
								<textarea name="detail_room_th" rows="5" class="form-control"  placeholder="ระบุ รายละเอียด(ภาษาอังกฤษ)"></textarea>
							</div>

							<div class="form-group">
								<label >รายละเอียด(ภาษาอังกฤษ)</label>
								<textarea name="detail_room_en" rows="5" class="form-control"  placeholder="ระบุ รายละเอียด(ภาษาอังกฤษ)"></textarea>
							</div>
							<div class="form-group">
								<label >รายละเอียด(ภาษาจีน)</label>
								<textarea name="detail_room_cn" rows="5"  class="form-control" placeholder="ระบุ รายละเอียด(ภาษาจีน)"></textarea>
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
						<div class="col-md-6">
							<form action="file_upload.php" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label >ชื่อห้อง(ภาษาไทย)</label>
									<input type="text" class="form-control" name="edit_name_room_th" id="edit_name_room_th" value="">
								</div> 
								<div class="form-group">
									<label >ชื่อห้อง(ภาษาอังกฤษ)</label>
									<input type="text" class="form-control" name="edit_name_room_en" id="edit_name_room_en" value="">
								</div>
								<div class="form-group">
									<label >ชื่อห้อง(ภาษาจีน)</label>
									<input type="text" class="form-control" name="edit_name_room_cn" id="edit_name_room_cn" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label >ราคาห้อง</label>
									<input type="text" class="form-control" name="edit_price_room" id="edit_price_room" value="">
								</div>
								<div class="form-group">
									<label >จำนวนเตียง</label>
									<input type="text" class="form-control" name="edit_total_room" id="edit_total_room" value="">
								</div>
								<div class="form-group">
									<label >รูปห้องพักเดิม</label><br>

									<img id="img" width="150px"><br>
									<label >เลือกรูปห้องพักใหม่</label>
									<input type="file" class="form-control" name="edit_image_room" id="edit_image_room" value="">
								</div>
								<input type="hidden" name="edit_ID_room" id="edit_ID_room" value="" >
								<input type="hidden" name="type"  value="editroom" >
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
<!-- /.end modal edit -->
<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>





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
<script>
	function edit(edit_ID_room,edit_name_room_th,edit_name_room_en,edit_name_room_cn,edit_price_room,edit_total_room,edit_image_room){
// set value to modal
document.getElementById("edit_ID_room").value=edit_ID_room;
document.getElementById("edit_name_room_th").value=edit_name_room_th;
document.getElementById("edit_name_room_en").value=edit_name_room_en;
document.getElementById("edit_name_room_cn").value=edit_name_room_cn;
document.getElementById("edit_price_room").value=edit_price_room;
document.getElementById("edit_total_room").value=edit_total_room;

document.getElementById("img").setAttribute("src", "../img/imgroom/"+edit_image_room); 

};

</script>

<script type="text/javascript">
	jQuery(function($) {
				//initiate dataTables plugin
				var myTable = $('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					{ "bSortable": false },
					null,null, null,null, null, null,null, null,null, null, 
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
		
	</body>
	</html>
