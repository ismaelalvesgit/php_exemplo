<?php

require_once("config.php");

$lista = Usuarios::getLista();

echo json_encode($lista);

?>