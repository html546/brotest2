<?php

/**
 * 变量函数
 * @param $a
 * @param $b
 * @return mixed
 */
function one($a,$b){
    return $a+$b;
}
function two($a,$b){
    return $a * $b + $b * $a;
}
function three($a,$b){
    return $a*$a*$a + $b*$b*$b;
}
//$result = "one";
//$result = "two";
$result = "three";
echo "运算结果是:".$result(2,3);