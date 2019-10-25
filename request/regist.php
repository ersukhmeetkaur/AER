<?php
include "request/".'connection.php'; //connect the connection page
session_start();
date_default_timezone_set("Asia/Calcutta"); 
$app_id='VIS'.date('dmHis');

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);

$spoc_name = mysqli_real_escape_string($conn, $spoc_name);
$r_password = mysqli_real_escape_string($conn, $r_password);

// echo $spoc_name."\n";
// echo $spoc_email."\n";
// echo $spoc_mobile."\n";
// echo $app_id."\n";
// echo $r_password."\n";

$resultem=mysqli_query($conn,"SELECT * FROM student WHERE spoc_email='$spoc_email'");
$resultmob=mysqli_query($conn,"SELECT * FROM student WHERE spoc_mobile='$spoc_mobile'");
    if($row = $resultem->fetch_assoc())
	{
		$error="Email already registered";
	}
	else if($row = $resultmob->fetch_assoc())
	{
		$error="Mobile already registered";
	}
	else
	{

	$FILLteam="INSERT INTO teammember(mem_id,member_name,member_email,team_mobile,roll,app_id) values('1','$spoc_name','$spoc_email','$spoc_mobile','Team Leader','$app_id')";
	
	$conn->query($FILLteam);
	
	$FILLregist="INSERT INTO regist (username,password,usertype) values ('$app_id','$r_password','s')";
	
	$conn->query($FILLregist);
	
	$FILL="INSERT INTO student (spoc_name,spoc_email,spoc_mobile,app_id,spoc_aadhar,flagsec1,flagsec2,flagsec3,flagsec4,flagsec5,flagsec6) values ('$spoc_name','$spoc_email','$spoc_mobile','$app_id','$spoc_aadhar','N','N','N','N','N','N')";
	
if ($conn->query($FILL) === TRUE) {
	
	$message="Dear Applicant, Your registration has been done successfully. Your Application number is: ".$app_id;
	include("msg_test.php");
	$mclass = new sendSms();
    $mclass->sendSmsToUser($message,$spoc_mobile,". AICTE",238161,"registration","vishwakarma");
	
	$subject="Application ID for Vishwakarma Award";
	$body="Dear Applicant,<br>
	Your registration has been done successfully. Your Application number is: ".$app_id;
	// sendmail($subject,$body,$spoc_email,"Applicant");
	$error= "Your registration done Succesfully. Check your mobile for confirmation.\n"."Your Application Number is: ".$app_id;
	
} else {
	$error= "Error: " . $FILL . "<br>" . $conn->error;
}

function sendmail($subject,$body,$sender,$sendertype)
{
	include("mailer/PHPMailerAutoload.php");
	$mail = new PHPMailer;
	//$mail->SMTPDebug = 3;                               		// Enable verbose debug output
	$mail->isSMTP();                                      		// Set mailer to use SMTP
	$mail->Host = '192.168.1.118';                   			// Specify main and backup SMTP servers
	//$mail->SMTPAuth = true;                                   // Enable SMTP authentication
	//$mail->Username = 'aicte.admin@aicte-india.org';          // SMTP username
	//$mail->Password = '';                      				// SMTP password
	//$mail->SMTPSecure = 'ssl';                          		// Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25;                                     		// TCP port to connect to
	$mail->From = 'aicte.admin@aicte-india.org';
        $mail->FromName = 'AICTE no-reply';
        $mail->addAddress($sender,$sendertype);
		//$mail->AddCC($sender2, "Contact Person");
		// Add a recipient
	    //$mail->AddBCC("aictetestmail@gmail.com", "MailCheck");
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
		//$mail->addAttachment("E:/uploads/".$path);
        //$mail->AltBody = $altBody;
		//echo $user_row["isSubmitted"]." ".$user_row["isStudentVerified"];
		
		//echo $subject;
		
        if(!$mail->send()) {
			$error2= "failed";
			header('Location: index.php');	
        } else {
			
			$error2= "Your registration done Succesfully. Check your mail for more information.";
			
        }
	}
	
	
	
	
	
	// $resultsum=mysqli_query($conn,"SELECT usertype FROM regist WHERE username='$l_username' and password='$l_password'");
	// if($row = $resultsum->fetch_assoc())
	// {
		// extract($row);
		// $_SESSION['usertype']=$usertype;
		// $_SESSION['username']=$l_username;
		// header("Location:../dashboard.php");
	// }		
	// else
	// {
		// echo "Not found";
		// }
	}
		
		
// mysqli_close($conn); // Closing Connection with Server
}
else{
	header("Location:../index.php");
}



?>