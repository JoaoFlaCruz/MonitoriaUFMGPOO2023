<?php

class Executor {

    public function __construct() {}

    public function executa_testes() {

        $lista_de_arquivos = scandir(__DIR__);
        $lista_de_testes = array();

        foreach($lista_de_arquivos as $chave=>$arquivo) {

            if($arquivo == "." || $arquivo == "..")
                unset($lista_de_arquivos[$chave]);

            if(
                str_starts_with($arquivo,"Teste") &&
                str_ends_with($arquivo, ".php")
            )
                $lista_de_testes[] = $arquivo;
        }

        foreach($lista_de_testes as $arq_teste) {

            require_once __DIR__ . "/" . $arq_teste;

            $teste = new (substr($arq_teste, 0, -4))();
            $teste->executar();

        }

        //var_dump($lista_de_testes);
        //var_dump($lista_de_arquivos);
    }

}