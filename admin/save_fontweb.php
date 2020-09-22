<?php
// session_start();
	
	//if(!isset($_SESSION['UserID']))
 //{
  //echo "<script> alert('Please Login!!');window.location.href='index.php';</script>";
  //exit();
 //}

include_once( '../connectdb.php' );

 $detail1 =$_REQUEST['detail_th'];
$detail2 =$_REQUEST['detail_en'];
$detail3 =$_REQUEST['detail_cn'];

$type =$_REQUEST['type'];

if($type=='contact'){
$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );
	header( 'Location: contact.php');
}else if($type=='lifestyle'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
	$res = mysqli_query( $con, $sqledit );
	header( 'Location: Lifestyle.php');

}
else if($type=='edit_detail_room'){

   $room = $_REQUEST['ID_room'];
	$sqledit = "UPDATE `room` SET  `detail_room_th` = '$detail1', `detail_room_en` = '$detail2', `detail_room_cn` = '$detail3' WHERE `ID_room` = '$room'";
	$res = mysqli_query( $con, $sqledit );
	header( 'Location: rooms.php');

}
else if($type=='ph'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
	$res = mysqli_query( $con, $sqledit );
	header( 'Location: ph.php');

}if($type=='plane'){
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
	$res = mysqli_query( $con, $sqledit );
	header( 'Location: Lifestyle1.php');
}else if($type=='qr'){
	

		$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_en` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = '$type'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: qr.php');
		}








	//$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$qr'";
//$res = mysqli_query( $con, $sqledit );
//header( 'Location: qr.php');
}else if($type=='logo'){
	

		$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_en` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = '$type'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: logo.php');
		}

}else if($type=='imgstyle'){
	

		$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_en` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = '$type'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: imgstyle.php');
		}

}elseif ($type=='vdo') {
	

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/vdo/";
		$uploaded_file = $upload_dir . $fileName;
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_en` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = '$type'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: vdo.php');
		}	if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
	

}else if($type=='sl'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );
	header( 'Location: edit_web.php');
}
else if($type=='de'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );
	header( 'Location: edit_web1.php');
}else if($type=='web'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );
	header( 'Location: edit_web2.php');
}else if($type=='mail'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );
	header( 'Location: edit_web2.php');
}else if($type=='pay'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );
	header( 'Location: edit_Payment.php');
}else if($type=='footer'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: edit_web2.php');
}





else if($type=='art_beach_club1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: art_beach_club.php');
}
else if($type=='art_beach_club2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: art_beach_club.php');
}else if($type=='img_art_beach_club1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_art_beach_club'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: art_beach_club.php');
		}

}
else if($type=='img_art_beach_club2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_art_beach_club'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: art_beach_club.php');
		}

}





else if($type=='steak_house1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: steak_house.php');
}
else if($type=='steak_house2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: steak_house.php');
}else if($type=='img_steak_house1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_steak_house'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: steak_house.php');
		}

}
else if($type=='img_steak_house2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_steak_house'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: steak_house.php');
		}

}
		



else if($type=='sukoi_teppanyaki1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: sukoi_teppanyaki.php');
}
else if($type=='sukoi_teppanyaki2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: sukoi_teppanyaki.php');
}else if($type=='img_sukoi_teppanyaki1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_sukoi_teppanyaki'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: sukoi_teppanyaki.php');
		}

}
else if($type=='img_sukoi_teppanyaki2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_sukoi_teppanyaki'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: sukoi_teppanyaki.php');
		}

}




else if($type=='shine_bar1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: shine_bar.php');
}
else if($type=='shine_bar2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: shine_bar.php');
}else if($type=='img_shine_bar1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_shine_bar'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: shine_bar.php');
		}

}
else if($type=='img_shine_bar2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_shine_bar'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: shine_bar.php');
		}

}





else if($type=='wedding_styles1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: wedding_styles.php');
}

else if($type=='img_wedding_styles'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_en` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_wedding_styles'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: wedding_styles.php');
		}

}



else if($type=='location'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: location.php');
}

else if($type=='img_location'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_en` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_location'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: location.php');
		}

}



else if($type=='pattaya_restaurents1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: pattaya_restaurents.php');
}
else if($type=='pattaya_restaurents2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: pattaya_restaurents.php');
}else if($type=='img_pattaya_restaurents1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_pattaya_restaurents'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: pattaya_restaurents.php');
		}

}
else if($type=='img_pattaya_restaurents2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_pattaya_restaurents'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: pattaya_restaurents.php');
		}

}




else if($type=='sky_bar1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: sky_bar.php');
}
else if($type=='sky_bar2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: sky_bar.php');
}else if($type=='img_sky_bar1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_sky_bar'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: sky_bar.php');
		}

}
else if($type=='img_sky_bar2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_sky_bar'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: sky_bar.php');
		}

}




else if($type=='lagoon_bar1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: lagoon_bar.php');
}
else if($type=='lagoon_bar2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: lagoon_bar.php');

}else if($type=='img_lagoon_bar1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_lagoon_bar'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: lagoon_bar.php');
		}

}
else if($type=='img_lagoon_bar2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_lagoon_bar'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: lagoon_bar.php');
		}

}




else if($type=='private_candle_light1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail2', `detail_cn` = '$detail3' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: private_candle_light.php');
}

else if($type=='img_private_candle_light'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_en` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_private_candle_light'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: private_candle_light.php');
		}

}



else if($type=='excursions1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: excursions.php');
}
else if($type=='excursions2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: excursions.php');

}else if($type=='img_excursions1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_excursions'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: excursions.php');
		}

}
else if($type=='img_excursions2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_excursions'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: excursions.php');
		}

}



else if($type=='fitness_center1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: fitness_center.php');
}
else if($type=='fitness_center2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: fitness_center.php');

}else if($type=='img_fitness_center1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_fitness_center'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: fitness_center.php');
		}

}
else if($type=='img_fitness_center2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_fitness_center'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: fitness_center.php');
		}

}



else if($type=='thai_massage1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: thai_massage.php');
}
else if($type=='thai_massage2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: thai_massage.php');

}else if($type=='img_thai_massage1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_thai_massage'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: thai_massage.php');
		}

}
else if($type=='img_thai_massage2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_thai_massage'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: thai_massage.php');
		}

}



else if($type=='kid_club1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: kid_club.php');
}
else if($type=='kid_club2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: kid_club.php');

}else if($type=='img_kid_club1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_kid_club'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: kid_club.php');
		}

}
else if($type=='img_kid_club2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_kid_club'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: kid_club.php');
		}

}



else if($type=='beach_activity_center1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: beach_activity_center.php');
}
else if($type=='beach_activity_center2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: beach_activity_center.php');

}else if($type=='img_beach_activity_center1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_beach_activity_center'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: beach_activity_center.php');
		}

}
else if($type=='img_beach_activity_center2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_beach_activity_center'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: beach_activity_center.php');
		}

}


else if($type=='yoga1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: yoga.php');
}
else if($type=='yoga2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: yoga.php');

}else if($type=='img_yoga1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_yoga'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: yoga.php');
		}

}
else if($type=='img_yoga2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_yoga'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: yoga.php');
		}

}



else if($type=='Merit_making_to_the_monks1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: Merit_making_to_the_monks.php');
}
else if($type=='Merit_making_to_the_monks2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: Merit_making_to_the_monks.php');

}else if($type=='img_Merit_making_to_the_monks1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_Merit_making_to_the_monks'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: Merit_making_to_the_monks.php');
		}

}
else if($type=='img_Merit_making_to_the_monks2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_Merit_making_to_the_monks'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: Merit_making_to_the_monks.php');
		}

}




else if($type=='Thai_cookery_class1'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail1', `detail_en` = '$detail1', `detail_cn` = '$detail1' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: Thai_cookery_class.php');
}
else if($type=='Thai_cookery_class2'){
	
	$sqledit = "UPDATE `fontweb` SET  `detail_th` = '$detail2', `detail_en` = '$detail2', `detail_cn` = '$detail2' WHERE `type` = '$type'";
$res = mysqli_query( $con, $sqledit );

	header( 'Location: Thai_cookery_class.php');

}else if($type=='img_Thai_cookery_class1'){

	$fileName = $_FILES[ 'detail_th' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_th' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_th` = '$fileName', `detail_cn` = '$fileName' WHERE `type` = 'img_Thai_cookery_class'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: Thai_cookery_class.php');
		}

}
else if($type=='img_Thai_cookery_class2'){

	$fileName = $_FILES[ 'detail_en' ][ 'name' ];
		$upload_dir = "../img/";
		$uploaded_file = $upload_dir . $fileName;
		if ( move_uploaded_file( $_FILES[ 'detail_en' ][ 'tmp_name' ], $uploaded_file ) ) {
			//insert file information into db table
			$mysql_insert = "UPDATE `fontweb` SET  `detail_en` = '$fileName' WHERE `type` = 'img_Thai_cookery_class'";
			mysqli_query( $con, $mysql_insert )or die( "database error:" . mysqli_error( $con ) );
			//echo $uploaded_file; 
			header('Location: Thai_cookery_class.php');
		}

}
?>