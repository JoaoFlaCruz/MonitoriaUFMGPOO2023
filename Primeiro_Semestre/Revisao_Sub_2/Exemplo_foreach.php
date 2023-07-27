<?php

require_once __DIR__ . "/Efetivo.php";

$lista = array(
    "primeiro" => new Efetivo("Marco", 1000),
    "segundo" => new Efetivo("Aurélio", 1000),
    "terceiro" => new Efetivo("Birchal", 1000)
);

//var_dump($lista);

foreach($lista as $professor)
{
    echo "Salario: " . $professor->calculaSalario();
}