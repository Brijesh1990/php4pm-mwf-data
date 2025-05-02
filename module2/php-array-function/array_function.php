<?php 
// $arr=array("brijesh","rajesh","bhavika");
// print_r($arr);


//array_count_values() 
// $arr=array("php","python","java","react js","php","php","java");
// print_r(array_count_values($arr));

//array_combine()  : combine two array only first array as key and second array as values

// $arr1=array(0,1,2,3,4);
// $arr2=array("php","asp.net","python","java","angular");
// print_r(array_combine($arr1,$arr2));
 

//array_merge : merge more than one array and return large merge values of array 

// $arr1=array("a"=>"rajesh","b"=>"dinesh","c"=>"pratigna");
// $arr2=array("a"=>"rajesh","b"=>"dinesh","c"=>"pratigna");
// $arr3=array("a"=>"kumar","b"=>"axay","c"=>"pratigna","d"=>"umesh");

// print_r(array_merge($arr1,$arr2,$arr3));

// // array_keys : provides each values of array of keys 
// $arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
// print_r(array_keys($arr));



// array_values : provides each array of values 
// $arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
// print_r(array_values($arr));


// array_push : insert a new array element on last index of array 
// $arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
// //print_r(($arr));
// print_r(array_push($arr,"Niral"));
// print_r(($arr));


//array_pop : this funnction is used to delete a element from array on last index
// $arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
// //print_r(($arr));
// print_r(array_pop($arr));
// print_r(($arr));


//echo mt_rand(00000,99999);
// echo rand(11111,99999);


//array_reverse : resverse a array 
// $arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
// //print_r($arr);
// print_r(array_reverse($arr));

//sort : sort any array with alphabetic character of values of array in asecending order

// $arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
// sort($arr);
// //foreach 
// foreach($arr as $value)
// { 

//     echo "After srt the values is :".$value."<br>";

// }



// //asort : sort any array with values in ascending order

// $arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
// asort($arr);
// //foreach 
// foreach($arr as $value)
// { 

//     echo "After srt the values is :".$value."<br>";

// }


// //arsort : sort any array with values in decending order

// $arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
// arsort($arr);
// //foreach 
// foreach($arr as $value)
// { 

//     echo "After srt the values is :".$value."<br>";

// }



// //ksort : sort any array with key in ascending order
// $arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
// ksort($arr);
// //foreach 
// foreach($arr as $value)
// { 

//     echo "After srt the values is :".$value."<br>";

// }

//krsort : sort any array with key in desending order
$arr=array(0=>"Brijesh",1=>"rajesh",2=>"bhavika",3=>"pratigna");
krsort($arr);
//foreach 
foreach($arr as $value)
{ 

    echo "After srt the values is :".$value."<br>";

}


?>