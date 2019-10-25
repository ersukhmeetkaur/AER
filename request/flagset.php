<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
    	
    extract($_POST);
    extract($_SESSION);
    if($usertype=='a')
    {
        $username=$app_id;
    }


    // echo $username;

    $flagsec1 = mysqli_real_escape_string($conn, $flagsec1);
    $flagsec2 = mysqli_real_escape_string($conn, $flagsec2);
    $flagsec3 = mysqli_real_escape_string($conn, $flagsec3);
    $flagsec4 = mysqli_real_escape_string($conn, $flagsec4);
    $flagsec5 = mysqli_real_escape_string($conn, $flagsec5);
    $flagsec6 = mysqli_real_escape_string($conn, $flagsec6);
    $app_status = mysqli_real_escape_string($conn, $app_status);
    
	if($usertype!='a')
	{
		echo "Not Allowed";
    }
    else
    { 
	    $resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$username'");
        if($row = $resultsum->fetch_assoc())
        {
            $query ="UPDATE student set flagsec1='$flagsec1', flagsec2 ='$flagsec2',flagsec3='$flagsec3',flagsec4='$flagsec4',flagsec5='$flagsec5',flagsec6='$flagsec6',app_status='$app_status' WHERE app_id='$username'";
            mysqli_query($conn, $query);
            echo "Flags Updated";
        }
        else
        {
            echo "server error";
        }
    }
}
?>