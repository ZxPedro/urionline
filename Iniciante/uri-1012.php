<?php
$a = number_format((float)fgets(STDIN), 1,".", "");
$b = number_format((float)fgets(STDIN), 1,".", "");
$c = number_format((float)fgets(STDIN), 1,".", "");
$pi = 3.14159;

$areaTriangulo = ($a * $c) / 2;
$areaCirculo = $pi * $c * $c;
$areaTrapezio = (($a + $b) *$c)/2;
$areaQuadrado = $b * $b;
$areaRetangulo = $a * $b;

echo "TRIANGULO: ".number_format($areaTriangulo, 3, ".", ""). PHP_EOL;
echo "CIRCULO: ".number_format($areaCirculo, 3, ".", ""). PHP_EOL;
echo "TRAPEZIO: ".number_format($areaTrapezio, 3, ".", ""). PHP_EOL;
echo "QUADRADO: ".number_format($areaQuadrado, 3, ".", ""). PHP_EOL;
echo "RETANGULO: ".number_format($areaRetangulo, 3, ".", ""). PHP_EOL;