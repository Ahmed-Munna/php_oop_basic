<?php

        class user{

            public function __construct(){
                $host = 'localhost';
                $user = 'root';
                $password = '';
                $databseName = 'oop';
                $this -> link = mysqli_connect($host,$user,$password,$databseName);
            }

            public function send_data($data){
                $name = $data["name"];
                $password = $data["pass"];
                $query = "INSERT INTO `exForm`(`name`,`pass`) VALUE('$name',$password)";
                mysqli_query($this-> link , $query);
            }
        }

?>