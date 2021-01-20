<?php
$segundos= (int)fgets(STDIN);

$horas = floor($segundos/ 3600);
$minutos = floor(($segundos - ($horas * 3600)) /60 );
$segundos = floor($segundos % 60);
echo $horas.":".$minutos.":".$segundos. PHP_EOL;
