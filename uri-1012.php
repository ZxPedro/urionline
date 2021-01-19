<?php
$A = number_format((float)fgets(STDIN), 1, ".", "");
$B = number_format((float)fgets(STDIN), 1, ".", "");
$C = number_format((float)fgets(STDIN), 1, ".", "");
$pi = 3.14159;

$areaTriangulo = ($A * $C)/2;
$areaCirculo = $pi * $C * $C;
$areaTrapezio = (($A + $B) * $C)/2;
$areaQuadrado = $B * $B;
$areaRetangulo = $A * $B;

echo "TRIANGULO: ". number_format($areaTriangulo, 3, ".", ""). PHP_EOL;
echo "CIRCULO: ". number_format($areaCirculo, 3, ".", ""). PHP_EOL;
echo "TRAPEZIO: ". number_format($areaTrapezio, 3, ".", ""). PHP_EOL;
echo "QUADRADO: ". number_format($areaQuadrado, 3, ".", ""). PHP_EOL;
echo "RETANGULO: ". number_format($areaRetangulo, 3, ".", ""). PHP_EOL;