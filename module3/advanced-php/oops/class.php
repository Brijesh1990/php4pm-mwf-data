<?php 
/* what is class ?
     A class is a group of member and its member functions i.e called class 
     or
     A class is nothing whenever we can not create its object
     or
     A class is a blue print of any object i.e called class 
    

     syntax : 

      class classname 
      {
         create a member function() 
         {
         
           statements;
         } 
      
      }

      call object of class
      call member function
*/


// class A 
// {
//     public function display()
//     {
//        $name="Hi i am brijesh";
//        echo $name;
//     }
// }

// $obj=new A; //new A is an object of class A 
// $obj->display();



class ABC 
{
    public function ad()
    {
        $a=10;
        $b=20;
        $c=$a+$b;
        echo "<h2>The additions of numbers is :".$c."<h2>";
    }
}
$obj=new ABC;
$obj->ad();
?>