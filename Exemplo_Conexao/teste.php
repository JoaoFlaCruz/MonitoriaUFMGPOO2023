<?php

require_once "Valor.php";
require_once "DoisValores.php";

$dataBase = array();

$dataBase[] = new DoisValores("a", "b");
$dataBase[] = new DoisValores("a", "c");
$dataBase[] = new DoisValores("a", "f");
$dataBase[] = new DoisValores("b", "e");
$dataBase[] = new DoisValores("b", "d");
$dataBase[] = new DoisValores("b", "f");
$dataBase[] = new DoisValores("c", "d");
$dataBase[] = new DoisValores("c", "e");
$dataBase[] = new DoisValores("c", "f");

//Preciso queb saia de A e chegue a B
$A = new Valor("a");
$B = new Valor("b");

$saidas = array();

foreach($dataBase as $doisValores)
{
    if($doisValores->saida() == $A)
        $saidas[] = $doisValores;
}

$final = array();

//echo var_dump($saidas);

foreach($saidas as $doisValores)
{
    if($doisValores->chegada() == $B)
        $final[] = $doisValores;
}

//echo var_dump($final);

//Preciso queb saia de A e chegue a E

$A = new Valor("a");
$E = new Valor("e");


// PRIMEIRA PARTE: Voo Direto
$saidas = array();

foreach($dataBase as $doisValores)
{
    if($doisValores->saida() == $A)
        $saidas[] = $doisValores;
}

$final = array();

//echo var_dump($saidas);

foreach($saidas as $doisValores)
{
    if($doisValores->chegada() == $E)
        $final[] = $doisValores;
}

echo var_dump($final);

if(!empty($final))
{
    //Retornar o array: não precisa de conexão
    echo "Retornou";
}

//SEGUNDA VERIFICAÇÃO: Conexao

$chegadas = array();

foreach($dataBase as $doisValores)
{
    if($doisValores->chegada() == $E)
        $chegadas[] = $doisValores;
}

$conexao = array();

foreach($saidas as $primeiro)
{
    foreach($chegadas as $segundo)
    {
        if($primeiro->chegada() == $segundo->saida())
        {
            $conexao[] = array($primeiro, $segundo);
        }
    }
}

echo var_dump($conexao);
