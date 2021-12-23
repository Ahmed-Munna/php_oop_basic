<?php

    // class Something{

    //    function sum($x,$y){
    //         $z = $x + $y;
    //         return $z;
    //    }

    //    function cal($a,$b){
    //        $c = $a - $b;
    //        return $c;
    //    }

    // }

    // $obj = new Something();

    // echo $obj -> sum(25,10).'<br/>';
    // echo $obj -> cal(100,75).'<br/>';

    // class Some{

    //     function thing($a,$b){
    //         $c = $a + $b;
    //         return $c;
    //     }
    // }

    // $obj = new Some();

    // echo $obj -> thing(10,2);



        class color{

            public $red ;

            function rgb(){

               return $this->red = "Bangladesh <br/>" ;

            }

            public $Country ;

            public $amarica;

            function Cname($country){
                return 'Your Country is: ' . $this -> Country = $country .'<br/>' ;
            }


            public $a,$b,$c = 'Bangladesh';

            function sum($a = 'Ahmed' , $b = 42){
                
                return 'Name: ' . $this -> a = $a . '<br/>'.'Roll:  ' . $this -> b = $b . '<br/>'.'Country: ' . $this -> c . '<br/>';

            }

            function add(){

                return 'Name' . $this -> a . '<br/>';
                return 'Roll' . $this -> b . '<br/>';
                return 'Country' . $this -> c . '<br/>';

            }


        }

        $obj = new color() ;

        echo $obj -> rgb() ;

        echo $obj -> Cname('Palastain');

        echo $obj -> Country = 'Burlin <br/>' ;

        echo $obj -> amarica = 'Brazil'.' is country of amarica state. <br/>';

        echo $obj -> sum('Munna',32,'Barishal');

        echo $obj -> add();        
















?>