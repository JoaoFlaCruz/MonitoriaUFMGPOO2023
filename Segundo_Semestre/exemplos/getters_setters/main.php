<?php

require_once "Dentista.php";

$den = new Dentista("Joao", 123);

$den->set_nome("Maria");

//$den->aprova(new PagementoParcelado());

var_dump($den);