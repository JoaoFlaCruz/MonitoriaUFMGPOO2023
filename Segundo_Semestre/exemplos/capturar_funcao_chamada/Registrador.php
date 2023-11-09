<?php

// Essa classe guarda a função mais recente que foi chamada pelo conjunto do classes

class Registrador {

    static private string $funcao_mais_recente = "";

    static public function atualizaFuncao(string $p_funcao): void {

        self::$funcao_mais_recente = $p_funcao;

    }

    static public function funcao_mais_recente(): string {

        return self::$funcao_mais_recente;

    }
}