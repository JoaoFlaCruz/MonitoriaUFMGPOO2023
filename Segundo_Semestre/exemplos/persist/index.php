<?php

require_once "Aluno.php";

//$augusto = new Aluno(2, "Augusto");
//$augusto->save();

$array_de_augustos = Aluno::getRecordsByField("name", "Augusto");

var_dump($array_de_augustos);

echo "Nome: " . $array_de_augustos[1]->name() . "\n";