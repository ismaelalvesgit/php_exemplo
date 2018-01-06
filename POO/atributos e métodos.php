<?php

class carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){

		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{

		return $this->motor;
	}

	public function setMotor($motor){

		return $this->motor = $motor;
	}

	public function getAno():int{

		return $this->ano;
	}

	public function setAno($ano){

		 return $this->ano = $ano;
	}

	public function exibe(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
			);
	}
}

$gol = new carro();
$gol->setModelo("gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibe());

?>