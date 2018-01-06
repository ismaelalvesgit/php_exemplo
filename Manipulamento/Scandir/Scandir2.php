<?php
	
$imagem = scandir("dados");

foreach ($imagem as $img) {
	if (!in_array($img, array(".", ".."))) {
		
	$arquivo = "imagem".DIRECTORY_SEPARATOR.$img;

	$info = pathinfo($arquivo);

	var_dump($info);
	}
}
?>