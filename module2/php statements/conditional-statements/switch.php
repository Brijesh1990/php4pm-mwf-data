<?php 

// switch(condition)
// {
//     case 'A':
//         statements;
//         break;
//     case 'B':
//         statements;
//         break;
//     case 'C':
//         statements;
//         break;
//     case 'D':
//         statements;
//         break;

//     default:
//         statements;
//         break;    
                                
// }


// w.a.p to check grading system 

  $grade="G";
  
switch($grade)
{
    case 'A':
        echo "<h1>You are Topper students &#9786</h1>";
        break;
    case 'B':
        echo "<h1>You are Average students &#9786</h1>";
        break;
    case 'C':
        echo "<h1>You are Failed students &#9785</h1>";
        break;

    default:
    echo "<h1>Your grade is not found please contact with admin</h1>";
        break;    
                                
}

?>