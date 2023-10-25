<?php

class Pokemon
{

    private array $data;
    private string $image;

    public function __construct(int $number)
    {
        $this->setData($number);
        $this->setImage($number);
    }

    private function setImage(int $number):self
    {
        $this->image = "/../images/pokemons/" . $number + 1 . ".png" . "\n";

        return $this;
    }

    private function setData(int $number):self
    {
        $pokemonList = array();

        $path = __DIR__ . "/../data/FirstGenPokemon.csv";

        $handle = fopen($path, "r");
        $header = fgetcsv($handle);

        while ($row = fgetcsv($handle, 1000, ",")) {
            $pokemonList[] = array_combine($header, $row);
        }

        $this->data = $pokemonList[$number];

        return $this;
    }

    public function getName():string
    {
        return $this->data[' Name'] . "\n";
    }

    public function getImage():string
    {
        return $this->image . "\n";
    }

}