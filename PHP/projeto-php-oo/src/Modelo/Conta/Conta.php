<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;
abstract class Conta
{

    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valor): void
    {
        $tarifaSaque = $valor * $this->percentualTarifa();

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

    public function depositar(float $valor): void
    {
        if ($valor <= 0) {
            echo "Valor de depósito deve ser positivo" . PHP_EOL;
            return;
        }
        
        $this->saldo += $valor;
    }

    public function getExtrato(): string
    {
        return "Saldo: {$this->saldo}";
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function getNome()
    {
        return $this->titular->getNome();
    }

    public function getCpf()
    {
        return $this->titular->getCpf();
    }

    abstract protected function percentualTarifa(): float;

}