<?php
include('config/connection.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>ETL Finance Company</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<!-- //Meta-Tags -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Stylesheets -->
	<link href="css/login-style.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<!-- title -->
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
	<!--//fonts-->
	<!-- toaster cdn start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- toaster cdn end -->

	<script>
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
	
	</script>
	<script src="js/header-things.js"></script>
</head>

<body>
	<h1>ETL Login</h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form method="post" onsubmit="event.preventDefault(); validateMyForm();">
			<img src="images/icon.png" alt="" />
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Username</label>
				<input type="text" placeholder="Enter Username" id="username" />
				<span id="username-error"></span>
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-lock" aria-hidden="true"></i> password</label>
				<input type="password" name="password" placeholder="Enter Password" id="password" />
				<span id="password-error"></span>
				
			</div>
			<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="showPassword()">
					<label class="check" for="check3">Show password</label>
				</div>
				<!-- <div class="agile-right">
					<a href="#">forgot password?</a>
				</div> -->
			<div class="w3ls-bot">
				<input type="submit" value="LOGIN">
			</div>
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2020 ETL Finance Company . All Rights Reserved | Design by
			<a href="http://vdoit.in/" target="_blank">vDoIT Technologies Pvt Ltd.</a>
		</p>
	</div>
	<!--//copyright-->
<script src="js/custom-js.js"></script>
</body>
</html>