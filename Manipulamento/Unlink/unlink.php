<?php

$arquivo = fopen("teste.txt", "w+");

fclose($arquivo);

unlink("teste.txt");

echo "arquivo removido com sucesso!!!";

?>