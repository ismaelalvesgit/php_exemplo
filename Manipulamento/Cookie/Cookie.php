<?php

$dados = array("familia"=>"alves","integrantes" =>"ismael");

setcookie("exmplo01", json_encode($dados), time()+ 3600);


echo "ok!!";
?>