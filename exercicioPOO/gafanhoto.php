<?php

       require_once 'pessoa.php';
       class Gafanhoto extends Pessoa{
       private $login,$totAssistido;

       public function viuMaisUM(){
                     $this->totAssistido++ ;
       }

       public function __construct($nome,$idade,$sexo,$login){
              $this->login = $login;
              $this->totAssistido = 0;
       }


	public function getLogin() {
		return $this->login;
	}

	public function setLogin($login){
		$this->login = $login;
	}


	public function getTotAssistido() {
		return $this->totAssistido;
	}

	public function setTotAssistido($totAssistido){
		$this->totAssistido = $totAssistido;
	}
}

?>
