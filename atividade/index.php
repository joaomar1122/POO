<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <pre>
    <?php
    require_once 'computador.php';

    $pc1 = new Computador("I7", "Preto", "8GB");
    $pc2 = new Computador("I9", "Branco", "16GB");
    print_r($pc1);
    print_r($pc2);
    ?>
    </pre>
</body>

</html>