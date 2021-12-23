<?php


 class School{

    public $stdname;

    private $roll;

    function student(string $name = 'Jhon Doe', int $Roll = 00){
       echo 'You name: ' . $this -> stdname = $name . '<br/>';
       echo 'You Roll: ' . $this -> roll = $Roll . '<br/>'; 
        $this -> teacher();
    }

    private $tecName;
    private $tecId;

    private function teacher(){
        echo 'Teacher Name: ' . $this -> tecName = 'Nafiza <br/>' ;
        echo 'Teacher Id: ' . $this -> tecId = 2345 . '<br/>';
    }

    protected $headName ;

    protected $headSubj ;

    protected function head(){
        $this->headName = 'Obaidul kader<br/>';
        $this->headSubj = 'SEO<br/>';
    }

 }


 class board extends School{

    function result(){
        $this -> head();
        echo $this -> headName;
        echo $this -> headSubj;
        
    }
 }

 $schoolObj = new School;

 $schoolObj -> student('Rahman',12);

/*  $schoolObj -> head(); it can't show becose it protected by access modifair . You can access protected modifair by class by class can't access publicly */

 $Ebord = new board;

 $Ebord -> result();

//  perent:: function()



































?>