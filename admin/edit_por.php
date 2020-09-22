<?php 
   
	 session_start();
	include_once("connectdb.php" );
	if(!isset($_SESSION['UserID']))
 {
  echo "<script> alert('Please Login!!');window.location.href='index.php';</script>";
  exit();
 }
   
    
	$type = $_REQUEST['type'];
    $ID_pro   = $_REQUEST['ID_pro'];

	$sqledit = "UPDATE `promotion` SET `status` = '$type' WHERE `promotion`.`ID_pro` = $ID_pro;";
    $res = mysqli_query( $con, $sqledit );

	header('Location: promotion.php');


?>