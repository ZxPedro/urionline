<?php
$nome = fgets(STDIN);
$salario = number_format((float)fgets(STDIN), 2, '.', "");
$vendas = number_format((float)fgets(STDIN), 2, '.', "");

$total = $salario + ($vendas * 0.15);

echo "SALARY = R$ ". number_format($total, 2, '.', ''). PHP_EOL;