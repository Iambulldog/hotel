<?php session_start();
	include_once('../connectdb.php');
	if(!isset($_SESSION['UserID']))
 {
  echo "<script> alert('Please Login!!');window.location.href='index.php';</script>";
  exit();
 }


$fac_th = $_REQUEST['fac_th'];
$fac_en = $_REQUEST['fac_en'];
$fac_cn = $_REQUEST['fac_cn'];


$sqlfac = "INSERT INTO `tb_fac`(`id_fac`, `name_fac_th`, `name_fac_en`, `name_fac_cn`) VALUES (null,'".$fac_th."','".$fac_en."','".$fac_cn."')";
 mysqli_query( $con, $sqlfac );

header('location: facilties.php');

?>