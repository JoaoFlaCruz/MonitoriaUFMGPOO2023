<?php

require_once __DIR__ . "/Arma.php";

class Foice extends Arma
{
    public function __construct()
    {
        parent::__construct();
        echo "Foice construída.\n";
    }

    public function dano()
    {
        return 30;
    }
}