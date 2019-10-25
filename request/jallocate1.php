<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
extract($_SESSION);

// echo $username;
if($usertype=='a'||$usertype=='m')
{
$resultcappid=mysqli_query($conn,"SELECT count(judge_id) FROM judge WHERE app_id='$app_id'");
$row = $resultcappid->fetch_assoc();
$resultsum=mysqli_query($conn,"SELECT * FROM judge WHERE judge_id='$judge_id' AND app_id='$app_id'");
if($row['count(judge_id)']>="2")
{
	echo "4";
}
else if($row = $resultsum->fetch_assoc())
{
	echo "2";
}
else
{
	$query ="INSERT into judge(judge_id,app_id,flageval2) values ('$judge_id','$app_id','N')";
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