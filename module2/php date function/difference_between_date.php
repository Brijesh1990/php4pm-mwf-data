<?php 
$price=1500;
$checkin=mktime(0,0,0,date("m"),date("d"),date("Y"));
$checkout=mktime(0,0,0,date("m"),date("d")+3,date("Y"));
//echo date("d/m/y",$checkout);
$diff=($checkout-$checkin)/86400;
echo "Numbers of days  stay is Hotesl :".floor($diff)."<br>";
echo "One day Price of Hotels :".$price;
$totprice=$price*floor($diff);
echo "<h3>The total price you have to Paid is :".$totprice;




?>