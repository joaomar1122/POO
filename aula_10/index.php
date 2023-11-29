<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>

<body>
       <pre>
       <?php
       require_once 'pessoa.php';
       require_once 'aluno.php';
       require_once 'professor.php';
       require_once 'funcionario.php';


       $p1 = new Pessoa("", "", "");
       $p2 = new Aluno("", "", "");
       $p3 = new Professor("", "", "");
       $p4 = new Funcionario("", "", "");

       $p1->setNome("Pedro");
       $p2->setNome("Maria");
       $p3->setNome("Cláudio");
       $p4->setNome("Fabiana");

       $p1->setSexo("M");
       $p2->setSexo("F");
       $p3->setSexo("M");
       $p4->setSexo("F");


       $p2->setCurso("Informática");
       $p3->setSalario(2500.75);
       $p4->setSetor("Estoque");

       $p3->receberAumento(550.20);
       $p4->mudarTrabalho();
       // $p2->cancelarMatr();

       print_r($p1);
       print_r($p2);
       print_r($p3);
       print_r($p4);

       ?>
       </pre>
</body>

</html>
