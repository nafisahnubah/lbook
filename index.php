<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>LBook Dashboard</title>
	<meta name="description" content="LBook Dashboard">
	<!-- <meta name="author" content=""> -->
	<meta name="keyword" content="LBook, Library, Dashboard, Bootstrap, Admin">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<?php
	include('includes/header_css.php');
	include('includes/functions.php');
	include('config.php');
	loggedin();
	?>
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<!-- end: Favicon -->
	<script src="assets/js/jquery-1.9.1.min.js"></script>
	<script src="assets/js/jquery-migrate-1.0.0.min.js"></script>    
    <script src="assets/js/jquery-ui-1.10.0.custom.min.js"></script>    
    <script src="assets/js/jquery.ui.touch-punch.js"></script>    
    <script src="assets/js/modernizr.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>    
    <script src="assets/js/jquery.cookie.js"></script>    
    <script src='assets/js/fullcalendar.min.js'></script>    
    <script src='assets/js/jquery.dataTables.min.js'></script>    
    <script src="assets/js/excanvas.js"></script>
    <script src="assets/js/jquery.flot.js"></script>
    <script src="assets/js/jquery.flot.pie.js"></script>
    <script src="assets/js/jquery.flot.stack.js"></script>
    <script src="assets/js/jquery.flot.resize.min.js"></script>    
    <script src="assets/js/jquery.chosen.min.js"></script>    
    <script src="assets/js/jquery.uniform.min.js"></script>    
    <script src="assets/js/jquery.cleditor.min.js"></script>    
    <script src="assets/js/jquery.noty.js"></script>    
    <script src="assets/js/jquery.elfinder.min.js"></script>    
    <script src="assets/js/jquery.raty.min.js"></script>    
    <script src="assets/js/jquery.iphone.toggle.js"></script>    
    <script src="assets/js/jquery.uploadify-3.1.min.js"></script>    
    <script src="assets/js/jquery.gritter.min.js"></script>    
    <script src="assets/js/jquery.imagesloaded.js"></script>    
    <script src="assets/js/jquery.masonry.min.js"></script>    
    <script src="assets/js/jquery.knob.modified.js"></script>    
    <script src="assets/js/jquery.sparkline.min.js"></script>    
    <script src="assets/js/counter.js"></script>    
    <script src="assets/js/retina.js"></script>    
    <script src="assets/js/custom.js"></script>
	
		
		
		
</head>

<body>
		<?php 
			include('includes/nav.php');
		?>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php 
			include('includes/menu.php');
			?>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			<?php
			include('includes/deshbord.php');
			?>
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

	
	<!-- end: JavaScript-->
	
</body>
</html>
