<?php 
/* nested if : if within another if i.e called nested if 
        syntax 
        
        if(condition)
        {
          if(condition)
          {
           statements;
         }
        }

        else 
        {
        statements;
        }

*/

$a=25;
$b=15;
if($a>$b)
{
    if($a!=0 && $b!=0)
    {
        echo "a is greater than b and both are positive numbers";
    }
}

else 
{
    echo "a is smaller than b";
}

?>