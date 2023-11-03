<?php

require_once "Aluno.php";

//$augusto = new Aluno(1, "Pedro");
//$augusto->save();

$array = Aluno::getRecordsByField("id", "1");

var_dump($array);

echo "O nome é: " . $array[0]->name();