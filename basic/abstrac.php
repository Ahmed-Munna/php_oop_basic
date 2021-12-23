<?php
    abstract class country{
        function dis(){
            echo 'I love Bangladesh <br/>';
        }
    }
    class urop extends country{

    }
    $obj = new urop;
    $obj -> dis();
    abstract class asia{
        public $connmae;
       abstract function asiaCountry(string $connmae);
    }
    class childasia extends asia{
        function asiaCountry(string $connmae){
            echo $this->connmae = $connmae;
        }
    }
    $asiaObj = new childasia;
    $asiaObj -> asiaCountry('Bangladesh');
?>