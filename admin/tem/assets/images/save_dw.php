<?php
include('connect_db.php');
date_default_timezone_set("Asia/Bangkok");
$datetime = $_POST['datetime'];
$DT = explode("T", $datetime);
$timestamp = $DT[0]." ".$DT[1].":00";
 $datetime = strtotime($timestamp);

$code = $_POST['code'];
$price = $_POST['price'];
$status = $_POST['status'];

 $sql_dw = "INSERT INTO tb_dw(id_dw, date_dw, code_dw, price_dw, status) VALUES (null,".$datetime.",'".$code."',".$price.",".$status.")";
 $save = $con->query($sql_dw);
if($save){
	echo '<script>location.href = "control_dw.php";</script>';
}else{
	echo '<script>aleert("ไม่สามารถส่งข้อมูลได้ กรุณาติดต่อเจ้าหน้าที่");</script>';
}
?>