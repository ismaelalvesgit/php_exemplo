<?php

require_once("config.php");

$root = new Usuarios();

$root->loadByid(2);

echo $root;
?>