<?php

require_once 'pessoa.php';
require_once 'publicacao.php';

class Livro implements Publicacao
{
    private $titulo, $autor, $totPaginas, $pagatual, $aberto, $leitor;

    public function __construct($tt, $at, $tpg, $l)
    {
        $this->titulo = $tt;
        $this->autor = $at;
        $this->totPaginas = $tpg;
        $this->aberto = false;
        $this->pagatual = 0;
        $this->leitor = $l;
    }



    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($tt)
    {
        $this->titulo = $tt;
    }


    public function getAutor()
    {
        return $this->autor;
    }


    public function setAutor($at)
    {
        $this->autor = $at;
    }


    public function gettotPaginas()
    {
        return $this->totPaginas;
    }

    public function settotPaginas($tpg)
    {
        $this->totPaginas = $tpg;
    }


    public function getPagatual()
    {
        return $this->pagatual;
    }

    public function setPagatual($pgat)
    {
        $this->pagatual = $pgat;
    }


    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($ab)
    {
        $this->aberto = $ab;
    }


    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($l)
    {
        $this->leitor = $l;
    }
    public function detalhes()
    {
        echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br> Páginas: " . $this->totPaginas .  " e a página atual é: " . $this->pagatual;
        echo "<br> Sendo lido por " . $this->leitor->getNome();
    }

    public function abrir()
    {
        $this->setAberto(true);
    }
    public function fechar()
    {
        $this->setAberto(false);
    }
    public function folhear($p)
    {
        if ($p > $this->totPaginas) {
            $this->pagatual = 0;
        } else {
            $this->pagatual = $p;
        }
    }
    public function avancarPag()
    {
        if ($this->getAberto() == true) {
            $this->setPagatual($this->getPagatual() + 1);
        } else {
            "Livro Fechado";
        }
    }
    public function volatarPag()
    {
        if ($this->getAberto() == true) {
            $this->setPagatual($this->getPagatual() - 1);
        } else {
            "Livro Fechado";
        }
    }
}
