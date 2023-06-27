<?php

class Executora
{

    public function __construct()
    {
    }

    public function __invoke()
    {
        echo "Fiz o log\n";
    }

    public function ler()
    {
        echo "Eu li\n";
    }

    public function escrever()
    {
        echo "Eu escrevi\n";
    }

}