	<?php
	include('includes/footer_js.php');
	include ('config.php');
	include('includes/header_css.php');
	$email=$_POST['email'];
	$password=md5($_POST['password']);

	if(isset($email, $password)) {
	    ob_start();
		session_start();

	    $myemail = stripslashes($email);
	    $mypassword = stripslashes($password);
	    $myemail = mysqli_real_escape_string($conn, $myemail);
	    $mypassword = mysqli_real_escape_string($conn, $mypassword);

		$_SESSION["admin"]= $myemail;
	    $_SESSION["password"]= $mypassword;

		$sql="INSERT INTO user (email, password, status) VALUES ('$email', '$password', '0')";
		$result=mysqli_query($conn, $sql);
		header("location:employees.php");
	    	
	    ob_end_flush();
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Signup</title>
	<meta name="description" content="LBook Signup">
	<meta name="keyword" content="LBook, Library, Dashboard, Bootstrap, Signup">
	<!-- end: Meta -->

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
					<h2 style="padding-top:20px;">Signup to your account</h2>
					<form class="form-horizontal" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="email" id="email" type="email" required placeholder="Email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" required placeholder="Password"/>
							</div>
							<div class="clearfix"></div>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Signup</button>
							</div>
							<div class="clearfix"></div>
					</form>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->
	<!-- end: JavaScript-->
	
</body>
</html>