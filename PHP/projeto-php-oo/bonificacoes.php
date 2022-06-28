<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$thiago = new Desenvolvedor(
    "Thiago",
    new Cpf("123.456.789-01"),
    500
);

$thiago->sobeDeNivel();

$joao = new Gerente(
    "João",
    new Cpf("789.123.456-01"),
    2000
);

$pedro = new Diretor(
    "João",
    new Cpf("789.123.456-01"),
    5000
);

$lucas = new EditorVideo(
    "João",
    new Cpf("789.123.456-01"),
    1000
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacao($thiago);
$controlador->adicionaBonificacao($joao);
$controlador->adicionaBonificacao($pedro);
$controlador->adicionaBonificacao($lucas);

echo $controlador->getTotalBonificacoes();
