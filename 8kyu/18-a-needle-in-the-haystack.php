<?php

function findNeedle($haystack) {
    $count = count($haystack) - 1;

    for($i=0; $i<=$count; $i++) {
        if($haystack[$i] == 'needle') {
            return 'found the needle at position '.$i;
        }
    }
}

findNeedle(['3', '123124234', null, 'needle', 'world', 'hay', 2, '3', true, false]);










// The Simple Answer

// function findNeedle($a) {
//     return "found the needle at position " . array_search("needle", $a);
//   }