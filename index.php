<?php

$search_array = array('first'=>1,'second'=>4);

if(array_key_exists('first',$search_array)){
    echo '键名为first的元素在数组中';
}

$search_array = array('first'=>null,'second'=>4);
var_dump(isset($search_array['first']));
var_dump(array_key_exists('first',$search_array));