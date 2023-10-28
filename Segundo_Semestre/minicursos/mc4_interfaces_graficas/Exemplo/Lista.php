<?php

class Lista {

    private array $lista = [];

    public function __construct() {

        $file = fopen("lista.txt", "r");
        $txt = fread($file, filesize("lista.txt"));
        fclose($file);

        $this->lista = explode("\n", $txt);
    }

    public function get_lista(): array {

        return $this->lista;

    }

}