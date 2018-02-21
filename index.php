<?php

/**
 * 引用参数的函数
 * @param $arg
 */
function test(&$arg){
    $arg = 200;
}

$var = 100;
test($var);
echo $var;