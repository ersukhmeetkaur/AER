<?php
	include 'connection.php'; 
	session_start();
    extract($_SESSION);
    echo $username;
	$fileExistsFlag = 0; 
	$fileName = 'abstract'.$username.'.pdf';
	
	/*
	* 	If file is not present in the destination folder
	*/
	
		$target = "Abstract/";		
		$fileTarget = $target.$fileName;	
		$tempFileName = $_FILES["File_abstract"]["tmp_name"];
        $result = move_uploaded_file($tempFileName,$fileTarget);
        $file_type=$_FILES['File_abstract']['type'];
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
		    	$query = "INSERT INTO file_upload(filepath_abstract,filename_abstract) VALUES ('$fileTarget','$fileName')";
				//$link->query($query) or die("Error : ".mysqli_error($link));		
			    mysqli_query($conn, $query);
			   }
				else 
				{			
					echo "Sorry !!! There was an error in uploading your file";			
				}
	
		mysqli_close($conn);
        }
	/*
	* 	If file is already present in the destination folder
	*/

?>