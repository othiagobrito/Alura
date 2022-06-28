<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.03;
    }

    public function transferir(float $valor, Conta $destino): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível!" . PHP_EOL;
            return;
        }

        $this->sacar($valor);
        $destino->depositar($valor);
    }

}