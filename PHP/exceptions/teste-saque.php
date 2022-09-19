<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
// $conta->saca(600);

try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $th) {
    echo 'Você não tem o saldo para realizar este saque.' . PHP_EOL;
    echo $th->getMessage() . PHP_EOL;
}

echo $conta->recuperaSaldo();
