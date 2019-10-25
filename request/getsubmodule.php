<?php
include 'connection.php'; //connect the connection page
  
session_start();

extract($_POST);
if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
extract($_SESSION);
	
// echo $module;
// echo $usertype;
// echo $username;

if($usertype)
{
	include "../section/".$usertype.'_'.$module.'_'.$submodule.'.php';
}
}
else{
	header("Location:../index.php");
}

?>