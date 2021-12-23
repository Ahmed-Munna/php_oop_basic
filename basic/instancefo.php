<?php



    class A{
        public $name;
    }
    class B{
        public $name;
    }

    $obj = new A;

    if($obj instanceof A){
        echo 'YES it is instanceof oparator <br/>';
    }else{
        echo 'NO is is not instanceof oparator <br/>';
    }

    $object = new B;

    if($object instanceof B){
        echo 'YES it is instanceof oparator <br/>';
    }else{
        echo 'NO is is not instanceof oparator <br/>';
    }

    if(!$object instanceof A){
        echo 'NO is is not instanceof oparator <br/>';
    }else{
        echo 'YES it is instanceof oparator <br/>';
    }

















?>