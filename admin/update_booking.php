<?php 
session_start();
include_once('../connectdb.php');
if(!isset($_SESSION['UserID']))
{
  echo "<script> alert('Please Login!!');window.location.href='login.php';</script>";
  exit();
}
$ID_room=$_REQUEST['idroom'];
$names=$_REQUEST['names'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$checkin=$_REQUEST['checkin'];
$checkout=$_REQUEST['checkout'];
$number_guest=$_REQUEST['people'];
$id_booking=$_REQUEST['id_booking'];

$sqledit = "UPDATE `booking` SET `ID_room` = '$ID_room',`names` = '$names',`phone` = '$phone',`email` = '$email',`checkin` = '$checkin',`checkout` = '$checkout',`number_guest` = '$number_guest' WHERE ID_booking = $id_booking;";
if (mysqli_query($con,$sqledit)) {
   echo"<script>alert('แก้ไขข้อมูลสำเร็จ')</script>";
   echo"<script>window.location.href = 'booking.php';</script>";
   //header('Location: booking.php');
 };


?>