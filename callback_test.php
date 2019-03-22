<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*$factorial = */function factorial($num){
    $result = 1;
    if($num > 1){
        return factorial($num - 1) * $num;
    }else{
        return $result;
    }
};

function arr_factorial($arr){
    return array_map($factorial, $arr);
}


$res= null;
$res = arr_factorial(range(3, 7));
echo factorial(5);








