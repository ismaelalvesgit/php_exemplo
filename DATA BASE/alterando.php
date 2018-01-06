<?php
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\ISMAEL;connectionPooling=0","sa","85926302");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuarios = :ID");
//valores
$login = "ismael";
$password = "85926302";
$id = 2;
//ligação de valores com a variavel
$stmt-> bindparam(":LOGIN", $login);
$stmt-> bindparam(":PASSWORD", $password);
$stmt-> bindparam(":ID", $id);

$stmt->execute();

echo "alterado ok!";
?>
