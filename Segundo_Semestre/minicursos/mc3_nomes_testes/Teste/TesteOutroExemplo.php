<?php

require_once __DIR__ . "/AbstractTeste.php";

class TesteOutroExemplo extends AbstractTeste {

    public function executar() {

        $this->iniciou_teste();

        $this->passou(1);
        $this->passou(2);
        $this->falhou(3);
        $this->passou(4);

        $this->finalizou_teste();

    }

}