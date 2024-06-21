<?php
function loggedin(){
	session_start(); // Start the session	
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
		// last request was more than 30 minutes ago
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();   // destroy session data in storage
	}
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
	
	if (!isset($_SESSION["name"])) { // If session not registered
		header("location:login.php"); // Redirect to login.php page
		exit;                         // Stop execution of current script
	} else {
		header('Content-Type: text/html; charset=utf-8');
		define('ADMIN', $_SESSION["name"]); //Get the user name from the previously registered super global variable
	}
}
?>