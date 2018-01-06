<?php

$imagem = imagecreatefromjpeg("certificado.jpg");

$cor = imagecolorallocate($imagem, 0, 0, 0);

$gray = imagecolorallocate($imagem, 100, 100, 100);

imagestring($imagem, 5, 450, 150, "CERTIFICADO", $cor);
imagestring($imagem, 5, 440, 350, "Ismael alves", $cor);
imagestring($imagem, 5, 440, 370, "Concluido em: ".date("d/m/Y"), $cor);

header("Content-Type: image/jpg");

imagejpeg($imagem, "certificado-".date("Y-m-d").".jpg", 10);

imagedestroy($imagem);
?>