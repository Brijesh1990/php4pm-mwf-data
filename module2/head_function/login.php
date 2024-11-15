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
    <?php 
    if(isset($_POST["login"]))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
        if($email=='brijesh@gmail.com' && $password=='admin@123')
        {
          echo "<h3 style='text-align:center; color:green'>You are successfully Logged In</h3>";
          header('location:dashboard.php');
        }
        else 
        {

            echo "<h3 style='text-align:center; color:red'>Your email & Password are incorrect try again</h3>";
            // header('location:login.php');
            header('refresh:3,login.php');
        }
    }


    ?>
    <center>
        <h3>Login Form</h3>
        <hr style="width:10%">
    <form method="post">
    <input type="text" name="email" placeholder="Email *" required />
    <br><br>
    <input type="password" name="password" placeholder="Password *" required />
    <br><br>
    <input type="submit" name="login" value="Login" />
    
    </form>
    </center>
</body>
</html>