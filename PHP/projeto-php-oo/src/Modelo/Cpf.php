<?php

namespace Modelo;

class Cpf
{

    private $cpf;

    public function __construct(string $cpf)
    {
        $this->setCpf($cpf);
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf(string $cpf): void
    {
        if (strlen($cpf) < 14) {
            echo "CPF precisa ter pelo menos 14 caracteres!";
            exit();
        }

        $this->cpf = $cpf;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }
}