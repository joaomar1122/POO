<?php

class ContaBanco
{
    public $numconta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function AbrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t === "CC") {
            $this->saldo = 50;
        } elseif ($t === "CP") {
            $this->saldo = 150;
        }
    }
    public function FecharConta()
    {
        if ($this->saldo > 0) {
            echo "Conta com Dinheiro<br><br>";
        } elseif ($this->saldo < 0) {
            echo "Conta com Debito<br><br>";
        } else {
            $this->status = false;
            echo "Conta de " . $this->getDono() . " fechada com sucesso<br><br>";
        }
    }
    public function Depositar($v)
    {
        if ($this->status == true) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "Depoisto de R$" . $v . " na conta de " . $this->getDono() . "<br><br>";
        } else {
            echo "Impossivel Depositar<br><br>";
        }
    }
    public function Sacar($v)
    {
        if ($this->status == true) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSAldo() - $v);
                echo "Saque autorizado de R$" .  $v . " na conta de " . $this->getDono() . "<br><br>";
            } else {
                echo "Saldo Insuficiente<br><br>";
            }
        } else {
            echo "Conta Não encontrada<br><br>";
        }
    }
    public function PagarMensal()
    {
        if ($this->tipo === "CC") {
            $v = 12;
        } elseif ($this->tipo === "CP") {
            $v = 20;
        } else {
            echo "Tipo de conta não encontrada<br><br>";
        }
        if ($this->status == true) {
            if ($this->saldo > $v) {
                $this->saldo =  $this->saldo - $v;
                echo "Mensalidade de R$" . $v . " ja cobrada na conta de " . $this->getDono() . "<br><br>";
            } else {
                echo "Saldo insuficiente para cobrança<br><br>";
            }
        }
    }

    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
    }
    public function getNumConta()
    {
        return $this->numconta;
    }
    public function setNumConta($n)
    {
        $this->numconta = $n;
    }


    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($t)
    {
        $this->tipo = $t;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($d)
    {
        $this->dono = $d;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($s)
    {
        $this->saldo = $s;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($stt)
    {
        $this->status = $stt;
    }
}
