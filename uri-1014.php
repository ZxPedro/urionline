<?php
$x = (int)fgets(STDIN);
$y = number_format((float)fgets(STDIN), 1, ".", "");

$consumo = $x / $y;

echo number_format($consumo, 3, ".", ""). " km/l". PHP_EOL;

