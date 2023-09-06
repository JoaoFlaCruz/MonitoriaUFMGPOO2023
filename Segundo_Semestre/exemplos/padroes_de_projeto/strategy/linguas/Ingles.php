<?php

require_once __DIR__ . "/../Lingua.php";

class Ingles extends Lingua{

    public function __construct() {

        echo "Objeto da classe Ingles construído. \n";
    }

    public function exibe_boas_vindas(string $p_nome_do_usuario): void {

        echo "Welcome " . $p_nome_do_usuario . " to the test program!\n";

    }
    public function exibe_ate_logo(string $p_nome_do_usuario): void {

        echo "Goob bye " . $p_nome_do_usuario . ", comme back whenever you want to the test program!\n";

    }

}