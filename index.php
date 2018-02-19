<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/18
 * Time: 22:29
 */


/**
 * 自定义函数table()时，声明三个参数，参数之间使用逗号分隔
 * @param $tableName
 * 需要一个字符串类型的表名
 * @param $rows
 * 需要一个整型数值设置表格的行数
 * @param $cols
 * 需要另一个整型数值设置表格的列数
 */
function table($tableName,$rows,$cols){
    echo "<table align='center' border='1' width='600'>";
    echo "<caption><h1>$tableName</h1></caption>";
    for ($out = 0;$out <$rows;$out++){
        $bgcolor = $out % 2 == 0 ? "#fff" : "#ddd";
        echo "<tr bgcolor='$bgcolor'>";
        for($in = 0;$in < $cols;$in++){
            echo "<td>".($out*10+$in)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

table('第一个3行4列的表',3,4);
table('第二个2行10列的表',2,10);
table('第三个5行5列的表',5,5);