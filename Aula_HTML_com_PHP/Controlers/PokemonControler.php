<?php

require_once __DIR__ . "/../Models/Pokemon.php";

class PokemonControler
{

    private Pokemon $pokemon;
    private int $number;

    public function __construct(){}

    public function setPokemon(int $number)
    {
        $this->pokemon = new Pokemon($number - 1);
        $this->number = $number;
    }

    public function name(): string
    {
        return $this->pokemon->getName();
    }

    public function image(): string
    {
        return $this->pokemon->getImage();
    }

    public function next()
    {
        if($this->number == 151)
        {
            return null;
        }

        return $this->number + 1;
    }

    public function previous()
    {
        if($this->number == 1)
        {
            return null;
        }

        return $this->number - 1;
    }

}