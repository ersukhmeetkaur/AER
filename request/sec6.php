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
$size = (int) $_SERVER['CONTENT_LENGTH'];

// echo "Size of request:".$size."\n";

$Q1 = mysqli_real_escape_string($conn, $Q1);
$Q2 = mysqli_real_escape_string($conn, $Q2);
$Q3 = mysqli_real_escape_string($conn, $Q3);
$Q4 = mysqli_real_escape_string($conn, $Q4);
$Q5 = mysqli_real_escape_string($conn, $Q5);
$Q6 = mysqli_real_escape_string($conn, $Q6);
 $Q7 = mysqli_real_escape_string($conn, $Q7);
$Q8 = mysqli_real_escape_string($conn, $Q8);
$Q9 = mysqli_real_escape_string($conn, $Q9);
$Q10 = mysqli_real_escape_string($conn, $Q10);



$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$username' AND app_status='Submitted'");
if($row = $resultsum->fetch_assoc() && $usertype!='a')
	{
		echo "Application already submitted, details could not be updated";
	}
   else
   { 
	$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$username'");
   if($row = $resultsum->fetch_assoc())
   { 
	$query ="UPDATE student set  Q1 ='$Q1',Q2 ='$Q2',Q3 ='$Q3',Q4 ='$Q4',Q5='$Q5',Q6='$Q6',Q7='$Q7',Q8='$Q8',Q9='$Q9',Q10='$Q10',flagsec6='$flagsec6' WHERE app_id='$username'";
	echo "Project Details Saved";
   }
   else
   {
	   echo "server error";
   }
  mysqli_query($conn, $query);
   }	


}
?>