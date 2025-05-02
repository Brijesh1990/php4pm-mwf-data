<?php 
/* interface : interface is used to access multiple parent class properties by its one child class 
  
    define : 

       interface name
       {
         member function ()
         {
            statements;
         }
       }

       interface name
       {
         member function ()
         {
            statements;
         }
       }

       interface name
       {
         member function ()
         {
            statements;
         }
       }

       class E implements A,B,C,D
       {
         member function()
         {
         }
       }

       $obj=new E;


*/


interface A 
{
    public function display1();
}

interface B 
{
    public function display2();
}

interface C 
{
    public function display3();
}

interface D 
{
    public function display4();
}

class E implements A,B,C,D 
{
    public function display1()
    {
        echo "Hello i am yash"."<br>";
    }
    
    public function display2()
    {
        echo "Hello i am sanket"."<br>";
    }
    
    public function display3()
    {
        echo "Hello i am bhumi"."<br>";
    }
    
    public function display4()
    {
        echo "Hello i am partigna"."<br>";
    }
}
$obj=new E;
$obj->display1();
$obj->display2();
$obj->display3();
$obj->display4();

?>