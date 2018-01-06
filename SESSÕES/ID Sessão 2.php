<?php
session_id('afotmvvvualji063bc0n8bopnf');
//usado para gravar id de sessão

require_once("config.php");

session_regenerate_id();
//usado para gerar id automatico

echo session_id();

var_dump($_SESSION);

?>