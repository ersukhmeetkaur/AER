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
        $result2=mysqli_query($conn,"SELECT * FROM manager WHERE manager_id='$username' AND app_id='$app_id'");
        $row2 = $result2->fetch_assoc();
        // echo $row2['zero_score'];
        if($row2['flageval0']=='Y')
            echo "Application already verified, unable to change";
        else if($zero_score==0 && $zero_det==NULL)
            echo "Please enter remarks";
        else
        {
            $query ="UPDATE manager set zero_score='$zero_score',zero_det='$zero_det', flageval0='Y' WHERE app_id='$app_id'and manager_id='$username'";
            mysqli_query($conn, $query);
            echo "Successfully updated";
            // $resultapp=mysqli_query($conn,"SELECT * FROM judge WHERE judge_id='$username' AND flageval2='N'");
            // $rowapp = $resultapp->fetch_assoc();
            // $app_id=$rowapp['app_id'];
            // $_SESSION['app_id']=$app_id;
        }
    }
    else
    {
        echo "Server Error";
    }
}
?>