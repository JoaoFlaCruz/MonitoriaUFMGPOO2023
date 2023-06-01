<?php

abstract class Arma
{
    public function __construct()
    {
        echo "Arma construída.\n";
    }

    abstract public function dano();
}