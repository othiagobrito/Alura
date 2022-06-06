<?php

$contasCorrentes = [
    'acc1' => [
        'titular' => 'Thiago',
        'saldo' => 5000
    ],
    'acc2' => [
        'titular' => 'Pedro',
        'saldo' => 2000
    ],
    'acc3' => [
        'titular' => 'João',
        'saldo' => 300
    ]
];

$contasCorrentes['acc4'] = [
    'titular' => 'Mário',
    'saldo' => 30000
];

foreach ($contasCorrentes as $acc => $conta) {
    echo $conta['titular'] . PHP_EOL;
}

?>