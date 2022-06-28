<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
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

    public function recebeAumento(float $aumento): void
    {
        if ($aumento < 0) {
            echo "Aumento deve ser positivo!";
            return;
        }

        $this->salario += $aumento;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario(): float
    {
            return $this->salario;
    }
}