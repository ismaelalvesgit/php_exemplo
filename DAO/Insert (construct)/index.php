<?php

require_once("config.php");

$usuario = new Usuarios("alves", "123");

$usuario->insert();

echo $usuario;
?>