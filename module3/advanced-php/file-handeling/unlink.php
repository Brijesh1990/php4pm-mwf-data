<?php 
$file="jquery.txt";
$file1=unlink($file);
if($file1)
{
    echo "File deleted successfuly";
}

?>