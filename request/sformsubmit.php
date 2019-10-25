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


$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$username' and flagsec1='Y' and flagsec2='Y' and flagsec3='Y' and flagsec4='Y' and flagsec5='Y' and flagsec6='Y' ");
   if($row = $resultsum->fetch_assoc())
   { 
	$query ="UPDATE student set app_status='Submitted' WHERE app_id='$username'";
	mysqli_query($conn, $query);
	echo "Congratulations, Application Submitted";
   }
   else
   {
        // $resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$username'");
        // $row = $resultsum->fetch_assoc();
        // echo $row['flagsec1'].' '.$row['flagsec2'].' '.$row['flagsec3'].' '.$row['flagsec4'].' '.$row['flagsec6'];
	    echo "Either data not saved or form not filled completely, please check preview";
   }


mysqli_close($conn); // Closing Connection with Server
}
else{
	header("Location:../dashboard.php");;
}



?>