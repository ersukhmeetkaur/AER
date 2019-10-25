<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
extract($_SESSION);

// echo $username;

$resultsum=mysqli_query($conn,"SELECT * FROM evaluator WHERE evaluator_id='$username' AND app_id='$app_id'");
if($row = $resultsum->fetch_assoc() && $usertype=='j')
	{
	$query ="UPDATE evaluator set Q1_eval='$Q1_eval', Q2_eval ='$Q2_eval', Q3_eval ='$Q3_eval', Q4_eval ='$Q4_eval', Q5_eval ='$Q5_eval', flageval1='Y' WHERE app_id='$app_id'";
	mysqli_query($conn, $query);
    echo "Scores Saved, switching to next application";
    $resultapp=mysqli_query($conn,"SELECT * FROM judge WHERE judge_id='$username' AND flageval2='N'");
    $rowapp = $resultapp->fetch_assoc();
    $app_id=$rowapp['app_id'];
    $_SESSION['app_id']=$app_id;
   }
   else
   {
	   echo "Server Error";
   }
}
?>