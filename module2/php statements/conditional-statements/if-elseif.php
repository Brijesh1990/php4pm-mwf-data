<?php 
/*
if elseif : if is executed when condition is true elseif is executed to check multiple true conditions if elsif is false else is executed 

 syntax :

  if(condition)
  {
    statements;
  }
    elseif(condition)
    {
    
     statements;
    }
      elseif(condition)
    {
    
     statements;
    }
     else 
     {
     
     statements;
     }

*/

$a=15;
$b=15;

if($a>$b)
{
    echo "a is greater than b";
}
else if($b>$a)
{
    echo "b is greater than a";
}

else 
{
    echo "both are equal number";
}


?>