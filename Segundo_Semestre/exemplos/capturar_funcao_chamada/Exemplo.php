<?php

require_once "Registrador.php";

class Exemplo {

    public function faz_algo() {

        Registrador::atualizaFuncao("faz_algo");
        echo "Faz algo.\n";

    }

    public function faz_algo2() {

        Registrador::atualizaFuncao("faz_algo2");
        echo "Faz algo2.\n";

    }

    public function faz_algo3() {

        Registrador::atualizaFuncao("Faz algo3");
        echo "Faz algo3.\n";

    }

}