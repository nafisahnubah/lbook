<?php
//define(DOC_ROOT,dirname(_FILE_)); // To properly get the config.php file
$username = $_POST['user_name']; //Set UserName
$password = md5($_POST['user_pass']); //Set Password

$msg ='';
if(isset($username, $password)) {
    ob_start();
	session_start();
	include('config.php');
    //include(DOC_ROOT.'/config.php'); //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM login_admin WHERE user_name='$myusername' and user_pass='$mypassword'";
    $result=mysqli_query($dbC, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
	//echo $count;
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        //Register $myusername, $mypassword and redirect to file "admin.php"
		$_SESSION["admin"]= $myusername;
        $_SESSION["password"]= $mypassword;
        
        $_SESSION["name"]= $myusername;
		//$_SESSION["id"]= $userid;
        header("location:index.php");
    }
    else {
        $msg = "Wrong Username or Password. Please retry";
        header("location:login.php?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:login.php?msg=Please enter some username and password");
}
?>