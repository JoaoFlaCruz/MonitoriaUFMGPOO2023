<?php

abstract class AbstractTeste {

    abstract public function executar();

    public function passou(int $teste = 0) {

        echo $teste . "P ";

    }

    public function falhou(int $teste = 0) {

        echo $teste . "F ";

    }

    public function iniciou_teste() {

        echo get_called_class() . ": ";

    }

    public function finalizou_teste() {

        echo "\n";

    }

    public function falhou_excecao(int $teste = 0 ,Exception $e) {

        echo "\n" . $teste . "F : " . $e->getMessage() . "\n";
        echo "Arquivo: " . $e->getFile() . "\n";
        echo "Linha: " . $e->getLine() . "\n";

    }

}