<?php

function demo($one){
    $two = 100;
    return $one + $two;
}

$sum = demo(200);

echo "在函数外部使用函数中的运算结果:$sum<br/>";