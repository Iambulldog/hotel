<?php

include_once( '../connectdb.php' );

$idroom = $_REQUEST[ 'idroom' ];
$names = $_REQUEST[ 'names' ];
$phone = $_REQUEST[ 'phone' ];
$email = $_REQUEST[ 'email' ];
$checkin = $_REQUEST[ 'checkin' ]." "."12:01:00";
$checkout = $_REQUEST[ 'checkout' ]." "."12:00:00";
$people = $_REQUEST[ 'people' ];
if(empty($_REQUEST[ 'totalprice' ])){
   $totalprice = 0;
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




$strSQL = "INSERT INTO `booking` (`ID_booking`, `ID_room`, `names`, `phone`, `email`, `checkin`, `checkout`, `number_guest`,`invoice`, `status`,`nowbooking`,`name`) 
           VALUES (NULL, '$idroom', '$names', '$phone', '$email', '$checkin', '$checkout', '$people','', '$status',NOW() , '$name');";

$objQuery = mysqli_query( $con, $strSQL );
if ( $objQuery === TRUE ) {
	$last = "SELECT ID_booking FROM booking ORDER BY ID_booking DESC LIMIT 1";
	$re = mysqli_query( $con, $last );
	$ss = mysqli_fetch_assoc( $re );
	
	
	$num = substr("00000".$ss[ 'ID_booking' ], -5);
	$text = "THECHIC".date('Y')."-".$num;
	
	

	$in = " UPDATE `booking` SET `invoice` = '" . $text . "',`num_book` = '".$text."' WHERE `booking`.`ID_booking` ='" . $ss[ 'ID_booking' ] . "'";
	$a = mysqli_query( $con, $in );

	}
echo "<script> window.location.href = 'booking.php'</script > ";

?>