<?php
include('connect_db.php');
date_default_timezone_set("Asia/Bangkok");

$datenow = date('Y-m-d');

 $sql_dw = "SELECT * FROM tb_dw where from_unixtime(date_dw,'%Y-%m-%d')= '".$datenow."' order by id_dw DESC";
  
foreach ($con->query($sql_dw) as $row) {
        echo "<span style='font-weight: bold;float: left;'>".date('H:i',$row['date_dw'])."&nbsp;&nbsp;&nbsp;" ;
        echo $row['code_dw']."</span>" ;
        if($row['status']==0){
			echo "<span style=' font-weight: bold;float: right;padding-right: 10px;color:green;'>".$row['price_dw']." " ;
			echo  " ถอน </span><br>";
		}else if($row['status']==1){
			echo "<span style=' font-weight: bold;float: right;padding-right: 10px;'>".$row['price_dw']." " ;
			echo " ฝาก </span><br>";
		}
	 
    }
?>
