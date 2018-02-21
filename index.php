<?php

$one = 200;
$two = 100;

/**
 * 不能在函数中直接使用全局变量
 */
function demo(){
    $GLOBALS['two'] = $GLOBALS['one'] + $GLOBALS['two']; //使用超全局变量加载全局变量在函数中使用
}
demo();
echo $two;