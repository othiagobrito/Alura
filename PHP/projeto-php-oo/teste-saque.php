<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        'Thiago',
        new Cpf('123.456.789-01'),
        new Endereco("São Paulo", "Jardim das quanta", "Dr. Jurubeba", "156")
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->getExtrato();
