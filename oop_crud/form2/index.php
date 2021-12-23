<?php
    require_once('class.php');
    $database = new user();
    if(isset($_POST["submit"])){
        $database->send($_POST);
    }
    $all_user = $database->all_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="text" name="name"><br><br>
        <input type="password" name="pass"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <br><br><br><br><br>
    <table border>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>password</td>
            <td>Action</td>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($all_user)){
                $id         = $row["id"];
                $name       = $row["name"];
                $password   = $row["pass"];
       ?>
        <tr>
            <td><?= $id?></td>
            <td><?= $name?></td>
            <td><?= $password?></td>
            <td>
                <a href="index.php?edit=<?= $id?>">Edit</a>
                <a href="index.php?delete=<?= $id?>">Delete</a>
            </td>
        </tr>
        <?php }?>
        <?php
                    // Delete start
                    if(isset($_GET["delete"])){
                        if(!empty($id)){
                            $database->delete_user($_GET["delete"]);
                           if($database){
                            echo 'Delete sucessfull';
                           }else{
                               echo 'Delete failed!';
                           }
                        }
                    }
                // Delete end
                // edit start

                if(isset($_GET["edit"])){
                    if(!empty($id)){
                       $data = $database->edit_user($_GET["edit"]);
                       $edinfo =  mysqli_fetch_assoc($data);
                    }
        ?>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <input type="number" value="<?= $edinfo["id"] ?>">
                <input type="text" name="name" value="<?= $edinfo["name"] ?>"><br><br>
                <input type="text" name="pass" value="<?= $edinfo["pass"] ?>"><br><br>
                <input type="submit" value="submit" name="set_edit">
            </form>
        <?php }?>
        <?php
            print_r($_POST);
            if(isset($_POST["set_edit"])){
              $database->update_user($_POST);
            }
        ?>
    </table>
</body>
</html>