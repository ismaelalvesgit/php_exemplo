<?php
function __autoload($nomeclass){
	//var_dump($nomeclass);
	require_once("$nomeclass.php");
	}

$carro = new Delrey();
$carro ->acelerar(80);
?>