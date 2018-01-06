<?php

require_once("config.php");

$usuario = new Usuarios();

$usuario->loadByid(17);

$usuario->Delete();

echo $usuario;
?>