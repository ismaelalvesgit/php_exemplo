<?php
interface veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMachar($macha);
}

abstract class Automovel implements veiculo{

	public function acelerar($velocidade){
		echo "o veiculo acelerou até ".$velocidade. " km/h";
	}
	public function freiar($velocidade){

		echo"o veiculo frenou até ".$velocidade." km/h";
	}
	public function trocarMachar($macha){
		echo "o veiculo engatou a marcha" . $macha;
	}
}

class Delrey extends Automovel{

	public function empurrar(){

	}
}
//não pode distancia diretamente da class tem que criar uma nova class.
$carro = new Delrey();
$carro -> acelerar (200);
?>