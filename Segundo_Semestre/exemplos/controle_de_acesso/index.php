<?php

require_once __DIR__ . "/Login.php";
require_once __DIR__ . "/ControleAcesso.php";

require_once __DIR__ . "/perfil/Admin.php";
require_once __DIR__ . "/perfil/Cliente.php";

$login = new Login();

$cont = new ControleAcesso($login);

$cont->printEntrada();