<?php

class Foo{
    public $a;
    public $b;
    public $reference;
    
    public function __construct($a = '0', $b = '0', $reference = 'none'){
        $this->a = $a;
        $this->b = $b;
        $this->reference = $reference;
    }
    
    public function __clone(){      
        $this->reference = 'none';
    }
}

class testB{
    public static function printFoo(Foo $obj){
        echo $obj->a;
        echo '<br>';
        echo $obj->b;
        echo '<br>';
        echo $obj->reference;
        echo '<br>';
    }
}
