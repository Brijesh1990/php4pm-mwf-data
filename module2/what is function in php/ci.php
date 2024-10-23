<?php 
function si()
{
  $p=50000;
  $n=2;
  $r=5;
  $ci=$p*(pow((1+$r/100),$n));
  echo "The rate of interest is :".$ci;

}
si();
?>