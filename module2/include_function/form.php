<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>W.A.P to print odd even numbers</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
    /*include("odd_even.php");
    include("odd_even.php"); */
    //include_once("odd_evenn.php");
    //include_once("odd_even.php");
    // Note : include is generated warning errors but rest of script of code executed continue
    // require("odd_even.php");
    // require("odd_even.php");
    // require_once("odd_even.php");
    // require_once("odd_even.php");
    require_once("odd_even.php");
    // note:include is generated fatal errors and rest of script of code is stopped to executed continue
    ?>
    <center>
        <h3>Odd even number check</h3>
        <hr style="width: 20%;"> 
        <form method="post" style="background-color: lightgray; width: 40%; padding: 20px;">
            Enter Number : <input type="text" name="number" placeholder="Nuber *" required />
            <br><br>
            <input type="submit" name="sub" value="submit">
        </form>
    </center>
    
</body>
</html>