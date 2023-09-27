<?php

class Dentista {

    private string $nome;
    private int $cro;

    public function __construct(string $p_nome, int $p_cro ) {

        $this->nome = $p_nome;
        $this->cro = $p_cro;

    }

    public function set_nome(string $p_nome): void {

        $this->nome = $p_nome;

    }

    public function get_nome(): string {

        return $this->nome;

    }

    /*
    public aprova(Pagamento $p_pagamento): void {

        $this->apro = true;
        $this->pgmt = $p_$pagamento;

    }
    */

}