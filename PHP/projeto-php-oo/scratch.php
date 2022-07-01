<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

require_once 'autoload.php';

$desenvolvedor = new Desenvolvedor(
    "Thiago",
    new Cpf("123.456.789-01"),
    15000
);

echo $desenvolvedor->nome;
