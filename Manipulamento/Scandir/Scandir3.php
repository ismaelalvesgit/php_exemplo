<?php
	
$imagem = scandir("dados");

$data = array();

foreach ($imagem as $img) {
	if (!in_array($img, array(".", ".."))) {
		
	$arquivo = "imagem" . DIRECTORY_SEPARATOR . $img;

	$info = pathinfo($arquivo);

	$info["size"] = filesize($arquivo);

	array_push($data, $info);

	}
}
echo json_encode($data);
?>