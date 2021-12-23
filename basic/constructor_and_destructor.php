<?php



 class car{

    // public $car_name;

    // function set($privetcar = 'Car'){
    //     $this -> car_name = $privetcar ;
    // }

    // function desplay(){
    //     echo $this -> car_name;
    // }

    public $truc_name;
    public $roll;

    function __construct(string $tname = 'None', int $roll = 00){
        $this -> truc_name = $tname;
        $this -> roll = $roll;
    }

    function dis()
    {
        echo $this -> truc_name . '<br/>';
        echo $this -> roll . '<br/>';
    }

    function __destruct(){
        echo '<br/>All work is done <br/>';
    }

 }

//  $object = new car ;

//   $object -> set('Tesla <br/>');

//   $object -> desplay();

  $object = new car('Volvo Truc',12);

  $object -> dis();
  echo 'Hello world';
  echo 'Hello world';

  $object = new car();
  $object -> dis();
  echo 'This name';

//   echo $object -> truc_name;
//   echo $object -> roll;































?>