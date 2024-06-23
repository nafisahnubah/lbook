<?php

print_r($_POST);
//die();

include('config.php');
include('includes/functions.php');
loggedin();

$name=$email=$userid=$days=$sun=$mon=$teu=$wed=$thu=$fri=$sat=$shifts=$night=$morning=$afternoon=$sid='';

if(isset($_GET['eid'])){
	$sid=$_GET['eid'];
	$sql="SELECT * FROM employees WHERE id=$sid";
	$result=mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$name = $row["name"];
			$email = $row["email"];
			$userid = $row["userid"];
			if($row["days"]==0){
		  		$sun='checked';
		  	}
		  	else if($row["days"]==1){
		  		$mon ='checked';
		  	}
		  	else if($row["days"]==2){
		  		$teu ='checked';
		  	}
		  	else if($row["days"]==3){
		  		$wed ='checked';
		  	}
		  	else if($row["days"]==4){
		  		$thu ='checked';
		  	}
		  	else if($row["days"]==5){
		  		$fri ='checked';
		  	}
		  	else if($row["days"]==6){
		  		$sat ='checked';
		  	}
		  	if($row["shifts"]==0){
		  		$night='checked';
		  	}
		  	else if($row["shifts"]==1){
		  		$morning='checked';
		  	}
		  	else{
		  		$afternoon='checked';
		  	}
		}
	}
}

if((isset($_POST['add'])) && (isset($_POST['name']))){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sql="SELECT * FROM user WHERE email='$email'";
	$result=mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0){
	    while($row = mysqli_fetch_assoc($result)){
	    	$userid = $row["id"]; 
    	}
	}
	$days = $_POST['days'];
	$shifts = $_POST['shifts'];

	if(isset($name, $email, $userid, $days, $shifts)) {
	    $sql="INSERT INTO employees (name, email, userid, days, shifts) VALUES ('$name', '$email', '$userid', '$days', '$shifts')";
	    $result=mysqli_query($conn, $sql);
	}
}

if((isset($_POST['usid'])) && (isset($_POST['name']))){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$days = $_POST['days'];
	$shifts = $_POST['shifts'];

	$sql="UPDATE employees SET name='$name', email='$email', userid='$userid', days='$days', shifts='$shifts' WHERE id='$usid'";
	$result=mysqli_query($conn, $sql);
	header("location:student_list.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap LBooks Dashboard</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<?php
	include('includes/header_css.php');
	?>
	<!-- end: CSS -->
	

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
	
		
		
		
</head>

<body>
	<?php 
		include('includes/nav.php');
	?>
	
	<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php include('includes/menu.php');?>
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
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Name </label>
							  <div class="controls">
								<input value="<?= $name?>" type="text" name="name" class="span6 typeahead">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Email </label>
							  <div class="controls">
								<input value="<?= $email?>" type="text" name="email" class="span6 typeahead">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="checkbox">Day </label>
							  <div class="controls">
								<label class="checkbox inline">
									<input <?= $sun?> type="chekcbox" id="inlineCheckbox1" name="days[]" value="0"> Sunday
								</label>
								<label class="checkbox inline">
									<input <?= $mon?> type="chekcbox" id="inlineCheckbox2" name="days[]" value="1"> Monday
								</label>
								<label class="checkbox inline">
									<input <?= $teu?> type="chekcbox" id="inlineCheckbox3" name="days[]" value="2"> Teusday
								</label>
								<label class="checkbox inline">
									<input <?= $wed?> type="chekcbox" id="inlineCheckbox4" name="days[]" value="3"> Wednesday
								</label>
								<label class="checkbox inline">
									<input <?= $thu?> type="chekcbox" id="inlineCheckbox5" name="days[]" value="4"> Thursday
								</label>
								<label class="checkbox inline">
									<input <?= $fri?> type="chekcbox" id="inlineCheckbox6" name="days[]" value="5"> Friday
								</label>
								<label class="checkbox inline">
									<input <?= $sat?> type="chekcbox" id="inlineCheckbox7" name="days[]" value="6"> Saturday
								</label>
							  </div>
							  <?php

							  if($sid != NULL){
							  	echo '<input type="hidden" name="usid" value="'.$sid.'">';
							  }else{
							  	echo '<input type="hidden" name="add" value="1">';
							  }

							  ?>
							</div>

							<div class="control-group">
							  <label class="control-label" for="checkbox">Shifts </label>
							  <div class="controls">
								<label class="checkbox inline">
									<input <?= $night?> type="radio" id="inlineCheckbox1" name="shifts" value="0"> Night
								</label>
								<label class="checkbox inline">
									<input <?= $morning?> type="radio" id="inlineCheckbox2" name="shifts" value="1"> Morning
								</label>
								<label class="checkbox inline">
									<input <?= $afternoon?> type="radio" id="inlineCheckbox3" name="shifts" value="2"> Afternoon
								</label>
							  </div>
							  <?php

							  if($sid != NULL){
							  	echo '<input type="hidden" name="usid" value="'.$sid.'">';
							  }else{
							  	echo '<input type="hidden" name="add" value="1">';
							  }

							  ?>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Submit</button>
							 </div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
    

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
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap LBooks Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->
	<?php
	include('includes/footer_js.php')
	?>
	<!-- end: JavaScript-->
	
</body>
</html>
