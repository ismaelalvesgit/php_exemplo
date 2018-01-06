<?php
class enderco {
	private $logradoro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){

		$this ->logradoro = $a;
		$this ->numero = $b;
		$this ->cidade = $c;
	}
	public function __destruct(){
		//var_dump("destruir");
	}
	public function __toString(){
		return $this->logradoro.",".$this->numero."-".$this->cidade;
	}
}

$meuEndereco = new enderco("Rua padre galvao", "41","fortaleza");
echo $meuEndereco;
//var_dump($meuEndereco);

//unset($meuEndereco);
?>