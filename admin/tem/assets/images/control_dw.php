




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    
  <?php	include_once('nav.php'); ?>

    <div class="main-panel">
      <!-- Navbar -->







<?php 

include('connect_db.php');
date_default_timezone_set("Asia/Bangkok");



$sql_regis = "SELECT * FROM tb_regis order by id_regis DESC";
  
foreach ($con->query($sql_regis) as $row_regis) {
        echo $row_regis['name_regis'];
        echo $row_regis['tel_regis'];
        echo $row_regis['line_regis']."<br>";
	 
    }


?>
<form method="post" action="save_dw.php">
<div class="form-group">
 
    <div class="col-sm-5">
     <input type="datetime-local" class="form-control" name="datetime">
    </div>
     <div class="col-sm-5">
    <input type="text" class="form-control" name="code">
    </div>
  </div>


<input type="number" class="form-control"  name="price">
<select name="status" class="form-control">
	<option value="1">ฝาก</option>
	<option value="0">ถอน</option>
</select>
 <input type="submit" class="form-control">
</form>


<?php 
$datenow = date('Y-m-d');
$sql_dw = "SELECT * FROM tb_dw where from_unixtime(date_dw,'%Y-%m-%d')= '".$datenow."' order by id_dw DESC";
  
foreach ($con->query($sql_dw) as $row_dw) {
        echo date('H:i',$row_dw['date_dw'])."&nbsp;&nbsp;&nbsp;" ;
        echo $row_dw['code_dw']." ";
        if($row_dw['status']==0){
			echo $row_dw['price_dw']." " ;
			echo  " ถอน <br>";
		}else if($row_dw['status']==1){
			echo $row_dw['price_dw']." " ;
			echo " ฝาก <br>";
		}
	 
    }

?>





      


  <?php	include_once('footer.php'); ?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>