<?php

$arquivo = "usuarios.csv";

if (file_exists($arquivo)) {
	
	$item = fopen($arquivo, "r");

	$topo = explode(" | ", fgets($item));

	$dados = array();


	while ($row = fgets($item)) {
		
		$rowDados = explode(" | ", $row);
		$linha = array();

		for ($i=0; $i < count($topo); $i++) { 

			$linha[$topo[$i]] = $rowDados[$i]."<br>"."<hr>";
		}

		array_push($dados, $linha);
	}

	fclose($item);

	echo json_encode($dados);
}
?>