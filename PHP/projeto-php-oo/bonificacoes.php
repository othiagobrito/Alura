<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor};
use Alura\Banco\Service\ControladorDeBonificacoes;

$thiago = new Desenvolvedor(
    "Thiago",
    new Cpf("123.456.789-01"),
    "Desenvolvedor",
    500
);

$thiago->sobeDeNivel();

$joao = new Gerente(
    "João",
    new Cpf("789.123.456-01"),
    "Gerente",
    2000
);

$pedro = new Diretor(
    "João",
    new Cpf("789.123.456-01"),
    "Diretor",
    5000
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacao($thiago);
$controlador->adicionaBonificacao($joao);
$controlador->adicionaBonificacao($pedro);

echo $controlador->getTotalBonificacoes();
