<?php

$array = array(1,"php",1,"mysql","php");

$newarray = array_count_values($array);

print_r($newarray);
