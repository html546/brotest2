<?php

$one = 200;
$two = 100;

/**
 * 不能在函数中直接使用全局变量
 */
function demo(){
    global $one,$two; //使用global关键字就可以加载全局变量在函数中使用
    echo "运行结果:".($one+$two)."<br/>";
}
demo();