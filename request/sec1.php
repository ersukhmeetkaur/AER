<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){

   $problem_det=null;	
extract($_POST);
extract($_SESSION);
if($usertype=='a')
{
    $username=$app_id;
}


echo $usertype;

$team_name = mysqli_real_escape_string($conn, $team_name);
$project_name = mysqli_real_escape_string($conn, $project_name );
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
       if($problem_det!=null)
       {
           $query ="UPDATE student set team_name='$team_name', project_name ='$project_name',problem='$problem',problem_det='$problem_det',award_cat='$award_cat',flagsec1='$flagsec1',g_oriented = '$g_oriented',i_entry='$i_entry',multi_dis='$multi_dis' WHERE app_id='$username'";
        }
        else
        {
            $query ="UPDATE student set team_name='$team_name', project_name ='$project_name',problem='$problem',award_cat='$award_cat',flagsec1='$flagsec1',g_oriented = '$g_oriented',i_entry='$i_entry',multi_dis='$multi_dis' WHERE app_id='$username'";
       }
	mysqli_query($conn, $query);
	echo "General Info Saved";
   }
   else
   {
	   echo "server error";
   }
   }
}
?>