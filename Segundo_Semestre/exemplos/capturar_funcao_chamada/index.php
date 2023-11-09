<?php

require_once "Exemplo.php";
require_once "Registrador.php";

$ex = new Exemplo();
$ex->faz_algo();

echo "A ultima função chamada foi: " . Registrador::funcao_mais_recente() . "\n";

$ex->faz_algo2();

echo "A ultima função chamada foi: " . Registrador::funcao_mais_recente() . "\n";

$ex->faz_algo3();

echo "A ultima função chamada foi: " . Registrador::funcao_mais_recente() . "\n";
