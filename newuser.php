<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Signup/Login</title>
	<meta name="description" content="LBook Signup / Login">
	<meta name="keyword" content="LBook, Library, Dashboard, Bootstrap, Login, Signup">
	<!-- end: Meta -->
	
	<?php
	include('includes/header_css.php');
	?>
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(assets/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<h2 style="padding-top:20px; margin-bottom:0;">New user?</h2>
					<div class="button-login" style="float:left; padding:0px 30px 30px 30px;">	
						<a href="signup.php"><button class="btn btn-primary">Sign Up</button></a>
					</div>
					<div class="clearfix"></div>

					<h2 style="margin-bottom:0;">Already have an account?</h2>
					<div class="button-login" style="float:left; padding:0px 30px 30px 30px;">	
						<a href="login.php"><button class="btn btn-primary">Log In</button></a>
					</div>
					<div class="clearfix"></div>
		
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->
	<?php
	include('includes/footer_js.php')
	?>
	<!-- end: JavaScript-->
	
</body>
</html>
