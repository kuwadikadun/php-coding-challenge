<?php

function even_or_odd(int $n): string {
  return $n % 2 === 0 ? "Even" : "Odd";
}

even_or_odd(4);