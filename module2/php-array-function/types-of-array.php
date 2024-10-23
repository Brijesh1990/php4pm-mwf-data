<?php 
// index or numeric array : it is defined or automatic asign index of each array

// $name=array("php","net","laravel","react js","node js");
// print_r($name);


//associative array : this type of array is associate any array with key with values i.e called associative array
// $name=array(0=>"Brijesh",1=>"Rajesh",2=>"Yash");
// print_r($name);

// $name=array("a"=>"Brijesh","b"=>"Rajesh","c"=>"Yash");
// print_r($name);
 
//multidimensional array : if we stored any array with another array  i.e called multidimentional array
$name=array("technical"=>array("php","python","java","angular","node js"),"non-technical"=>array("st","dm","wd","seo"));
// print_r($name);
// print_r($name["technical"][4]);
print_r($name["non-technical"][3]);

 
?>