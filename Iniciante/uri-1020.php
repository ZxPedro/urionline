<?php
$valor = (int)fgets(STDIN);

$anos = $valor / 365;
$valor %= 365;

$meses = $valor / 30;

$dias = $valor % 30;

echo (int)$anos." ano(s)". PHP_EOL;
echo (int)$meses." mes(es)". PHP_EOL;
echo (int)$dias." dia(s)". PHP_EOL;
