<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valor) {
    if ($valor > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
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

$contasCorrentes['acc1'] = sacar($contasCorrentes['acc1'], 500);
$contasCorrentes['acc2'] = sacar($contasCorrentes['acc2'], 500);

foreach ($contasCorrentes as $acc => $conta) {
    exibeMensagem($conta['titular'] . ' ' . $conta['saldo']);
}

?>