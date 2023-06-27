<?php

require_once __DIR__ . "/Calculadora.php";
require_once __DIR__ . "/Operacao.php";
require_once __DIR__ . "/Adicao.php";
require_once __DIR__ . "/Divisao.php";

$calc = new Calculadora();
$adc = new Adicao();

$calc->setOperacao($adc);

echo "Resultado: " . $calc->calcula(2,2) . "\n";
echo "Resultado: " . $calc->calcula(7,2) . "\n";

$div = new Divisao();

$calc->setOperacao($div);

try{
    echo "Resultado: " . $calc->calcula(2,0) . "\n";
} catch(Exception $erro) {
    echo $erro->getMessage() . "\n";
}

echo "Resultado: " . $calc->calcula(7,2) . "\n";

echo __DIR__ . "\n";