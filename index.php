<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/18
 * Time: 22:29
 */

/**
 * @param $tableName
 * @param $rows
 * @param $cols
 * @return string
 */
function table($tableName,$rows,$cols){
    $str_table = "";
    $str_table .= "<table align='center' border='1' width='600'>";
    $str_table .= "<caption><h1>$tableName</h1></caption>";
    for ($out = 0;$out <$rows;$out++){
        $bgcolor = $out % 2 == 0 ? "#fff" : "#ddd";
        $str_table .= "<tr bgcolor='$bgcolor'>";
        for($in = 0;$in < $cols;$in++){
            $str_table .= "<td>".($out*10+$in)."</td>";
        }
        $str_table .= "</tr>";
    }
    $str_table .= "</table>";
    return $str_table;
}

$str = table('第一个3行4列的表',3,4);
echo table('第二个2行10列的表',2,10);
echo $str;