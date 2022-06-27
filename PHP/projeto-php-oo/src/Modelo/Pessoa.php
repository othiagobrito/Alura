<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Cpf;

class Pessoa
{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->setNome($nome);
        $this->cpf = $cpf;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    public function setNome(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres!";
            exit();
        }

        $this->nome = $nome;
    }
}