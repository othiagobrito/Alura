<?php

require_once 'src/Conta.php';

$conta1 = new Conta;
$conta1->setNomeTitular("Thiago Brito");
$conta1->setCpf("123.456.789-01");
$conta1->depositar(1500);

echo $conta1->getNome() . PHP_EOL;
echo $conta1->getCpf() . PHP_EOL;
echo $conta1->extrato() . PHP_EOL;
