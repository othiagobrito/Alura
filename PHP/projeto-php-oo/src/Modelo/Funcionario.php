<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\{Pessoa, Cpf};

class Funcionario extends Pessoa
{

    private $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
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

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario(): float
    {
            return $this->salario;
    }
}