<?php
    require_once('form1_class.php');
    $user= new user();
    if(isset($_POST["submit"])){
        $user->submit($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop project</title>
</head>
<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="text" name="name"><br><br>
        <input type="password" name="pass"><br><br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>