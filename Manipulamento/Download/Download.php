<?php

$link = "http://www.faculdadeevolucao.edu.br/modules/mod_ppc_simple_spotlight/img/SEMANA%20DA%20CONVILIACAO_novo.jpg";

$conteudo = file_get_contents($link);

$parte = parse_url($link);

$baseName = basename($parte["path"]);

$arquivo = fopen($baseName, "w+");

fwrite($arquivo, $conteudo);

fclose($arquivo);

echo "deu certo mano!!!";
?>

<img src="<?=$baseName?>">