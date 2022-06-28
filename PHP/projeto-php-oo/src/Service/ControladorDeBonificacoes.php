<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{

    private $totalBonificacoes = 0;


    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    /**
     * Get the value of totalBonificacoes
     */ 
    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}