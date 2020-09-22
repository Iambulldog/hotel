<?php	
include_once( "connectdb.php" );
$nameroom =  mysqli_fetch_assoc(mysqli_query( $con, "SELECT ID_room,name_room_th FROM room where ID_room='".$_REQUEST['id']."'" ));


$sqlfac = 	"SELECT * FROM tb_fac";
$quefac = mysqli_query( $con, $sqlfac );		
$sql    = "SELECT * FROM room,facilties WHERE room.ID_room=facilties.ID_room and facilties.ID_room='".$_REQUEST['id']."'";	
//echo $nameroom['name_room_th'];
while($rfac = mysqli_fetch_assoc( $quefac )){
	$que    = mysqli_query( $con, $sql );

	?>
	<li>
		<input type="checkbox" onClick="edit(this.value)" id="cbox<?php echo $rfac['id_fac'];?>" value="<?php echo $rfac['id_fac'];?>"<?php while($rrom = mysqli_fetch_assoc( $que )){if($rrom['id_fac']==$rfac['id_fac']){	echo "checked "; 
		echo 'data'.$rfac['id_fac'].'id ="'.$rrom['ID_fa'].'"';
		break;
	}else{
		echo" ";
	}
}
?>>
<?php echo $rfac['name_fac_th']; ?></li>

<?php }?><br>