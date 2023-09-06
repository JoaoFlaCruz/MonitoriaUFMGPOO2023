<?php

require_once "Mensageiro.php";

require_once __DIR__ . "/linguas/Portugues.php";
require_once __DIR__ . "/linguas/Ingles.php";
require_once __DIR__ . "/linguas/Frances.php";
require_once __DIR__ . "/linguas/Italiano.php";

$nome_do_usuario = "Fulano de Tal";

$mensageiro = new Mensageiro($nome_do_usuario);

// Primeiro usaremos a estratégia de língua portuguesa
$mensageiro->troca_lingua(new Portugues());

$mensageiro->exibe_boas_vindas();
$mensageiro->exibe_ate_logo();

// Agora usaremos a estratégia de língua inglesa
$mensageiro->troca_lingua(new Ingles());

$mensageiro->exibe_boas_vindas();
$mensageiro->exibe_ate_logo();

/*

Observe que apenas trocando a estratégia usada nós podemos obter um texto
personalizado para cada língua escolhida. Este tipo de padrão de projeto, o
Strategy, pode ser usado em diversas aplicações onde precisamos que uma classe
faça a mesma coisa de diferentes maneiras.

*/