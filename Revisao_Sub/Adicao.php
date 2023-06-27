<?php

require_once __DIR__ . "/Operacao.php";

class Adicao extends Operacao
{
    public function executa(float $operandoA, float $operandoB): float
    {
        return $operandoA + $operandoB;
    }
}