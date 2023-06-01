<?php
$idade = $_GET['idade'];
$nome = $_GET['nome'];
?>

<head>
    <title>Página</title>
    <!-- <link href="Views/style.css" rel="stylesheet"> -->
</head>
<body>
    <label><?php echo $idade;?> </label>
    <input name="nome" type="<?php echo $idade;?>" placeholder="<?php echo $nome;?>"></input>
</body>