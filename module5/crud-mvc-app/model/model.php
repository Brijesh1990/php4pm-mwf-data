<?php 
class Model 
{
    public $conn="";
    public function __construct()
    {
       
        try 
        {
          $this->conn=new mysqli("localhost","root","","mvccrudapp");
          echo "Connection successfully Created";
        }
        catch(Exception $e)
        {
          echo "Something went wrong while connection with database";
        }
    }
}

?>