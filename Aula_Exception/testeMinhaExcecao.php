<?php

require_once __DIR__ . "/MinhaExcecao.php";

try {
    throw new MinhaExcecao("Teste da MinhaExcecao.");
} catch (MinhaExcecao $e) {
    echo $e->informacoesBasicas();
}