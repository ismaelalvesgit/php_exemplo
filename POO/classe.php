<?php

CLASS pessoa{
    //atributo
	public $nome;

	public function falar (){
		//método
		return "o meu nome é ".$this->nome;
	}
} 

$glaucio = new pessoa();
$glaucio->nome="glaucio daniel";
echo $glaucio->falar();
?>