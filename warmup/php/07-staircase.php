<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

function spacefill($str, $len) {
    return str_repeat(" ", $len - strlen($str)) . $str;
}

function staircase(&$arr, $len, $i = 1) {
    array_push($arr, spacefill(str_repeat("#", $i), $len));

    if ($i === $len) {
        return;
    }

    staircase($arr, $len, ++$i);
}

$a = [];
staircase($a, $n);

print implode("\n", $a);
