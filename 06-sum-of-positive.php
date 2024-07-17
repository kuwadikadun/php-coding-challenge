<?php

function positive_sum($arr) {
    $result = 0;
    for($i=0; $i < count($arr); $i++) {
        $arr[$i] > 0 ? $result+=$arr[$i] : '';
    }
    return $result;
}


positive_sum([1,2,3,4,5]);



// The Simple Answer

// function positive_sum($a) {
//     return array_sum(array_filter($a, function ($n) {return $n > 0;}));
//   }