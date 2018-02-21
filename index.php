<?php
/**
 * 匿名函数
 * @param $params
 */
$fun = function($params){
  echo $params;
};

$fun('www.ydma.com');


/***
 * 调用回调函数将匿名函数作为参数传入
 * @param $callback
 */
function callback($callback){
    $callback();
};

callback(function(){
   echo "闭包函数测试";
});