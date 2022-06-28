<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        'Thiago',
        new Cpf('123.456.789-01'),
        new Endereco("São Paulo", "Jardim das quanta", "Dr. Jurubeba", "156"),
    ),
    1
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->getExtrato();
