<?php

mkdir("imagens");

if (!is_dir("imagens")) mkdir("imagens");

foreach (scandir("imagens") as $itens) {
	if (!in_array($itens, array(".",".."))) {
		unlink("imagens/". $itens);
	}
}

echo "removido!!";
?>