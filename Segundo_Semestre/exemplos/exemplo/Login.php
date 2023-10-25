<?php

require_once __DIR__ . "/perfil/Perfil.php";

class Login {

    private Perfil|null $perfil;

    public function __construct() {

        $this->perfil = null;

    }

    public function loggar(Perfil $perfil): void
    {

        $this->perfil = $perfil;

    }

    public function deslogar(): void
    {

        $this->perfil = null;

    }

    public function getPerfil(): ?Perfil { return $this->perfil; }

}