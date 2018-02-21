<?php

/*$contact1[0] = 1;
$contact1[1] = '高某';
$contact1[2] = 'A公司';
$contact1[3] = '北京市';
$contact1[4] = '(010)98765432';
$contact1[5] = 'gao@brophp.com';
$contact2['ID'] = 2;
$contact2['姓名'] = '风某';
$contact2['公司'] = 'B公司';
$contact2['地址'] = '上海市';
$contact2['电话'] = '(021)12345678';
$contact2['EMAIL'] = 'feng@lampbrother.com';*/

/*echo "第一个联系人的信息如下:<br/>";
echo "编号:".$contact1[0]."<br/>";
echo "姓名:".$contact1[1]."<br/>";
echo "公司:".$contact1[2]."<br/>";
echo "地址:".$contact1[3]."<br/>";
echo "电话:".$contact1[4]."<br/>";
echo "EMAIL:".$contact1[5]."<br/><br/>";

echo "第二个联系人的信息如下:<br/>";
echo "编号:".$contact2['ID']."<br/>";
echo "姓名:".$contact2['姓名']."<br/>";
echo "公司:".$contact2['公司']."<br/>";
echo "地址:".$contact2['地址']."<br/>";
echo "电话:".$contact2['电话']."<br/>";
echo "EMAIL:".$contact2['EMAIL']."<br/>";*/

/*print_r($contact1);
var_dump($contact1);
print_r($contact2);
var_dump($contact2);*/

/*$contact1[0] = 1;
$contact1['ID'] = 1;
$contact1[1] = '高某';
$contact1['姓名'] = '高某';
$contact1[2] = 'A公司';
$contact1['公司'] = 'A公司';
print_r($contact1);*/

/*$contact1[] = 1;
$contact1[] = '高某';
$contact1[] = 'A公司';
$contact1[] = '北京市';
$contact1[] = '(010)98765432';
$contact1[] = 'gao@brophp.com';
print_r($contact1);*/

$contact[] = 1;
$contact[14] = '高某';
$contact[] = 'A公司';
$contact[] = '北京市';
$contact[14] = '(010)98765432';
$contact[] = 'gao@brophp.com';
print_r($contact);