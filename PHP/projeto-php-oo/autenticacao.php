<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$diretor = new Diretor(
    "João",
    new Cpf("789.123.456-01"),
    5000
);

$autenticador->tentaLogin($diretor, "1234");
