<?php

require_once("config.php");

$usuario = new Usuarios();

$usuario->setLogin("ismael");
$usuario->setSenha("@123");

$usuario->insert();

echo $usuario;
?>