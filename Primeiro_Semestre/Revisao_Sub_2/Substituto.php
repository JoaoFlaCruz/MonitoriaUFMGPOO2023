<?php

require_once __DIR__ . "/Professor.php";

class Substituto extends Professor
{
    private int $horas;

    public function __construct(string $pDados, int $pSalario, int $pHoras)
    {
        parent::__construct($pDados, $pSalario);
        $this->horas = $pHoras;
    }

    public function calculaSalario(): int
    {
        return $this->salario * $this->horas;
    }
}