<?php

require_once __DIR__ . '/Endereco.php';

class Pessoa
{
    private string $nome;
    private Endereco $endereco;

    public function valida()
    {
        $this->endereco->getRua();
    }
}