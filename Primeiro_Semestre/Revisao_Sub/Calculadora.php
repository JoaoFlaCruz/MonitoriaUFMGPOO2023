<?php

require_once __DIR__ . "/Operacao.php";

class Calculadora
{
    private Operacao $operacao; //Adicao

    // Preparando a Estratégia
    public function setOperacao(Operacao $pOperacao): self
    {
        $this->operacao = $pOperacao;
        return $this;
    }

    // Executando a Estratégia
    public function calcula(float $operandoA, float $operandoB): float
    {
        return $this->operacao->executa($operandoA, $operandoB);
    }
}