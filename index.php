<?php

$contact = array(
    array(1,"高某","A公司","北京市","(010)98765432","gao@brophp.com"),
    array(2,"洛某","B公司","上海市","(021)12345678","lm@apache.com"),
    array(3,"峰某","C公司","天津市","(022)24680246","fm@mysql.com"),
    array(4,"书某","D公司","重庆市","(023)13579135","sm@php.com"),
);

echo "<table border='1' width='600' align='center'>";
echo "<caption><h1>联系人列表</h1></caption>";
echo "<tr bgcolor='#ddd'>";
echo "<th>编号</th><th>姓名</th><th>公司</th><th>地址</th><th>电话</th><th>邮箱</th>";
echo "</tr>";
for ($i = 0;$i<count($contact);$i++){
    echo "<tr>";
    for ($j = 0;$j<count($contact[$i]);$j++){
        echo "<td>".$contact[$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";