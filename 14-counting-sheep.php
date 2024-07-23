<?php

function countSheep($arr) {
    $result = 0;
    $count = count($arr) - 1;
    for($i = 0; $i <= $count; $i ++) {
        if($arr[$i] == true) {
            $result+=1;
        }
    }
    return $result;
}

  countSheep([true, true, true, false, true, true, true, true, true, false, true, false, true, false, false, true, true, true, true, true, false, false, true, true]);





//   The Simple Answer

// function countSheep(array $arr): int {
//     return array_sum($arr);
//   }











// The Unique Answer

// function countSheep($arr) {
  
//     $count = 0;
    
//     foreach ($arr as $value){
//       if ($value === true) {
//         $count++;
//       }
//     }
    
//     return $count;
//   }