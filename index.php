<?php


/**
 * @param $i
 * @param $j
 * @return float|int
 */
function test($i,$j){
    $sum = 0;
    $sum = $i * $j + $j * $i;
    return $sum;
}

echo test(2,5);