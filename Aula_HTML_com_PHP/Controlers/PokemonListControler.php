<?php

require_once __DIR__ . "/../Models/PokemonList.php";

class PokemonListControler
{

    private PokemonList $pokemonList;

    public function __construct()
    {
        $this->pokemonList = new PokemonList();
    }

    public function pokemonName(int $number): string
    {
        return $this->pokemonList->getName($number - 1);
    }

    public function pokemonImage(int $number): string
    {
        return "/../images/pokemons/" . $number . ".png";
    }

}