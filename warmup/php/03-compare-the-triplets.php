<?php

error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$a0,$a1,$a2);
fscanf($handle,"%d %d %d",$b0,$b1,$b2);

function compare($a, $b) {
    return $a - $b;
}

$results = (object) [
    'alice' => 0,
    'bob' => 0
];

if (compare($a0, $b0) > 0) {
    $result->alice++;
} else if (compare($a0, $b0) < 0) {
    $result->bob++;
}

if (compare($a1, $b1) > 0) {
    $result->alice++;
} else if (compare($a1, $b1) < 0) {
    $result->bob++;
}

if (compare($a2, $b2) > 0) {
    $result->alice++;
} else if (compare($a2, $b2) < 0) {
    $result->bob++;
}

echo sprintf("%d %d", $result->alice, $result->bob);
