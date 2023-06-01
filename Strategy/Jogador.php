<?php

require_once __DIR__ . "/Arma.php";

class Jogador
{
    private Arma $arma;

    private string $texto1;
    private string $texto2;

    public function __construct($t1, $t2)
    {
        echo "Jogador construído.\n";

        $this->texto1 = $t1;
        $this->texto2 = $t2;
    }

    public function setArma(Arma $arma)
    {
        $this->arma = $arma;
    }

    public function bate()
    {
        echo "Ataquei:" . $this->arma->dano() . "\n";
    }

    function getT1(): string
    {
        return $this->texto1;
    }

    function getT2(): string
    {
        return $this->texto2;
    }
}