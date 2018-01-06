<?php

$imagem = imagecreatefromjpeg("certificado.jpg");

$cor = imagecolorallocate($imagem, 0, 0, 0);

$gray = imagecolorallocate($imagem, 100, 100, 100);

imagettftext($imagem, 32, 0, 320, 250, $cor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($imagem, 32, 0, 375, 350, $cor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Ismael alves");
imagestring($imagem, 3, 440, 370, "Concluido em: ".date("d/m/Y"), $cor);

header("Content-Type: image/jpg");

imagejpeg($imagem);

imagedestroy($imagem);
?>