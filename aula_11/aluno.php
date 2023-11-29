<?php
require_once 'pessoa.php';
class Aluno extends Pessoa
{
       private $matricula, $curso;

       public function pagarMensalidade()
       {
              echo "<p>A matricula do aluno " . $this->getNome() . " ja foi paga</p>";
       }

       public function getMatricula()
       {
              return $this->matricula;
       }
       public function setMatricula($m)
       {
              $this->matricula = $m;
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
