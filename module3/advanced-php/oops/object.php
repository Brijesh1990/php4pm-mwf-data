<?php 
/* what is object ?    
     An object is an instance of class i.e called object. 
     An object is insitialised with new keyword
     examples :  $obj=new A;
*/

class A 
{
    public function test()
    {
        $a=10;
        $b=20;
        $c=$a*$b;
        echo $c;
    }
}

$obj=new A; //new A is an object of class A
$obj->test();

?>