<?php

require_once __DIR__ . "/Jogador.php";
require_once __DIR__ . "/Espada.php";
require_once __DIR__ . "/Machado.php";
require_once __DIR__ . "/Foice.php";

$jogador = new Jogador();

$espada = new Espada();
$machado =  new Machado();
$foice = new Foice();

$jogador->setArma($foice);
$jogador->bate();