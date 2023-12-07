<?php

require_once "AlunoAbst.php";

class Aluno extends AlunoAbst {

    private int $id;
    private string $name;

    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function name() {

        return $this->name;

    }

    public function id(): int {

        return $this->id;

    }

}