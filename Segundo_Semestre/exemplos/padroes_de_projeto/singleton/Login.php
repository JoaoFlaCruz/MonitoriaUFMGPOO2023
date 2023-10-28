<?php

require_once "Usuario.php";

class Login {

    private Usuario|null $logado;

    static private Login|null $ptr = null;

    private function __construct() {

        $logado = null;

    }

    static public function getInstance(): Login{

        if (self::$ptr == null) {

            self::$ptr = new Login();

        }

        return self::$ptr;

    }

    public function logar(Usuario $usuario) {

        $this->logado = $usuario;

    }

    public function deslogar() {

        $this->logado = null;

    }

}