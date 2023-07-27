<?php

require_once __DIR__ . "/Professor.php";

class Universidade
{
    private array $lista;

    public function __construct()
    {
        $this->lista = array();
    }

    public function addProfessor(Professor $pProfessor)
    {
        $this->lista[] = $pProfessor;
    }

    public function pagamento(): int
    {
        $pagamento = 0;

        foreach($this->lista as $professor)
        {
            $pagamento += $professor->calculaSalario();
        }

        return $pagamento;
    }
}