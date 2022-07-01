<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$diretor = new Diretor(
    "João",
    new Cpf("789.123.456-01"),
    5000
);

$titular = new Titular("Thiago Brito", new Cpf("123.456.789-01"), new Endereco("São Paulo", "Jardim das quanta", "Dr. Jurubeba", "156"));

$autenticador->tentaLogin($diretor, "1234");
$autenticador->tentaLogin($titular, "abcd");
