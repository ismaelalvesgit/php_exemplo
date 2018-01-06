<?php

$arquivo = "tattoo-03.jpg";

$base64 = base64_encode(file_get_contents($arquivo));

$arquivoInfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $arquivoInfo->file($arquivo);

$base64encode = "data:".$mimetype.";base64," . $base64;
?>
<a href="<?=$base64encode?>" target="_blank">Link  imagem</a>
<img src="<?=$base64encode?>">