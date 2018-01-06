<?php
date_default_timezone_set("america/fortaleza");
setlocale(LC_ALL, "pt_BR, utf-8", "portuguese");

$dir1 = "folder01";
$dir2 = "folder02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$arquivo = "leia.txt";

if (!file_exists($dir1.DIRECTORY_SEPARATOR.$arquivo)) {

	$item = fopen($dir1.DIRECTORY_SEPARATOR.$arquivo, "w+");

	fwrite($item, date("Y/m/d H:i:s"));

	fclose($item);
}
rename($dir1. DIRECTORY_SEPARATOR . $arquivo, $dir2 . DIRECTORY_SEPARATOR . $arquivo);
echo "ok";
?>