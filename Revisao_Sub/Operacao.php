<?php

// Essa classe é uma Estratégia
abstract class Operacao
{
    abstract public function executa(float $operandoA, float $operandoB): float;
}