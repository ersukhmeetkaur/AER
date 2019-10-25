<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){//check if the request method was post
	
extract($_POST);
extract($_SESSION);
$r_username = mysqli_real_escape_string($conn, $r_username);//escape any special characters-prevent sql injection
$password = mysqli_real_escape_string($conn, $password);
$roll = mysqli_real_escape_string($conn, $roll);

echo "------Username: ".$r_username."-------\n";//Return the username used for registration
echo "------Password: ".$password."-------\n";//Return the password used for registration

$FILLregist="INSERT INTO regist (username,password,usertype) values ('$r_username','$password','$roll')";//create a query using username, password and roll recieved from request

if($usertype=='a')//If an admin is trying to create  new user
{
    if ($conn->query($FILLregist) === TRUE) {//execute the query with any roll
        echo "User Created Successfully";
    }
    else{
        echo "User Creation Failed";
    }
}
}
else if($usertype='m')
{
    echo "Write code for user creation from manager dash";
}


?>