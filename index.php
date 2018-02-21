<?php

$contact1 = array(
  array(1,"高某","A公司","北京市","(010)98765432","gao@brophp.com"),
  array(2,"洛某","B公司","上海市","(021)12345678","lm@apache.com"),
  array(3,"峰某","C公司","天津市","(022)24680246","fm@mysql.com"),
  array(4,"书某","D公司","重庆市","(023)13579135","sm@php.com"),
);

$contact2 = array(
    "北京联系人"=>array(1,"高某","A公司","北京市","(010)98765432","gao@brophp.com"),
    "上海联系人"=>array(2,"洛某","B公司","上海市","(021)12345678","lm@apache.com"),
    "天津联系人"=>array(3,"峰某","C公司","天津市","(022)24680246","fm@mysql.com"),
    "重庆联系人"=>array(4,"书某","D公司","重庆市","(023)13579135","sm@php.com"),
);

echo "第一个联系人的公司:".$contact1[0][2]."<br/>";
echo "上海联系人的EMAIL:".$contact2['上海联系人'][5]."<br/>";