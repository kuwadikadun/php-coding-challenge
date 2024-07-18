<?php

function solution($str) {
    $revstr = '';
    $count = strlen($str);
    for($i = $count - 1; $i >= 0 ; $i--) {
        $revstr .= $str[$i];
    }
    return $revstr;
}


solution('world');







// The Simple Answer
// function solution($str) {
//     return strrev($str);
//   }