<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.05;
    }

}