<?php 
$file=fopen("html.txt","w+") or die('file does not exist');
$txt="file handeling is a part of php and handel the file and you can write some content on file also";
echo fwrite($file,$txt);



?>