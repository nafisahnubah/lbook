<?php

include('config.php');
include('includes/functions.php');
loggedin();

$studentid=$bookid=$borrowdate=$duedate=$status=$returned=$borrowed=$suspended=$sid='';

if(isset($_GET['eid'])){
	$sid=$_GET['eid'];
	$sql="SELECT * FROM borrowbooks WHERE id=$sid";
	$result=mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$studentid = $row["studentid"];
			$borrowdate = $row["borrowdate"];
			$duedate = $row["duedate"];
			$bookid = $row["bookid"];
			if($row["status"]==1){
		  		$borrowed ='checked';
		  	}
		  	else{
		  		$returned ='checked';
		  	}
		}
	}
}

if((isset($_POST['add'])) && (isset($_POST['studentid']))){
	
	$studentid = $_POST['studentid']; //Set UserName
	$bookid = $_POST['bookid']; //Set Password
	$borrowdate = $_POST['borrowdate'];
	$duedate = $_POST['duedate'];
	$status = $_POST['status'];

	if(isset($studentid, $bookid, $borrowdate, $duedate, $status)) {

	    $sql="INSERT INTO borrowbooks (studentid, bookid, borrowdate, duedate, status) VALUES ('$studentid', '$bookid', '$borrowdate', '$duedate', '$status')";
	    $result=mysqli_query($conn, $sql);

	    $sql2="UPDATE books SET status='1' WHERE id='$bookid'";
	    $result2=mysqli_query($conn, $sql2);
	}
}

if((isset($_POST['usid'])) && (isset($_POST['studentid']))){
	$usid = $_POST['usid'];
	$studentid = $_POST['studentid']; //Set UserName
	$bookid = $_POST['bookid']; //Set Password
	$borrowdate = $_POST['borrowdate'];
	$duedate = $_POST['duedate'];
	$status = $_POST['status'];

	$sql="UPDATE borrowbooks SET studentid='$studentid', borrowdate='$borrowdate', duedate='$duedate', bookid='$bookid', status='$status' WHERE id='$usid'";
	$result=mysqli_query($conn, $sql);

	if($status=='0'){
		$sql2="UPDATE books SET status='0' WHERE id='$bookid'";
	    $result2=mysqli_query($conn, $sql2);
	}
	else if($status=='1'){
		$sql2="UPDATE books SET status='1' WHERE id='$bookid'";
	    $result2=mysqli_query($conn, $sql2);
	}

	header("location:borrow_books_list.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Borrow Request</title>
	<meta name="description" content="LBook Borrow Request">
	<meta name="keyword" content="LBook, Library, Borrow, Bootstrap, Books">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<?php
	include('includes/header_css.php');
	?>
	<!-- end: CSS -->
	
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
					<a href="#">Borrow Request</a>
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
							  <label class="control-label" for="typeahead">Student ID </label>
							  <div class="controls">
								  <select id="studentid" name="studentid" data-rel="chosen">
								  	<?php
								  	$sql="SELECT * FROM students ORDER BY id ASC";
								  	$result=mysqli_query($conn, $sql);

								  	if (mysqli_num_rows($result) > 0) {
									  while($row = mysqli_fetch_assoc($result)){
									  	$id = $row['id'];
								        $name = $row['name'];
								        echo '<option value="' . $id . '">' . $name . ' - ' . $id . '</option>';
									  }
									}
								  	?>
								  </select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Book ID </label>
							  <div class="controls">
								  <select id="bookid" name="bookid" data-rel="chosen">
									<?php
								  	$sql="SELECT * FROM books ORDER BY id ASC";
								  	$result=mysqli_query($conn, $sql);

								  	if (mysqli_num_rows($result) > 0) {
									  while($row = mysqli_fetch_assoc($result)){
									  	$id = $row['id'];
								        $name = $row['name'];
								        echo '<option value="' . $id . '">' . $name . ' - ' . $id . '</option>';
									  }
									}
								  	?>
								  </select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Date Borrowed </label>
								  <div class="controls">
									<input type="text" class="input-xlarge datepicker" id="date01" name="borrowdate" value="<?= $borrowdate?>">
								  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Date Due </label>
								  <div class="controls">
									<input type="text" class="input-xlarge datepicker" id="date02" name="duedate" value="<?= $duedate?>">
								  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Status </label>
							  <div class="controls">
								<label class="checkbox inline">
									<input <?= $borrowed?> type="radio" id="inlineCheckbox2" name="status" value="1"> Borrowed
								</label>
								<label class="checkbox inline">
									<input <?= $returned?> type="radio" id="inlineCheckbox1" name="status" value="0"> Returned
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
								<button type="submit" class="btn btn-primary">Request</button>
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
	
	<?php 
		include('includes/footer.php');
	?>
	
	<!-- start: JavaScript-->
	<?php
	include('includes/footer_js.php')
	?>
	<!-- end: JavaScript-->
	
</body>
</html>
