<?php
require_once( '../mpdf/mpdf.php' );


ob_start();
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	
</head>
<body >


    <?php 
  $date = date('m-d-Y');
$date1 = str_replace('-', '/', $date);
$tomorrow = date('m-d-Y',strtotime($date1 . "+1 days"));

  ?>
<div class="container" style="text-align: center;border:solid;width: 100%;font-size: 10px;">
  <table style="width: 100%">
    <tr class="head" >
      <td align="center"><img src="../img/logoananya.png" style="width: 40%;" alt=""/></td>
    </tr>
    <tr>
      <td style="font-size: 10px; float: right;">&nbsp;&nbsp;&nbsp;<b>Booking date</b><?php echo $date;?></td>
    </tr>
    <tr>
       <td style="font-size: 10px; float: right;">&nbsp;&nbsp;&nbsp;<b>Booking ID </b><?php echo $ro['num_book'];?> </td>
    </tr>
  </table>
    <table style="text-align: center;border:solid;width: 100%;font-size: 10px;">
   <tr><td><h4>CONFIRMAITON BOOKING</h4></td></tr>
  </table><br>

  <?php
$checkin = explode(" ", $ro['checkin']); 
$checkout = explode(" ", $ro['checkout']);

 $cou = ((strtotime($checkout[0]) - strtotime($checkin[0]))/60/60/24);
$pri =  $ro['totalprice'] /$cou ;
 $start = $checkin[0]; 
  $start1   =  date( "d-M-Y", strtotime($start)); 
?>

  <table width="100%">
    <tbody>
      <tr>
        <td width="15%" style="font-size: 10px;"><B>Customer Name</B></td>
        <td width="5%" >:</td>
        <td width="80%" style="font-size: 10px;"><?php echo $ro['names'];?> </td>
    
      </tr>
      <tr>
        <td style="font-size: 10px;"><B>Telephone No</B></td>
        <td>:</td>
        <td style="font-size: 10px;"><?php echo $ro['phone'];?> </td>

      </tr>
      <tr>
        <td style="font-size: 10px;"><B>Email</B></td>
        <td>:</td>
        <td style="font-size: 10px;"><?php echo $ro['email'];?> </td>

      </tr>
      <tr>
        <td style="font-size: 10px;"><B>Check in</B></td>
        <td>:</td>
        <td style="font-size: 10px;"><?php echo $checkin[0];?> </td>

      </tr>
      <tr>
        <td style="font-size: 10px;"><B>Check out</B></td>
        <td>:</td>
        <td style="font-size: 10px;"><?php echo $checkout[0];?> </td>

      </tr>
    </tbody>
  </table>
  
  
	<table width="100%" style="text-align: center;font-size: 10px">
  <tbody>
    <tr >
      <td width="22%" style="text-align:left"><B>Room Type </B></td><hr>
      <td width="11%" style="text-align:center"><B>No.of Room</B></td><hr>
      <td width="11%" style="text-align:center"><B>No. of Guest</B></td><hr>
      <td width="11%" style="text-align:center"><B>Special Request</B></td><hr>
    </tr>
    <tr >


      <td style="text-align:left"><?php echo $ro_room['name_room_en'];?> </td>
      <td style="text-align:center"><?php echo $ro['num_room'];?> </td>
      <td style="text-align:center"><?php echo $ro['number_guest'];?> </td>
      <td style="text-align:center">-</td>
    </tr>
  
  </tbody>
</table><br>



         <table width="100%" style="text-align: center;font-size: 10px">
  <tbody>
    <tr >
      <th width="22%" style="text-align:left"><B>Room Rate Detail</B></th><hr>
      <th width="11%" style="text-align:center"><B>Rate/Night</B></th><hr>
      <th width="11%" style="text-align:center"><B>ABF</B></th><hr>
      <th width="11%" style="text-align:center"><B>Promotion Code</B></th><hr>
    </tr>




 <tr >
      <td style="text-align:left"><?php  echo $start1; ?></td>
      <td style="text-align:center"><?php echo $pri ; ?></td>
      <td style="text-align:center">Inc</td>
      <td style="text-align:center">-</td>
    </tr><?php

 for( $i=1; $i <  $cou; $i++ ){
     
       $start   =  date( "d-M-Y", strtotime( $start." +1 day" ) ); ?>




    <tr >
      <td style="text-align:left"><?php echo $start; ?></td>
      <td style="text-align:center"><?php echo $pri ; ?></td>
      <td style="text-align:center">Inc</td>
      <td style="text-align:center">-</td>
    </tr>
   




<?php

        
     }
      ?>
    <tr >
      <th width="22%" style="text-align:left"><B>Total Amount</B></th><hr>
      <th width="11%" style="text-align:center"><B><?php echo $ro['totalprice'] ;?></B></th><hr>
      <th width="22%" colspan="2" style="text-align:center"><B>Full Prepaid</B></th><hr>
    </tr>
  </tbody>
</table>

  <p><B>Cancellation Policy</B><p>
<p>1. Cancellation with is made 21 days prior to arrival will the 1 night charge</p>
<p>2. Cancellation with is made less than 21 days but before 14 days -50% refund</p>
<p>3. Cancellation with is made less than 7 days prior to arrival and No Shows – No refund.</p>  
  
   <p><B>เงื่อนไขการยกเลิกห้องพัก :</B><p>
<p>1. ยกเลิกก่อนเข้าพัก 21 วัน เรียกเบี้ยปรับค่าห้องพัก 1 คืน</p>
<p>2. ยกเลิกน้อยกว่า 21 วัน แต่ไม่ถึง 14  วันก่อนเข้า เรียกเบี้ยปรับค่าห้องพัก 50%</p>
<p>3. ยกเลิกน้อยกว่า 7 วัน ก่อนวันเข้าพัก หรือ No show ไม่สามารถคืนเงินได้</p> 
	
<div style="text-align: center;align-content: center;">
447 Moo 7 Koh Lipe, Koh Sarai Sub-district, Muang, Satun 91000 Thailand.<br>
+ 66 (0 ) 907676761 / 0907676762<br>
Office Hours 08.00 am. – 06.00 pm. (Thai time) E-mail : rsvn@ananyalipe.com<br> 
<a href="">Website : www.ananyalipe.com</a> 
</div>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

    

$location = "filePDF/".$mm.".pdf";
$pdf = new mPDF('th', 'A4', '0', 'THSaraban');

$pdf->WriteHTML($html, 2);

$pdf->Output($location,'F'); 


?>    