<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$conta1 = new Conta(new Titular("Thiago Brito", "123.456.789-01"));
$conta1->depositar(1500);

echo $conta1->getNome() . PHP_EOL;
echo $conta1->getCpf() . PHP_EOL;
echo $conta1->getExtrato() . PHP_EOL;

echo Conta::getNumeroDeContas() . PHP_EOL;

unset($conta1);
echo Conta::getNumeroDeContas() . PHP_EOL;