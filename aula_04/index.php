<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <pre>
    <?php
    require_once 'caneta.php';

    $c1 = new Caneta("BIC", "AZUL", 0.5);
    $c2 = new Caneta("NIC", "Vermelha", 0.7);
    print_r($c1);
    print_r($c2);
    ?>
    </pre>
</body>

</html>