<?php
    class user{

        public function __construct(){
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $dataBaseName = 'oop';
            $this->link=mysqli_connect($host,$user,$password,$dataBaseName);
        }
        public function submit($data){
            $name = $data["name"];
            $password = $data["pass"];
            $query = "INSERT INTO `onform`(`name`, `pass`) VALUES ('$name',$password)";
            mysqli_query($this->link,$query);
        }
    }
?>