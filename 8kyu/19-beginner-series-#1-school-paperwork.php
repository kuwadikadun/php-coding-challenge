<?php

function paperwork(int $n, int $m): int
{
  return $n < 0 || $m < 0 ? 0 : $n * $m;
}

paperwork(5,5);










// The Unique Answer

// function paperwork(int $n, int $m): int
// {
//   return ($n<0 or $m<0) ? 0 : $n*$m;
// }