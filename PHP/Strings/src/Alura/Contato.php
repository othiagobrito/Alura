<?php

namespace App\Alura;

class Contato
{

    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        $this->email = $email;
        $this->telefone = $telefone;

        if ($this->validaEmail($email) !== false) {
            $this->setEmail($email);
        } else {
            $this->setEmail("Email inválido");
        }

        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    public function setEmail(string $email): void
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

    private function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEnderecoCep(): string
    {
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

}