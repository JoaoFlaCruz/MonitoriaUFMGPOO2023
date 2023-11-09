<?php


class Exemplo {

    public function chamar() {

        echo "Função: " . debug_backtrace()[0]['function'] . "\n";

    }

}


(new Exemplo())->chamar();