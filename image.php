<?php
$img = 'pas.jpg';
header('Content-Type: image/jpeg');
readfile($img);

$file = fopen("logger.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
echo fwrite($file,$ip);
fclose($file);
?>