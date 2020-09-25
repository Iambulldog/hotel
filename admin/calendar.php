<?php 
$page = "calendar";
session_start();
include_once('../connectdb.php');
if(empty($_SESSION['UserID']))
{
	echo "<script> alert('Please Login!!');window.location.href='login.php';</script>";
	exit();
}
?>

<?php

try
{
	//$bdd = new PDO('mysql:host=localhost;dbname=hostels;charset=utf8', 'root', '12345678');
	$bdd = new PDO('mysql:host=localhost;dbname=ananyalipe_01;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$sql = "SELECT * FROM booking INNER JOIN room WHERE booking.ID_room = room.ID_room";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<body class="no-skin">
	<?php include('navbar.php'); ?>	

	<?php include('menu.php'); ?>	

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>
					<li class="active">ภาพรวมห้อง</li>
				</ul><!-- /.breadcrumb -->

				
			</div>

			<div class="page-content">
				

				<div class="row">
					<div class="col-xs-12" >
						<!-- PAGE CONTENT BEGINS -->
						<!-- ข้อมูล-->	

						<div id="calendar" class="fc fc-ltr fc-unthemed" style="width: 80%" align="center">
						</div>
						<!-- จบข้อมูล-->
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->

	<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<span class="bigger-120">
					<span class="blue bolder">Error 404</span>
					Application &copy; 2013-2014
				</span>

				&nbsp; &nbsp;
				<span class="action-buttons">
					<a href="#">
						<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
					</a>

					<a href="#">
						<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
					</a>

					<a href="#">
						<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
					</a>
				</span>
			</div>
		</div>
	</div>

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>





<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<script src="assets/js/bootbox.js"></script>

<?php date_default_timezone_set("Asia/Bangkok");
	$date = date("Y-m-d");
	?>
<script type="text/javascript">
	jQuery(function($) {

/* initialize the external events
-----------------------------------------------------------------*/

$('#external-events div.external-event').each(function() {

		// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
		// it doesn't need to have a start or end
		var eventObject = {
			title: $.trim($(this).text()) // use the element's text as the event title
		};

		// store the Event Object in the DOM element so we can get to it later
		$(this).data('eventObject', eventObject);

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});
		
	});




	/* initialize the calendar
	-----------------------------------------------------------------*/

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();


	var calendar = $('#calendar').fullCalendar({
		//isRTL: true,
		//firstDay: 1,// >> change first day of week 
		
		buttonHtml: {
			prev: '<i class="ace-icon fa fa-chevron-left"></i>',
			next: '<i class="ace-icon fa fa-chevron-right"></i>'
		},

		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events: [
		<?php foreach($events as $event): 
			 date_default_timezone_set("Asia/Bangkok");
			$start = $event['checkin'];
			$end1 = $event['checkout'];	
			$end = date('Y-m-d',strtotime($end1 . "+1 days"));
			?>
				{
					id: '<?php echo $event['ID_room']; ?>',
					title: '<?php echo $event['name_room_th']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php if($event['ID_room']==1){echo "#40E0D0";}
					if($event['ID_room']==2){echo "#FF0000";}
					if($event['ID_room']==3){echo "#A52A2A";}
					if($event['ID_room']==4){echo "#0071c5";}
					if($event['ID_room']==5){echo "#FFD700";}
					if($event['ID_room']==6){echo "#7FFF00";}
					if($event['ID_room']==7){echo "#00CED1";}
					 ?>',
				},
			<?php endforeach; ?>
		]
		,
		
		/**eventResize: function(event, delta, revertFunc) {

			alert(event.title + " end is now " + event.end.format());

			if (!confirm("is this okay?")) {
				revertFunc();
			}

		},*/
		
		/*editable: true,
		droppable: true, // this allows things to be dropped onto the calendar !!!
		drop: function(date) { // this function is called when something is dropped

			// retrieve the dropped element's stored Event Object
			var originalEventObject = $(this).data('eventObject');
			var $extraEventClass = $(this).attr('data-class');
			
			
			// we need to copy it, so that multiple events don't have a reference to the same object
			var copiedEventObject = $.extend({}, originalEventObject);
			
			// assign it the date that was reported
			copiedEventObject.start = date;
			copiedEventObject.allDay = false;
			if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];
			
			// render the event on the calendar
			// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
			$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
				// if so, remove the element from the "Draggable Events" list
				$(this).remove();
			}
			
		}
		,*/
		/*selectable: true,
		selectHelper: true,
		select: function(start, end, allDay) {
			
			bootbox.prompt("New Event Title:", function(title) {
				if (title !== null) {
					calendar.fullCalendar('renderEvent',
					{
						title: title,
						start: start,
						end: end,
						allDay: allDay,
						className: 'label-info'
					},
						true // make the event "stick"
						);
				}
			});
			

			calendar.fullCalendar('unselect');
		}
		,*/
		/*eventClick: function(calEvent, jsEvent, view) {

			//display a modal
			var modal = 
			'<div class="modal fade">\
			<div class="modal-dialog">\
			<div class="modal-content">\
			<div class="modal-body">\
			<button type="button" class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>\
			<form class="no-margin">\
			<label>Change event name &nbsp;</label>\
			<input class="middle" autocomplete="off" type="text" value="' + calEvent.title + '" />\
			<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Save</button>\
			</form>\
			</div>\
			<div class="modal-footer">\
			<button type="button" class="btn btn-sm btn-danger" data-action="delete"><i class="ace-icon fa fa-trash-o"></i> Delete Event</button>\
			<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
			</div>\
			</div>\
			</div>\
			</div>';


			var modal = $(modal).appendTo('body');
			modal.find('form').on('submit', function(ev){
				ev.preventDefault();

				calEvent.title = $(this).find("input[type=text]").val();
				calendar.fullCalendar('updateEvent', calEvent);
				modal.modal("hide");
			});
			modal.find('button[data-action=delete]').on('click', function() {
				calendar.fullCalendar('removeEvents' , function(ev){
					return (ev._id == calEvent._id);
				})
				modal.modal("hide");
			});
			
			modal.modal('show').on('hidden', function(){
				modal.remove();
			});


			//console.log(calEvent.id);
			//console.log(jsEvent);
			//console.log(view);

			// change the border color just for fun
			//$(this).css('border-color', 'red');

		}*/
		
	});


})
</script>
</body>
</html>
