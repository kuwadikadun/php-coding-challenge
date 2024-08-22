<?php


function repeatStr($n, $str)
{
  $result ='';
  for($i = 0 ; $i < $n ; $i++) {
    $result .= $str;
  }
  return $result;
}

repeatStr(3, 'hello');




// The Simple Answer
// function repeatStr($n, $str)
// {
//   return str_repeat($str, $n);
// }