<?php
include "request/".'connection.php'; //connect the connection page
  

session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
	
// $error="Your Username is:" $l_username;
// echo $l_password;

$l_username = mysqli_real_escape_string($conn, $l_username);
$l_password = mysqli_real_escape_string($conn, $l_password);


$resultsum=mysqli_query($conn,"SELECT usertype FROM regist WHERE username='$l_username' and password='$l_password'");
	if($row = $resultsum->fetch_assoc())
	{
			extract($row);
			$_SESSION['usertype']=$usertype;
			$_SESSION['username']=$l_username;
			header("Location:dashboard.php");
	}		
	else
	{
			$error= "Username or Password Incorrect";
	}
	

mysqli_close($conn); // Closing Connection with Server
}
else{
	header("Location:index.php");;
}



?>