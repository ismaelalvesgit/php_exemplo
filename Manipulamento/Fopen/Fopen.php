<?php
	
$arquivo = fopen("log.txt", "w+");

fwrite($arquivo, date("y-m-d H:i:s") . "primeiro teste de fopen");

fclose($arquivo);

echo "arquivo criado!!";

?>