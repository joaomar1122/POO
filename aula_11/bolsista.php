<?php

require_once 'aluno.php';
class Bolsista extends Aluno
{
       private $bolsa;

       public function getBolsa()
       {
              return $this->bolsa;
       }


       public function setBolsa($bolsa)
       {
              $this->bolsa = $bolsa;
       }
       public function renovarBolsa()
       {
              echo "<p>Bolsa Renovada</p>";
       }
       public function pagarMensalidade()
       {
              echo "<p>" . $this->getNome() . " é bolsista então paga com desconto</p>";
       }
}
