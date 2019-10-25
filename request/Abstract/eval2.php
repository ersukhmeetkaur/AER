<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
extract($_SESSION);

// echo $username;

$resultsum=mysqli_query($conn,"SELECT * FROM judge WHERE judge_id='$username' AND app_id='$app_id'");
if($row = $resultsum->fetch_assoc() && $usertype=='j')
	{
	$query ="UPDATE judge set abstract_score='$abstract_score',Q1_score='$Q1_score', Q2_score ='$Q2_score', Q3_score ='$Q3_score', Q4_score ='$Q4_score', Q5_score ='$Q5_score', flageval2='Y' WHERE app_id='$app_id'";//, flageval2='$flageval2'
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