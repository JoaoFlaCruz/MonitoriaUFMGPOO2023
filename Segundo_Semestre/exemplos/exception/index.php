<?php

require_once __DIR__ . "/MinhaExcecao.php";
require_once __DIR__ . "/Lancadora.php";

try {

    $lanc1 = new Lancadora(true); //Não deve lancar a excecao
    $lanc2 = new Lancadora(false); //Deve lançar a excecao

} catch (Exception $e) {

    echo "Mensagem de erro: ". $e->getMessage() ."\n";
    echo "Ocorrida no arquivo: ". $e->getFile() . "\n";
    echo "Ocorrida na linha: ". $e->getLine() . "\n";

}
