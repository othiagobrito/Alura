<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;

$thiago = new Titular("Thiago Brito", new Cpf("123.456.789-01"), new Endereco("São Paulo", "Jardim das quanta", "Dr. Jurubeba", "156"));
$conta1 = new Conta($thiago);
$conta1->depositar(1500);

echo $conta1->getNome() . PHP_EOL;
echo $conta1->getCpf() . PHP_EOL;
echo $conta1->getExtrato() . PHP_EOL;
echo $conta1->getExtrato() . PHP_EOL;

echo Conta::getNumeroDeContas() . PHP_EOL;

unset($conta1);
echo Conta::getNumeroDeContas() . PHP_EOL;