<?php
	
	interface Pessoa {

		public function andar($andar);
		public function para($para);
		public function falar($falar);
	}

	class Sujeito implements Pessoa{

		public function andar($andar){

			 echo "A Pessoa esta andando ".$andar;
		}
		public function para($para){
			echo "A pessoa parou de andar ".$para;
		}
		public function falar($falar){
			echo "A pessoa esta falou ".$falar;
		}
	}

$pessoa = new Sujeito();

$pessoa->falar("que quanto mais ela pratica programação mais ela aprende");
?>