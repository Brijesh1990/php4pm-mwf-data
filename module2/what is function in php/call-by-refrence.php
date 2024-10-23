<?php 
function Name(&$fname) // &$fname is an reference variables 
{
    echo "My firstName is :Brijesh"."<br>";
}
$lname="Pandey";
Name($fname);
echo "My Lastname is :".$lname;


?>