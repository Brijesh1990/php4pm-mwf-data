
<?php 
if(isset($_POST["sub"]))
{
    $unm=$_POST["uname"];
    echo "<h1 align='center'>My name is :".$unm."<h1>";
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
        <form method="post">
            Enter Name :<input type="text" name="uname" placeholder="Enter your Name *" required >
            <br><br>
            <input type="submit" name="sub" value="Check">
        </form>
        
    </center>
    
</body>
</html>