<?php
$km = (int)fgets(STDIN);
define("VX", 60);
define("VY", 90);

$tempo = ($km / (VY - VX)) * 60;

echo $tempo. " minutos". PHP_EOL;