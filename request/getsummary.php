<?php
session_start();
extract($_REQUEST);
extract($_SESSION);
if($usertype=='a'||$usertype=='m')
{
    $username=$app_id;
}
$file = '../attachment/summary/'.trim($username).'_summary.pdf';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>