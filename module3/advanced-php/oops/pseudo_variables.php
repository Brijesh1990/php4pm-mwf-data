<?php 
/* 
what is pseudo variables ?
 pseudo variables denoted via $this in oops in php
 pseudo variables is used to called any variables in scope of any function globally there we used $this or pseudo variables. 


*/

// class A 
// {
//     public $name="Brijesh kumar pandey";
//     public function display()
//     {
//        echo  $this->name;
//     }
// }
// $obj=new A; 
// $obj->display();


class A 
{
    public $a=10;
    public $b=20;
    public function display()
    {
        echo $this->a+$this->b;

    }
}

$obj=new A; 
$obj->display();


?>