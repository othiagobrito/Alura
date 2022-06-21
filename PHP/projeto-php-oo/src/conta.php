<?php

class Conta
{

    public string $cpfTitular;
    public string $nometitular;
    public float $saldo;

    public function sacar(float $valor)
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível!";
        } else {
            $this->saldo -= $valor;
        }
    }

}