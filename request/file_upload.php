<?php
	include 'connection.php'; 
	session_start();
    extract($_SESSION);
echo $username;
	$fileExistsFlag = 0; 
	$fileName = $username.'.pdf';
	
	/*
	* 	If file is not present in the destination folder
	*/
	
		$target = "NOC/";		
		$fileTarget = $target.$fileName;	
		$tempFileName = $_FILES["File_noc"]["tmp_name"];
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		$result = move_uploaded_file($tempFileName,$fileTarget);
		$file_type=$_FILES['File_noc']['type'];
        if ($file_type!="application/pdf")
        {
            echo "Only PDF Files allowed";
        }

		/*
		*	If file was successfully uploaded in the destination folder
		*/
		else
		{
			  if($result)
			   { 
		     	echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";		
		    	$query = "INSERT INTO file_upload(filepath,File_noc) VALUES ('$fileTarget','$fileName')";
				//$link->query($query) or die("Error : ".mysqli_error($link));		
			    mysqli_query($conn, $query);
			   }
				else 
				{			
					echo "Sorry !!! There was an error in uploading your file";			
				}
			
		}
		mysqli_close($conn);
	
	/*
	* 	If file is already present in the destination folder
	*/

?>