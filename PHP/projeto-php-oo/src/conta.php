<?php

class Conta
{

    public string $cpfTitular;
    public string $nometitular;
    public float $saldo = 0;

    public function sacar(float $valor)
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível!";
        } else {
            $this->saldo -= $valor;
        }
    }

    public function depositar(float $valor)
    {
        if ($valor <= 0) {
            echo "Valor de depósito deve ser positivo";
        } else {
            $this->saldo += $valor;
        }
    }

}