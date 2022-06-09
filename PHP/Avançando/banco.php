<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

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
    exibeMensagem("Você não pode sacar esse valor");
} else {
    $contasCorrentes['acc3']['saldo'] -= 500;
}

foreach ($contasCorrentes as $acc => $conta) {
    exibeMensagem($conta['titular'] . ' ' . $conta['saldo']);
}

?>