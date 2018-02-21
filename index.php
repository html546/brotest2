<?php

function callback($callback){
    $callback();
};

$var = '字符串';

callback(function() use (&$var){
   echo "闭包函数传参数测试{$var}";
});