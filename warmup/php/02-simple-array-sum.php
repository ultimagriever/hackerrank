<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

function reduce($acc, $val) {
    return $acc + $val;
}

echo array_reduce($arr, 'reduce');
