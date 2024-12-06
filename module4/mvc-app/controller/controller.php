<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
    //w.a.p to print name 
    // $name="Brijesh";
    // echo $name;  

    // w.a.p to swap two numbers with using third variables 
    if(isset($_POST["chk"]))
    {
        $a=$_POST["a"];
        $b=$_POST["b"];
        // swap without variables
        // $a=$a+$b; //30
        // $b=$a-$b; //10
        // $a=$a-$b; //20
        //swap with third variables
        //$a=10; $b=20
        $temp=$a;//10
        $a=$b;//20
        $b=$temp;//10
        echo "<h4 align='center'>"."After swap a values is :".$a." and b values  is :".$b."</h4>";
    }

    }
}
$obj=new controller;

?>