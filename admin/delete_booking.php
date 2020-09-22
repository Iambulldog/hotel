<?php
include_once( "connectdb.php" );
if (isset($_GET["id"])) {
	$id =$_GET["id"];
	$sql = "DELETE FROM `booking` WHERE `booking`.`ID_booking` = '$id'";
	if (mysqli_query($con,$sql)) {
		header('Location: room_balan.php');
	}
	
}


?>