<?php

$alunos2021 = [
    'Vinícius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);

var_dump($alunos2022);