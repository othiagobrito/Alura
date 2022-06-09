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


if (500 > $contasCorrentes['acc3']['saldo']) {
    echo "Você não pode sacar esse valor" . PHP_EOL;
} else {
    $contasCorrentes['acc3']['saldo'] -= 500;
}

foreach ($contasCorrentes as $acc => $conta) {
    echo $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}

?>