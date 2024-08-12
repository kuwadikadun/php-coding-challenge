<?php

function sum(array $a) {
    $count = count($a);
    $result = 0;
    foreach($a as $y) {
        $result += $y;
    }
    // for($i = 0 ; $i < $count - 1 ; $i++) {
    //     $result = $result + $a[$i];
    // }
    return $result;
}

sum([1, 5.2, 4, 0, -1]);










// The Simple Answer

// function sum(array $a): float {
//     return array_sum($a);
//   }