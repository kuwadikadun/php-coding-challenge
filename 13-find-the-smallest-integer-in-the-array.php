<?php

function smallestInteger ($arr) {
    $result = $arr[0];
    $count = count($arr) - 1;
    for($i = 1; $i <= $count; $i++) {
        if($arr[$i] < $result) {
            $result = $arr[$i];
        }
    }
    return $result;
}


smallestInteger([3,5,10,1,4,55]);









// The Simple Answer

// function smallestInteger ($arr) {
//     return min($arr);
// }