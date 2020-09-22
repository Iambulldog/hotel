<?php
include('connect_db.php');

$name = $_POST['name'];
$tel = $_POST['tel'];
$line = $_POST['line'];

$sql_regis = "INSERT INTO tb_regis(id_regis, name_regis, tel_regis, line_regis) VALUES (null,'".$name."','".$tel."','".$line."')";
$save = $con->query($sql_regis);
if($save){
	$Token = "LDtKg28nC7QXnTihcG51GKRimagq7GHyT0Qc6tVduFG";
        $message = $name."-".$tel."-".$line;      
        
       
            $lineapi = $Token; // ใส่ token key ที่ได้มา
            $mms =  trim($message); // ข้อความที่ต้องการส่ง
            date_default_timezone_set("Asia/Bangkok");
            $chOne = curl_init(); 
            curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
            // SSL USE 
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
            //POST 
            curl_setopt( $chOne, CURLOPT_POST, 1); 
            curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms"); 
            curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
            $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
                curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
            curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
            $result = curl_exec( $chOne ); 
            //Check error 
            if(curl_error($chOne)) 
            { 
                   echo "<script> alert(''error:'".curl_error($chOne)."');</script>"; 
            } 
            else { 
            $result_ = json_decode($result, true); 
              // echo "status : ".$result_['status']; echo "message : ". $result_['message'];
                } 
            curl_close( $chOne );
	echo '<script>location.href = "../index.php";</script>';
}else{
	echo '<script>aleert("ไม่สามารถส่งข้อมูลได้ กรุณาติดต่อเจ้าหน้าที่");</script>';
}


?>