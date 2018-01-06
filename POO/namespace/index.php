<?php
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("ismael alves");
$cad->setEmail("exemplo.gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
//echo $cad;
?>

