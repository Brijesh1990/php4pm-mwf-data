<?php 
/* what is constructor ?
     A constructor is a same name of class whenever we create an object of class constructor automatically called i.e called constructor.

     A constructor  is created by users 

     types of of constructor ?

     a) user defined constructor
     a) default constructor
     a) parameterized constructor



*/

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