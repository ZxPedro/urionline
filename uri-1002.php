<?php
$n = 3.14159;
$raio = (float)fgets(STDIN);
$area = $n * ($raio * $raio);


echo "A=". number_format($area, 4, ".", ""). PHP_EOL;