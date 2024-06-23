<?php
//print_r($_POST);
//die();
include('config.php');
include('includes/functions.php');
loggedin();

$msg = '';

if(isset($_POST['del_id'])){
	$sql = "DELETE FROM books WHERE id = '".$_POST['del_id']."'";
	if($conn->query($sql) === TRUE){
		$msg =  "<h3><span style=\"color:red;\">Record ID : <em>".$_POST['del_id']."</em> DELETED successfully</span></h3>";
	}else {
		$msg =  "Error updating record: " . $conn->error;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Books List</title>
	<meta name="description" content="LBook Books List">
	<meta name="keyword" content="LBook, Library, List, Bootstrap, Books">
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
	<link rel="shortcut icon" href="img/favicon.ico">
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
				<li><a href="#">Books List</a></li>
			</ul>
			<?=$msg?>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Books</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Name</th>
								  <th>Author</th>
								  <th>Genre</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  	$sql="SELECT * FROM books ORDER BY activity DESC";
						  	$result=mysqli_query($conn, $sql);

						  	if (mysqli_num_rows($result) > 0) {
							  // output data of each row
							  while($row = mysqli_fetch_assoc($result)) {
							  	if($row["status"]==1){
							  		$status='Unavailable';
							  		$cls='danger';
							  	}
							  	else{
							  		$status='Available';
							  		$cls='success';
							  	}
							    echo '
							    	<tr>
										<td>'. $row["id"].'</td>
										<td class="center">'. $row["name"].'</td>
										<td class="center">'. $row["author"].'</td>
										<td class="center">'. $row["genre"].'</td>
										<td class="center">
											<span class="label label-'.$cls.'">'. $status.'</span>
										</td>
										<td class="center">
											<a class="btn btn-info" href="books.php?eid='.$row["id"].'">
												<i class="halflings-icon white edit"></i>  
											</a>

											<form action="" method="POST" style="display:inline" onSubmit="return remove_std('.$row["id"].');" >
											
												<input type="hidden" name="del_id" value="'.$row["id"].'"/>

												<button class="btn btn-danger" type="submit" name="submit">
													<i class="halflings-icon white trash"></i> 
												</button>
											</form>
										</td>
									</tr>
							    ';
							  }
							} else {
							  echo "0 results";
							}
						  	// print_r($result);
						  	?>
							
						  </tbody>
					  </table>            
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
	<script>
	
	remove_std = function(id)
	 {
		if(confirm("Do you really want to delete this ID # "+id+" ?"))
			return true;
		else
			return false;
	 };  
	</script>	
	
</body>
</html>
