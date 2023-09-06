<?php

/*

Neste exemplo queremos um mensageiro que seja capaz de retornar um texto de
boas vindas ou de adeus à um usuário de um programa. Para isso o nosso
mensageiro receberá o nome do usuário do programa e devolverá uma mensagem no
estilo:

    "Bem-vindo fulado de tal ao programa de teste!"
    "Até logo fulado de tal, volte sempre ao programa de teste!"

Queremos então que este programa seja capaz de enviar essa mesma mensagem em
qualquer língua, e que ao adicionarmos uma nova língua não precisemos editar os
programas já existentes.

Para isso usaremos o Strategy:
    https://refactoring.guru/pt-br/design-patterns/strategy

*/

require_once "Lingua.php";

// A classe Mensageiro é o Contexto da estratégia, ou seja, é aquele que envia a
// mensagem.
class Mensageiro {

    // O atributo Lingua é a estratégia que será usada pela classe Mensageiro
    private Lingua $lingua;

    private string $nome_do_usuario;

    // O usuário é configurado na criação de um objeto da classe Mensageiro
    public function __construct(string $p_nome_do_usuario){

        echo "Objeto da classe Mensageiro construído. \n";

        $this->nome_do_usuario = $p_nome_do_usuario;

    }

    // Este Método irá trocar a estratégia escolhida.
    // Observe que a estratégia nada mais é do que uma língua desejada.
    public function troca_lingua(Lingua $p_lingua): void {

        $this->lingua = $p_lingua;

    }

    public function exibe_boas_vindas(): void {

        // Todo objeto da classe Lingua deve ser capaz de exibir um texto de
        // boas vindas
        $this->lingua->exibe_boas_vindas($this->nome_do_usuario);

    }

    public function exibe_ate_logo(): void {

        // Todo objeto da classe Lingua deve ser capaz de exibir um texto de
        // até logo
        $this->lingua->exibe_ate_logo($this->nome_do_usuario);

    }

}