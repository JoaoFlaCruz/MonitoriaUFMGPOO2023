<?php
$verificado = $_GET['validador'] === "true";

if($verificado)
{
    header("Location: Views/showAll.php");
    exit();
}
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
        <title>Projeto Expositivo</title>

        <link href="Views/style.css" type="text/css" rel="stylesheet">

    </head>
    <body>
        <div class="externo">
        <div class="interno">
            <h1>Lista de Pokemons de Kanto</h1>
            <p>Projeto expositivo para apresentação de conceitos de criação de frontend utilizando PHP para customização e acesso à backend desenvolvido na disciplina de Programação Orientada à Objetos</p>
            <div>
                <form action="/Views/showAll.php" method="post">
                    <button>Acessar a Lista</button>
                </form>
            </div>
        </div>
        </div>

        <div class="externo">
        <div class="interno">
            <h1>Loggin</h1>
            <div>
                <form action="index.php" method="get">
                    <input type="checkbox" name="validador" value="true"></input>
                    <button type="submit">Verificar</button>
                </form>
                <?php if(!$verificado){?>
                    <label>Faça Loggin</label>
                <?php }?>
            </div>
        </div>
        </div>
    </body>
</html>