<?php 
$file=fopen("jquery.txt","r+") or die('file does not exist');

// if($file)
// {
//     echo "successfully created and opened";
// }

// $txt="file handeling is a part of php and handel the file";
// echo fwrite($file,$txt);
echo fgets($file);

fclose($file);

?>