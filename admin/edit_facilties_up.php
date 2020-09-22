<?php

include_once( '../connectdb.php' );

if($_REQUEST['type']=='1'){//เพิ่ม
	mysqli_query($con,"INSERT INTO `facilties`(`ID_fa`, `ID_room`, `id_fac`) VALUES (null,'".$_REQUEST['idroom']."','".$_REQUEST['id_fac']."')");
	
}else if($_REQUEST['type']=='0'){//ลบ
	mysqli_query($con,"DELETE FROM `facilties` WHERE ID_fa=".$_REQUEST['ID_fa']);
	
}

?>