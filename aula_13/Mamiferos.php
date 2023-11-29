<?php

require_once ('Animals.php');
class Mamiferos extends Animals
{
       private $corPelo;

       public function getCorPelo()
       {
              return $this->corPelo;
       }

       public function setCorPelo($corPelo)
       {
              $this->corPelo = $corPelo;
       }
       public function emitirSom()
       {
              echo "<p>Som de Mamifero</p>";
       }
}
