<?php

require_once __DIR__ . "/Professor.php";

class Efetivo extends Professor
{
    public function calculaSalario(): int
    {
        return $this->salario;
    }
}