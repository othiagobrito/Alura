<?php

require_once 'src/Conta.php';

$conta1 = new Conta;
$conta1->sacar(1500);

var_dump($conta1);
