<?php

require_once __DIR__ . "/MinhaExcecao.php";
require_once __DIR__ . "/MinhaSegundaExcecao.php";

try {
    $aviao->getParametros();
} catch (MinhaExcecao|MinhaSegundaExcecao $e) {
    echo $e->informacoesBasicas();
}

try {
    throw new MinhaSegundaExcecao("Pode ser de tipos variados.");
} catch (MinhaExcecao|MinhaSegundaExcecao $e) {
    echo $e->informacoesBasicas();
}