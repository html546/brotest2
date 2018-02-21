<?php


/**
 * Class Demo
 */
class Demo{
    static function fun($msg1,$msg2){
        echo "\$msg1 = ".$msg1;
        echo "<br/>";
        echo "\$msg2 = ".$msg2;
    }
}


/**
 * Class Test
 */

class Test{
    function fun($msg1,$msg2){
        echo "\$msg1 = ".$msg1;
        echo "<br/>";
        echo "\$msg2 = ".$msg2;
    }
}

call_user_func_array(array('Demo','fun'),array('LAMP','兄弟连'));

call_user_func_array(array(new Test(),'fun'),array('Brophp','学习型php框架'));