<?php

function erroNome($nome){
	if (!$nome) {
		throw new Exception("Nenhum nome foi Informado", 1);
	}

	echo ucfirst($nome)."<br>";
}

try{
	erroNome("ismael");
	erroNome("");

} catch( Exception $e){

	echo $e->getMessage()."<br>";
} finally {

	echo "Executou o Try!!!";
}
?>