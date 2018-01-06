<?php
$conn = NEW PDO("sqlsrv:Database=dbphp7;server=localhost\ISMAEL;connectionPooling=0","sa","85926302");

$conn->beginTransaction();

$stmt = $conn-> prepare("DELETE FROM tb_usuarios WHERE idusuarios =?");

$id = 3;

$stmt->execute(array($id));

$conn->commit();

echo "Delete ok!";

?>