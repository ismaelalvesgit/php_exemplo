<?php
function incluirClass($nomeclass){
	if(file_exists($nomeclass. ".php") ===true){
		require_once($nomeclass. ".php");
	}
}
spl_autoload_register("incluirClass");
spl_autoload_register(function($nomeclass){	if(file_exists("abstrata".DIRECTORY_SEPARATOR.$nomeclass. ".php") === true){
require_once("abstrata".DIRECTORY_SEPARATOR.$nomeclass. ".php");}
});

$carro = new Delrey();
$carro ->acelerar(80);
?>