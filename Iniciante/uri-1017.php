<?php
$tempoGasto = (int)fgets(STDIN);
$velocidadeMedia = (int)fgets(STDIN);
define ("LITROS_KM", 12);

$quantidadeLitros = ($velocidadeMedia / LITROS_KM) * $tempoGasto;

echo number_format($quantidadeLitros, 3, ".", ""). PHP_EOL;