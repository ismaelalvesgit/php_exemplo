<?php
	$pasta  = "arquivo";
	$permmissao = "0775";

	if (!is_dir($pasta)) mkdir($pasta, $permmissao);

	echo "Diretorio criado";
?>