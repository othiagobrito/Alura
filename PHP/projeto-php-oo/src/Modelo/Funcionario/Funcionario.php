<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{

    private $salario;

    public function __construct(string $nome, CPF $cpf, $salario)
    {
        parent::__construct($nome, $cpf);
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

    abstract public function calculaBonificacao(): float;

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