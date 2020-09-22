
<?php include_once('connectdb.php')?>
<?php
date_default_timezone_set("Asia/Bangkok");
$q = $_GET['q'];
$date1 = date('Y-m-d');

$checin = $_GET['checkin'];

$sql = ( "SELECT * FROM promotion WHERE code  = '$q'" );
$res = mysqli_query( $con, $sql );
$sqlnumrow = mysqli_num_rows($res);
while ( $r = mysqli_fetch_assoc( $res ) ) { 
  $num  =   $r[ 'e_num' ];


}

//AND( ( s_date BETWEEN '$checin' AND '$checin' ) OR( e_date BETWEEN '$checin' AND '$checin' ) OR( '$checin' BETWEEN s_date AND e_date ) OR( '$checin' BETWEEN s_date AND e_date ) ) OR ( ( s_checkin BETWEEN '$checin' AND '$checin' ) OR( e_checkin BETWEEN '$checin' AND '$checin' ) OR( '$checin' BETWEEN s_checkin AND e_checkin ) OR( '$checin' BETWEEN s_checkin AND e_checkin ) )



$strSQL="SELECT * FROM promotion WHERE  status  = 1 AND code = '$q'AND( ( s_date BETWEEN '$date1' AND '$date1' ) OR( e_date BETWEEN '$date1' AND '$date1' ) OR ( '$date1' BETWEEN s_date AND e_date ) OR( '$date1' BETWEEN s_date AND e_date ) )AND( ( s_checkin BETWEEN '$checin' AND '$checin' ) OR( e_checkin BETWEEN '$checin' AND '$checin' ) OR( '$checin' BETWEEN s_checkin AND e_checkin ) OR( '$checin' BETWEEN s_checkin AND e_checkin ) ) ";
 
//AND( ( s_checkin BETWEEN '$checin' AND '$checin' ) OR( e_checkin BETWEEN '$checin' AND '$checin' ) OR( '$checin' BETWEEN s_checkin AND e_checkin ) )

	//AND( ( s_date BETWEEN '$date1' AND '$date1' ) OR( e_date BETWEEN '$date1' AND '$date1' ) OR( '$date1' BETWEEN s_date AND e_date ) OR( '$date1' BETWEEN s_date AND e_date ) )AND( ( s_checkin BETWEEN '$checin' AND '$checin' ) OR( e_checkin BETWEEN '$checin' AND '$checin' ) OR( '$date1' BETWEEN s_checkin AND e_checkin ) OR( '$checin' BETWEEN s_checkin AND e_checkin ) )

	$objQuery = mysqli_query($con,$strSQL);
	
	if($objResult = mysqli_fetch_array($objQuery))
	{
		echo $objResult['percent'];
		
	}
	else
	{
		echo 1;
	}
	?>



