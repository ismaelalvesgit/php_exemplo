<?php
$conn = NEW PDO("sqlsrv:Database=dbphp7;server=localhost\ISMAEL;connectionPooling=0","sa","85926302");

$stmt = $conn-> prepare("DELETE FROM tb_usuarios WHERE idusuarios =:ID");

$id = 1;

$stmt->bindparam(":ID",$id);

$stmt->execute();

echo "Delete ok!";

?>