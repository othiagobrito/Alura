<?php

class Titular
{

    private $nome;
    private $cpf;
    private $endereco;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
    {
        $this->setNomeTitular($nome);
        $this->cpf = $cpf;
        $this->endereco = $endereco;
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
        return $this->cpf->getCpf();
    }

    private function setNomeTitular(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres!";
            exit();
        }

        $this->nome = $nome;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
}