<?php
	
require_once("config.php");

$sql = new Sql();

$usuario = $sql->select("SELECT * FROM tb_usuarios ORDER BY login");

$topo = array();

foreach ($usuario[0] as $key => $value) {
	array_push($topo, ucfirst($key));
}

$arquivo = fopen("usuarios.csv", "w+");

fwrite($arquivo, implode(" | ", $topo). "\r\n");

foreach ($usuario as $row) {
	$dados = array();

	foreach ($row as $key => $value) {
		array_push($dados, $value);
	}

	fwrite($arquivo, implode(" | ", $dados). "\r\n");
}
fclose($arquivo);
echo "arquivo criado!!!";
?>