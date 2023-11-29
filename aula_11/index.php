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

       require_once 'aluno.php';
       require_once 'bolsista.php';
       require_once 'professor.php';
       require_once 'tecnico.php';


       //$p1 = new Pessoa();
       // $p1 =  new Visitante("", "", "");
       // $p1->setNome("Juvenal");
       // $p1->setIdade(31);
       // $p1->setSexo("M");

       // print_r($p1);

       $a1 =  new Aluno("", "", "");
       $a1->setNome("Lucas");
       $a1->setIdade(17);
       $a1->setSexo("M");
       $a1->setMatricula(1111);
       $a1->setCurso("Informatica");
       $a1->pagarMensalidade();
       print_r($a1);

       $b1 = new Bolsista("", "", "");
       $b1->setMatricula(1112);
       $b1->setNome("Jubileu");
       $b1->setBolsa(12.5);
       $b1->setIdade(17);
       $b1->setCurso("ADM");
       $b1->setSexo("M");
       $b1->pagarMensalidade();
       print_r($b1);

       $p3 = new Professor("", "", "");
       $p3->setNome("Cláudio");
       $p3->setSexo("M");
       $p3->setSalario(2500.75);
       $p3->receberAumento(550.20);
       print_r($p3);

       $t1 = new Tecnico("", "", "");
       $t1->setNome("João");
       $t1->setIdade(18);
       $t1->setSexo("M");
       $t1->setMatricula(1113);
       $t1->setRegistroProfissional(123.5);
       $t1->praticar();
       print_r($t1);


       ?>
       </pre>
</body>

</html>
