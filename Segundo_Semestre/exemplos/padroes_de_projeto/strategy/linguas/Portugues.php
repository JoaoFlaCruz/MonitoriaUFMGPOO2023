<?php

require_once __DIR__ . "/../Lingua.php";

class Portugues extends Lingua{

    public function __construct() {

        echo "Objeto da classe Portugues construído. \n";
    }

    public function exibe_boas_vindas(string $p_nome_do_usuario): void {

        echo "Bem vindo " . $p_nome_do_usuario . " ao programa de teste!\n";

    }
    public function exibe_ate_logo(string $p_nome_do_usuario): void {

        echo "Até logo " . $p_nome_do_usuario . ", volte sempre ao programa de teste!\n";

    }

}