<?php 
// strlen : find the length of string 
// $name="Brijesh kumar pandey";
// echo strlen($name);

// strpos : find the positions of any string
// echo strpos("Hello world","Hello");
//echo strpos("Hello world","world");

//strrepeat : repeated more than once time any string

// $name="Brijesh"."<br>";
// echo str_repeat($name,100);

//strreplace : replace the current string with anothe string 
// echo str_replace("Tops","Infosys","Tops technology pvt ltd");

// $str="Mahindra tech pvt ltd";
// echo str_replace("Mahindra","Tops",$str);

// $str="Brijesh";
// echo str_shuffle($str);

// str_split: split any string into array
// $str="Hello world";
// print_r(str_split($str));

// $str="Hi brijesh how are you i am fine";
// echo str_word_count($str);

// strstr  : match each string and return string and follow the case-senstive rules

// // echo strstr("hello world","world");
// echo strstr("hello world","hello");

//stristr: match string to string and return all matched string but does not follow case-senstive rules

//echo stristr("hello world","World");


// $str="i am Brijesh Kumar Pandey";
// echo strtolower($str);

// $str="i am brijesh kumar pandey";
// echo strtoupper($str);

// $str="i am brijesh kumar pandey";
// echo ucfirst($str);

// $str="i am brijesh kumar pandey";
// echo ucwords($str);


// echo strftime('%d-%m-%y');
//echo strftime('%d/%m/%y');


// $str="Brijesh$$123456789";
// //echo $str;
// echo base64_encode($str);


// $str="QnJpamVzaCQkMTIzNDU2Nzg5";
// echo base64_decode($str);

// $str="Brijesh%%132433555";
// echo md5($str);

// $str="Brijesh kumar pandey";
// echo $str."<br>";
// echo trim($str,"pandey");

// $str="Brijesh kumar pandey";
// echo $str."<br>";
// echo trim($str,"Brijesh");


// $str="Brijesh kumar pandey";
// echo $str."<br>";
// echo ltrim($str,"Brijesh");

// $str="Brijesh kumar pandey";
// echo $str."<br>";
// echo rtrim($str,"pandey");

// implode : implode is used to convert any array to string 

// $arr=array("Brijesh","rajesh","kumar");
// echo implode(",",$arr);

// explode : explode is used to convert any string into array 
$str="hi my name is Brijesh";
print_r(explode(" ",$str));


?>