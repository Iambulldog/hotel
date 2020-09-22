<?php 
   
	 session_start();
	include_once("connectdb.php" );
	if(!isset($_SESSION['UserID']))
 {
  echo "<script> alert('Please Login!!');window.location.href='index.php';</script>";
  exit();
 }
 if(isset($_GET["update"])){
 	$type = $_REQUEST['type'];
    $id   = $_REQUEST['id'];

	$sqledit = "UPDATE `bg` SET `status` = '$type' WHERE `bg`.`id` = $id;";
    $res = mysqli_query( $con, $sqledit );
	header('Location: manage_slide.php');
 }
	

?>