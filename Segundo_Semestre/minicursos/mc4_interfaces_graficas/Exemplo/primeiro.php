<?php

    $fnome = $_GET['fnome'];
    $lnome = $_GET['lnome'];

?>

<html>

    <head>
        <title>Primeiro</title>
    </head>
    <body>

        <h1>Isso é o primeiro</h1>

        <p>
            <?php echo $fnome . "\n" . $lnome . "\n";?>
        </p>

    </body>

</html>