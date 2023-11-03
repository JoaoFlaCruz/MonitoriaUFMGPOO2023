<?php

require_once "Dentista.php";

class Facade {

    public function cria_dentista() {

        echo "Digite o CRO: ";
        $cro = readline();
        echo "Digite o nome: ";
        $nome = readline();

        $dentista = new Dentista($nome, $cro);
        $dentista->save();

    }



}