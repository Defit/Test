<?php
class Fact{
    public function __invoke($num) {
        $result = 1;
        if($num > 1){
            $result = $this($num - 1) * $num;
            return $result;
        }else{
            return $result;
        }
    }
}

function arr_factorial($arr){
    $f = new Fact;
    return array_map($f, $arr);
}




















