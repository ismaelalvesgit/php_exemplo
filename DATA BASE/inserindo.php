<?php
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\ISMAEL;connectionPooling=0","sa","85926302");

$stmt = $conn->prepare("INSERT INTO  tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");
//valores
$login = "ismael";
$password = "123456";
//ligação de valores com a variavel
$stmt-> bindparam(":LOGIN", $login);
$stmt-> bindparam(":PASSWORD", $password);

$stmt->execute();

echo "inserido ok!";
?>
