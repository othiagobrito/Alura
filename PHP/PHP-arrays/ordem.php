<?php

$notas = [
    'Vinícius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

var_dump($notas);

echo "Ana fez a prova:" . PHP_EOL;
var_dump(isset($notas['Ana']));

echo "Alguém tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas));
