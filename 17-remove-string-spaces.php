<?php

function no_space(string $s) {
    return str_replace(' ', '', $s);
  }

  no_space('8 j 8   mBliB8g  imjB8B8  jl  B');






//   The Hard Answer

// function no_space(string $s): string {
//     $result = '';
//     for($i = 0; $i < strlen($s); $i++)
//     {
//       if($s[$i] !== ' ') {
//         $result .= $s[$i];
//         continue;
//       }
//     }
//     return $result;
//   }