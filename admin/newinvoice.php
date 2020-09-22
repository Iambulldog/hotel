<?php include_once( "connectdb.php" );error_reporting(E_ALL & ~E_NOTICE);?>
<?php

$sql = " SELECT * FROM booking INNER JOIN `room` ON booking.ID_room = room.ID_room WHERE ID_booking= '".$_GET['id_booking']. "'";
$querysql = mysqli_query($con,$sql );
$res = mysqli_fetch_assoc($querysql);					

$sqlroom = " SELECT * FROM room ";
$querysqlroom = mysqli_query( $con, $sqlroom );

$sqlroomshow = " SELECT * FROM room where ID_room='" . $res[ 'ID_room' ] . "'";
$querysqlroomshow = mysqli_query( $con, $sqlroomshow );
$resroomshow = mysqli_fetch_assoc( $querysqlroomshow );
$chin = explode(" ", $res['checkin']);
$chout = explode(" ", $res['checkout']);	            

?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<body class="no-skin" onload="dat()">

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
					<li class="active">newinvoice</li>
				</ul><!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
							<i class="ace-icon fa fa-search nav-search-icon"></i>
						</span>
					</form>
				</div><!-- /.nav-search -->
			</div>

			<div class="page-content">


				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<!-- ข้อมูล-->	
						<form action="invoice2.php" method="POST" target="_blank">
						<div class="form-group">
							<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ID Booking</label>

							<div class="col-sm-11">
								<input hidden="" name="num_book" value="<?php echo $res['num_book']?>" >
								<input type="text" id="form-field-1" name="idbooking" value="<?php echo $res['ID_booking']?>" class="col-xs-10 col-sm-5" readonly>
							</div>
						</div>
						<div class="space-4"></div>
						<div class="form-group">
							<br><label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ชื่อผู้จอง</label>

							<div class="col-sm-11">
								<input type="text" id="form-field-1" name="names" value="<?php echo $res['names']?>" class="col-xs-10 col-sm-5" readonly>
							</div>
						</div>
						<div class="space-4"></div>
						<div class="form-group">
							<br><label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ชื่อผู้เข้าพัก</label>

							<div class="col-sm-11">
								<input type="text" id="form-field-1" name="name" value="<?php echo $res['name']?>" class="col-xs-10 col-sm-5">
							</div>
						</div>
						<div class="space-4"></div>
						<div class="form-group">
							<br><label class="col-sm-1 control-label no-padding-right" for="form-field-1"> เบอร์โทร</label>

							<div class="col-sm-11">
								<input type="text" id="form-field-1" name="phone" value="<?php echo $res['phone']?>" class="col-xs-10 col-sm-5">
							</div>
						</div>
						<div class="space-4"></div>
						<div class="form-group">
							<br><label class="col-sm-1 control-label no-padding-right" for="form-field-1"> E-mail</label>

							<div class="col-sm-11">
								<input type="text" id="form-field-1" name="email" value="<?php echo $res['email']?>" class="col-xs-10 col-sm-5">
							</div>
						</div>
						<div class="space-4"></div>
						<div class="form-group">
							<br><label class="col-sm-1 control-label no-padding-right" for="form-field-1"> จำนวนเข้าพัก </label>
							<div class="col-sm-11">
								<select class="col-xs-10 col-sm-5" name="number_guest">
									<option value="<? echo $res[ 'number_guest' ];?>" style="background-color: #B8B8B8"><? echo $res[ 'number_guest' ];?></option>
									<?php 			
									for($i = 1;$i<=10;$i++){?>
										<option value="<? echo $i;?>"><? echo $i;?></option>
									<? } ?>		
								</select>
							</div>
						</div>
						<div class="space-4"></div>
						<div class="form-group">
							<br><label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ห้องพัก </label>
							<div class="col-sm-11">
								<select class="col-xs-10 col-sm-5" name="idroom">
									<option value="<? echo $resroomshow['ID_room'];?>" style="background-color: #B8B8B8"><? echo $resroomshow['name_room_th'];?></option>
									<?php 			
									while($resroom = mysqli_fetch_assoc($querysqlroom)){?>
										<option value="<? echo$resroom['ID_room'];?>"><? echo $resroom['name_room_th'];?></option>
									<? } ?>	
								</select>
							</div>
						</div>
						<div class="space-4"></div>
						<div class="form-group">
							<br><label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Check-in </label>

							<div class="col-sm-11">
								<input type="date" id="datein" name="checkin" value="<? echo $chin[0];?>" class="col-xs-10 col-sm-5" onChange="dat()">
							</div>
						</div>
						<div class="space-4"></div>
						<div class="form-group">
							<br><label class="col-sm-1 control-label no-padding-right" for="form-field-1"> Check-out </label>

							<div class="col-sm-11">
								<input type="date" id="dateout" name="checkout" value="<? echo $chout[0];?>" class="col-xs-10 col-sm-5" onChange="dat()">
							</div>
						</div>
						<div class="space-4"></div>
						<div class="form-group">
							<br><label class="col-sm-1 control-label no-padding-right" for="form-field-1"> จำนวนคืน </label>

							<div class="col-sm-11">
								<input type="text" id="shdate" name="night" value="" class="col-xs-10 col-sm-5" readonly>
							</div>
						</div>
						<div class="space-4"></div>
						<div>
							<input type="text" value="<?php echo$resroomshow['price_room']?>">
							<input type="text" value="" name="">
							<br><br>
							<button class="btn btn-danger" type="submit">ส่งใบแจ้งหนี้ใหม่ </button>
							<a href="booking.php" class="btn btn-success" >กลับ </a>
						</div>									
						</form>
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
<script type="text/javascript">
	function dat(){
		var date1 = new Date(document.getElementById("datein").value);
		var date2 = new Date(document.getElementById("dateout").value);
		var timeDiff = Math.abs(date2.getTime() - date1.getTime());
		var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
		document.getElementById("shdate").value=diffDays;

	}

	/*function invoic(){
		window.open("../invoice2.php");
	}*/
</script>
<script src="assets/js/jquery-2.1.4.min.js"></script>





<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

</body>
</html>
