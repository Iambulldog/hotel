<?php
require_once( 'mpdf/mpdf.php' );


ob_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	
</head>
<body >


<div class="container" style="font-size: 10px">

  <table >
    <tr class="head">
      <td style="font-size: 10px;">
        &nbsp;&nbsp;&nbsp;<B>HoTel    : </B>ANANYA LIPE RESORT<br>
        &nbsp;&nbsp;&nbsp;<B>Address  : </B>433 Moo 7 Koh Lipe, Koh Sarai Sub-district, Muang District, Satun 91000<br>
        &nbsp;&nbsp;&nbsp;<B>Tel      : </B>091-6346342-4<br>
        &nbsp;&nbsp;&nbsp;<B>E-mail   : </B>rsvn@ananyalipe.com  <B>Website  : </B>www.ananyalipe.com</td>
      <td><img src="img/Ananya.png" width="200" height="79" alt=""/></td>
    </tr>
  </table>


  <table style="text-align: center;border:solid;width: 100%;font-size: 10px;background-color: #c29558">
    <tr><td><h4>HOTEL INVOICE</h4></td></tr>
  </table>

  <table width="100%" style="border:solid;">
    <tbody>
      <tr>
        <td width="10%" style="font-size: 8px;"><B>Name</B></td>
        <td width="4%" >:</td>
        <td width="56%" style="font-size: 8px;"><?php echo $name;?></td>
        <td width="10%" style="font-size: 8px;"><B>Issue date   </B></td>
        <td width="2%">:</td>
        <td width="18%" style="font-size: 8px;"><?php echo date('d-m-Y');?></td>
      </tr>
      <tr>
        <td style="font-size: 8px;"><B>Guest</B></td>
        <td>:</td>
        <td style="font-size: 8px;"><?php echo $people;?></td>
        <td style="font-size: 8px;">Booking Id</td>
        <td>:</td>
        <td style="font-size: 8px;"><?php echo $text;?></td>
      </tr>
      
      <tr>
        <td style="font-size: 8px;"><B>Tel</B></td>
        <td>:</td>
        <td style="font-size: 8px;"><?php echo $phone;?></td>
        <td style="font-size: 8px;">Check In</td>
        <td>:</td>
        <td style="font-size: 8px;"><?php $dat = explode(" ", $checkin);echo $dat[0]; ?></td>
      </tr>
      <tr>
        <td style="font-size: 8px;"><B>E-mail</B></td>
        <td>:</td>
        <td style="font-size: 8px;"><?php echo $email;?></td>
        <td style="font-size: 8px;">Check Out</td>
        <td>:</td>
        <td style="font-size: 8px;"><?php $dat1 = explode(" ", $checkout);echo $dat1[0];?></td>
      </tr>
      <!-- <tr>
        <td style="font-size: 8px;"><B>Guest</B></td>
        <td>:</td>
        <td style="font-size: 8px;"><?php echo $people;?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr> -->
    </tbody>
  </table><br>

  <table width="100%" style="border:solid;">
<?php 
         $code =  $roomrate - $totalprice;
        $code1 =  ($code*100)/$roomrate;
        ?>
        <?php echo $code1; ?> %
    <tbody>
      <tr>
        <td width="10%" style="font-size: 8px;"><B>No</B></td>
        <td width="30%"  style="font-size: 8px;"><B>Room Type</B></td>
        <td width="20%" style="font-size: 8px;"><B>No. of room</B></td>
        <td width="20%" style="font-size: 8px;"><B>Unit Price</B></td>
        <td width="20%" style="font-size: 8px;"><B>Amount</B></td>
      </tr>
      <tr>
        <td width="10%" style="font-size: 8px;"><B>1</B></td>
        <td width="30%"  style="font-size: 8px;"><B><?php echo $nameroom;?></B></td>
        <td width="20%" style="font-size: 8px;"><B><?php echo $room = round($people/2);?></B></td>
        <td width="20%" style="font-size: 8px;"><B><?php echo $Unit = ($roomrate/$room);?></B></td>
        <td width="20%" style="font-size: 8px;"><B><?php echo $roomrate;?></B></td>
      </tr>
      <tr>
        <td width="10%" style="font-size: 8px;"><B>&nbsp;</B></td>
        <td width="30%"  style="font-size: 8px;"><B>&nbsp;</B></td>
        <td colspan="2" width="40%" style="font-size: 8px;"><B>TOTAL</B></td>
        <td width="20%" style="font-size: 8px;"><B><?php echo $Amount;?></B></td>
      </tr>
       <tr>
        <td width="10%" style="font-size: 8px;"><B>&nbsp;</B></td>
        <td width="30%"  style="font-size: 8px;"><B>&nbsp;</B></td>
        <td width="20%" style="font-size: 8px;"><B style="color: red">Discount </B></td>
        <td width="20%" style="font-size: 8px;"><B style="color: red"><?php echo $code1; ?> %</B></td>
        <td width="20%" style="font-size: 8px;"><B><?php echo $totalprice;?></B></td>
      </tr>
      <tr>
        <td width="10%" style="font-size: 8px;"><B>&nbsp;</B></td>
        <td width="30%"  style="font-size: 8px;"><B>&nbsp;</B></td>
        <td colspan="2" width="40%" style="font-size: 8px;"><B>GRAND TOTAL</B></td>
        <td width="20%" style="font-size: 8px;"><B><?php echo $totalprice;?></B></td>
      </tr>
    </tbody>
  </table><br>

   <table style="border:solid;width: 100%;font-size: 8px;background-color: #c29558">
    <tr><td><h4>SPECIAL REQUEST  : </h4></td></tr>
  </table><br>
  <?php 
  $date = date('d-m-Y');
$date1 = str_replace('-', '/', $date);
$tomorrow = date('d-m-Y',strtotime($date1 . "+1 days"));

//echo $tomorrow;
  ?>
  
<B>HOTEL POLICY</B>
<p>Rates are quoted in Thai Baht per room per night , inclusive of service charge and government taxes.</p>
<p>Check in time : 02.00 pm. , Check out time : 12.00 pm.  </p>
<b>Special Benefit : Welcome Drink & Cold Towel upon arrival</b>
<b>Child & Extra Bed Policy: </b><p>0-2 years is FOC , 3-12  existsing bed we will chared only breakfast 400 THB per day.             
Extra bed for child over 12 year old or adult are charge 1,400 THB per night with breakfast.              </p>
<b>Cancellation Policy:</b><p>Cancellation or modified up to 14 days before arrival , no fee will be charged.             
Cancellation or modified  14 days later  or No-show the total price of reservation will be charged.</p>
<b>How to cancel or modified your reservation</b>
<p>
Please ensure that you contact us by email rsvn@ananyalipe.com or phone + 66 916346342-4 as soon as you know of your change of plans,               
all changes to this booking must be through ANANYA LIPE RESORT please our contact us below                
Should you require any further information or assistance please feel free to contact us anytime. And please refer to the reference ID.                
When contacting us.               
</p>
<p style="color: red;text-align: center;">This payment is due on or before at <?php echo $totalprice;?> THB </p>

 <table style="border:solid;width: 100%;font-size: 8px;">
    <tr style="background-color: #c29558;text-align: center;">
      <td colspan="4"><h4>BILLING INSTRUCTIONS  : </h4></td>
    </tr>
    <tr>
      <td style="font-size: 8px;text-align: center;">BANK NAME</td><hr></hr>
      <td style="font-size: 8px;text-align: center;">ACCOUNT NAME</td><hr></hr>
      <td style="font-size: 8px;text-align: center;">ACCOUNT NO</td><hr></hr>
      <td style="font-size: 8px;text-align: center;">SWIFT CODE</td><hr></hr>
    </tr>
    <tr>
      <td style="font-size: 8px;text-align: center;">Bangkok Bank</td>
      <td style="font-size: 8px;text-align: center;">Ananya Lipe Co.,Ltd.</td>
      <td style="font-size: 8px;text-align: center;">593-041304-1</td>
      <td style="font-size: 8px;text-align: center;">BKKBTHBK </td>
    </tr>
  </table>

<p style="font-size: 8px;text-align: center;color: red;">* Please Noted this reservation is in pending , will be confirmed after receiving payment. *</p>

<p >Thank you very much for kindly e-mail  your remittance advise to us and co-operation , We look forward to welcome Ananya Lipe Resort.</p>

<div style="font-size: 10px;text-align: center;align-content: center;">
ANANYA LIPE RESORT<br> 
Email:<a href="">rsvn@ananyalipe.com</a> <br>
Tel: + 66 (0) 91 6346342-4<br> 
 Office time 08.00 am- 08.00 pm
</div>



</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

		

$location = "filePDF/".$text.".pdf";
$pdf = new mPDF('th', 'A4', '0', 'THSaraban');

$pdf->WriteHTML($html, 2);

$pdf->Output($location,'F'); 


?>    