<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    public function sacar(float $valor): void
    {
        $tarifaSaque = $valor * 0.03;

        $ValorSaque = $valor + $tarifaSaque;

        if ($ValorSaque > $this->saldo) {
            echo "Saldo indisponível!" . PHP_EOL;
            return;
        } elseif ($ValorSaque <= 0) {
            echo "Valor de saque inválido!" . PHP_EOL;
            return;
        }
        
        $this->saldo -= $ValorSaque;
    }

}