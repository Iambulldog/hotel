<!DOCTYPE html>
<?php include_once('connectdb.php');
session_start();

if(empty($_GET["lang"]) ){
  $_GET["lang"] ='en';
}
if($_GET["lang"]=='en'){
  include('en.php');
  
  $nr="name_room_en";
  $dt="detail_room_en";
  $fde="detail_en";

}else if($_GET["lang"]=='th'){
  include('th.php');
  
  $nr="name_room_th";
  $dt="detail_room_th";
  $fde="detail_th";
} else if($_REQUEST["lang"]=='cn'){
  include('cn.php');
  $nr="name_room_cn";
  $dt="detail_room_cn";
  $fde="detail_cn";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="cache-control" content="no-transform" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ananya Lipe - อนัญญา หลีเป๊ะ |ที่พักเกาะหลีเป๊ะ | รีสอร์ทหลีเป๊ะ</title>
  <meta name="description" content="Ananya Lipe - อนัญญา หลีเป๊ะที่พักเกาะหลีเป๊ะสุดหรู โรงแรมหลีเป๊ะที่ประกอบไปด้วยสิ่งอำนวยความสะดวกมากมาย รีสอร์ทหลีเป๊ะตั้งอยู่บนหาดทรายสีขาวของเกาะหลีเป๊ะในทะเลอันดามัน ทั้งสระว่ายน้ำกลางแจ้ง และสระว่ายน้ำหลังห้อง ให้คุณได้สัมผัสการพักผ่อนที่แท้จริงกับ อนัญญาหลีเป๊ะ">
  <meta name="subject" CONTENT="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
  <meta name="author" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
  <meta name="copyright" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
  <meta name="distribution" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
  <meta name="robots" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">
  <meta name="rating" content="อนัญญาหลีเป๊ะ,ที่พักหลีเป๊ะ,โรงแรมหลีเป๊ะ,รีสอร์ทหลีเป๊ะ,รีสอรท์ Lipe,koh lipe,Ananya lipe , | แพ็คเกจเกาะหลีเป๊ะ 3วัน 2 คืน , โฮสเทลสุดหรูราคาถูก ">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">

</head>

