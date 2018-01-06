<?php

$arquivo = "tattoo-03.jpg";

$base64 = base64_encode(file_get_contents($arquivo));

echo "data:image/jpg;base64," . $base64;
?>