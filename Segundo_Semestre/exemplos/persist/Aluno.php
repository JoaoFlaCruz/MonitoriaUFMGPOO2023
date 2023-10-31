<?php

require_once "persist.php";

class Aluno extends persist {

    private int $id;
    private string $name;

    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function name() {

        return $this->name;

    }

}