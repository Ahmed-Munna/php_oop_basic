<?php



    class user{
        
        public static $mas = 'Hello World <br/>';

        function student(string $mas){
            echo self::$mas = $mas;
        }

    }

    echo user::$mas;

    user::$mas = 'New Hello world <br/>';

    echo user::$mas;
    $usObj = new user;

    $usObj-> student('Hello Bangladesh');




    class player{

        public static $name ;

        function ban(string $planame){
          echo  self::$name = $planame;
        }


    }


    $playerName = new player;

    $playerName -> ban('<br/> We love Bangladesh <br/>');



    // Static method

    class group{

        public static $Gname;
        public $myname;

        static function groupName(string $gname, string $myname){
            $obj = new group;
          echo  self::$Gname = $gname;
          echo $obj -> myname = $myname;
        }

    }


    group::groupName('Mardanga Jasti','Lawra');










?>