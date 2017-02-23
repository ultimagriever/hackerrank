<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$time);

echo date('H:i:s', strtotime($time));
