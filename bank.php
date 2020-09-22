<?php
include_once('connectdb.php');
		$fileName = $_FILES[ 'silps' ][ 'name' ];
		$upload_dir = "img/slips/";
		$uploaded_file = $upload_dir . $fileName;
		$Bank = $_REQUEST['Bank'];
	    $id = $_REQUEST['invoice'];

	
		
		if ( move_uploaded_file( $_FILES[ 'silps' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			
			
		echo	$mysql = "UPDATE `booking` SET `bank` = '$Bank', `silps` = '$fileName' WHERE `num_book` = '".$id."'";
		
			mysqli_query( $con, $mysql );
			//echo $uploaded_file;
			
		}

	

$Token = "olDClVOBmZ6k4BYdEPM8UkvPRHaF7HReG7BqWNCbWnJ";
	$message = "ID booking  :" . $id."ได้ส่งสลิป สามารถเข้าเปลี่ยนสถานะได้ที่  http://ananyalipe.com/Admin";



	$lineapi = $Token; // ใส่ token key ที่ได้มา
	$mms = trim( $message ); // ข้อความที่ต้องการส่ง
	$image = "http://ananyalipe.com/".$uploaded_file; 	// รูปที่ต้องการส่ง
	date_default_timezone_set( "Asia/Bangkok" );
	$chOne = curl_init();
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
// SSL USE
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
//POST
curl_setopt( $chOne, CURLOPT_POST, 1);
// Message
curl_setopt( $chOne, CURLOPT_POSTFIELDS, $message);
//ถ้าต้องการใส่รุป ให้ใส่ 2 parameter imageThumbnail และimageFullsize
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms&imageThumbnail=$image&imageFullsize=$image");
// follow redirects
curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1);
//ADD header array
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $lineapi . '', );  // หลังคำว่า Bearer ใส่ line authen code ไป
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
//RETURN
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec( $chOne );
//Check error
if(curl_error($chOne)) { echo 'error:' . curl_error($chOne); }
else { $result_ = json_decode($result, true);
//echo "status : ".$result_['status']; echo "message : ". $result_['message']; 
//Close connect
	 }
curl_close( $chOne );





header('Location: index.php');


?>