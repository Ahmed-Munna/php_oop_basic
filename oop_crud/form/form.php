<?php
    require_once('form_class.php');
    $conn = new user();

    if(isset($_POST["submit"])){
        $conn -> send_data($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM width oop</title>
</head>
<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="text" name="name" id=""><br><br>
        <input type="password" name="pass" id=""><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>