<?php
    require_once('class.php');
    $user = new User();
    if(isset($_POST["submit"])){
        $user-> save_user($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP FORM VALIDATION</title>
</head>
<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="text" name="name" placeholder="Type your name"><br><br>
        <input type="password" name="pass" placeholder="Type your email"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
</body>
</html>