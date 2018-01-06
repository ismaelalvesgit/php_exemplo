<?php
class Animal{
	public function falar(){
		return "som";
	}
	public function mover(){
		return "andar";
	}
}

class carhorro extends Animal{
	public function falar(){
		return "late";
	}
}

class gato extends Animal{
	public function falar(){
		return "mia";
	}
}

class passaro extends Animal{
	public function falar(){
		return "cantar";
	}
	public function mover(){
		return "voar e ". parent::mover();
	}
}

$pluto= new carhorro();

echo $pluto -> falar(). "<br/>";
echo $pluto ->mover(). "<br/>";

echo "--------------<br/>";

$alfredo= new gato();

echo $alfredo -> falar(). "<br/>";
echo $alfredo ->mover(). "<br/>";

echo "--------------<br/>";

$canario= new passaro();

echo $canario -> falar(). "<br/>";
echo $canario ->mover(). "<br/>";
?>