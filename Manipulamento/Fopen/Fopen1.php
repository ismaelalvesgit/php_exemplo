<?php
	
$arquivo = fopen("log.txt", "a+");

fwrite($arquivo, date("y-m-d H:i:s") . " primeiro teste de fopen"."\r\n");

fclose($arquivo);

echo "arquivo criado!!";

?>