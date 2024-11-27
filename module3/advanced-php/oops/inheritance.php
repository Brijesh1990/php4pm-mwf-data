<?php 
/*  
what is inheritance ? 
   A class properties used by another class there we used inheritance 
   or
   A class properties access by its another class i.e called inheritance
   
   Note : inheritance is used by extends keyword 

   types of inheritance ....

   a) single inheritance
   b) multilevel inheritance 
   c) multiple inheritance 
   


*/

class A  
{
    public function display1()
    {
        echo "My name is Brijesh"."<br>";
    }
}

class B extends A 
{
    public function display2()
    {
        echo "My name is Rajesh";
    }
}

$obj=new B;
$obj->display1();
$obj->display2();



?>