
<?php

if ($_REQUEST[ 'names' ] != "") { ?>


<?php
require( "PHPMailer/class.phpmailer.php" );
require( "PHPMailer/PHPMailerAutoload.php" );
include_once( 'connectdb.php' );

$idroom = $_REQUEST[ 'idroom' ];
$names = $_REQUEST[ 'names' ];
$phone = $_REQUEST[ 'phone' ];
$email = $_REQUEST[ 'email' ];
$checkin = $_REQUEST[ 'checkin' ]." "."12:01:00";
$checkout = $_REQUEST[ 'checkout' ]." "."12:00:00";
$people = $_REQUEST[ 'people' ];
$lang = $_REQUEST[ 'lang' ];
$num_room = $_REQUEST[ 'num_room' ];


	//--------------------โปรโมชั้น----------------------------------
if(empty($_REQUEST[ 'promotion' ])){
   $promotion = 0;

}else{
	$promotion = $_REQUEST[ 'promotion' ];
}
	//--------------------โปรโมชั้น----------------------------------

if(empty($_REQUEST[ 'totalprice' ])){
   $totalprice = 0;
}else{
	$totalprice = $_REQUEST[ 'totalprice' ];
}

if(empty ($_REQUEST[ 'lang' ])){
	$lang = "en";
}
$status = $_REQUEST[ 'status' ];


if ( empty( $_REQUEST[ 'chkShowInput' ] ) ) {
	$name = $_REQUEST[ 'names' ];
} else {
	$name = $_REQUEST[ 'name' ];
}

//$totalprice = $_REQUEST['totalprice'];
if(empty($_REQUEST[ 'roomrate' ])){
	$roomrate = 0 ;
}else{
	$roomrate =  $_REQUEST[ 'roomrate' ];
}


if ( $_REQUEST[ 'ck' ] == "B" ) {
	$d = $_REQUEST[ 'night' ];
} elseif ( $_REQUEST[ 'ck' ] === "A" ) {
	$date1 = date_create( $checkin );
	$date2 = date_create( $checkout );
	$diff = date_diff( $date1, $date2 );

	$d = $diff->format( "%a" );
}





//  echo $idroom."/".$name."/".$phone."/".$email."/".$checkin."/".$checkout."/".$people;

$sqlroom = "SELECT * FROM room where ID_room = $idroom";
$queryroom = mysqli_query( $con, $sqlroom );
$resultroom = mysqli_fetch_assoc( $queryroom );
$nameroom = $resultroom[ 'name_room_en' ];


$r = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `room` where ID_room = ".$idroom));

$strSQL = "INSERT INTO `booking` (`ID_booking`, `ID_room`,`num_room`, `names`, `phone`, `email`, `checkin`, `checkout`, `number_guest`,`invoice`, `status`,`nowbooking`,`name`,`totalprice`,`day`) 
           VALUES (NULL, '$idroom','$num_room', '$names', '$phone', '$email', '$checkin', '$checkout', '$people','', '$status',NOW() , '$name' , '$totalprice', '$d');";

$objQuery = mysqli_query( $con, $strSQL );
if ( $objQuery === TRUE ) {
	$last = "SELECT * FROM booking ORDER BY ID_booking DESC LIMIT 1";
	$re = mysqli_query( $con, $last );
	$ss = mysqli_fetch_assoc( $re );
	
	
	$num = substr("00000".$ss[ 'ID_booking' ], -5);
	$text = "ANANYA".date('Y')."-".$num;
	
	

	$in = " UPDATE `booking` SET `invoice` = '" . $text . "',`num_book` = '".$text."' WHERE `booking`.`ID_booking` ='" . $ss[ 'ID_booking' ] . "'";
	$a = mysqli_query( $con, $in );


	//--------------------โปรโมชั้น----------------------------------

$sql = ( "SELECT * FROM promotion WHERE code  = '$promotion'" );
$res = mysqli_query( $con, $sql );
while ( $r = mysqli_fetch_assoc( $res ) ) { 
 	$status=$r['num']; 
 	$num1  = $r['e_num'];
    $code = $r[ 'code' ];
	if ($num1 >= $status) {
		$num  = $r['e_num'];
	}else{
		$num  = $r['e_num']+1;
	}
   
}

if ($promotion == 0) {
	
}else{
	$pro = " UPDATE `promotion` SET `e_num` = '".$num."' WHERE `promotion`.`code` = '".$code."'";
	$apro = mysqli_query( $con, $pro );
}
	

//--------------------โปรโมชั้น----------------------------------
	//-------------------------PDF------------------------------


	include( 'invoice.php' );


	$idb = $text;
	$PATH = "https://www.ananyalipe.com/filePDF/" . $idb . ".pdf";



if($_REQUEST[ 'status' ] <=0){
	
	//----------------------- LINE-------------------------------------------------
	$Token = "olDClVOBmZ6k4BYdEPM8UkvPRHaF7HReG7BqWNCbWnJ";
	$message = "\nID booking  :".$idb."\nคุณ :" . $name . " \nได้จองห้องประเภท: " . $nameroom . "\nจำนวนเข้าพัก: " . $people . "คน\nเข้าพัก: (" . $_REQUEST[ 'checkin' ].") - (".$_REQUEST[ 'checkout' ]. ")\nจำนวนคืน ".$d."\nติดต่อ: " . $phone . "\nE-mail: " . $email . "\ninvoice: http://www.ananyalipe.com/filePDF/" . $idb . ".pdf";



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
	$message2 = "ID booking  :" . $idb . "<br>Name :" . $name . " <br>booking room: " . $nameroom . "<br>Number of guests: " . $people . "<br>checkin/checkout: (" . $_REQUEST[ 'checkin' ].") - (".$_REQUEST[ 'checkout' ]. ")<br>Contact Us: 090-767-6761<br>Download in voice: <a href='http://www.ananyalipe.com/filePDF/" . $idb . ".pdf '> invoice </a><br>Transfer confirmation link : <a href='http://ananyalipe.com/Payment.php?invoice=" . $idb . "&idroom=" . $idroom . "&name=" . $names . "&phone=" . $phone . "&email=" . $email . "&checkin=" . $checkin . "&checkout=" . $checkout . "&people=" . $people . "&night=" . $d . "&totalprice=" . $totalprice . "&lang=". $lang." '>sent slip</a>";
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
$mail->Password = "Aa100100"; // รหัสผ่าน SMTP

$mail->SetFrom( "contact@ananyalipe.com" );
$mail->addCC('rsvn@ananyalipe.com');
//$mail->Username = "mommam3937@gmail.com"; // account SMTP
//$mail->Password = "Mommam333"; // รหัสผ่าน SMTP

//$mail->SetFrom("mommam3937@gmail.com");
$mail->Subject = "ANANYA Lipe - ".$idb;

$mail->MsgHTML( $body );

$mail->AddAddress( $email ); //ผู้รับ
			
				 
?>
		<a id="li" href="filePDF/<?php echo $idb?>.pdf" target="_blank">1</a>
		<script>
			document.getElementById("li").click();
		
			</script> 
<?PHP
	
		echo "<script> window.location.href = 'Payment.php?invoice=$idb&idroom=$idroom&name=$names&phone=$phone&email=$email&checkin=$checkin&checkout=$checkout&people=$people&night=$d&totalprice=$totalprice&lang=$lang'</script > ";
	// echo "		<script>			window.location.href = 'Payment.php'		</script>	";
 if(!$mail->Send()) {
  
	 echo "	<script>alert( 'Can not send email.Please Contact us.' );</script>" ;

	 
 } else {
	// echo "<script>window.location.href = 'payment.php?idroom=$idroom&name=$names&phone=$phone&email=$email&checkin=$checkin&checkout=$checkout&people=$people&totalprice=$totalprice&lang=$lang'	</script>	";
	 
?>
		<script>
			window.open("<? echo $PATH;?>", "_blank ", "toolbar = yes, scrollbars = yes, resizable = yes, top = 500, left = 500, width = 400, height = 400 ");
			</script>
<?PHP
   
	 
 }

//-------------------------end mail--------------------------------------------
			


		} 
			else {
				
				
               echo "<script>alert( 'ผิดพลาด โปรดตรวจสอบข้อมูล' );</script>	";
                       
		}
	}else{
		echo "<script>alert( '55555' );</script>	";
	}


?>


<?php }else{ ?>

<?php 
echo "<script>alert( 'ผิดพลาด โปรดตรวจสอบข้อมูล' );</script>	";
echo "<script> window.location.href = 'https://ananyalipe.com'</script > ";

?>


<?php } ?>

























