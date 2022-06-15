<?php

$notas = [10, 8, 9, 7, 6];

arsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo "É array" . PHP_EOL;
}

// var_dump(array_is_list($notas));