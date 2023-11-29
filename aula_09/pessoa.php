<?php

class Pessoa
{
    private $nome, $idade, $sexo;

    public function setNome($n)
    {
        $this->nome = $n;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setIdade($i)
    {
        $this->idade = $i;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setSexo($s)
    {
        $this->sexo = $s;
    }
    public function getSexo()
    {
        return $this->sexo;
    }


    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }

    public function __construct($n, $i, $s)
    {
        $this->nome = $n;
        $this->idade = $i;
        $this->sexo = $s;
    }
}
