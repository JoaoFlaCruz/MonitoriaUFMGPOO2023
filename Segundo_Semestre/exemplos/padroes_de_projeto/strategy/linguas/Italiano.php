<?php

require_once __DIR__ . "/../Lingua.php";

class Italiano extends Lingua{

    public function __construct() {

        echo "Objeto da classe Italiano construído. \n";
    }

    public function exibe_boas_vindas(string $p_nome_do_usuario): void {

        echo "Benvenuto " . $p_nome_do_usuario . " al programma di test!\n";

    }
    public function exibe_ate_logo(string $p_nome_do_usuario): void {

        echo "A presto " . $p_nome_do_usuario . ", torna sempre al programma di test!\n";

    }

}