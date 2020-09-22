<?php 
require( "../PHPMailer/class.phpmailer.php" );
require( "../PHPMailer/PHPMailerAutoload.php" );
	include_once( "../connectdb.php" );
  	$id_book = $_REQUEST['id_book'];
  	$mm = $id_book;

	
	
			 $sqledit = "UPDATE `booking` SET  `status`='1',`bank`='paypal',`silps`='-' WHERE num_book = '$id_book'";
			 mysqli_query( $con, $sqledit);


$idb = 'Confirmation Letter';
$font = ( "SELECT * FROM booking where num_book = '$id_book' " );
    $re = mysqli_query( $con, $font );
    $ro = mysqli_fetch_assoc( $re );    

    $room = ( "SELECT * FROM room where ID_room = ".$ro['ID_room']   );
    $re_room = mysqli_query( $con, $room );
    $ro_room = mysqli_fetch_assoc( $re_room ); 
//----------------------- LINE-------------------------------------------------
	$Token = "olDClVOBmZ6k4BYdEPM8UkvPRHaF7HReG7BqWNCbWnJ";
	$message = "ID booking  :" . $ro['num_book'] . "\n ได้ชำระเงินผ่าน Paypal \nName :" . $ro['name'] . " \nbooking room: " . $ro['ID_room'] . "\nNumber of guests: " . $ro['ID_room'] . "\ncheckin/checkout: (" . $ro['checkin'].") - (".$ro['checkout']. ")\nDownload in confirmation letter : http://www.ananyalipe.com/admin/filePDF/" . $mm . ".pdf ";



	$lineapi = $Token; // ใส่ token key ที่ได้มา
	$mms = trim( $message ); // ข้อความที่ต้องการส่ง
	
	date_default_timezone_set( "Asia/Bangkok" );
	$chOne = curl_init();
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify" );
	// SSL USE 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0 );
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0 );
	//POST 
	curl_setopt( $chOne, CURLOPT_POST, 1 );
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms" );
	curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1 );
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $lineapi . '', );
	curl_setopt( $chOne, CURLOPT_HTTPHEADER, $headers );
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1 );
	$result = curl_exec( $chOne );
	//Check error 
	if ( curl_error( $chOne ) ) {
		echo "<script> alert(''error:'" . curl_error( $chOne ) . "');</script>";
	} else {
		$result_ = json_decode( $result, true );
		// echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	}
	curl_close( $chOne );

	//------------------------------------end LINE----------------------------------------------



include( 'Voucher.php' );


	
	



//-------------------------------mail---------------------------------------------

		//------------------------------------end LINE----------------------------------------------
$message2 = "ID booking  :" . $ro['ID_booking'] . "<br>Name :" . $ro['name'] . " <br>booking room: " . $ro['ID_room'] . "<br>Number of guests: " . $ro['ID_room'] . "<br>checkin/checkout: (" . $ro['checkin'].") - (".$ro['checkout']. ")<br>Contact Us: 090-767-6761<br>Download in confirmation letter : <a href='http://www.ananyalipe.com/admin/filePDF/" . $mm . ".pdf '> confirmation letter </a><br></a>";
//-------------------------------mail---------------------------------------------


$mail = new PHPMailer();
$body = $message2;
$mail->CharSet = "utf-8";
//Tell PHPMailer to use SMTP
//$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'mail.ananyalipe.com';
// use
//$mail->Host = gethostbyname('smtp.gmail.com ');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->Username = "contact@ananyalipe.com"; // account SMTP
$mail->Password = "Aa123654"; // รหัสผ่าน SMTP
$mail->SetFrom( "contact@ananyalipe.com" );
$mail->addCC('rsvn@ananyalipe.com');
//$mail->Username = "mommam3937@gmail.com"; // account SMTP
//$mail->Password = "Mommam333"; // รหัสผ่าน SMTP
//$mail->SetFrom("mommam3937@gmail.com");
$mail->Subject = "Ananya Lipe - ".$idb;
$mail->MsgHTML( $body );
$mail->AddAddress($ro['email']); //ผู้รับ	
$mail->Send()



	

?>
	