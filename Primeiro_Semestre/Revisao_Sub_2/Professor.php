<?php

abstract class Professor
{
    protected string $dados;
    protected int $salario;

    public function __construct(string $pDados, int $pSalario)
    {
        $this->dados = $pDados;
        $this->salario = $pSalario;
    }

    abstract public function calculaSalario(): int;
}