<?php
include 'connection.php'; //connect the connection page
  
session_start();

extract($_POST);
if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
extract($_SESSION);
$app_id=trim($username);	
// echo $module;
// echo $usertype;
// echo $username;

if($usertype)
{
	include "../section/".$usertype.'_'.$module.'.php';
}
}
else{
	header("Location:../index.php");
}

?>