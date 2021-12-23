<?php
    ob_start();
    class user{
        public function __construct(){
            $host ="localhost";
            $user ="root";
            $password ="";
            $database ="oop";
           $this->link = mysqli_connect($host,$user,$password,$database);
        }
        public function send($data){
            $name = $data["name"];
            $pass = $data["pass"];
            $query = "INSERT INTO `crud` (`name`,`pass`) VALUE('$name',$pass)";
            mysqli_query($this->link,$query);
        }
        public function all_user(){
           return mysqli_query($this->link,"SELECT * FROM `crud`");
        }
        public function delete_user($id){
           $query = mysqli_query($this->link,"DELETE FROM `crud` WHERE `id`=$id");
           header('location:index.php');
        }
        public function edit_user($id){
            return mysqli_query($this->link,"SELECT * FROM `crud` WHERE `id`=$id");
         }
         public function update_user($data){
                // $id = $id["id"];
                // $name = $data["name"];
                // $pass = $data["pass"];
            //     mysqli_query($this->link,"UPDATE `crud` SET `name`='$name',`pass`='$pass' WHERE `id`='$id'");
            //  header('location:index.php');
            // echo $id;
            // echo $name;
            // echo $pass;
            print_r($data);
         }
    }
?>