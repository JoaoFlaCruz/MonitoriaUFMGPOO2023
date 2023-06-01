<?php

require_once "Valor.php";

class DoisValores
{
    private Valor $a;
    private Valor $b;
    public function __construct(string $a, string $b)
    {
        $this->a = new Valor($a);
        $this->b = new Valor($b);
    }

    public function saida(): Valor
    {
        return $this->a;
    }

    public function chegada(): Valor
    {
        return $this->b;
    }
}