<?php
require_once '../aula_10/pessoa.php';
class Aluno extends Pessoa
{
       private $matr, $curso;

       public function cancelarMatr()
       {
              echo "<p>A matricula será cancelada</p>";
       }

       public function getMatr()
       {
              return $this->matr;
       }
       public function setMatr($m)
       {
              $this->matr = $m;
       }

       public function setCurso($c)
       {
              $this->curso = $c;
       }
       public function getCurso()
       {
              return $this->curso;
       }
}
