<?php

class Conta
{

    private $cpfTitular = "";
    private $nometitular = "";
    private $saldo = 0;

    public function sacar(float $valor): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível!" . PHP_EOL;
            return;
        } elseif ($valor <= 0) {
            echo "Valor de saque inválido!" . PHP_EOL;
            return;
        }
        
        $this->saldo -= $valor;
    }

    public function depositar(float $valor): void
    {
        if ($valor <= 0) {
            echo "Valor de depósito deve ser positivo" . PHP_EOL;
            return;
        }
        
        $this->saldo += $valor;
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

    public function extrato(): string
    {
        return "Saldo: {$this->saldo}";
    }

    public function setNomeTitular(string $nome): void
    {
        $this->nometitular = $nome;
    }

    public function getNome(): string
    {
        return $this->nometitular;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }
    
    public function getCpf(): string
    {
        return $this->cpfTitular;
    }

}