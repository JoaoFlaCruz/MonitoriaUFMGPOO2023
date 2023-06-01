<?php

require_once __DIR__ . "/Arma.php";

class Machado extends Arma
{
    public function __construct()
    {
        parent::__construct();
        echo "Machado construído.\n";
    }

    public function dano()
    {
        return 20;
    }
}