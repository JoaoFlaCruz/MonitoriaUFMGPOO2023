<?php

require_once __DIR__ . "/../Lingua.php";

class Frances extends Lingua{

    public function __construct() {

        echo "Objeto da classe Frances construído. \n";
    }

    public function exibe_boas_vindas(string $p_nome_do_usuario): void {

        echo "Bienvenue " . $p_nome_do_usuario . " au programme de test!\n";

    }
    public function exibe_ate_logo(string $p_nome_do_usuario): void {

        echo "A bientôt " . $p_nome_do_usuario . ", reviens toujours au programme de test!\n";

    }

}