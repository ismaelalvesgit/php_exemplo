<?php
	interface Animal{

		public function fala($fala);
		public function anda($anda);
		public function para($para);
	}

	abstract class Especie implements Animal{

		public function fala($fala){

			echo "o animal ".$fala;
		}
		public function anda($anda){
			echo "o animal ".$anda." km";
		}
		public function para($para){
			echo "o animal parou";
		}
	}
 class Leao extends Especie{
 	public function come(){}
 }

$leao = new Leao();

$leao->para(1);
?>