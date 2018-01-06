<?php
class pessoa{
	public $nome = "ismael alves";
	protected $idade = 20;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome ."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}
}

$objeto = new pessoa();
//echo $objeto->senha ."<br/>";
$objeto->verDados();
?>