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

$inst_name = mysqli_real_escape_string($conn, $inst_name);
$inst_address = mysqli_real_escape_string($conn, $inst_address );
$inst_city = mysqli_real_escape_string($conn,$inst_city);
$inst_principal = mysqli_real_escape_string($conn,$inst_principal);
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
	$query ="UPDATE student set inst_name='$inst_name', inst_pid ='$inst_pid',inst_address='$inst_address',inst_city='$inst_city',inst_state='$inst_state', inst_principal='$inst_principal', inst_contact='$inst_contact', inst_email='$inst_email',flagsec2='$flagsec2'   
		WHERE app_id='$username'";
		mysqli_query($conn, $query);
		echo "Institute Details saved";
   }
   else
   {
	   echo "server error";
   }
   }
		


}
?>