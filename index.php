<?php

$contact = array(1,14=>"高某","A公司","北京市",14=>"(010)98765432","gao@brophp.com");

$sum = 0;
foreach ($contact as $value){
    echo "在数组\$contact中第".$sum."元素是:".$value."<br/>";
    $sum++;
}