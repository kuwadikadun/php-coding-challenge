<?php

function square_digits($num){
    $result = 0;
    $array  = array_map('intval', str_split($num));
    $count = count($array);
    $now = '';

    
    for($i = 0; $i < $count; $i ++) {
        $result = ($array[$i] * $array[$i]);
        $now .= $result;
    }
    return intval($now);
}

square_digits(9119);







// The Simple Answer

// function square_digits($num){
//     return implode(array_map(function($n){
//       return $n*$n;
//     },str_split($num)))+0;
//   }