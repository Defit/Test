<?php include_once './db_test.php';?>
<?php include_once './classA.php';?>
<?php include_once './cloneTest.php';?>
﻿<!DOCTYPE html>
<html>
 <head>
	<meta charset="UTF-8">
  	<title>Тестируем PHP</title>
 </head>
 <body>
 <?php 
    writeHello("Vladislav");
    //writeUsers("Юзер второй");
    $testA = new TestClass_2();
    $testA->printBye("Vladislav");
    echo '<br> TEST CLONE : <br>';
    
    $a = new Foo('255','54-44-22-44-55','#class reference...');  
    testB::printFoo($a);
    $ca = clone $a;
    testB::printFoo($ca);
 ?>
 </body>
</html>

























