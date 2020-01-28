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
<script src="js/header-things.js"></script>
<!-- toaster cdn start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- toaster cdn end -->
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
				<div class="forms">
					<h2 class="title1">Schedule the job for future</h2>
					<div class="form-grids row widget-shadow rj-m" data-example-id="basic-forms"> 
				
							<div class="form-title row">
								<div class="col-md-6" style="top: 14px;">
								<!-- <h4>Page- 4:</h4> -->
								</div>
								<div class="w3ls-bot col-md-6">
									<a href="add-detail.php" style="margin-top: 0 !important;">Create New Job</a>
								</div>
							</div>
							
						<div class="form-body">
							<div>
								<div class="row">
									<div class="form-group col-md-3">
										<label for="exampleInputEmail1">Date</label> 
										<input type="text" name="date" data-select="datepicker" class="form-control datepicker" placeholder="Date" id="date">
										<span id="date-error"></span>
									</div>
									<div class="form-group col-md-3">
										<label for="exampleInputEmail1">Time</label> 
										<input type="text" name="date" data-select="datepicker" class="form-control timepicker" placeholder="Date" id="time">
										<span id="time-error"></span>
									</div>
									
								</div>
								<div class="row">
									<div class="w3ls-bot col-md-3">
										<label for="exampleInputEmail1"></label> 
										<input type="submit" value="Schedule" id="schedule" style="margin-top: 0px;" onclick="schedule();">
									</div>
								</div>
							</div> 
						</div>
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
   <script src="js/custom-js.js"> </script>
</body>
</html>
<?php 
}else
{
	header("location: login.php");
}
?>