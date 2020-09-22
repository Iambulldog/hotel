<?php 
  session_start();
	
	if(!isset($_SESSION['UserID']))
 {
  echo "<script> alert('Please Login!!');window.location.href='index.php';</script>";
  exit();
 }
	include_once('../connectdb.php');

	$type = $_REQUEST['type'];
    $id   = $_REQUEST['id'];
  $ch = $_REQUEST['ch'];
if($ch=="g"){
	$sqledit = "UPDATE img_room SET status = '$type' WHERE ID_imgroom = $id";
    $res == mysqli_query( $con, $sqledit );
	header('Location: activities.php');
}else if($ch="g360"){
	$sqledit = "UPDATE gallery360 SET status = '$type' WHERE ID_360 = $id";
    $res = mysqli_query( $con, $sqledit );
	header('Location: gallery360.php');
	
}else if($ch="promotion"){
	$sqledit = "UPDATE promotion SET status = '$type' WHERE ID_pro = $id";
    $res = mysqli_query( $con, $sqledit );
	header('Location: promotion.php');
	
}


?>