<?php
date_default_timezone_set("Asia/Bangkok");

	//ini_set('display_errors', 1);
	error_reporting(~0);

$serverName  = "localhost";
//$userName	  = "root";
//$Password	  = "12345678";
//$dbName	  = "hostels";

$userName	  = "root";
$Password	  = "";
$dbName	  = "ananyalipe_01";

	$con = mysqli_connect($serverName,$userName,$Password,$dbName);

	if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
		exit();
	}

	//*** Reject user not online  
	$sql = "SET NAMES UTF8";
	$query = mysqli_query($con,$sql);

?>
