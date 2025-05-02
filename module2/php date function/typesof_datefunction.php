<?php 
// date()
// mktime(0,0,0,date("m"),date("d"),date("y"));
// strtotime()

date_default_timezone_set("Asia/Calcutta");
echo "Today is :".date("d/m/Y")."<br>";
echo "The time is it :".date("H:i:s a")."<br>";

// mktime() function is used to future and current date
// $date=mktime(0,0,0,date("m"),date("d"),date("y"));
// echo "Today is date :".date("d/m/Y",$date);

//7 days before the date is 

// $date=mktime(0,0,0,date("m"),date("d")-7,date("y"));
// echo "7 days before the date is  :".date("d/m/Y",$date);

// 29 days after the date is 

// $date=mktime(0,0,0,date("m"),date("d")+29,date("y"));
// echo "29 days after the date is  :".date("d/m/Y",$date);


echo "after 8 days the date is :".date("d/m/Y",strtotime("8 day"));



?>