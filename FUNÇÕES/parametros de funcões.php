<?php
function ola($texto = "mundo",$periodo = "bom dia"){

	return "olá $texto! $periodo! <br> ";
}

echo ola("");
echo ola("","boa noite");
echo ola("glaucio ","boa tarde");
echo ola("joão","");

?>