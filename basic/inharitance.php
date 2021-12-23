<?php

    class car{
        function carName(){
            echo 'This is a Tesla v3 car <br/>';
        }
    }

    class carNAm extends car{

        public $Car_name;

        function thisCar(){
          echo  $this -> Car_name = 'This is a nice car <br/>';
        }

    }

    class Truc extends carNAm{

    }

    $carObj = new carNAm;

    $carObj -> carName();

    $carObj = new Truc;

    $carObj -> thisCar();



















































?>