<?php

require_once 'Mamifero.php';
class Cachorro extends Mamifero
{
       public function enterrarOsso()
       {
              echo "<p>Enterrando</p>";
       }
       public function abanarRabo()
       {
              echo "<p>Abanando rabo</p>";
       }
       public function emitirSom()
       {
              echo "<p>AUAUAUAUAU</p>";
       }
}
