<?php

function summation($n) {
    $result = 0;
    for($i = 1 ; $i <= $n ; $i++) {
        $result += $i;
    }
    return $result;
}

summation(3);








// The Simple Answer

// function summation($n) {
//     return array_sum(range(1, $n));
//   }







// Unique Answer

// function summation($n) {
//     return $n * ($n + 1) / 2;
//   }