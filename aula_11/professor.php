<?php

require_once 'pessoa.php';
class Professor extends Pessoa
{
       private $especialidade, $salario;



       public function getEspecialidade()
       {
              return $this->especialidade;
       }

       public function setEspecialidade($especialidade)
       {
              $this->especialidade = $especialidade;
       }

       public function getSalario()
       {
              return $this->salario;
       }


       public function setSalario($salario)
       {
              $this->salario = $salario;
       }

       public function receberAumento($aum)
       {
              $this->salario += $aum;
       }
}
