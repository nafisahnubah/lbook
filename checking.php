<?php
$username = $_POST['email']; //Set UserName
$password = md5($_POST['password']); //Set Password

$msg ='';
if(isset($username, $password)) {
    ob_start();
	session_start();
	include('config.php');
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($conn, $myusername);
    $mypassword = mysqli_real_escape_string($conn, $mypassword);
    $sql="SELECT * FROM user WHERE email='$myusername' and password='$mypassword'";
    $result=mysqli_query($conn, $sql);
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