<?php

class Conta
{

    private $cpfTitular;
    private $nometitular;
    private $saldo = 0;

    public function sacar(float $valor): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível!";
            return;
        } elseif ($valor <= 0) {
            echo "Valor de saque inválido!";
            return;
        }
        
        $this->saldo -= $valor;
    }

    public function depositar(float $valor): void
    {
        if ($valor <= 0) {
            echo "Valor de depósito deve ser positivo";
            return;
        }
        
        $this->saldo += $valor;
    }

    public function transferir(float $valor, Conta $destino): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível!";
            return;
        }

        $this->sacar($valor);
        $destino->depositar($valor);
    }

}