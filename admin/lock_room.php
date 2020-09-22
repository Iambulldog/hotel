<?php
$idroom = $_REQUEST[ 'idroom' ];
$checkin = $_REQUEST[ 'checkin' ]." "."12:01:00";
$checkout = $_REQUEST[ 'checkout' ]." "."12:00:00";
$num_room = $_REQUEST['num_room'];
include_once( '../connectdb.php' );


$strSQL = "INSERT INTO booking (ID_booking, ID_room,num_room, names, phone, email, checkin, checkout,number_guest, invoice, status, nowbooking, name, bank, silps) VALUES (NULL, '$idroom','$num_room', '', '', '', '$checkin', '$checkout', '', '', '2', NOW(), '', '', '')";
$objQuery = mysqli_query( $con, $strSQL );

echo "<script> window.location.href = 'room_balan.php'</script > ";

?>