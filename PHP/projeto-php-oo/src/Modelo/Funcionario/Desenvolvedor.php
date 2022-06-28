<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{

    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 0.05;
    }

    public function sobeDeNivel()
    {
        $this->recebeAumento($this->getSalario() * 0.75);
    }

}