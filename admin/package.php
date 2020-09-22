<?php 
$page = 'package';
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
if($_GET["delete"] == "delete") {
	$sql_delete="DELETE FROM package WHERE id_package = '".$_GET["id_package"]."'";
	//echo$sql_delete;
	mysqli_query($con,$sql_delete);
	header("Location: package.php"); 
}else if ($_GET["delete"] == "edit") {
	$sql_delete="UPDATE `package` SET `sta_package` = '".$_GET["sta"]."' WHERE `package`.`id_package` = '".$_GET["id_package"]."';";
	//echo $sql_delete;
	mysqli_query($con,$sql_delete);
	header("Location: package.php"); 
}{

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
					<li class="active">ข้อมูล package</li>
				</ul><!-- /.breadcrumb -->

				
			</div>

			<div class="page-content">

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<!-- ข้อมูล-->						
						

						<div class="col-xs-12">
							<br>
							<a href="#modal-form" class="btn btn-danger" role="button" data-toggle="modal">เพิ่มข้อมูล package</a>
							<div class="clearfix">
								<br>
							</div>

							<div class="table-header">
								ข้อมูล package
							</div>

							<!-- div.table-responsive -->

							<!-- div.dataTables_borderWrap -->
							<div class="table-responsive">
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead> 
										<tr>
											<th>ลำดับ</th>
											<th>ชื่อ package</th>
											<th>รายละเอียด package</th>
											<th>ราคา package</th>
											<th>รูปภาพ package</th>
											<th>สถานะ package</th>
											
											<th>แก้ไข</th>
											<th>ลบ</th>
										</tr>
									</thead>
									<tbody>
		<?php 
			$i =1;
			$sql ="SELECT * FROM package ";
			$query = mysqli_query($con,$sql);
			while ($results = mysqli_fetch_assoc($query)) { ?>
		<tr>
			<td align="center"><?php echo$i++?></td>
			<td><?php echo $results["name_package"]?></td>
			<td><?php echo $results["det_package"]?></td>
			<td><?php echo $results["pri_package"]?></td>
			<td>
				<ul class="ace-thumbnails clearfix ">
					<div class="center"><li>
						<a href="../img/<?php echo $results["img_package"]?>" data-rel="colorbox">
						<img width="75" height="75" src="../img/<?php echo $results["img_package"]?>" />
						</a>
					</li></div>
				</ul>
			</td>
			<td><?php if ($results["sta_package"] == "0") { ?>
				<a href="package.php?delete=edit&id_package=<?php echo$results['id_package']?>&sta=1" class="btn btn-success" role="button">เปิดการใช้งาน</a>
			<?php }else{ ?>
				<a href="package.php?delete=edit&id_package=<?php echo$results['id_package']?>&sta=0" class="btn btn-danger" role="button">ปิกการใช้งาน</a>
			<?php } ?>
				
				
				<?php echo $results["detail_room_th"]?></td>
			<td><a href="edit_package.php?id_package=<?php echo $results["id_package"]?>"" class="btn btn-md btn-warning" role="button"><i class="ace-icon fa fa-pencil-square-o "></i>Edit</a></a></td>

			<td><a href="package.php?delete=delete&id_package=<?php echo$results['id_package']?>" class="btn btn-md btn-danger no-radius"  onclick="return confirm('คุณแน่ใจว่าต้องการลบข้อมูลนี้ !');"><i class="ace-icon fa fa-trash-o"></i>Delete</a></td>
		</tr>
	<?php } ?>
		
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
				<h4 class="blue bigger">เพิ่มข้อมูล package</h4>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<form action="file_upload.php" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label >ชื่อข้อมูล package</label>
									<input type="text" class="form-control" name="name_package"  placeholder="ระบุ ชื่อpackage">
								</div>
								
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label >รูปโชว์ package</label>
									<input type="file" class="form-control" name="file" required>
								</div>
								

								
							</div>
							<div class="form-group">
								<label >รายละเอียด package</label>   
									<textarea name="det_package" id="detail" rows="15"  cols="100%"></textarea>
								<input name="type" value="package" hidden>
							</div>

							<div class="form-group">
								<label >ราคา package</label>   
								<input type="text" class="form-control" name="pri_pk" required="">
								
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

<script type="text/javascript">
	jQuery(function($) {
				//initiate dataTables plugin
				var myTable = $('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					{ "bSortable": false },
					null,null, null,null, null, 
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
