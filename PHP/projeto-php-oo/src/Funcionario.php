<?php

class Funcionario extends Pessoa
{

    private $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    /**
     * Get the value of cargo
     */ 
    public function getCargo()
    {
        return $this->cargo;
    }

    protected function alteraNome(string $nome): void
    {
        $this->setNome($nome);
    }
}