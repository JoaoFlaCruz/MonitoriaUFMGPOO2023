<?php
    require_once __DIR__ . "/../Controlers/PokemonListControler.php";

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
        <title>Pokemons de Kanto</title>

        <link href="style.css" type="text/css" rel="stylesheet">

    </head>
    <body>
        <div class="externo">
            <div class="interno">
                <h1>Pokemons de Kanto</h1>
                <p>Aqui estamos usando o PHP para listar todos os pokemons obtidos de um banco de dados nos diretórios do projeto.</p>
                <form action="/index.php" method="get">
                    <button>Retornar</button>
                </form>
            </div>

            <form action="/Views/showIndividual.php" method="post">
                <?php
                for($i = 1; $i < $listC->getSize() + 1; $i++)
                {
                ?>
                    <div class="container_pokemon">
                        <img src="<?php echo $listC->pokemonImage($i);?>" alt="Pokemon" height="50" width="50"><br>
                        <button type="submit" name="number" value="<?php echo $i;?>"><?php echo $listC->pokemonName($i);?> </button>
                    </div>
                <?php
                }
                ?>
            </form>
        </div>
    </body>
</html>