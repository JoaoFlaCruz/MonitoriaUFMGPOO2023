<?php

require_once __DIR__ . "/Arma.php";

class Espada extends Arma
{
    public function __construct()
    {
        parent::__construct();
        echo "Espada construída.\n";
    }

    public function dano()
    {
        return 10;
    }
}