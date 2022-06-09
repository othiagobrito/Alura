<?php

function exibeMensagem(string $mensagem) {
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor): array {
    if ($valor > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

function depositar(array $conta, float $valor): array {
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
}

function titularUpper(array &$conta) {
     $conta['titular'] = mb_strtoupper($conta['titular']);
}

?>