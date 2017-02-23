<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$n,$k,$q);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);

for ($i = 0; $i < $k; $i++) {
    array_unshift($a, array_pop($a));
}

for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d",$m);
    print $a[$m] . PHP_EOL;
}
