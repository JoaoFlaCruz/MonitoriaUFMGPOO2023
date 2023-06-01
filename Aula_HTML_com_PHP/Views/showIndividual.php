<?php
require_once __DIR__ . "/../Controlers/PokemonControler.php";
require_once __DIR__ . "/../Controlers/PokemonListControler.php";

$number = (int)$_POST["number"];

$pokemonC = new PokemonControler();
$pokemonC->setPokemon($number);

$listC = new PokemonListControler();
?>

<!-- Declaração do tipo de arquivo: HTML 5 -->
<!DOCTYPE html>
<!-- Definição do arquivo HTML: tudo que está dentro da tag será apresentado. -->
<html lang="pt">
    <head>
        <!-- Meta Informações da página HTML: conteúdos não vistos e de configuração. -->

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pokemonC->name(); ?></title>

        <link href="style.css" type="text/css" rel="stylesheet">

    </head>
    <body>
        <div class="externo">
        <div class="interno">

            <form action="showAll.php" method="get">
                    <button>Retornar</button>
                </form>

            <h1><?php echo $pokemonC->name();?></h1>

            <img src="<?php echo $pokemonC->image();?>" alt="Pokemon" width="60" height="60">

            <form action="/Views/showIndividual.php" method="post">

                <div class="navegador">
                    <?php
                        if($number >= 2)
                        {?>
                            <button type="submit" name="number" value="<?php echo ($number-1);?>"> Mais sobre <?php echo $listC->pokemonName($number-1);?> </button>
                        <?php
                        }
                        if($number <= 150)
                        {?>
                            <button type="submit" name="number" value="<?php echo ($number+1);?>"> Mais sobre <?php echo $listC->pokemonName($number+1);?> </button>
                        <?php
                        }?>
                </div>

            </form>

        </div>
        </div>

    </body>
</html>