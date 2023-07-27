<?php

require_once __DIR__ . "/Efetivo.php";
require_once __DIR__ . "/Substituto.php";

require_once __DIR__ . "/Universidade.php";

$ramon = new Substituto("Ramon", 250, 45);
$birchal = new Efetivo("Birchal", 10000);
$fernando = new Efetivo("Fernando", 13000);

$uni = new Universidade();

$uni->addProfessor($birchal);
$uni->addProfessor($ramon);
$uni->addProfessor($fernando);

echo "O pagamento total é de: " . $uni->pagamento() . "\n";