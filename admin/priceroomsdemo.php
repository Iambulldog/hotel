<!DOCTYPE html>
<?php 
include_once('../connectdb.php');
?>
<html>
<head>
    <title>JavaScript Scheduler</title>

	<!-- head -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- demo stylesheet -->
    <link type="text/css" rel="stylesheet" href="scheduler/helpers/demo.css?v=2018.4.3442" />
    <link type="text/css" rel="stylesheet" href="scheduler/helpers/media/layout.css?v=2018.4.3442" />
    <link type="text/css" rel="stylesheet" href="scheduler/helpers/media/elements.css?v=2018.4.3442" />

	<!-- helper libraries -->
	<script src="scheduler/helpers/jquery-1.12.2.min.js" type="text/javascript"></script>
    
	<!-- daypilot libraries -->
    <script src="scheduler/js/daypilot-all.min.js?v=2018.4.3442" type="text/javascript"></script>

    <!-- daypilot themes -->
	<link type="text/css" rel="stylesheet" href="scheduler/themes/areas.css?v=2018.4.3442" />    
        
	<link type="text/css" rel="stylesheet" href="scheduler/themes/month_white.css?v=2018.4.3442" />    
	<link type="text/css" rel="stylesheet" href="scheduler/themes/month_green.css?v=2018.4.3442" />    
	<link type="text/css" rel="stylesheet" href="scheduler/themes/month_transparent.css?v=2018.4.3442" />    
    <link type="text/css" rel="stylesheet" href="scheduler/themes/month_traditional.css?v=2018.4.3442" />
        
	<link type="text/css" rel="stylesheet" href="scheduler/themes/navigator_8.css?v=2018.4.3442" />    
	<link type="text/css" rel="stylesheet" href="scheduler/themes/navigator_white.css?v=2018.4.3442" />    
        
	<link type="text/css" rel="stylesheet" href="scheduler/themes/calendar_transparent.css?v=2018.4.3442" />    
	<link type="text/css" rel="stylesheet" href="scheduler/themes/calendar_white.css?v=2018.4.3442" />    
	<link type="text/css" rel="stylesheet" href="scheduler/themes/calendar_green.css?v=2018.4.3442" />    
    <link type="text/css" rel="stylesheet" href="scheduler/themes/calendar_traditional.css?v=2018.4.3442" />

    <link type="text/css" rel="stylesheet" href="scheduler/themes/scheduler_8.css?v=2018.4.3442" />
	<link type="text/css" rel="stylesheet" href="scheduler/themes/scheduler_white.css?v=2018.4.3442" />    
	<link type="text/css" rel="stylesheet" href="scheduler/themes/scheduler_green.css?v=2018.4.3442" />    
	<link type="text/css" rel="stylesheet" href="scheduler/themes/scheduler_blue.css?v=2018.4.3442" />    
    <link type="text/css" rel="stylesheet" href="scheduler/themes/scheduler_traditional.css?v=2018.4.3442" />
	<link type="text/css" rel="stylesheet" href="scheduler/themes/scheduler_transparent.css?v=2018.4.3442" />    


	<!-- /head -->

</head>
<body>

 

 

    <div id="main">
       
<style>
    #dp .scheduler_default_cellparent, .scheduler_default_cell.scheduler_default_cell_business.scheduler_default_cellparent {
        background: #f3f3f3;
    }

</style>


<div style="float:left; width:150px">
	<div id="nav"></div>
</div>
<div style="margin-left: 150px">
	<div id="dp"></div>
</div>
<div class="space">
    <a href="#" id="previous">Previous</a>
    |
    <a href="#" id="today">Today</a>
    |
    <a href="#" id="next">Next</a>
</div>

<div id="print"></div>


    
<script>

    var elements = {
        previous: document.getElementById("previous"),
        today: document.getElementById("today"),
        next: document.getElementById("next")
    };

    elements.previous.addEventListener("click", function(e) {
        e.preventDefault();
        changeDate(dp.startDate.addMonths(-1));
    });
    elements.today.addEventListener("click", function(e) {
        e.preventDefault();
        changeDate(DayPilot.Date.today());
    });
    elements.next.addEventListener("click", function(e) {
        e.preventDefault();
        changeDate(dp.startDate.addMonths(1));
    });


    function changeDate(date) {
	 	
        dp.startDate = date.firstDayOfMonth();
		//alert(date.firstDayOfMonth());
        dp.days = dp.startDate.daysInMonth();
		//alert(dp.startDate.daysInMonth());
        dp.resources = [
	<?php 
		 $sql ="SELECT * FROM room ";
		 $query = mysqli_query($con,$sql);
		while ($results = mysqli_fetch_assoc($query)) {
		 
		 echo '{ name: "'.$results["name_room_en"].'", id: "'.$results["ID_room"].'" },';
		}
	?>
       
    ]; // provide event data for the new date range
        dp.update();
    }

</script>

<script type="text/javascript">

	
	 var nav = new DayPilot.Navigator("nav");
    nav.showMonths = 2;
    nav.selectMode = "month";
    nav.onTimeRangeSelected = function(args) {
        dp.startDate = args.start;
        dp.days = args.days;
        dp.update();
    };
    nav.init();

    var dp = new DayPilot.Scheduler("dp");

    // view
    dp.startDate = nav.selectionStart;
    dp.cellGroupBy = "Month";
    dp.days = DayPilot.DateUtil.daysDiff(nav.selectionStart, nav.selectionEnd);
    dp.scale = "Day";
    dp.cellWidthSpec = "Auto";
    dp.timeHeaders = [
        { groupBy: "Month", format: "MMMM yyyy"},
        { groupBy: "Day", format: "ddd d"}
    ];
dp.contextMenu = new DayPilot.Menu({items: [
        {text:"Edit", onClick: function(args) { 
									//dp.events.edit(args.source);
			
		
     var pr = prompt("Please enter your name:", JSON.parse(JSON.stringify(args.source)).text);
    if (pr == null || pr == "") {
       
    } else {
        var price = pr;
				var datas = (JSON.stringify(args.source));
									//-----------------------------------------------edit price -----------------
												 $.ajax({
													type: "GET",
													url: "file_upload.php?type=editpriceroom&data="+datas+"&price="+price,
													success: function(result) {
														location.reload();			
														
													},
													error: function(jqXHR, textStatus, err) {
													  //show error message
													  alert('text status ' + textStatus + ', err ' + err);
													}
												  });
    }
            
											
				} 
		},
        {text:"Delete", onClick: function(args) { 
									
								var id=(JSON.parse(JSON.stringify(args.source)).id);
											 $.ajax({
													type: "GET",
													url: "file_upload.php?type=delpriceroom&id="+id,
													success: function(result) {
														location.reload();			
														
													},
													error: function(jqXHR, textStatus, err) {
													  //show error message
													  alert('text status ' + textStatus + ', err ' + err);
													}
												  });
			
			
			
								 } 
		},
        {text:"-"},
      //  {text:"Select", onClick: function(args) { dp.multiselect.add(args.source); } },
    ]});

    //dp.treeEnabled = true;
   // dp.treePreventParentUsage = true;
	

    
        
   
	
	 dp.resources = [
	<?php 
		 $sql ="SELECT * FROM room ";
		 $query = mysqli_query($con,$sql);
		while ($results = mysqli_fetch_assoc($query)) {
		 
		 echo '{ name: "'.$results["name_room_en"].'", id: "'.$results["ID_room"].'" },';
		}
	?>
       
    ];
	// ------------------------ data event ------------
dp.events.list = [];

<?php 
		 $sql_pr ="SELECT * FROM priceroom ";
		 $query_pr = mysqli_query($con,$sql_pr);
		while ($pr = mysqli_fetch_assoc($query_pr)) {
		 
		 echo 'var e = {
            start: "'.$pr["date_start"].'T00:00:00",
            end: "'.$pr["date_start"].'T00:00:00",
            id: "'.$pr["id_priceroom"].'",
            resource:"'.$pr["ID_room"].'",
            text: "'.$pr["price_room"].'",
            bubbleHtml: "'.$pr["price_room"].'",
            
        };

        dp.events.list.push(e);';
		}
	?>
        
    

   dp.eventMovingStartEndEnabled = true;
   dp.eventResizingStartEndEnabled = true;
   dp.timeRangeSelectingStartEndEnabled = true;

    // event moving
   /*dp.onEventMoved = function (args) {
        dp.message("Moved: " + args.e.text());
	   alert(JSON.stringify(args.e));
    };

    dp.onEventMoving = function(args) {
        if (args.e.resource() === "A" && args.resource === "B") {  // don't allow moving from A to B
            args.left.enabled = false;
            args.right.html = "You can't move an event from Room 1 to Room 2";

            args.allowed = false;
        }
        else if (args.resource === "B") {  // must start on a working day, maximum length one day
            while (args.start.getDayOfWeek() === 0 || args.start.getDayOfWeek() === 6) {
                args.start = args.start.addDays(1);
            }
            args.end = args.start.addDays(1);  // fixed duration
            args.left.enabled = false;
            args.right.html = "Events in Room 2 must start on a workday and are limited to 1 day.";
        }

        if (args.resource === "C") {
            var except = args.e.data;
            var events = dp.rows.find(args.resource).events.all();

            var start = args.start;
            var end = args.end;
            var overlaps = events.some(function(item) {
                return item.data !== except && DayPilot.Util.overlaps(item.start(), item.end(), start, end);
            });

            while (overlaps) {
                start = start.addDays(1);
                end = end.addDays(1);

                overlaps = events.some(function(item) {
                    return item.data !== except && DayPilot.Util.overlaps(item.start(), item.end(), start, end);
                });
            }

            if (args.start !== start) {
                args.start = start;
                args.end = end;

                args.left.enabled = false;
                args.right.html = "Start automatically moved to " + args.start.toString("d MMMM, yyyy");
            }

        }

    };*/

    // event resizing
    dp.onEventResized = function (args) {
        dp.message("Resized: " + args.e.text());
    };

    // event creating
    dp.onTimeRangeSelected = function (args) {
        DayPilot.Modal.prompt("New event name:", "").then(function(modal) {
            dp.clearSelection();
            var name = modal.result;
            if (!name) return;
            var e = new DayPilot.Event({
                start: args.start,
                end: args.end,
                //id: DayPilot.guid(),
                resource: args.resource,
                text: name
            });
            if(dp.events.add(e)){
				var datas = JSON.stringify(e);
				
				//-----------------------------------------------save price -----------------
					 $.ajax({
						type: "GET",
						url: "file_upload.php?type=addpriceroom&data="+datas,
						success: function(result) {
							 
								alert('Success');
								location.reload();
  								
						},
						error: function(jqXHR, textStatus, err) {
						  //show error message
						  alert('text status ' + textStatus + ', err ' + err);
						}
					  });
			}
            // dp.message("Created");
        });
    };


    dp.onEventMove = function(args) {
        if (args.ctrl) {
            var newEvent = new DayPilot.Event({
                start: args.newStart,
                end: args.newEnd,
                text: "Copy of " + args.e.text(),
                resource: args.newResource,
                id: DayPilot.guid()  // generate random id
            });
            dp.events.add(newEvent);

            // notify the server about the action here

            args.preventDefault(); // prevent the default action - moving event to the new location
        }
    };
	
	
	
	 dp.onBeforeTimeHeaderRender = function(args) {
        if (args.header.level === 1) {
			var ch = (args.header.html).split(" ");
			if(ch[0]==="Sa" || ch[0]==="Su" ){
				args.header.areas = [
                {top: 0,width: 100, bottom: 0, backColor: "rgba(255, 0, 0, .4)"},
            ];
			}
			
            
        }
       
    };
	
	
	
	
	
	

    dp.init();



    function barColor(i) {
        var colors = ["#3c78d8", "#6aa84f", "#f1c232", "#cc0000"];
        return colors[i % 4];
    }
    function barBackColor(i) {
        var colors = ["#a4c2f4", "#b6d7a8", "#ffe599", "#ea9999"];
        return colors[i % 4];
    }

</script>

  <!-- bottom -->
                </div>
	        </div>
        </div>
    </div>
<script type="text/javascript">
$(document).ready(function() {
	    
	
    var url = window.location.href;
    var filename = url.substring(url.lastIndexOf('/')+1);
    if (filename === "") filename = "index.html";
    $(".menu a[href='" + filename + "']").addClass("selected");

    $(".menu-title").click(function() {
        $(".menu-body").toggle();
        if ($(".menu-body").is(":visible")) {
            scrollTo({
                top: pageYOffset + 100,
                behavior: "smooth"
            });
        }
    });
});
        
</script>

	<!-- /bottom -->


</body>
</html>

