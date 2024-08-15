<?php

function square_sum($numbers){
    $result = 0;
    $count = count($numbers);

    for($i = 0; $i < $count; $i ++) {
        $result = $result + ($numbers[$i] * $numbers[$i]);
    }
    return $result;
}

square_sum([1,2]);









// The Simple Answer

// function square_sum($numbers) : int {

//     return array_sum(array_map(function($value){return $value * $value;}, $numbers));
    
//   }