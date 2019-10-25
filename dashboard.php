<?php
session_start();
 if($_SESSION['usertype']==null) // if the session not yet started 
{
   header('Location:index.php');
}
else
{
 $usertype=$_SESSION['usertype'];
	 
 include "section/".$usertype."dashboard.php";
}
?>