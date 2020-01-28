<?php
include('config/connection.php');
if($_SESSION["logged"] == 'logged'){
require_once('batch-file.php');
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
<style type="text/css">
	.widget-shadow
	{
		background-color: #222d32;
		color: white;
	}
	.table>thead>tr>th
	{
    	border-bottom: 1px solid #222d32 ! important;
	}
	.table>tbody>tr>td
	{
		border-bottom: 1px solid #222d32 ! important;
	}
	.tables .table > tbody > tr > td
	{
		padding:3px;
	}
</style>
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
					<h2 class="title1">Log File</h2>
					<div class="panel-body widget-shadow" style="background-color: #222d32;">
						<!-- <h4>Log File</h4> -->
						<table class="table">
							<tbody>
								<?php
								$path = "C:\Users\anant\Downloads\SECDB-master\logs";
								$file = '\log-'.$_SESSION["fromYear"].'-'.$_SESSION["fromMonth"].'_'.$_SESSION["randomNumber"].'.txt';
								
								    //$myFile = "http://renownestates.com/cache/feedSubscribers.txt";
								    $orig = file_get_contents( $path.$file ); // get the contents, and echo it out.
								    //$fh = fopen($myFile, 'r');
								    
								    //$file = 'code.ino';
									//$orig = file_get_contents($file);
									$a = htmlentities($orig);

									/*echo '<code>';
									echo '<pre>';
									echo $a;

									echo '</pre>';
									echo '</code>';*/
								    ?> 
								<tr>
									<?php
									echo '<pre style="color: white; background-color: #222d32; border: 1px solid #222d32;">';
									echo $a;

									echo '</pre>';?>
								</tr>
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

	<?php
	
	//header("Refresh:5");

	
	?>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>
<?php 
}else
{
	header("location: login.php");
}
?>