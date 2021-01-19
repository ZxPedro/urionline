<?php
$A = number_format((float)fgets(STDIN), 1, '.', "");
$B = number_format((float)fgets(STDIN), 1, '.', "");

$MEDIA= (($A * 3.5) + ($B  * 7.5)) / 11;
echo "MEDIA = " . number_format($MEDIA, 5, ",", ""). PHP_EOL;
?>