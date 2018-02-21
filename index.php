<?php

/**
 * @param $msg1
 * @param $msg2
 */
function fun($msg1,$msg2){
    echo "\$msg1 = ".$msg1;
    echo '<br/>';
    echo "\$msg2 = ".$msg2;
}

call_user_func_array('fun',array('LAMP','兄弟连'));