<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
    $a_temp = fgets($handle);
    $a[] = explode(" ",$a_temp);
    array_walk($a[$a_i],'intval');
}

function d1($arr) {
    $i = 0;
    $j = 0;
    $sum = 0;

    while ($i < count($arr)) {
        $sum += $arr[$i++][$j++];
    }

    return $sum;
}

function d2($arr) {
    $i = 0;
    $j = count($arr) - 1;
    $sum = 0;

    while($i < count($arr)) {
        $sum += $arr[$i++][$j--];
    }

    return $sum;
}

function diagonalDiff($arr) {
    return abs(d1($arr) - d2($arr));
}

echo diagonalDiff($a);
