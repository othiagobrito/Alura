<?php

class Pessoa
{
    protected $nome;
    protected $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
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

    public function setNomeTitular(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres!";
            exit();
        }

        $this->nome = $nome;
    }
}