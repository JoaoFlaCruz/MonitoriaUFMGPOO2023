<?php

class Usuario {

    private string $nome;

    public function __construct(string $p_nome) {
        $this->nome = $p_nome;
    }

    public function nome(): string {

        return $this->nome;

    }

}