<?php 
 class A 
 {
    public function display()
    {
        if(isset($_POST["ad"]))
        {
            $n1=$_POST["n1"];
            $n2=$_POST["n2"];
            $n3=$n1+$n2;
            echo "<h3 align='center'>The additions of numbers is : $n3</h3>";
        }
    }
 }

 $obj=new A;
 $obj->display();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>
  <div class="container mt-5 mx-auto w-75 shadow p-5">
    <h2 class="text-center">Addditions of numbers</h2>
    <form method="post">
        <div class="form-group mt-4">
            Enter N1 Numbers : <input type="text" name="n1" placeholder="Enter N1 Numbers" class="form-control" />
        </div>

        <div class="form-group mt-4">
            Enter N2 Numbers : <input type="text" name="n2" placeholder="Enter N2 Numbers" class="form-control" />
        </div>
        <div class="form-group mt-4">
           <input type="submit" name="ad" value="Check"  class="btn btn-lg btn-dark text-white" />
        </div>
    </form> 
</div>    
</body>
</html>
