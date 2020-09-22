<?php 
$page="facilties";
session_start();
include_once('../connectdb.php');
if(empty($_SESSION['UserID']))
{
	echo "<script> alert('Please Login!!');window.location.href='login.php';</script>";
	exit();
}
?>

<?php include_once( "connectdb.php" );error_reporting(E_ALL & ~E_NOTICE);?>
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
					<li class="active">จัดการสิ่งอำนวยความสะดวก</li>
				</ul><!-- /.breadcrumb -->

			</div>

			<div class="page-content">

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<!-- ข้อมูล-->
						<div class="col-md-7">
							<div class="widget-box widget-color-blue2">
								<div class="widget-header"> 
									<h4 class="widget-title lighter smaller">จัดการข้อมูลสิ่งอำนวยความสะดวก</h4>
								</div>
								<div class="widget-body"><br>
									&nbsp; &nbsp; &nbsp;<a href="#modal-form" role="button" data-toggle="modal" class="btn btn-info">เพิ่มสิ่งอำนวยความสะดวก</a> 

									<!-- /.modal add -->
									<div id="modal-form" class="modal" tabindex="-1">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="blue bigger">เพิ่มสิ่งอำนวยความสะดวก</h4>
												</div>

												<div class="modal-body">
													<div class="row">
														<div class="col-md-12">
															<form method="post" action="save_facilties.php">
																<div class="form-group">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label>ชื่อไทย :</label>
																			<input name="fac_th" class="form-control" id="fac" placeholder="ชื่อ ไทย" required>
																		</div> 
																		<div class="form-group">
																			<label>ชื่ออังกฤษ :</label>
																			<input name="fac_en" class="form-control" id="fac" placeholder="ชื่อ อังกฤษ" required>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label>ชื่อจีน :</label>
																			<input name="fac_cn" class="form-control" id="fac" placeholder="ชื่อ จีน" required>
																		</div>
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
									<!-- /.end modaladd -->

									<div class="table-responsive"><br>
										<table id="dynamic-table" class="table table-striped table-bordered table-hover" style="width: 100%">
											<thead> 
												<tr>
													<th style="width:5%"><center>ลำดับ</center></th>
													<th  style="width:25%"><center>ชื่อไทย</center></th>
													<th  style="width:25%"><center>ชื่ออังกฤษ</center></th>
													<th  style="width:25%"><center>ชื่อจีน</center></th>
													<th  style="width:10%"><center>เเก้ไข</center></th>
													<th  style="width:10%"><center>ลบ</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$i=1;
												$sql = ( "SELECT * FROM tb_fac" );
												$res = mysqli_query( $con, $sql );
												while ($r = mysqli_fetch_assoc($res)) {

													?>
													<tr>
														<td align="center"><?php echo $i;?></td>
														<td>          
															<div class="form-group">               
																<input type="text" class="form-control" value="<?php echo $r['name_fac_th'];?>" id="namefac_th<?php echo $i;?>">
															</div>              
														</td>
														<td> 
															<div class="form-group">               
																<input type="text" class="form-control" value="<?php echo $r['name_fac_en']?>" id="namefac_en<?php echo $i;?>">
															</div>    
														</td>
														<td>
															<div class="form-group">               
																<input type="text" class="form-control" value="<?php echo $r['name_fac_cn']?>" id="namefac_cn<?php echo $i;?>">
															</div>    
														</td>
														<input type="hidden" id="savefac<?php echo$i;?>" value="<?php echo $r['id_fac'];?>">
														<td align="center"><a onclick="sentsave(<?php echo $i;?>)" type="button" class="btn btn-success btn-sm" >save</a></td>
														<td align="center"><a href="dal.php?id=<?php echo $r['id_fac']?>" type="button" onclick="return confirm('คุณเเน่ใจต้องการลบ ?')" class="btn btn-danger btn-sm">ลบ</a> </td>
													</tr> 
													<?php $i++;}  ?>
												</tbody>
											</table>						
										</div>
									</div>
								</div>						
							</div>
							<div class="col-md-5">
								<div class="widget-box widget-color-blue2">
									<div class="widget-header"> 
										<h4 class="widget-title lighter smaller">แก้ไขสิ่งอำนวยความสะดวก</h4>
									</div>
									<div class="widget-body"><br>
										<div class="row">
											<div class="col-md-12">
												<?php      
												$room = ( "SELECT * FROM room " );
												$re_room = mysqli_query($con, $room );
												?>
												<div class="col-md-6">
													<select class="form-control" name="id" id="idroom" onChange="fac(this.value)">
														<option >---เลือกห้องที่ต้องการ---</option>
														<?php while($ro_room = mysqli_fetch_assoc($re_room)){?>
															<option value="<?php echo$ro_room['ID_room'];?>" <?php if($nameroom['ID_room']==$ro['ID_room']){echo "selected";}?> ><?php echo $ro_room['name_room_th'];?></option>
														<? }?>
													</select><br>

												</div>
												<div class="col-md-12" id="show">
													
												</div>
											</div>
										</div>
									</div>
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

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="assets/js/jquery-2.1.4.min.js"></script>





	<script src="assets/js/bootstrap.min.js"></script>

	<!-- page specific plugin scripts -->

	<script src="assets/js/ace-elements.min.js"></script>
	<script src="assets/js/ace.min.js"></script>

	<script type="text/javascript">
		function sentsave(i){
			var id = document.getElementById("savefac"+i).value;
			var namefac_th = document.getElementById("namefac_th"+i).value;
			var namefac_en = document.getElementById("namefac_en"+i).value;
			var namefac_cn = document.getElementById("namefac_cn"+i).value;
			window.location.href="dal.php?savefac="+id+"&namefac_th="+namefac_th+"&namefac_en="+namefac_en+"&namefac_cn="+namefac_cn;
		}
		function ff(){
			var xx = document.getElementById("$arrayCampos[$i]").value;
			document.getElementById("nn").value=xx;

		}
		function fac(id){
			var id = id; 
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {

				document.getElementById("show").innerHTML= this.responseText;

			}
		};
		xhttp.open("GET", "facilties_ajax.php?id="+id, true);
		xhttp.send();
	}
	function edit(id_fac){ // id รายการ ไว้เพิ่ม
			 var x  = document.getElementById("cbox"+id_fac).checked; // เช็คเลือกไม่เลือก boolean < true / false >	 
			 var ID_room = document.getElementById("idroom").value;//  ID_room ห้อง เพิ่ม
			 var ID_fa = document.getElementById("cbox"+id_fac).getAttribute('data'+id_fac+'id');// id_fa รวม ไว้ลบ
			 var xhttp = new XMLHttpRequest();
			 if(x==true){ // เพิ่ม 
			 	xhttp.open("GET", "edit_facilties_up.php?type=1&idroom="+ID_room+"&id_fac="+id_fac, true);
			 	
			 }else if(x==false){ // ลบ
			 	xhttp.open("GET", "edit_facilties_up.php?type=0&ID_fa="+ID_fa, true);
			 }
			 xhttp.send();
			}
		</script>

	</body>
	</html>
