<?php
include "../request/"."connection.php";

$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$app_id'");
$row = $resultsum->fetch_assoc();
$spoc_mobile=$row['spoc_mobile'];

echo "app_id=".$app_id." mobile=".$spoc_mobile;
$message="Dear Applicant, your application is incomplete. Your Application number is: ".$app_id.". Contact vishwakarmaaward@aicte-india.org for any help.";
include("msg_test.php");
$mclass = new sendSms();
$mclass->sendSmsToUser($message,$spoc_mobile,". AICTE",238161,"registration","vishwakarma");
$subject="Application ID for Vishwakarma Award";
$body="Dear Applicant,<br> Your registration has been done successfully. Your Application number is: ".$app_id;
// sendmail($subject,$body,$spoc_email,"Applicant");
$error= "Your registration done Succesfully. Check your mobile for confirmation.\n"."Your Application Number is: ".$app_id;
?>