<?php

require_once __DIR__ . "/perfil/Cliente.php";
require_once __DIR__ . "/perfil/Admin.php";

class ControleAcesso {

    private Login $login;

    public function __construct(Login $login) {

        $this->login = $login;

    }

    public function printEntrada()
    {

        echo "Bem vindo ao sistema! \n";

        if($this->login->getPerfil() == null) {

            echo "Não está logado;";

            echo "Escolha a opção de loggin: \n";
            echo "1 -> Admin \n";
            echo "2 -> Cliente \n";

            $opcao = (int) readline();

            if($opcao == 1) {

                $this->login->loggar(new Admin());

            } elseif ($opcao == 2) {

                $this->login->loggar(new Cliente());

            }

        }

        if($this->login->getPerfil() instanceof Cliente) {

            echo "Está logado como cliente;";
        }

        if($this->login->getPerfil() instanceof Admin) {

            echo "Está logado como admin;";
        }

    }
}