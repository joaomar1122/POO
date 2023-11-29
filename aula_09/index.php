<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'pessoa.php';
    require_once 'livro.php';
    $p = array();
    $p[0] = new Pessoa("Pedro", 22, "M");
    $p[1] = new Pessoa("Maria", 31, "F");

    $l[0] = new Livro("Php Basico", "José Da Silva", 300, $p[0]);
    $l[1] = new Livro("POO PHP", "Gustavo Guanabara", 400, $p[1]);
    $l[2] =  new Livro("PHP AVANÇADO", "Ana Paula", 500, $p[0]);

    $l[0]->abrir();
    $l[0]->folhear(500);
    $l[0]->detalhes();

    $l[1]->folhear(150);
    $l[2]->folhear(250);
    $l[1]->detalhes();
    $l[2]->detalhes();

    ?>
</body>

</html>
