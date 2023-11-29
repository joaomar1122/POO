<?php

class Computador
{
    var $processador;
    var $cor;
    var $memoria;
    var $pc;

    public function getProcessador()
    {
        return $this->processador;
    }

    public function setProcessador($p)
    {
        $this->processador = $p;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($c)
    {
        $this->cor = $c;
    }

    public function getMemoria()
    {
        return $this->memoria;
    }

    public function setMemoria($m)
    {
        $this->memoria = $m;
    }

    public function ligar()
    {
        $this->pc = true;
    }

    public function desligar()
    {
        $this->pc = false;
    }

    public function __construct($p, $c, $m)
    {
        $this->processador = $p;
        $this->cor = $c;
        $this->memoria = $m;
        $this->ligar();
    }
}
