<?php
include('config/connection.php');
if($_SESSION["logged"] == 'logged'){
?>

<!DOCTYPE HTML>
<html>
<head>
<title>ETL Finance Company</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<link rel="stylesheet" type="text/css" href="https://www.jqueryscript.net/demo/Super-Tiny-jQuery-HTML5-Date-Picker-Plugin/jquery.datepicker2.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
</head> 
<body class="cbp-spmenu-push cbp-spmenu-push-toright">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->

	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php include('header/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Scheduled jobs</h2>
					<div class="panel-body widget-shadow">
						<div class="row">
								<div class="col-md-6" style="top: 14px;">
								<!-- <h4>Schedule job list</h4> -->
								</div>
								<div class="w3ls-bot col-md-6">
									<a href="add-detail.php" style="margin-top: 0 !important;">Create New Job</a>
								</div>
							</div>
						<table class="table">
							<thead>
								<tr>
								  <th>Job Id</th>
								  <th>Year</th>
								  <th>Month</th>
								  <th>Form Type</th>
								  <th>Email</th>
								  <th>Submit Date</th>
								  <th>Schedule</th>
								  <th>Status</th>
								  <th>Excluded Companies</th>
								  <th>Download</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM jobs";
								$result = $con->query($sql);
								
								if ($result->num_rows > 0) {
								    // output data of each row
								    $i=1;
								    while($row = $result->fetch_assoc()) {

								    	$from_year = $row["from_year"];
								    	$from_month = $row["from_month"];
								    	$from_type = $row["from_type"];
								    	$reporting_email = $row["reporting_email"];
								    	$created_at = $row["created_at"];
								    	$complete_at = $row["complete_at"];
								    	$created_at = date('Y-m-d h:i:s a', strtotime($created_at));
								    	$schedule_at = $row["schedule_at"];
								    	$status = $row["status"];
								    	if($status == 1)
								    	{
								    		$status = 'Complete';
								    	}else
								    	{
								    		$status = 'Schedule for Later';
								    	}
								    	if($schedule_at){
								    	$schedule_at = date('Y-m-d h:i:s a', strtotime($schedule_at));
								    	}else
								    	{
								    		$schedule_at = '--:--:--';
								    	}
								?>
								<tr>
								  <th><?=$i;?></th>
								  <td><?=$from_year;?></td>
								  <td><?=$from_month;?></td>
								  <td><?=$from_type;?></td>
								  <td><?=$reporting_email;?></td>
								  <td><?=$created_at;?></td>
								  <td><?=$schedule_at;?></td>
								  <td><?=$status;?></td>
								  <td>Google,Apple,Microsoft</td>
								  <td><a href="https://www.pexels.com/photo/3584443/download/?search_query=&tracking_id=runb9lgwui" download>Click</a></td>

								</tr>
								<?php
								$i++;} } 
								?>
								
							</tbody>
						</table>
					</div>
					</div>
			</div>
		</div>
		<!--footer-->
		<?php include('footer/footer.php');?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<!-- Classie --><!-- for toggle left push menu script -->
	<script src="js/classie.js"></script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	<script type="text/javascript" src="https://www.jqueryscript.net/demo/Super-Tiny-jQuery-HTML5-Date-Picker-Plugin/jquery.datepicker2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   <script type="text/javascript">
   	$('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 30,
    minTime: '10',
    maxTime: '11:00pm',
    defaultTime: '10',
    startTime: '12:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
   </script>
</body>
</html>
<?php 
}else
{
	header("location: login.php");
}
?>