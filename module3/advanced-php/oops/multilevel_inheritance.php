<?php 
// A one class or parent class properties  inherited by its one child class and its also inherited by its child class so on  i.e called multilevel inheritance

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
        echo "My name is Rajesh"."<br>";
    }
}

class C extends B 
{
    public function display3()
    {
        echo "My name is Yash";
    }
}
$obj=new C;
$obj->display1();
$obj->display2();
$obj->display3();




?>