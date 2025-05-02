<?php 
// A one class or parent class properties only inherited by its one child class i.e called single inheritance

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