<?php

/**
 * 递归函数
 * @param $n
 */
function test($n){
    echo $n."&nbsp;&nbsp;";
    if($n>0){
        test($n-1);
    }else{
        echo "<-->";
    }
    echo $n."&nbsp;&nbsp;";
}
test(10);