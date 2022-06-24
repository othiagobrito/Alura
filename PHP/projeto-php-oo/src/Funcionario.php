<?php

class Funcionario extends Pessoa
{

    private $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        $this->setNomeTitular($nome);
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    /**
     * Get the value of cargo
     */ 
    public function getCargo()
    {
        return $this->cargo;
    }
}