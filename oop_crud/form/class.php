<?php

    class User{

        public function __construct(){
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $database = 'oop';
            $this -> link = mysqli_connect($host,$user,$pass,$database);
        }

        public function save_user($data){
            $name = $data['name'];
            $pass = $data['pass'];
            $query = "INSERT INTO `form`(`name`, `pass`) VALUES ('$name',$pass)";
            mysqli_query($this->link,$query);
        }

    }

?>