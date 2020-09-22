
<!DOCTYPE html>
<html>
<head>
    <?php include_once('connectdb.php');
session_start();
date_default_timezone_set("Asia/Bangkok");
if(empty($_GET["lang"]) ){
  $_GET["lang"]='en';
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
<title>Ananya Lipe  - เกาะหลีเป๊ะ</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fascinating Checkout Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/stylep.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/creditlyp.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/easy-responsive-tabsp.css">
<script src="js/jquery.min.js"></script>
<link href="//fonts.googleapis.com/css?family=Overpass:100,100i,200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body style="background-image: url(img/pay.jpg)">
    <div class="main">  
        <h1 style="color: red">PAYMENT TO ANANYA LIPE  </h1>
        <div class="w3_agile_main_grids">
            <div class="agile_main_top_grid">
                <div class="agileits_w3layouts_main_top_grid_left">
                    <a href="#"><img src="img/12.png" alt=" " /></a>
                </div>
                <div class="w3_agileits_main_top_grid_right">
                    <h3><?php echo $ReservationDate;?></h3>
                </div>
                <div class="clear"> </div>
                <div class="wthree_total">

                <div class="w3_agileits_card_number_grid_right">
                    <div class="controls">
                        <a href="filePDF/<?php echo $_REQUEST['invoice'];?>.pdf" target="_blank"><img src="img/invoice-icon.jpg" width="52" height="55"><h5><?php echo $invoices;?></h5></a>
                        <h5><?php echo$peoples;?>: <?php echo $_REQUEST['people'];?>   <?php echo$sperson;?></h5>
                        
                        
                    </div>
                </div>

                 <div class="w3_agileits_card_number_grid_right">
                    <div class="controls">
                        <h5><?php echo $Name;?>:  <?php echo $_REQUEST['name'];?></h5>
                       
                    </div>
                </div>
                <div class="w3_agileits_card_number_grid_right">
                    <div class="controls">
                        <h5><?php echo $Email;?>:  <?php echo $_REQUEST['email'];?></h5>
                        
                    </div>
                </div>

                <div class="w3_agileits_card_number_grid_right">
                    <div class="controls">
                        <h5><?php echo $checkins;?>  :  <?php  $in = explode(" ",$_REQUEST['checkin']);echo $in[0];?></h5>
                        
                    </div>
                </div>
                <div class="w3_agileits_card_number_grid_right">
                    <div class="controls">
                        <h5><?php echo $checkouts;?>  :  <?php  $in = explode(" ",$_REQUEST['checkout']);echo $in[0];?></h5>
                        
                    </div>
                </div>

                <div class="w3_agileits_card_number_grid_right">
                    <div class="controls">
                        <h5><?php echo$night;?>: <?php echo $_REQUEST['night'];?>  <?php echo$NIGHT1;?></h5>
                        
                    </div>
                </div>
               

                    <h2><?php echo$pri;?>:<span><?php echo $_REQUEST['totalprice'];?></span>   THB</h2>

                </div>
            </div>
            <div class="agileinfo_main_bottom_grid">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li><img src="img/bbl.jpg" width="75" height="75" ></li>
                        <li><img src="img/PayPal.jpg"  width="240" height="75" ></li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="agileits_w3layouts_tab1">
                            <form  name="form" method="post" enctype="multipart/form-data"  action="bank.php" id="add_meeting">
                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                    <div class="credit-card-wrapper">
                                        <div class="first-row form-group">

                                            <style>

.id-card-wrapper {
 
  width:100%;
 
  display: flex;
}
.id-card {
  flex-basis: 100%;
  max-width: 95%;
  border: 1px solid rgb(97, 245, 245);
  margin: auto;
  color: #fff;
  padding: 1em;
  background-color: #ffffff;
  box-shadow: 0px 0px 3px 1px #12a0a0, inset 0px 0px 3px 1px #12a0a0;
}
</style>


                    <div class="id-card-wrapper">
                        <div class="id-card">
                            <div align="center" style="color: #000000">
                                <!-- <h5>KRUNGSRI BANK  ธนาคารกรุงศรีอยุธยา <b>XXX-X-XXXXX-X</b> </h5> -->
                                <img src="img/anan.jpg" height="40%" width="40%">
                            </div>
                            <div class="controls">
                                <label><?php echo $policy;?><br><?php echo $detail;?></label>
                            </div>
                        </div>
                    </div>

                    <div class="controls"><br>
                        <h4><input type="checkbox"  name="silps" required=""><label><?php echo $agreement;?></label></h4>
                    </div>


                    <div class="w3_agileits_card_number_grids">
                        <div class="w3_agileits_card_number_grid_left">
                            <div class="controls">
                                <label>หมายเลข Booking  :  <?php echo $_REQUEST['invoice'];?> สลิปการโอน</label>
                                <input type="file" class="form-control" name="silps" required="">
                            </div>
                            <input type="text" value="<?php echo $_REQUEST['invoice'];?>"  name="invoice" hidden>
                            <input type="text" name="Bank" value="BBl" hidden>
                        </div>
                    </div>

                                                
                                                <div class="clear"> </div>
                                            
                                            
                                        </div>
                                        <input type='submit' style="color: #FFFFFF;background-color: red;width: 105px;height: 45px" name='finish' value='SAVE' />
                                       
                                    </div><br>
                                </section>
                            </form>
                        </div>
                        <div class="agileits_w3layouts_tab2">




                            <br><br><br>


<input type="hidden" id="id_book" value="<?php echo $_REQUEST['invoice']; ?>" >
<!-- <?php $totalprice =  $_REQUEST['totalprice'].".00"; ?> -->
<?php $totalprice =  $_REQUEST['totalprice'].".00"; ?>
   <script src="https://www.paypalobjects.com/api/checkout.js"></script>




    <div id="paypal-button-container"></div>


    <script>
        paypal.Button.render({

            env: 'production', // sandbox | production
                style: {
            //  layout: 'vertical',  // horizontal | vertical
                size:   'medium',    // medium | large | responsive
                shape:  'rect',      // pill | rect
                color:  'gold'       // gold | blue | silver | white | black
                        },
            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create


            client: {
                production:    'Abv98LS_ksjmjzdEhAZCb6PWmzHDZIU6L1-DaqLM_Xc1vk54UAQ7NqpZwKVL1lbKPtq-gUR_QLSpTtDn',
              // sandbox:    'AdAIzWSOYJhg7Mtl_fOqcNyFggzL1rOXFswbhAnQE1RnD8dWR5W4rV45Hh9294sdCjd2cnODUUTKLwkT',
              // production: '<insert production client id>'
            },

            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked
            payment: function(data, actions) {

                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: '<?php echo $totalprice; ?>', currency: 'THB' }
                            }
                        ]
                    }
                });
            },

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {
                    
                    
                // Make a call to the REST api to execute the payment
                return actions.payment.execute().then(function(err) {
                    var id_book = document.getElementById('id_book').value;

                  
                    swal("Payment Complete", "We have attached a Voucher Please Check Your E-mail", "success");

                    $.ajax({
                    type: "POST",
                    data:{type:'payment',id_book:id_book},
                    url: "admin/payment_up.php",
                    success: function(data) {

                    setInterval(function(){ window.location.href = 'http://ananyalipe.com' }, 4000);
                    

                    },
                    error: function(jqXHR, textStatus, err) {
  
                    }
                  });
                    
                })
            }, 
            onError: function(err) {
                window.alert("erro");
            }

        }, '#paypal-button-container');

    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


                           <!--  <form action="#" method="post">
                                <label class="agileits_label">Your Email</label>
                                <input type="email" name="Email" placeholder="w3layouts@example.com" required="">
                                <label class="agileits_label">Your Password</label>
                                <input type="password" name="Password" placeholder="Password" required="">
                                <input type="submit" value="Login">
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="agileits_copyright">
            <p>สงวนลิขสิทธิ์ 2019 โรงแรมและรีสอร์ทในเครือ <a href="http://AkiraLipe.com/" target="_blank">Akira Lipe</a></p>
        </div>
    </div>
    <!-- credit-card -->
        <script type="text/javascript" src="js/creditly.js"></script>
        <script type="text/javascript">
            $(function() {
              var creditly = Creditly.initialize(
                  '.creditly-wrapper .expiration-month-and-year',
                  '.creditly-wrapper .credit-card-number',
                  '.creditly-wrapper .security-code',
                  '.creditly-wrapper .card-type');

              $(".creditly-card-form .submit").click(function(e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                  // Your validated credit card output
                  console.log(output);
                }
              });
            });
        </script>
    <!-- //credit-card -->
    <!-- tabs -->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true,   // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
                }
            });
        });
    </script>
    <!-- //tabs -->
</body>
</html>