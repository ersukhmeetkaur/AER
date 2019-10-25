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
    $flagNOC=0;
    $flagsummary=0;
    // echo $username;
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
            $fileNameNOC = trim($username).'_NOC.pdf';
            $targetNOC = "../attachment/NOC/";
            $fileTargetNOC = $targetNOC.$fileNameNOC;
            $tempFileNameNOC = $_FILES["NOC_pdf"]["tmp_name"];
            $resultNOC = move_uploaded_file($tempFileNameNOC,$fileTargetNOC);
            $file_typeNOC=$_FILES['NOC_pdf']['type'];
            $fileNamesummary = trim($username).'_summary.pdf';
            $targetsummary = "../attachment/summary/";
            $fileTargetsummary = $targetsummary.$fileNamesummary;
            $tempFileNamesummary = $_FILES["summary_pdf"]["tmp_name"];
            $resultsummary = move_uploaded_file($tempFileNamesummary,$fileTargetsummary);
            $file_typeNOC=$_FILES['summary_pdf']['type'];
            if ($file_typeNOC!="application/pdf" && $file_typesummary!="application/pdf")
            {
                echo "\nOnly PDF Files allowed";
            }
            else
            {
                  if($resultNOC)
                   { 
                     echo "Your NOC has been successfully uploaded\n";		
                     $flagNOC=1;		
                     $query = "UPDATE student set NOC_filepath='$fileTargetNOC',NOC_file='$fileNameNOC' WHERE app_id='$username'";
                     mysqli_query($conn, $query);
                     
                   }
                    else 
                    {			
                        echo "Sorry !!! There was an error in uploading your NOC";
                    }
                    if($resultsummary)
                   { 
                     	
                     echo "Your summary has been successfully uploaded";		
                     $flagsummary=1;
                     $query = "UPDATE student set summary_filepath='$fileTargetsummary',summary_file='$fileNamesummary' WHERE app_id='$username'";
                     mysqli_query($conn, $query);
                   }
                    else 
                    {			
                        echo "Sorry !!! There was an error in uploading your summary";	
                    }
                    if($flagNOC==1 && $flagsummary==1)
                    {
                        $query = "UPDATE student set flagsec5='Y' WHERE app_id='$username'";
                        mysqli_query($conn, $query);
                    }
            mysqli_close($conn);
            }
        }
        else
        {
            echo "server error";
        }
	}
}
?>