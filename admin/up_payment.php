<?php
session_start();
require( "../PHPMailer/class.phpmailer.php" );
require( "../PHPMailer/PHPMailerAutoload.php" );
	include_once('../connectdb.php');

$mm = $_REQUEST[ 'mm' ];
$st = $_REQUEST[ 'st' ];


 $query = mysqli_query($con,$sql);
	$in = " UPDATE `booking` SET status = '$st' where ID_booking = '$mm'";
	$a = mysqli_query($con,$in );



	//-------------------------สร้าง PDF------------------------------
 $font = ( "SELECT * FROM booking where ID_booking = '$mm' " );
    $re = mysqli_query( $con, $font );
    $ro = mysqli_fetch_assoc( $re );   
    $idroom = $ro['ID_room'];    
   
 $font1 = ( "SELECT * FROM room where ID_room = '$idroom' " );
    $re1 = mysqli_query( $con, $font1 );
    $ro1 = mysqli_fetch_assoc( $re1 ); 
          
	include( 'Voucher.php' );


	$idb = 'Voucher';
	$PATH = "https://www.ananyalipe.com/admin/filePDF/" . $idb . ".pdf";



//-------------------------------mail---------------------------------------------

		//------------------------------------end LINE----------------------------------------------
$message2 = "ID booking  :" . $ro['ID_booking'] . "<br>Name :" . $ro['name'] . " <br>booking room: " . $ro['ID_room'] . "<br>Number of guests: " . $ro['ID_room'] . "<br>checkin/checkout: (" . $ro['checkin'].") - (".$ro['checkout']. ")<br>Contact Us: +66 (0) 91 634 6342 - 4<br>Download in Voucher: <a href='http://www.ananyalipe.com/admin/filePDF/" . $mm . ".pdf '> Voucher </a><br></a>";
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
//$mail->addCC('rsvn@ananyalipe.com');
//$mail->Username = "mommam3937@gmail.com"; // account SMTP
//$mail->Password = "Mommam333"; // รหัสผ่าน SMTP
//$mail->SetFrom("mommam3937@gmail.com");
$mail->Subject = "Ananya Lipe - ".$idb;
$mail->MsgHTML( $body );
$mail->AddAddress($ro['email']); //ผู้รับ							 
?>
		<a id="li" href="filePDF/<?php echo $idb?>.pdf" target="_blank">1</a>
		<script>
			document.getElementById("li").click();
		</script> 
<?PHP
		echo "<script> window.location.href = 'booking.php'</script > ";
	// echo "<script>window.location.href = '../Payment.php'</script>";
 if(!$mail->Send()) {
  
	 echo "	<script>alert( 'Can not send email.Please Contact us.' );</script>" ;
	 
 } else {
	// echo "<script>window.location.href = '../payment.php?idroom=$idroom&name=$names&phone=$phone&email=$email&checkin=$checkin&checkout=$checkout&people=$people&totalprice=$totalprice&lang=$lang'	</script>	";
	 
?>
		<script>
			window.open("<? echo $PATH;?>", "_blank ", "toolbar = yes, scrollbars = yes, resizable = yes, top = 500, left = 500, width = 400, height = 400 ");
		</script>
<?PHP
    
 }

//-------------------------end mail--------------------------------------------

	//header('location:booking.php?');


	?>
