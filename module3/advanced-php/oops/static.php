<?php 
// static : when we create any member function as static then we can access our member function without creating object via :: scope resulations operator
class Employee
{
  public static function display()
  {
    echo "Hi brijesh";
  }
}

Employee::display();




?>