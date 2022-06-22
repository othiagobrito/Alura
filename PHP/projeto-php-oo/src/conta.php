<?php

class Conta
{

    private $nometitular;
    private $cpfTitular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(string $nometitular, string $cpfTitular)
    {
        $this->setNomeTitular($nometitular);
        $this->setCpf($cpfTitular);
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

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

    public function getExtrato(): string
    {
        return "Saldo: {$this->saldo}";
    }

    private function setNomeTitular(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres!";
            exit();
        }

        $this->nometitular = $nome;
    }

    public function getNome(): string
    {
        return $this->nometitular;
    }

    private function setCpf(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }
    
    public function getCpf(): string
    {
        return $this->cpfTitular;
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

}