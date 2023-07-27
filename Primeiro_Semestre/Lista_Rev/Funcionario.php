<?php

require_once __DIR__ . "/Ponto.php";

abstract class Funcionario
{
    protected string $nome;
    protected int $matricula;
    protected array $pontos = array();

    public function __construct(string $pNome, int $pMatricula)
    {
        $this->nome = $pNome;
        $this->matricula = $pMatricula;
    }

    public function imprimeRegistroPontos()
    {
        foreach($this->pontos as $ponto)
        {
            $ponto->imprimePonto();
            echo "\n";
        }
    }

    abstract public function resgistraPonto(Ponto $pPonto);
}