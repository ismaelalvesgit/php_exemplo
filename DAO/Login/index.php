<?php

require_once("config.php");

$usuario = new Usuarios();

$usuario->Login("toor","root");

echo $usuario;
?>