<?php session_start();
	include_once('../connectdb.php');
	if(empty($_SESSION['UserID']))
 {
  echo "<script> alert('Please Login!!');window.location.href='index.php';</script>";
  exit();
 }
if (isset($_REQUEST['id'])) {
	$id= $_REQUEST['id'];
	echo $id;

$sqlfac = "DELETE FROM `tb_fac` WHERE `tb_fac`.`id_fac` = '".$id."'";
mysqli_query( $con, $sqlfac );

header('location: facilties.php');
}
if (isset($_REQUEST['savefac'])) {
	//echo "<pre>";
	//echo print_r($_REQUEST);
	//echo "</pre>";
	$savefac= $_REQUEST['savefac'];
	$namefac_th = $_REQUEST['namefac_th'];
	$namefac_en = $_REQUEST['namefac_en'];
	$namefac_cn = $_REQUEST['namefac_cn'];


	$sqlfac = "UPDATE `tb_fac` SET `name_fac_th`='".$namefac_th."',`name_fac_en`='".$namefac_en."',`name_fac_cn`='".$namefac_cn."' WHERE id_fac = ".$savefac;
	mysqli_query( $con, $sqlfac );

  echo "<script> alert('เเก้ไขข้อมูลสำเร็จ');window.location.href='facilties.php';</script>";
}


?>

