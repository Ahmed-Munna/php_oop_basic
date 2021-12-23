<?php

    class user{

        public $name;
        public $adders;
        
        function __construct(string $name , string $adders){

            $this->name       = $name.'<br/>';
            $this->adders     = $adders.'<br/><br/>';

        }

        function display(){
            echo $this -> name;
            echo $this -> adders;
        }

    }

    class student extends user{

        public $roll;

        function __construct(string $name, string $adders, int $roll){
            parent::__construct($name,$adders);
            $this-> roll = $roll. '<br/><br/>';
        }

        function display(){

            echo $this-> name;
            echo $this-> adders;
            echo $this-> roll;

        }

    }


    $userObj = new user('Ahmed','Barishal');

    $userObj -> display();

    $stdObj = new student('Munna','Bangladesh',100);

    $stdObj -> display();






?>