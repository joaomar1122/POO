<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($no)
    {
        $this->nome = $no;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($na)
    {
        $this->nacionalidade = $na;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($id)
    {
        $this->idade = $id;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($al)
    {
        $this->altura = $al;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($pe)
    {
        $this->peso = $pe;
        $this->setCategoria();
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "INVÁLIDO";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "INVÁLIDO";
        }
    }
    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($vi)
    {
        $this->vitorias = $vi;
    }
    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($de)
    {
        $this->derrotas = $de;
    }
    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($em)
    {
        $this->empates = $em;
    }

    public function apresentar()
    {
        echo "Nome:" . $this->getNome() . "<br>";
        echo "Origem:" . $this->getNacionalidade() . "<br>";
        echo $this->getIdade() . " anos<br>";
        echo $this->getAltura() . "m de altura<br>";
        echo "Pesando " . $this->getPeso() . "KG<br>";
        echo "Ganhou:" . $this->getVitorias() . "<br>";
        echo "Perdeu:" .  $this->getDerrotas() . "<br>";
        echo "Empatou:" . $this->getEmpates() . "<br>";
    }
    public function status()
    {
        echo $this->getNome() . "<br>";
        echo "É um peso " . $this->getCategoria() . "<br>";
        echo $this->getVitorias() . " Vitorias<br>";
        echo  $this->getDerrotas() . " Derrotas<br>";
        echo  $this->getEmpates() . " Empates<br>";
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
}
