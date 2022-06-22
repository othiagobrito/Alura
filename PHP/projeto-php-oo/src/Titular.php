<?php

class Titular
{

    private $nome;
    private $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->setNomeTitular($nome);
        $this->cpf = $cpf;
    }
    

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    private function setNomeTitular(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres!";
            exit();
        }

        $this->nome = $nome;
    }
}