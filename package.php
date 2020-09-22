<?php include_once('hea.php'); ?>

<body> <!--<![endif]-->   

    
    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

      
<style>
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}

</style>

<?php $logo = ( "SELECT * FROM fontweb where type='logo' " );
                    $logo1 = mysqli_query( $con, $logo );
                    $logo2 = mysqli_fetch_assoc( $logo1 );?>

    <header id="header">
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">
                <span style="color:#000000">+66 (0) 91 634 6342 - 4</span> 
            </div>
            <div class="header_right float-right">
                <div class="dropdown language">
                    <span style="color:#000000">LANGUAGE</span>
                    <ul id="ch_lang">
                        <li id="liEN" ><a href="map.php?lang=en"><img src="img/icon_en.png" height="25" width="25">    ENG</a></li>
                        <li id="liTH" ><a href="map.php?lang=th"><img src="img/icon_th.png" height="25" width="25">    TH</a></li>
                        <li id="liTH" ><a href="map.php?lang=cn"><img src="img/icon_cn.png" height="25" width="25">    CN</a></li>
                    </ul>
                </div>
            </div>

            <!-- <div class="header_left float-right">
                <span style="color:#000000"><a href="#">Register</a></span>
            </div>
            <div class="header_left float-right">
                <span style="color:#000000">|</span>
            </div>
            <div class="header_left float-right">
                <span style="color:#000000"><a href="#">Login</a></span>
            </div> -->
        </div>
    </div>

<?php include_once('nav.php'); ?>
        </header> 
        <script> $('#m1').addClass('current-menu-item'); </script>


        
        <!-- BANNER SLIDER -->
<section class="section-sub-banner" style="background-image: url(img/12.jpg);">
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2 style="font-family: 'Prompt', sans-serif; !important">promotion</h2>
                        <p>Ananya Lipe</p>
                    </div>
                </div>
            </div>
</section>

        <!-- END / BANNER SLIDER -->   








 <!--  ///////////////** แพคเกจที่แนะนำ ** /////////////////////////////-->


                <!-- GALLERY -->
<section >
            <!------------------------- booking -------------------------------------------------->

     




<form method="POST" action="booking.php" accept-charset="UTF-8" id="bookingForm"><input name="_token" type="hidden" value="">


<div class="container">
    <div class="clearfix" id="rtBox">
        <div class="pull-left recommendText">
            <h2><?php echo $Selectpackage; ?></h2>
            
        </div>
        <div class="pull-right"></div>      
    </div>

    <div class="container">
        
<?php
$sql = ( "SELECT * FROM package " );
$res = mysqli_query( $con, $sql );
$num = mysqli_num_rows($res);
while ( $r = mysqli_fetch_assoc( $res ) ) { ?>
<div class="col-md-6" id="roomList">
        <div id="roomList">
    <div class="roomBox">
    <div class="">
        <div class="info-gallery">
            <div class="clearfix propertyNameBox">
                <div class="pull-left">
                    <h3 class="roomtype-name" data-id="<?php echo $r['ID_room'];?>"><?php echo $r['name_package'];?></h3>
                </div>
            </div>
            
            <div id="9436817" class="carousel slide gallery" data-ride="carousel">
        
               <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/<?php echo $r['img_package'];?>"  style="width: 100%; max-height: 100%"></div>

                    <!--*** วนรูปห้อง **-->
                    
                    <!-- <div class="item ">
                        <img src="img/<?php echo $r['img_package'];?>" style="width: 100%; max-height: 100%">
                    </div> -->
                   

                </div>

           <!--   <a class="left carousel-control" href="#9436817" role="button" data-slide="prev">

                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#9436817" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
            </div>
    
         
        </div>
        <!-- <div class="info-detail">
            <div class="clearfix">
                <div class="pull-left">
                    <a href="javascript:void(0);" class="roomDetail">
                       <?php echo $Packaged ; ?> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                    <section class="roomDetailContent">
                        <div class="roomDescription">
                            <div><p><?php echo $r['name_package'];?><span style="font-size: 12px;">&nbsp; &nbsp;• &nbsp;<?php echo $roomdetail ; ?>  &nbsp;</span></p>
                            </div>
                        </div>
                    <hr class="descriptionLine">
                     <div class="roomDescription">
                            <div><h4> <?php echo $r['det_package'];?></h4>
                            </div>
                        </div>
                    
                     <hr class="descriptionLine">
                       
                    </section>
                </div>
                <div class="pull-right">
                   
                    <strike><strong><?php echo $STARTFROM; ?>  THB <?php echo $r['pri_package'];?> / <?php echo $sperson; ?></strong> </strike>
                </div>
            </div>
            
        </div> -->
    </div>
    <div class="booking-rate rate">
    <!-- <div class="promotion">
        <div class="rate-promotionName"><?php echo $INTERNET; ?></div>
        <div class="rate-promotionDescription">-</div>
        <div class="row roomDetails">
            <div class="col-sm-4">
                <span class="promotionDetail-sm"></span>
                <div class="policy">
                    <a href="javascript:void(0);" class="readPolicy"><span class="glyphicon glyphicon-exclamation-sign"></span><?php echo $Policy; ?></a>
                    <section>
                            <div class="policyBody">
                                <h2>Best Available Rate</h2>
                                <div>
                                    <p><span style="font-size: 14px;">
                                        <strong><u>Policy @ Koh Payam<br>เตียงเสริม:</u></strong>
                                    </span></p>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <img src="img/leistungen.png">                
            </div>
            <div class="col-sm-4 col-xs-6">
                <img src="img/hot_907035.png" title="Breakfast Included" class="img">
            </div>
        </div>
    </div> -->
    <div class="rate-rightBox">




      <!--   <div class="max">2×<i class="fa fa-user"></i></div>
        <div class="price">
            <div class="old-price"></div>
            <div class="new-price" style="color: #FF0000">THB <?php echo $r['pri_package'];?>.00 </div> <br> 

        </div>
         -->

       

       

            <!--<div class="input">
            <input class="form-control roomInput" name="room[<?php echo $r['ID_room'];?>][nopromotion][]" data-idroomtype="<?php echo $r['ID_room'];?>" data-type="nopromotion" data-proid="" data-price="<?php echo $r['price_room'];?>" data-freenight="false" data-minstay="1" data-ratename="INTERNET RATE" data-ratesamepro="false" value="0" type="hidden">

            <a href="#" type="button" class="btn bookBtn btn-info" ><?php echo $roomdetail; ?></a>
            </div>-->
                           

                          


    </div>
   <!--  <div class="moreInfo">
        <div id="infoContent">  
        </div>
        <div class="clearfix">
            <div class="pull-right">
                <a href="javascript:void(0);" class="closeInfo btn bookBtn btn-success">Close</a>
            </div>
        </div>
    </div> -->
</div>
    <div class="booking-box bordered ">
    <div class="booking-rate-list"></div>           
    </div>
    <div class="row">
    </div>
</div>


<hr class="no-margin-bottom">













</div>
</div>
      <?php }?>
    </div>
</div>
</form>
        </div>
     
            <div id="footerBox"></div>
            
        
      
        
    
    <script src="http://www.centrumcloud.com/booking/assets/packages/jquery/jquery-2.2.2.min.js"></script>
    <script src="http://www.centrumcloud.com/booking/assets/packages/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://www.centrumcloud.com/booking/assets/packages/jqueryUi/jquery-ui.min.js"></script>
    <script src="http://www.centrumcloud.com/booking/assets/packages/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="http://www.centrumcloud.com/booking/assets/js/main.js"></script>
    <script>
        var yourElement = document.getElementById('link_thankyou');
 yourElement.setAttribute('href', 'https://www.theblueskyresort.com/thank-you.html');

 setTimeout(function () {
       window.location.href = "https://www.theblueskyresort.com/thank-you.html"; //will redirect to your blog page (an ex: blog.html)
 }, 10000); //will call the function after 2 secs.

 var paragraph = document.getElementById("adddelay");
var text = document.createTextNode("You will be automatically redirected to the home page in 10 seconds.");

paragraph.appendChild(text);    </script>

    <script src="http://www.centrumcloud.com/booking/assets/packages/moment/moment.js"></script>
<script src="http://www.centrumcloud.com/booking/assets/packages/lightslider/js/lightslider.min.js"></script>
<script src="http://www.centrumcloud.com/booking/assets/packages/readmoreJs/readmore.min.js"></script>
<script>
$(document).ready(function() {
    var currency = 'THB';
    var maximumBooks = 5;
    var isAllotment = false;

    jQuery.fn.setElementDate = function (date){
        var element = $(this).parent().parent();
        if(typeof date == 'undefined'){
            date = $(this).val();
        }
        element.find('.daydate').html(moment(date).format('DD'));
        element.find('.month').html(moment(date).format('MMM YYYY'));
    }


    var app = {

        timer:0,

        run: function()
        {
            var thisApp = this;
            var noOfNight = this.diffDays();

            $('#bookingform-checkindate').setElementDate();

            $('#bookingform-checkindate').datepicker({
                dateFormat: 'yy-mm-dd', 
                minDate: 0,
                onSelect: function(dateText) {
                    $(this).val(dateText);
                    var date = moment(dateText);
                    $(this).setElementDate(date);
                    var minDate = moment(dateText).add(1, 'days').format('YYYY-MM-DD');
                    var endDate = moment(dateText).add(parseInt($('#noOfNight').text()), 'days').format('YYYY-MM-DD');
                    $('#bookingform-checkoutdate').datepicker("setDate", endDate);
                    $('#bookingform-checkoutdate').datepicker( "option", "minDate", minDate );
                    $('#bookingform-checkoutdate').setElementDate(endDate);
                    thisApp.updateLink();
                    thisApp.loadRoomList();
                }
            });

            $('#bookingform-checkoutdate').setElementDate();

            $('#bookingform-checkoutdate').datepicker({
                dateFormat: 'yy-mm-dd', 
                minDate: (0+1),
                onSelect: function(dateText) {
                    $(this).val(dateText);
                    var date = moment(dateText);
                    $(this).setElementDate(date);
                    thisApp.updateLink();
                    thisApp.loadRoomList();
                }
            });

            $('#avaibilityStartDate').datepicker({
                dateFormat: 'yy-mm-dd', 
                minDate: 0,
                onSelect: function(dateText) {
                    thisApp.loadAvaibility(dateText, null);
                }
            });


            $('body').on('click', '.avaibilityNav', function(){
                var action = $(this).data('action');
                var startDate = $('#avaibilityTitle').data('startdate');
                if(action=='backward')
                {
                    startDate = moment(startDate).add(-10, 'days').format('YYYY-MM-DD');
                }else{
                    startDate = moment(startDate).add(10, 'days').format('YYYY-MM-DD');
                }
                if(startDate<moment().format('YYYY-MM-DD')){
                    startDate = moment().format('YYYY-MM-DD');
                }
                $('#avaibilityStartDate').datepicker("setDate", moment(startDate).format('YYYY-MM-DD'));
                thisApp.loadAvaibility(moment(startDate).format('YYYY-MM-DD'), null);
            });

            $('body').on('click', '.datepickerBox', function(){
                var element = $(this).data('element');
                $(element).show().focus().hide();
            });


            var this_;
            var max = 0;
            $('body').on('focusin', '.roomInput', function(){

                this_ = $(this);
                if($.inArray(this_.data('type'), ['promotion'/*, 'code'*/]) != -1 && isAllotment == true){
                    max = parseInt($('#availableRoom_'+this_.data('idroomtype')).data('availabletariff'));
                }else{
                    max = parseInt($('#availableRoom_'+this_.data('idroomtype')).val());
                }
                $(this).data('val', this_.val());

            }).change(function(){

                var currentVal = parseInt(this_.data('val'));
                max += currentVal;

                var val = parseInt(this_.val());
                max -= val;

                var isPromotion = false;
                //var rateSamePro = this_.data('ratesamepro');
                if(isAllotment == false){
                    $('#availableRoom_'+this_.data('idroomtype')).val(max);
                }else{
                    /*if(rateSamePro==true){
                        $('#availableRoom_'+this_.data('idroomtype')).data('availabletariff', max);
                        $('#availableRoom_'+this_.data('idroomtype')).val(max);
                    }else{*/
                        if($.inArray(this_.data('type'), ['promotion'/*, 'code'*/]) != -1){
                            $('#availableRoom_'+this_.data('idroomtype')).data('availabletariff', max);
                            isPromotion = true;
                        }else{
                            $('#availableRoom_'+this_.data('idroomtype')).val(max);
                        }
                    /*}*/
                }

                var totalRoomThisType = 0;
                $.each($('.roomInput[data-idroomtype="'+this_.data('idroomtype')+'"]'), function(index, val){
                    totalRoomThisType += parseInt($(this).val());
                });
                $.each($('.roomInput[data-idroomtype="'+this_.data('idroomtype')+'"]'), function(index, val){
                    if($(this) != this_){
                        var isPromotion_ = false;
                        if($.inArray($(this).data('type'), ['promotion'/*, 'code'*/]) != -1){
                            isPromotion_ = true;
                        }

                        if((isPromotion_ == isPromotion) || isAllotment == false){ //rateSamePro == true ||
                            if(max==0){
                                $(this).parent().find('.bookBtn').prop('disabled', true);
                            }else{
                                $(this).parent().find('.bookBtn').prop('disabled', false);
                            }

                            /*var selectVal = parseInt($(this).val())+max;
                            $.each($('option', this), function(){
                                var optionVal = parseInt($(this).val());
                                if(optionVal > max && optionVal > selectVal)
                                {
                                    $(this).prop('disabled', true);
                                }else{
                                    $(this).prop('disabled', false);
                                }
                            });*/
                        }
                    }
                });

                var totalRooms = thisApp.calculatePrice();
                if(totalRooms > maximumBooks){
                    alert('Warning! You cannot book greater than '+maximumBooks+' rooms per time');
                    this_.trigger('focusin');
                    //this_.find('option[value="'+currentVal+'"]').prop('selected', true).trigger('change');
                    this_.val(currentVal).trigger('change');
                    var idRoomType = this_.data('idroomtype');
                    $('.roomSelectedList[data-id="'+idRoomType+'"]').find('.selectedItem').last().slideUp(function(){
                        $(this).remove();
                    });
                    //$('.bookNowBtn').prop('disabled', true);
                }else{
                    $('.bookNowBtn').prop('disabled', false);
                }
                this_.trigger('focusin');

            });

            $('body').on('click', '.rate-button', function(){
                var toggle = $(this).data('toggle');
                var bookingBox = $(this).parent().parent().parent().find('.booking-box');
                var btnBox = $(this).parent().parent();
                if(toggle == 'close')
                {
                    //bookingBox.removeClass('show-rate');
                    bookingBox.slideUp();
                    btnBox.removeClass('show-rate');
                }else{
                    //bookingBox.addClass('show-rate');
                    bookingBox.slideDown();
                    btnBox.addClass('show-rate');
                }
            });

            /*$('body').on('keyup', '#bookingform-promotioncode', function(){
                if (thisApp.timer) {
                    clearTimeout(thisApp.timer);
                }
                thisApp.timer = setTimeout(thisApp.resetTimer(), 1500); 
            });*/

            $('body').on('click', '#findAvailableBtn', function(){
                thisApp.updateLink();
                thisApp.loadRoomList();
            });

            $('body').on('click', '.bookNowBtn', function(){
                var totalRooms = thisApp.calculatePrice();
                if(totalRooms > maximumBooks){
                    alert('Warning! You cannot book greater than '+maximumBooks+' rooms per time');
                }else if(totalRooms > 0 && totalRooms <= maximumBooks){
                    $('#bookingForm').submit();
                }else{
                    alert('You must select some room.');
                }
            });

            $('body').on('click', '#availabilityBox', function(e){
                if( e.target != this ) {
                    return false;
                }else{
                    $(this).fadeOut();
                    $('body').css('overflow', '');
                }
            });
            
            $('body').on('click', '#closeAvaibilityBtn', function(){
                $('#availabilityBox').fadeOut();
                $('body').css('overflow', '');
            })

            $('body').on('click', '#availableCalendarBtn', function(){
                $('body').css('overflow', 'hidden');
                thisApp.loadAvaibility($('#bookingform-checkindate').val(), null);
                $('#availabilityBox').fadeIn();
            });


            $('body').on('click', '.bookBtn', function(){
                var element = $(this).parent().find('.roomInput');
                element.trigger('focusin');
                var val = parseInt(element.val());
                element.val(val+1);
                element.trigger('change');
            });

            $('body').on('click', '.removeRoom', function(){
                var element = $(this).parent().parent();
                var idRoomType = element.data('id');
                var dataType = element.data('datatype');
                var proid = element.data('proid');
                element.slideUp(function(){
                    var elementList = element.parent();
                    $(this).remove();
                    if(elementList.find('.selectedItem').length == 0){
                        elementList.slideUp(function(){
                            $(this).remove();
                        });
                    }
                });
                var inputElement = $('.roomInput[data-idroomtype="'+idRoomType+'"][data-type="'+dataType+'"][data-proid="'+proid+'"]');
                inputElement.trigger('focusin');
                var val = parseInt(inputElement.val());
                inputElement.val(val-1);
                inputElement.trigger('change');
            });

            $('body').on('click', '.roomDetail', function(){
                var roomtypeName = $(this).parent().parent().parent().parent().find('.roomtype-name').html();
                var gallery = $(this).parent().parent().parent().parent().find('.gallery img');
                var galleryList = '';
                var iGallery = 0;
                gallery.each(function(){
                    iGallery++;
                    var imgUrl = $(this).attr('src');
                    galleryList += '<li data-thumb="'+imgUrl+'" data-src="'+imgUrl+'"><img src="'+imgUrl+'"/></li>';
                });
                var content = '<h1 class="modalTitle"><?php echo $Packaged ; ?></h1><div class="row">'+
                '<div class="col-md-6"><ul id="imageGallery">' + galleryList + '</ul></div>'+
                '<div class="col-md-6"><h1>' + roomtypeName + '</h1>' +$(this).parent().find('section.roomDetailContent').html()+'</div>'+
                '</div>';

                $('#modalBoxContent').html(content);

                var slider = $('#imageGallery').lightSlider({
                    gallery: true,
                    item: 1,
                    loop: true,
                    autoWidth: true,
                    //auto: true,
                    speed: 800,
                    thumbItem: 8,
                    slideMargin: 0,
                    enableDrag: true,
                    currentPagerPosition: 'left',
                    onSliderLoad: function(el) {
                        /*el.lightGallery({
                            selector: '#imageGallery .lslide'
                        });*/
                    }   
                });  

                /*$('#imageGallery').on('mouseover', function(){
                    slider.pause();    
                });

                $('#imageGallery').on('mouseout', function(){
                    slider.play(); 
                });*/

                thisApp.displayModal('#modalBox');


                /*$('#dialogTitle').html('<h1>'+roomtypeName+'</h1>');
                $('#dialogBody').html(content);
                $('#dialogBox').modal('show');*/
            });


            $(window).scroll(function(){ // scroll event
                thisApp.resizeRoomSelectedBox();
            });

            
            /*$(window).scroll(function(){ // scroll event
                if($('#bookNowBtn').isOnScreen()){
                    $('.scrollToTop').fadeOut();
                }else{
                    $('.scrollToTop').fadeIn();
                }
            });*/

            $('.scrollToTop').click(function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });

            $(window).resize(function() {
                thisApp.resizeRoomSelectedBox();
            });
            

            thisApp.resizeRoomSelectedBox();

            $('body').on('click', '#showDetailBtn', function(){
                $('#boxSelected').slideToggle();
            });

            $('body').on('click', '.readPromotion', function(){
                var content = $(this).parent().parent().parent().parent().find('.rate-promotionDescription').html();
                var element = $(this).parent().parent().parent().parent().parent().find('.moreInfo');
                element.find('#infoContent').html(content);
                element.slideDown();
            });

            $('body').on('click', '.readPolicy', function(){
                var promotionName = $(this).parent().parent().parent().parent().parent().find('.rate-promotionName').text();
                var policyBody = $(this).parent().find('.policyBody').html();
                var policyTitle = $(this).parent().find('.policyTitle').text();
                var roomtypeName = $(this).parent().parent().parent().parent().parent().parent().find('.roomtype-name').text();
                var element = $(this).parent().parent().parent().parent().parent();
                element.find('#infoContent').html(policyBody);
                element.find('.moreInfo').slideDown();
            });

            $('body').on('click', '.closeInfo', function(){
                $(this).parent().parent().parent().slideUp();
            });

            $('body').on('click', '#codeText a', function(){
                $(this).parent().fadeOut(function(){
                    $('#codeBox').fadeIn(); 
                });
            });

            if($('#bookingform-promotioncode').val()!=''){
                $('#codeText a').trigger('click');
            }

            $('body').on('click', '#closeCodeBtn', function(){
                $('#codeBox').fadeOut(function(){
                    //if($('#bookingform-promotioncode').val()!=''){
                        $('#bookingform-promotioncode').val('');
                        $('#findAvailableBtn').trigger('click');
                    //}
                    $('#codeText').fadeIn();
                });
            });

            $('body').on('click', '.closeModalBox', function(){
                $(this).parent().parent().fadeOut();
                $('body').css('overflow', '');
            });

            $(document).on('keyup', function(event){
                if(event.keyCode == 27 && $('#modalBox').is(':visible')){ //escape
                    $('#modalBox').find('.closeModalBox').trigger('click');
                }
            });

            $('body').on('click', '.modalBox', function(e){
                if(e.target == this){
                    $('.closeModalBox').trigger('click');
                }
            });

            thisApp.updateLink();
            thisApp.loadRoomList();

        },

        displayModal: function(element){
            $(element).fadeIn();
            $('body').css('overflow', 'hidden');
        },

        resizeRoomSelectedBox: function()
        {
            var topHeight = $('#header').height() + $('#rtBox').height() + $('.booking-form').height() + 21; //21 is margin 
            var selectedBoxHeight = $(window).height();
            if ($(window).scrollTop() > topHeight && $(window).width() > 974 ) { //if screen width > 974  and scroll top > 460 fix side bar
                if($('#footerBox').visibleHeight() > 0){
                    selectedBoxHeight -= $('#footerBox').visibleHeight();
                }
                $(".sticky").css({"top": ($(window).scrollTop()) - topHeight + "px"});
                $('.sticky').css('max-height', selectedBoxHeight);
                $('#roomSelectedBox').css('max-height', selectedBoxHeight-140); //138
            }else{
                $('.sticky').css('top', '');
                $('.sticky').css('max-height', selectedBoxHeight);
                $('#roomSelectedBox').css('max-height', selectedBoxHeight-140); //138
            }
        },

        loadAvaibility: function(startDate, allRoomtype)
        {
            $.ajax({
                url: 'http://www.centrumcloud.com/booking/reservation/BlueskyKohPayam/getAvaibility',
                type: 'get',
                data: {startDate: startDate, allRoomtype: allRoomtype},
                dataType: 'json',
                beforeSend: function(){
                    $('#headDay, #headNumb, #avaibility').empty();
                    $('#avaibilityTable, #avaibilityTitle').slideUp();
                    $('#availabilityLoading').html('<i class="fa fa-spinner fa-pulse"></i>');
                }
            }).error(function(){
                alert('Error cannot load avaibility');
            }).done(function(data){
                $('#avaibilityTitle').data('startdate', data.startDate);
                $('#avaibilityFrom').html(data.startDateText);
                $('#avaibilityTo').html(data.endDateText);
                $('#avaibilityTable, #avaibilityTitle').slideDown();
                $('#availabilityLoading').empty();
                var dayInfo = data.dayInfo;
                var roomInfo = data.roomInfo;
                var roomAvaibility = data.avaibility;
                $('#headDay').append('<th rowspan="2">Roomtypes / Days</th>');
                $.each(dayInfo, function(k, v) {
                    $('#headDay').append('<th>'+v.day+'</th>');
                    $('#headNumb').append('<th>'+v.num+'</th>');
                });

                $.each(roomInfo, function(k, v) {
                    var html = '<tr><td>'+v+'</td>';
                    $.each(roomAvaibility[k], function(day, variable) {
                        var icon = '✕';
                        var className = '';
                        if(parseInt(variable.avaibility)>0){
                            icon = '✓';
                            className = 'available';
                        }
                        html += '<td class="avaibilityTimes '+className+'">'+icon+'</td>';
                    })
                    html += '</tr>';
                    $('#avaibility').append(html);
                });
            }).always(function(){

            });
        },

        resetTimer: function()
        {
            this.timer = 0;
            this.updateLink();
            this.loadRoomList();
        },

        diffDays: function()
        {
            return moment($('#bookingform-checkoutdate').val()).diff(moment($('#bookingform-checkindate').val()), 'days');
        },

        disableInput: function()
        {
            
        },

        updateLink: function()
        {
            var specificationFields = '';
            if($('input[name="promotionId"]').val() != undefined){
                specificationFields += '&promotionId=' + $('input[name="promotionId"]').val();
            }
            if($('input[name="promotionName"]').val() != undefined){
                specificationFields += '&promotionName=' + $('input[name="promotionName"]').val();
            }
            window.history.pushState('', '', 'http://www.centrumcloud.com/booking/reservation/BlueskyKohPayam?checkInDate='+$('input[name="checkInDate"]').val()+'&checkOutDate='+$('input[name="checkOutDate"]').val()+'&promotionCode='+$('input[name="promotionCode"]').val()+specificationFields); // update link

        },

        loadRoomList: function()
        {
            var thisApp = this;
            var params = {checkInDate: $('input[name="checkInDate"]').val(), checkOutDate: $('input[name="checkOutDate"]').val(), promotionCode: $('input[name="promotionCode"]').val()};
            if($('input[name="promotionId"]').val() != undefined){
                params['promotionId'] = $('input[name="promotionId"]').val();
                $('input[name="promotionId"]').remove();
            }
            if($('input[name="promotionName"]').val() != undefined){
                params['promotionName'] = $('input[name="promotionName"]').val();
                $('input[name="promotionName"]').remove();
            }
            $.ajax({
                url: 'http://www.centrumcloud.com/booking/reservation/BlueskyKohPayam/getRoomAvailable',
                type: 'get',
                dataType: 'html',
                data: params,
                beforeSend: function(){
                    $('#roomList').html('<div class="uil-ripple-css" style="transform:scale(0.6);"><div>');
                }
            })
            .done(function(res) {
                $('#roomList').html(res);
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                alert('Error load data');
            })
            .always(function() {
                thisApp.calculatePrice();
                $('.roomDescription').readmore({
                    speed: 75,
                    maxHeight: 40
                });
                $('.amenity').readmore({
                    speed: 75,
                    maxHeight: 40
                });

                isAllotment = $('#availableList').data('isallotment');
            });
        },

        calcFreeNight: function(totalNight, stay, freeNight)
        {
            if(stay!=0){
                var calc = parseInt(totalNight/stay);
            }else{
                var calc = 1;
            }
            var free = parseInt(calc * freeNight);

            return free;
        },

        calculatePrice: function(){
            var thisApp = this;
            var numNight=this.diffDays();
            var totalPrice=0;
            var totalRoom=0;
            var selectedList = {};

            $.each($('.roomInput'), function(index, val){
                var total = parseInt($(this).val());
                var idroomtype = $(this).data('idroomtype');
                var datatype = $(this).data('type');
                var proid = $(this).data('proid');
                var price = parseFloat($(this).data('price')==''?0:$(this).data('price'));
                var freenight = parseInt($(this).data('freenight'));
                var minstay = parseInt($(this).data('minstay'));
                var rateName = $(this).data('ratename');
                var totalRoomPrice = total*(price*numNight);
                var totalPriceThisRoom = 1*(price*numNight);
                var summaryFreeNight = 0;
                var totalFreeNight = 0;

                var arrayKey = idroomtype+'_'+datatype+'_'+proid;

                totalRoom += total;
                if(freenight > 0){
                    summaryFreeNight = thisApp.calcFreeNight(numNight, minstay, freenight);
                    totalFreeNight = price*(summaryFreeNight*total);
                    totalRoomPrice -= totalFreeNight;
                    totalPriceThisRoom -= totalFreeNight;
                }

                totalPrice += totalRoomPrice;


                if(selectedList.hasOwnProperty(idroomtype)==false){
                    selectedList[arrayKey] = total;
                }else{
                    selectedList[arrayKey] += total;
                }

                if($('.roomSelectedList[data-id="'+idroomtype+'"]').length==0 && selectedList[arrayKey]>0){
                    var roomtypename = '<div class="roomSelectedList" data-id="'+idroomtype+'"><h4>'+$('.roomtype-name[data-id="'+idroomtype+'"]').text()+'</h4></div>';
                    $('#roomSelectedBox').append(roomtypename);
                }

                var summary = totalRoomPrice.format(2) +' '+currency;
                var summaryWithFreeNight = summaryFreeNight > 0 ? '<div class="row"><div class="col-md-12">Free '+summaryFreeNight+' <i class="fa fa-moon-o" title="free night"></i></div></div>' : ''; //  = '+totalFreeNight.format(2)+' '+currency+' /////  x '+total+' <i class="fa fa-bed" title="rooms"></i>

                var element = $('.selectedItem[data-id="'+idroomtype+'"][data-datatype="'+datatype+'"][data-proid="'+proid+'"]');

                var priceDetail = '<div class="selectedItem" data-id="'+idroomtype+'" data-datatype="'+datatype+'" data-proid="'+proid+'" style="display: none">'+
                '<strong>' + rateName + '</strong>'+
                '<div class="clearfix">'+
                '<div class="pull-left">'+
                '<div>'+price.format(2)+' x '+numNight+' <i class="fa fa-moon-o" title="night"></i></div>'+
                summaryWithFreeNight+
                '</div>'+
                '<div class="pull-right" align="right">'+
                currency + ' ' + totalPriceThisRoom.format(2) +
                '</div>'+
                '</div>'+
                '<div class="clearfix removeBtn" align="center"><a href="javascript:void(0);" class="removeRoom">Remove</a></div>'+
                '</div>';

                if(total>0)
                {
                    /*if(element.length>0)
                    {
                        element.replaceWith(priceDetail);
                    }else{
                        $('.roomSelectedList[data-id="'+idroomtype+'"]').append(priceDetail);
                        $('.selectedItem').slideDown();
                    }*/
                    if(element.length<total){
                        $('.roomSelectedList[data-id="'+idroomtype+'"]').append(priceDetail);
                        $('.selectedItem').slideDown();
                    }

                }else{
                    element.slideUp(function(){
                        $(this).remove();
                        if($('.roomSelectedList[data-id="'+idroomtype+'"]').find('.selectedItem').length==0){
                            $('.roomSelectedList[data-id="'+idroomtype+'"]').slideUp(function(){
                                $(this).remove();
                            });
                        }
                    });
                }

                $('#summaryRooms').html(totalRoom);
                $('#summaryPrice').html(totalPrice.format(2));
            });

            $('#noOfNight').html(numNight);

            if(totalRoom > 0){
                $('#roomSelectedBox').slideDown();
            }else{
                $('#roomSelectedBox').slideUp();
            }

            return totalRoom;
        }

    };

    app.run();
}); 
</script>

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>





</section>


            <!------------------------  END booking   ----------------------->








<!--******************************** Footer ************************************************-->
<section class="content-container " style="background-color: #FFFFFF;opacity:0.92;filter:alpha(opacity=92);padding-top: 20px">
<?php include_once('footer.php');?>
</section>
<!--******************************** Footer ************************************************-->

            


 

   
</div>
</div>
</div>



<script language="javascript" src="https://www.bigbang.co.th/api/bt.js" charset="UTF-8"></script>
   
</body>
</html>







