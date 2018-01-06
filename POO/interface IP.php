<?php
interface veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMachar($macha);
}

class civic implements veiculo{

	public function acelerar($velocidade){
		echo "o veiculo acelerou até" . $velocidade . "km/h";
	}
	public function freiar($velocidade){

		echo"o veiculo frenou até" . $velocidade . "km/h";
	}
	public function trocarMachar($macha){
		echo "o veiculo engatou a marcha" . $macha;
	}
}
$carro = new civic();
$carro-> trocarMachar(1);
?>