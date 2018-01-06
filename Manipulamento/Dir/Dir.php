<?php

$nome = "dados";

if (!is_dir($nome)) {
	
	mkdir($nome);

	echo "diretorio $nome criado";
} else {
	rmdir($nome);
	echo "diretorio $nome ja existe foi removido!!";
}

?>