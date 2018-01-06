<?php

require_once("config.php");

$buscar = Usuarios::Buscar("to");

echo json_encode($buscar);

?>