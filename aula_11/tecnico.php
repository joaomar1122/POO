<?php

require_once 'aluno.php';
class Tecnico extends Aluno
{
       private $registroProfissional;

       public function praticar()
       {
              echo "<p>O técnico " . $this->getNome() . " ja está praticando</p>";
       }
       public function getRegistroProfissional()
       {
              return $this->registroProfissional;
       }


       public function setRegistroProfissional($registroProfissional)
       {
              $this->registroProfissional = $registroProfissional;
       }
}
