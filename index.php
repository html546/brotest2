<?php

function filter($fun){
    for ($i = 0;$i<=100;$i++){
        if($fun($i)){
            continue;
        }
        echo $i."<br/>";
    }
}

function one($sum){
    return $sum % 3 === 0;
}

function two($sum){
    return $sum == strrev($sum);
}

filter('one');

echo '-------------------------<br/>';

filter('two');