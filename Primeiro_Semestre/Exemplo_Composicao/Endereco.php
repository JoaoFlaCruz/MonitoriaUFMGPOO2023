<?php

class Endereco
{
    private string $rua;
    private string $cep;
    private string $bairro;

    public function getRua()
    {
        return $this->rua;
    }
}