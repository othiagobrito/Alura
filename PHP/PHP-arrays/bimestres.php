<?php

$notasBimestre1 = [
    'Vinícius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
