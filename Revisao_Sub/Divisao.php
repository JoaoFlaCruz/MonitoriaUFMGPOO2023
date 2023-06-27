<?php

require_once __DIR__ . "/Operacao.php";

class Divisao extends Operacao
{
    public function executa(float $operandoA, float $operandoB): float
    {
        if($operandoB == 0)
        {
            throw new Exception("Divisao por zero");
        }

        return $operandoA / $operandoB;
    }
}