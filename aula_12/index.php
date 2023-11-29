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


       require_once 'Ave.php';
       require_once('../aula_12/Mamifero.php');
       require_once 'Peixe.php';
       require_once 'Reptil.php';
       require_once 'Canguru.php';
       require_once 'Cachorro.php';
       require_once 'Cobra.php';
       require_once 'Tartaruga.php';
       require_once 'Dourado.php';
       require_once 'Arara.php';


       // $a = new Animal();

       $m = new Mamifero();
       $a = new Ave();
       $r = new Reptil();
       $p = new Peixe();
       $k = new Canguru();
       $c = new Cachorro();
       $phyton = new Cobra();
       $t = new Tartaruga();
       $d = new Dourado();
       $ar = new Arara();

       $a->setPeso(33.5);
       $m->locomover();
       $a->locomover();
       $r->locomover();
       $k->locomover();
       $c->locomover();
       $phyton->locomover();
       $t->locomover();
       $d->locomover();
       $ar->locomover();

       $c->emitirSom();
       $m->emitirSom();


       ?>
       </pre>
</body>

</html>
