<?php

class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar()
    {
        if ($this->tampada == true) {
            echo "A caneta esta tampada";
        } else {
            echo "Estou rabiscando";
        }
    }

    function tampar()
    {
        $this->tampada = true;
    }

    function destampar()
    {
        $this->tampada = false;
    }
}
