<?php

namespace Alura\Banco\Modelo;


/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
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
        return "{$this->rua}, {$this->numero}, {$this->bairro} - {$this->cidade}";
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

    public function __get(string $nomeAtributo)
    {
        $metodo = "get" . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set($nomeAtributo, $valorAtribuido): void
    {
        $metodo = "set" . ucfirst($nomeAtributo);
        $this->$metodo($valorAtribuido);
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */ 
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */ 
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Set the value of rua
     *
     * @return  self
     */ 
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}