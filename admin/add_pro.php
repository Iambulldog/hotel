<?
	include_once("connectdb.php" );
	//echo "<pre>";
	//print_r($_POST);
	//echo "</pre>";
	/////////////////////////////////// INSERT ///////////////////////////////////////////////
	if(isset($_GET['todo'])){
		$strSQL = "INSERT INTO `promotion` (`ID_pro`, `code`, `percent`, `status`, `s_date`, `e_date`, `s_checkin`, `e_checkin`, `num`, `e_num`) VALUES (NULL, '".$_POST['code']."', '".$_POST['percent']."', '1', '".$_POST['date_book']."', '".$_POST['end_book']."', '".$_POST['date_checkin']."', '".$_POST['end_checkin']."', '".$_POST['num']."','');";
		$result = mysqli_query($con, $strSQL);
		if($result){
			header("Location: promotion.php"); 
			
		}
	}
	/////////////////////////////////// INSERT ///////////////////////////////////////////////
	/////////////////////////////////// DELETE ///////////////////////////////////////////////
	if (isset($_GET['delete_pro'])) {
		$sql_delete = "DELETE FROM `promotion` WHERE `promotion`.`ID_pro` = '".$_GET['id_pro']."'";
		 if (mysqli_query($con, $sql_delete)) {
		 	header("Location: promotion.php"); 
		 }
	}
	/////////////////////////////////// DELETE ///////////////////////////////////////////////
	/////////////////////////////////// edit ///////////////////////////////////////////////
	if (isset($_POST['edit_pro'])) {
		//echo "<pre>";
		//print_r($_POST);
		//echo "</pre>";
		$sql_up = "UPDATE `promotion` SET `code` = '".$_POST['code']."', `percent` = '".$_POST['percent']."' WHERE `promotion`.`ID_pro` = '".$_POST['id_pro']."';";
		if (mysqli_query($con, $sql_up)) {
			header("Location: promotion.php"); 
		}

	}
	/////////////////////////////////// edit ///////////////////////////////////////////////
?>
