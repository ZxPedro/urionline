<?php
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
$d = fgets(STDIN);

$dif = (intval($a) * intval($b) - intval($c) * intval($d));

echo "DIFERENCA = ".$dif. PHP_EOL;