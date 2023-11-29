<?php
require_once "controlador.php";
class ControleRemoto implements Controlador
{

    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setVolume($v)
    {
        $this->volume = $v;
    }

    private function setLigado($l)
    {
        $this->ligado = $l;
    }

    private function setTocando($t)
    {
        $this->tocando = $t;
    }

    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo "<br>Esta ligado: " . ($this->getLigado() ? "Sim" : "Não");
        echo "<br>Esta tocando: " . ($this->getTocando() ? "Sim" : "Não");
        echo "<br>Volume: " . $this->getVolume() . "--->  ";
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "<strong>|</strong>";
        }
        echo "<br>";
    }
    public function fecharMenu()
    {
        echo "<br>Fechando menu";
    }
    public function maisVolume()
    {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<br>Televisão Desligada";
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "<br>Televisão Desligada";
        }
    }
    public function ligarMudo()
    {
        if ($this->getLigado() == true && $this->getVolume() > 0) {
            $this->setVolume(0);
        } else {
            echo "TV desligada";
        }
    }
    public function desligarMudo()
    {
        if ($this->getLigado() == true && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play()
    {
        if ($this->getLigado() == true && $this->getTocando() == false) {
            $this->setTocando(true);
        }
    }
    public function pause()
    {
        if ($this->getLigado() == true && $this->getTocando() == true) {
            $this->setTocando(false);
        }
    }
}
