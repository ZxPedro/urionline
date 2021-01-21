<?php
$a = (int)fgets(STDIN);
$b = (int)fgets(STDIN);
$c = (int)fgets(STDIN);

$maiorAB = ($a+$b+abs($a - $b))/2;
$maiorABC = ($maiorAB+$c+abs($maiorAB - $c))/2;

echo $maiorABC." eh o maior". PHP_EOL;

