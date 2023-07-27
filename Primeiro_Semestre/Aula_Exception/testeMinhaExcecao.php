<?php

require_once __DIR__ . "/MinhaExcecao.php";

try {
    throw new MinhaExcecao("Teste da MinhaExcecao.");
} catch (MinhaExcecao $e) {
    echo "2\n";
    echo $e->informacoesBasicas();
}