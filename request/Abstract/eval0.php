<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
extract($_SESSION);

// echo $username;

$resultsum=mysqli_query($conn,"SELECT * FROM manager WHERE manager_id='$username' AND app_id='$app_id'");
if($row = $resultsum->fetch_assoc() && $usertype=='m')
	{
	$query ="UPDATE manager set zero_score='$zero_score', flageval0='Y' WHERE app_id='$app_id'and manager_id='$username'";
	mysqli_query($conn, $query);
    echo "Successfully updated";
    // $resultapp=mysqli_query($conn,"SELECT * FROM judge WHERE judge_id='$username' AND flageval2='N'");
    // $rowapp = $resultapp->fetch_assoc();
    // $app_id=$rowapp['app_id'];
    // $_SESSION['app_id']=$app_id;
   }
   else
   {
	   echo "Server Error";
   }
}
?>