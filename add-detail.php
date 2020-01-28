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
					<h2 class="title1">Add Detail</h2>
					<div class="form-grids row widget-shadow rj-m" data-example-id="basic-forms"> 
				
							<div class="form-title row">
								<div class="col-md-6" style="top: 14px;">
								<!-- <h4>Add Job:</h4> -->
								</div>
								<div class="w3ls-bot col-md-6">
									<a href="scheduled-job.php" style="margin-top: 0 !important;">Scheduled Jobs</a>
								</div>
							</div>
							
						<div class="form-body">
							<div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="selector1" class="control-label">Select Year</label>
											<select name="selector1" id="from-year" class="form-control1">
												<option value="">--Select the year--</option>
												<option value="2020">2020</option>
												<option value="2019">2019</option>
												<option value="2018">2018</option>
												<option value="2017">2017</option>
												<option value="2016">2016</option>
												<option value="2015">2015</option>
												<option value="2014">2014</option>
											</select>
											<span id="fromYear-error"></span>
									</div>
									<div class="form-group col-md-6">
										<label for="selector1" class="control-label">Select Month</label>
											<select name="selector1" id="from-month" class="form-control1">
												<option value="">--Select the Month--</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
											<span id="fromMonth-error"></span>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="selector1" class="control-label">Form Type</label>
											<select name="selector1" id="form-type" class="form-control1">
												<option value="">--Select--</option>
												<option value="10K">10K</option>
												<option value="10Q">10Q</option>											
											</select>
											<span id="formType-error"></span>
									</div>
									<div class="form-group col-md-6">
									<label for="exampleInputEmail1">Reporting Email Id ( After job gets completed email will be sent)</label> 
									<input type="email" class="form-control" id="reporting-email" placeholder="Enter Email">
									<span id="reportingEmail-error"></span> 
								</div> 
								</div>
								<div class="row">
									<div class="w3ls-bot col-md-5">
										<input type="submit" value="Process Now" onclick="addDetail();">
									</div>
									<div class="w3ls-bot col-md-5" style="float: right;">
										<input type="submit" value="Schedule for Later" onclick="scheduledLater();" id="scheduledLater">
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
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   <script src="js/custom-js.js"> </script>
   
</body>
</html>
<?php 
}else
{
	header("location: login.php");
}
?>