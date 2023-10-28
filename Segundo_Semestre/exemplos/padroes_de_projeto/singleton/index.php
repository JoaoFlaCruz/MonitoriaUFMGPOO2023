<?php

require_once "Login.php";
require_once "Usuario.php";

$camila = new Usuario("Camila");

$carlos = new Usuario("Carlos");

$login = Login::getInstance();
$login->logar($camila);

var_dump($login);

$login2 = Login::getInstance();
$login2->logar($carlos);

var_dump($login2);

if($login === $login2){

    echo "São iguais!\n";

}

$login2->deslogar();

var_dump($login);