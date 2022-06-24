<?php

class Titular extends Pessoa
{

    private $endereco;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
    {
        $this->setNomeTitular($nome);
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    

    /**
     * Get the value of endereco
     */ 
    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
}