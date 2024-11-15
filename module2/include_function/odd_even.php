<?php 
if(isset($_POST["sub"]))
{

  $number=$_POST["number"];
  if($number%2==0)
  {
   echo "<h4 style='color:green; text-align:center'>The number is even</h4>";
  }
  else 
  {
    echo "<h4 style='color:red; text-align:center'>The number is odd</h4>";
  }

}

?>