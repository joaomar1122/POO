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

       require_once 'video.php';
       require_once 'gafanhoto.php';
       require_once 'visualizacao.php';


       $v[0] = new Video("Aula 1 de POO");
       $v[1] = new Video("Aula 12 de PHP");
       $v[2] = new Video("Aula 15 de Html");
       $v[0]->play();
       $v[1]->like();
       $v[1]->deslike();

       $g[0]= new Gafanhoto("Jubileu",22,"M","juba");
       $g[1]= new Gafanhoto("Creuda",22,"F","Creudinha");

       $vis[0] = new Visualizacao($g[0], $v[2]);
       $vis[1] = new Visualizacao($g[0], $v[1]);

       $vis[0]->avaliar();
       $vis[1]->avaliarPorc(85);


       print_r($vis);

       ?>
       </pre>
</body>
</html>
