<?php
require_once("config.php");

/*apagar variaveis*/
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];
?>