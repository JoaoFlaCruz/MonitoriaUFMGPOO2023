<?php

/*

A classe Lingua é nossa estratégia abstrata.
Ela possui o "contrato" que indica que todas as possíveis estratégias de
linguagem devem ser capazes de realizar as funções:

    exibe_boas_vindas()
    exibe_ate_logo()

Funções estas que serão utilizadas pela classe Mensageiro para exibir em linguas
diferentes o mesmo texto para usuários diferentes.

*/


abstract class Lingua {

    public function __construct() {

        echo "Objeto da classe Lingua construído. \n";
    }

    abstract public function exibe_boas_vindas(string $p_nome_do_usuario): void;
    abstract public function exibe_ate_logo(string $p_nome_do_usuario): void;

}