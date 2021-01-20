<?php
$R = (float)fgets(STDIN);
$pi = 3.14159;

$volume = (4 / 3.0) * $pi * ($R * $R * $R);

echo "VOLUME = ". number_format($volume, 3, ".", ""). PHP_EOL;