<?php

class PokemonList
{
    private array $pokemonList;

    public function __construct()
    {
        $this->generatePokemonList();
    }

    private function generatePokemonList(): self
    {
        $this->pokemonList = array();

        $path = __DIR__ . "/../data/FirstGenPokemon.csv";

        $handle = fopen($path, "r");
        $header = fgetcsv($handle);

        while ($row = fgetcsv($handle, 1000, ",")) {
            $this->pokemonList[] = array_combine($header, $row);
        }

        fclose($handle);

        return $this;
    }

    public function getName(int $number)
    {
        return $this->pokemonList[$number][' Name'];
    }

    public function getSize(): int {

        return sizeof($this->pokemonList);

    }
}