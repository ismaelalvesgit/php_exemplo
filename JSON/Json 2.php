<?php
$json =
'[{"nome":"joao","idade":20},{"nome":"glaucio","idade":20}]';

$date = json_decode($json, true);

var_dump($date);
?>