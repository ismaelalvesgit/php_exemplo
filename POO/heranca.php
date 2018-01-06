<?php
class Documento{
	private $numero;

	public function getNumero(){

		return $this->numero;
	}
	public function setNumero($n){
		$this->numero=$n;
	}
}
class CPF extends Documento{
	public function validar():bool{

		$numeroCPF= $this->getNumero();
		//validãção de cpf
		return true;
	}
}

$doc = new cpf();
$doc->setNumero("111222333-39");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>