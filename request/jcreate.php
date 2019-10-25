<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);

$judge_id = mysqli_real_escape_string($conn, $judge_id);
$password = mysqli_real_escape_string($conn, $password);


echo "------Username: ".$judge_id."-------\n";
echo "------Password: ".$password."-------\n";

$FILLregist="INSERT INTO regist (username,password,usertype) values ('$judge_id','$password','j')";



if ($conn->query($FILLregist) === TRUE) {
	echo "Registration Done Successfully";
}

}
else{
	header("Location:../index.php");;
}



?>