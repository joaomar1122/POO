<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <pre>
    <?php
    require_once 'banco.php';

    $p1 = new ContaBanco();
    $p2 = new ContaBanco();
    $p1->AbrirConta("CC");
    $p1->setNumConta(1111);
    $p1->setDono("Jubileu");
    $p2->AbrirConta("CP");
    $p2->setNumConta(2222);
    $p2->setDono("Creuza");

    $p1->Depositar(300);
    $p2->Depositar(500);



    //$p2->Sacar(100);
    //$p2->Sacar(1000);

    $p1->PagarMensal();
    $p2->PagarMensal();


    $p1->Sacar(338);
    $p2->Sacar(630);
    $p1->FecharConta();
    $p2->FecharConta();

    print_r($p1);
    print_r($p2);
    ?>
    </pre>
</body>

</html>