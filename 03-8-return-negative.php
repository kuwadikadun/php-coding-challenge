<?php

function makeNegative($num) {
    $num > 0 ? $num *= -1 : '';
    return $num;
}

makeNegative(3);



// The Simple Answer

// function makeNegative($num){
//     return -abs($num);
// }