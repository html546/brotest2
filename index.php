<?php

/**
 * 可变个数的参数
 */
function more_args(){
    $args = func_get_args();
    for ($i = 0;$i<count($args);$i++){
//        echo "第".($i+1)."个参数是".$args[$i]."<br/>";
        echo "第".($i+1)."个参数是".func_get_arg($i)."<br/>";
    }
}
more_args('one','two','three',1,2,3);