<?php


function remove_char($s) {
    $count = strlen($s) - 1;
    $result = '';
    for($i=0; $i <= $count; $i++) {
        if($i > 0 && $i < $count) {
            $result .= $s[$i];
        }
    }
    return $result;
}

remove_char("eloquent");








// The SImple Answer
// function remove_char(string $s): string {
//     return substr($s,1,-1);
//   }