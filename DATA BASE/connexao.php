<?php
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\ISMAEL;connectionPooling=0","sa","85926302");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt-> execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

echo json_encode($results);
?>
