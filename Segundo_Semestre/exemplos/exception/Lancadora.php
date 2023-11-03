<?php

require_once __DIR__ . "/MinhaExcecao.php";

// Esta classe possui por objetivo apenas lançar a exceção para os testes de
// tratamento

class Lancadora {

    public function __construct(bool $valor) {

        if (!$valor) {
            throw new MinhaExcecao("Não foi possível criar o objeto.");
        }

    }

}