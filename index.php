<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/18
 * Time: 22:29
 */

table();

/**
 * 用函数封装九九乘法表并调用
 */
function table(){
    echo "<table align='center' border='1' width='600'>";
    echo "<caption><h1>通过函数调用表格</h1></caption>";
    for ($out = 0;$out <10;$out++){
        $bgcolor = $out % 2 == 0 ? "#fff" : "#ddd";
        echo "<tr bgcolor='$bgcolor'>";
        for($in = 0;$in < 10;$in++){
            echo "<td>".($out*10+$in)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

table();