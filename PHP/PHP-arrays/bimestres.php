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
    'Ana' => 9,
    'Roberto' => 7,
];

$alunos_falta = array_diff_key($notasBimestre1, $notasBimestre2);

$nomeAlunos = array_keys($alunos_falta);
$notaAlunos = array_values($alunos_falta);

var_dump(array_combine($notaAlunos, $nomeAlunos));
var_dump(array_flip($alunos_falta));