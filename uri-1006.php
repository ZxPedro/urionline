<?php
$A = number_format((float)fgets(STDIN), 1, '.', "");
$B = number_format((float)fgets(STDIN), 1, '.', "");
$C = number_format((float)fgets(STDIN), 1, '.', "");

$MEDIA = (($A * 2) + ($B * 3) + ($C * 5)) / 10;
echo "MEDIA = " . number_format($MEDIA, 1, ",", "") . PHP_EOL;
?>