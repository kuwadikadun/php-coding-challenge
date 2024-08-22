<?php


function basicOp($op, $val1, $val2)
{
    switch($op) {
        case '+':
            return $val1 + $val2;
        case '-':
            return $val1 - $val2;
        case '/':
            return $val1 / $val2;
        case '*':
            return $val1 * $val2;
    }
}

basicOp('+', 4, 7);









// THe Simple Answer
// function basicOp($op, $val1, $val2)
// {
//   // this makes me feel dirty, but it gets the job done
//   return eval("return {$val1}{$op}{$val2};");
// }