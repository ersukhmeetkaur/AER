<?php
include 'connection.php'; //connect the connection page
  
session_start();

extract($_POST);
if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
// extract($_SESSION);	
// echo $module;
// echo $usertype;
// echo $username;

if($_SESSION['usertype']=='a'||$_SESSION['usertype']=='m')
{
    
    $_SESSION["app_id"]=$app_id;
	include "../section/".$module.'.php';
}
}
else{
	header("Location:../index.php");
}

?>