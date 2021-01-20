<?php
$a = (int)fgets(STDIN);
$b = (int)fgets(STDIN);
$c = (int)fgets(STDIN);

$maiorAB = ($a+$b+abs($a - $b))/2;

if ($maiorAB > $c){
    echo $maiorAB." eh o maior". PHP_EOL;
} else{
    echo $c." eh o maior". PHP_EOL;
}