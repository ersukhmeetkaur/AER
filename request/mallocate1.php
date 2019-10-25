<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
    extract($_SESSION);
    extract($_POST);

// echo $username;
if($usertype=='a')
{
$resultcappid=mysqli_query($conn,"SELECT count(manager_id) FROM manager WHERE app_id='$app_id'");
$row = $resultcappid->fetch_assoc();
$resultsum=mysqli_query($conn,"SELECT * FROM manager WHERE manager_id='$manager_id' AND app_id='$app_id'");
if($row['count(manager_id)']>="2")
{
	echo "4";
}
else if($row = $resultsum->fetch_assoc())
{
	echo "2";
}
else
{
	$query ="INSERT into manager(manager_id,app_id,flageval0) values ('$manager_id','$app_id','N')";
	mysqli_query($conn, $query);
	echo "1";
}
}
else
{
    echo "3";
}
}
?>