<?php

require_once("config.php");

$usuario = new Usuarios();

$usuario->loadByid(3);

$usuario->Update("silveira", "88834442");

echo $usuario;
?>