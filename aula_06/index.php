<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <pre>
    <?php
    require_once "controleremoto.php";
    $c = new ControleRemoto();
    $c->ligar();
    $c->maisVolume();
    $c->abrirMenu();
    ?>
    </pre>
</body>

</html>