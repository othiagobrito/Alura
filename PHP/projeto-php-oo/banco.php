<?php

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Cpf.php';

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