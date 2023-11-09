<?php

// Observe que esse método é impreciso para definir a função que está sendo chamada no momento
// A debug_backtrace fica preenchida com diversas chamadas de função à medida que as funções são chamadas pelo programa

class Exemplo {

    public function chamarExemplo() {

        echo "Função: " . debug_backtrace()[0]['function'] . "\n";

        var_dump(debug_backtrace());

    }

}

class OutroExemplo {

    public function chamarOutroExemplo() {

        (new Exemplo())->chamarExemplo();

    }

}


(new OutroExemplo())->chamarOutroExemplo();
