<?php
require_once( '../mpdf/mpdf.php' );
require( "../PHPMailer/PHPMailerAutoload.php" );
include_once('../connectdb.php');
error_reporting(0);

$idbooking = $_REQUEST['idbooking'];
$names = $_REQUEST['names'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$number_guest = $_REQUEST['number_guest'];
$idroom = $_REQUEST['idroom'];
$checkin = $_REQUEST['checkin'];
$checkout = $_REQUEST['checkout'];
$night = $_REQUEST['night'];
$num_book = $_REQUEST['num_book'];

$sql = " SELECT * FROM room where ID_room='" . $idroom . "'";
$query = mysqli_query( $con, $sql );
$res = mysqli_fetch_assoc( $query );

if($res['ID_room']==1){
$totalprice = $night*$res['price_room'];
}else{
	$totalprice = $number_guest*$night*$res['price_room'];
}

$sqlup="UPDATE booking SET ID_room = '".$idroom."', names = '".$names."', phone = '".$phone."' , email = '".$email."', checkin = '".$checkin."' , checkout = '".$checkout."' ,number_guest = '".$number_guest."',name = '".$name."'  WHERE ID_booking = '".$idbooking."'";
 mysqli_query( $con, $sqlup );



ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	
</head>
<body >

<div class="container" style="font-size: 10px">
  <table>
    <tr class="head">
      <td><img src="../img/logo1.png" width="200" height="79" alt=""/></td>
      <td style="font-size: 10px;">&nbsp;&nbsp;&nbsp;<B>AKIRA Lipe Resort</B> <br>
        &nbsp;&nbsp;&nbsp;370 Moo7 Koh Lipe, Koh Sarai Sub-District, Muang, Satun91000 <br>
        &nbsp;&nbsp;&nbsp;Tel: +66 91 3013011, +66 91 3013012 <br>
        &nbsp;&nbsp;&nbsp;E-mail: sales@akiralipe.com  Website: www.akiralipe.com </td>
    </tr>
  </table>
    <table style="text-align: center;border:solid;width: 100%;font-size: 10px;">
   <<tr><td><h4>Modified INVOICE</h4></td></tr>
  </table><br>
  <table width="100%">
    <tbody>
      <tr>
        <td width="13%" style="font-size: 10px;"><B>Bill To</B></td>
        <td width="1%" >:</td>
        <td width="56%" style="font-size: 10px;"><?php echo $name;?></td>
        <td width="10%" style="font-size: 10px;"><B>Invoice</B></td>
        <td width="2%">:</td>
        <td width="18%" style="font-size: 10px;"><?php echo $num_book;?></td>
      </tr>
      <tr>
        <td style="font-size: 10px;"><B>Tel</B></td>
        <td>:</td>
        <td style="font-size: 10px;"><?php echo $phone;?></td>
        <td style="font-size: 10px;"><B>Date</B></td>
        <td>:</td>
        <td style="font-size: 10px;"><?php echo date('m-d-Y');?></td>
      </tr>
      <tr>
        <td style="font-size: 10px;"><B>E-mail</B></td>
        <td>:</td>
        <td style="font-size: 10px;"><?php echo $email;?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-size: 10px;"><B>Guest</B></td>
        <td>:</td>
        <td style="font-size: 10px;"><?php echo $number_guest;?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  <p>
  
	<table width="100%" style="text-align: center;font-size: 10px;">
  <tbody>
    <tr >
      <td width="22%" style="text-align:left"><B>Room Type</B></td><hr>
      <td width="11%" style="text-align:center"><B>Chick-in</B></td><hr>
      <td width="11%" style="text-align:center"><B>Check-Out</B></td><hr>
      <td width="11%" style="text-align:center"><B>Night</B></td><hr>
      <td width="15%" style="text-align:center"><B>No of bed/Rooms </B></td><hr>
      <td width="16%" style="text-align:center"><B>Room Rate</B></td><hr>
      <td width="14%" style="text-align:center"><B>Total</B></td><hr>
    </tr>
    <tr >
      <td style="text-align:left"><?php echo $res['name_room_en'];?></td>
      <td style="text-align:center"><?php echo $checkin;?></td>
      <td style="text-align:center"><?php echo $checkout;?></td>
      <td style="text-align:center"><?php echo $night;?></td>
      <td style="text-align:center"><?php echo $number_guest;?></td>
      <td style="text-align:center"><?php echo $res['price_room'];?></td>
      <td style="text-align:center"><?php echo $totalprice;?></td>
    </tr>
    <tr >
      <td style="text-align:left"><B>Grand Total</B></td>
      <td style="text-align:center">&nbsp;</td>
      <td style="text-align:center">&nbsp;</td>
      <td style="text-align:center">&nbsp;</td>
      <td style="text-align:center">&nbsp;</td>
      <td style="text-align:center">&nbsp;</td>
      <td style="text-align:center">&nbsp;</td>
    </tr>
  </tbody>
</table>
  <p>
	<B>SPECIAL REQUEST</B>
<p>
	
	<B>TERM& CONDITION</B> <br>
	<?php 
	$date = date('m-d-Y');
$date1 = str_replace('-', '/', $date);
$tomorrow = date('m-d-Y',strtotime($date1 . "+1 days"));

echo $tomorrow;
	?>
	&nbsp;This payment is due on or before <?php echo $tomorrow;?> THB <?php echo $totalprice;?> <br>
	Check-in time : 02.00PM. Check-out time : 11.00AM. <br>
	Meal Plan: Include Breakfast <br>
	Rates are quoted in Thai Baht per room per night, inclusive of service charge and government taxes.
<p>
	<B>CANCELLATION& NO SHOW POLICIES </B> <br>
	&nbsp;If cancelled or modified up to14 days before date of arrival, no fee will be charged. If cancelled or modified later or in case of no-show, the total price of the reservation will be charged.
<p>
	<B>HOW TO CANCEL OR MODIFY YOUR RESERVATION</B><br>
	&nbsp;Please ensure that you contact us by email <a href="">sales@akiralipe.com</a> or phone(+66 91 3013011 and+66 91 3013012) as soon as you know of your change of plans, all changes to this booking must be through <B>AKIRA LIPE RESORT</B> Please our contact detail below. <br>
	Should you require any further information or assistance please feel free to contact us at anytime. And please refer to  the reference ID.<B><?php echo $idbooking;?></B> when contacting us. 
 <p>
	
	<B>BILLING INSTRUCTIONS</B> 
	<table width="100%" align="center"style="font-size: 10px;">
		<B><tr>
      <td style="font-size: 10px;text-align: center;">BANK NAME</td><hr></hr>
      <td style="font-size: 10px;text-align: center;">ACCOUNT NAME</td><hr></hr>
      <td style="font-size: 10px;text-align: center;">ACCOUNT NO</td><hr></hr>
      <td style="font-size: 10px;text-align: center;">SWIFT CODE</td><hr></hr>
			</tr></B>
  <tbody >
    
    <tr>
      <td style="font-size: 10px;text-align: center;">Bangkok Bank</td>
      <td style="font-size: 10px;text-align: center;">AKIRA Lipe Co.,Ltd.</td>
      <td style="font-size: 10px;text-align: center;">593-0-39542-0</td>
      <td style="font-size: 10px;text-align: center;">BKKBTHBK</td>
    </tr>
    <tr>
      <td style="font-size: 10px;text-align: center;">Kasikorn Bank</td>
      <td style="font-size: 10px;text-align: center;">AKIRA Lipe Co.,Ltd.</td>
      <td style="font-size: 10px;text-align: center;">402-2-73457-7</td>
      <td style="font-size: 10px;text-align: center;">KASITHBK</td>
    </tr>
    <tr>
      <td style="font-size: 10px;text-align: center;">Krungthai Bank</td>
      <td style="font-size: 10px;text-align: center;">AKIRA Lipe Co.,Ltd.</td>
      <td style="font-size: 10px;text-align: center;">887-0-34948-9</td>
      <td style="font-size: 10px;text-align: center;">KRTHTHBK</td>
    </tr>
    <tr>
      <td style="font-size: 10px;text-align: center;">Krungsri Bank</td>
      <td style="font-size: 10px;text-align: center;">AKIRA Lipe Co.,Ltd.</td>
      <td style="font-size: 10px;text-align: center;">269-0-34948-9</td>
      <td style="font-size: 10px;text-align: center;">AYUDTHBK</td>
    </tr>
  </tbody>
</table>
<br>
	Thank you very much for your kindly e-mail your remittance advise to us and co-operation We look forward to welcome you at Akira Lipe Resort.
	<p>
<div style="text-align: center;align-content: center;">
With Best regards,<br>
Thanaphat Hemkoknoi<br>
AKIRA LIPE RESORT<br> 
Email:<a href="">sales@akiralipe.com</a> <br>
Tel: +66 91 3013011, +66 91 3013012<br> 
AKIRA Office time 08.00 am- 07.00 pm
<div>

</div>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

		

$location = "filePDF/".$num_book.".pdf";
$pdf = new mPDF('th', 'A4', '0', 'THSaraban');

$pdf->WriteHTML($html, 2);

$pdf->Output($location,'F'); 



	$message2 = "ID booking  :" . $idbooking . "<br>Nmae :" . $name . " <br>booking room: " . $res['name_room_en'] . "<br>จำนวนเข้าพัก: " . $number_guest . "คน<br>เข้าพัก: " . $checkin . "<br>ติดต่อ: " . $phone . "<br>Download in voice: <a href='http://www.thechiclipe.com/hostels/filePDF/" . $idbooking . ".pdf '> invoice </a><br>ลิงค์สำหรับยืนยัยการโอน : <a href='http://www.thechiclipe.com/Payment.php?invoice=" . $idbooking . "&idroom=" . $idroom . "&name=" . $names . "&phone=" . $phone . "&email=" . $email . "&checkin=" . $checkin . "&checkout=" . $checkout . "&people=" . $people . "&night=" . $d . "&totalprice=" . $totalprice . "&lang=en '>sent slip</a>";
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
$mail->Host = 'mail.thechiclipe.com';
// use
//$mail->Host = gethostbyname('smtp.gmail.com ');
	
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->Username = "rsvn@thechiclipe.com"; // account SMTP
$mail->Password = "Aa100100"; // รหัสผ่าน SMTP

$mail->SetFrom( "rsvn@thechiclipe.com" );

//$mail->Username = "mommam3937@gmail.com"; // account SMTP
//$mail->Password = "Mommam333"; // รหัสผ่าน SMTP

//$mail->SetFrom("mommam3937@gmail.com");
$mail->Subject = "Thechic Lipe";

$mail->MsgHTML( $body );

$mail->AddAddress($email); //ผู้รับ
$mail->addCC('rsvn@thechiclipe.com');		
				 

 if(!$mail->Send()) {
  
	 echo "	<script>alert( 'Can not send email.Please Contact us.' );</script>" ;

	 
 } else {

	 

   
	 
 }


//-------------------------end mail--------------------------------------------



$PATH = "filePDF/" . $num_book . ".pdf";

header('Location:'.$PATH);

//header('Location: ../admindashboard/index.php');
?>    