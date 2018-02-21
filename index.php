<?php

$one = 200;
$two = 100;

/**
 * 不能在函数中直接使用全局变量
 */
function demo(){
    echo "运行结果:".($one+$two)."<br/>";
}
demo();