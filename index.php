<?php include_once './db_test.php';?>
<?php include_once './classA.php';?>
<?php include_once './cloneTest.php';?>
<?php include_once './callback_test.php';?>
<?php include_once './word_creatorTest.php';?>
﻿<!DOCTYPE html>
<html>
 <head>
	<meta charset="UTF-8">
  	<title>Микро тесты</title>
 </head>
 <body>
 <?php 
    echo 'TEST MySQLi: <br>';
    $name = NULL;
    writeHello($name ?? "Vladislav");
    //writeUsers("Юзер второй");
    $testA = new TestClass_2();
    $testA->printBye($name);
    
    echo '<br><br> TEST CLONE : <br>';
    $a = new Foo('255','54-44-22-44-55','#class reference...');  
    testB::printFoo($a);
    $ca = clone $a;
    testB::printFoo($ca);
    
    echo '<br><br> TEST CALLBACK : <br>';
    $res =  arr_factorial(range(3, 7));
    echo implode(' ', $res)."<br>";
    
    echo '<br><br> TEST WORD : <br>';
    $doc = new Word;
    $doc->generateWord();
    
 ?>
 </body>
</html>





































