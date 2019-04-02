<?php

interface ITest{
    public function printBye($name);
}


class TestClass_2 implements ITest{

    public $bye_text = 'See you soon!';


    public function __construct() {
        echo 'TestClass_2 was created <br>';
        echo PHP_EOL;
    }
    
    public function printBye($name){
        echo <<<_END
        <br>{$name}
        <br>{$this->bye_text}
_END;
    }
    
    

}

























