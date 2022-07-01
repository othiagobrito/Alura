<?php

namespace Alura\Banco\Modelo;

class Endereco
{

    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro} - {$this->cidade}" . PHP_EOL;
    }

    /**
     * Get the value of cidade
     */ 
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * Get the value of bairro
     */ 
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * Get the value of rua
     */ 
    public function getRua(): string
    {
        return $this->rua;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero(): string
    {
        return $this->numero;
    }
    
}