<?php

require_once __DIR__ . "/AbstractTeste.php";

require_once __DIR__ . "/../Calculadora/Calculadora.php";

class TesteCalculadora extends AbstractTeste {

    public function executar() {

        $this->iniciou_teste();

        $a = 8;
        $b = 8;

        $calc = new Calculadora();

        // 1º Teste
        $res = $calc->soma($a, $b);

        if($res == 16)
            $this->passou(1);
        else
            $this->falhou(1);

        $res = $calc->subtracao($a, $b);

        // 2º Teste
        if($res == 0)
            $this->passou(2);
        else
            $this->falhou(2);

        $res = $calc->divisao($a, $b);

        // 3º Teste
        if($res == 1)
            $this->passou(3);
        else
            $this->falhou(3);

        $res = $calc->multiplicacao($a, $b);

        // 4º Teste
        if($res == 64)
            $this->passou(4);
        else
            $this->falhou(4);

        //5º Teste
        try {

            $calc->joga_excecao();
            $this->passou(5);

        } catch (Exception $e) {

            $this->falhou_excecao(5, $e);

        }

        $res = $calc->divisao($a, $b);

        // 5º Teste
        if($res == 1)
            $this->passou(5);
        else
            $this->falhou(5);

        $this->finalizou_teste();

    }

}