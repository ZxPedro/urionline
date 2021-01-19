<?php
$numeroFunc = (int)fgets(STDIN);
$horasTrab = (int)fgets(STDIN);
$valorHora = number_format((float)fgets(STDIN), 2, '.', "");

$salario = $horasTrab * $valorHora;

echo "NUMBER = ". $numeroFunc. PHP_EOL;
echo "SALARY = U$ ". number_format($salario, 2, '.', ''). PHP_EOL;

