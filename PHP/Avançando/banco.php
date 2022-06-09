<?php

require_once 'funcoes.php';

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
$contasCorrentes['acc3'] = depositar($contasCorrentes['acc3'], 500);

titularUpper($contasCorrentes['acc1']);

foreach ($contasCorrentes as $acc => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$acc | Titular: $titular | Saldo: $saldo}");
}

?>