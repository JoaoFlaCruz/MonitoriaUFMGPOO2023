<?php

class MinhaSegundaExcecao extends Exception
{
    public function informacoesBasicas(): string
    {
        $info = "Tipo: " . get_called_class() . "\n";
        $info .= "Mensagem: " . parent::getMessage() . "\n";
        $info .= "Ocorrido na linha: " . parent::getLine() . "\n";

        return $info;
    }
}