<?php 
// __construct()  this is called magic method 

class A 
{
    public function __construct($a,$b)
    {
        $c=$a+$b;
        echo "Additions of numbers is :",$c;
    }
}

$obj=new A(10,20);

?>