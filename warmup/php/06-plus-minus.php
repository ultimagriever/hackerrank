<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$n = count($arr);

$positives = array_filter($arr, function($val) {
    return $val > 0;
});

$negatives = array_filter($arr, function($val) {
    return $val < 0;
});

$zeroes = array_diff($arr, $positives + $negatives);

print count($positives) / $n . PHP_EOL;
print count($negatives) / $n . PHP_EOL;
print count($zeroes) / $n;
