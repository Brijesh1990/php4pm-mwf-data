<?php 
$file=fopen("javascript.txt","r+") or die('file does not exist');

// echo fgets($file);
echo fread($file,1024);

?>