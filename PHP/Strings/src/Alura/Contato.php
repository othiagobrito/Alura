<?php

namespace App\Alura;

class Contato
{

    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getUsuario(): string
    {
        $position = strpos($this->email, "@");

        if ($position === false) {
            return "Usuário inválido";
        }

        return substr($this->email, 0, $position);
    }

}