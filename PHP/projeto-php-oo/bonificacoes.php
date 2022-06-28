<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Service\ControladorDeBonificacoes;

$thiago = new Funcionario(
    "Thiago",
    new Cpf("123.456.789-01"),
    "Desenvolvedor",
    500
);

$joao = new Funcionario(
    "João",
    new Cpf("789.123.456-01"),
    "Desenvolvedor",
    2000
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacao($thiago);
$controlador->adicionaBonificacao($joao);

echo $controlador->getTotalBonificacoes();