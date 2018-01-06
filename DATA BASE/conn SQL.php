<?php  
$conn = new PDO("mysql:dbname=dbinfoq; host=localhost","root","");

$stmt = $conn->prepare("SELECT * FROM tbusuarios ORDER BY usuario");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
		echo"<trong>".$key."</strong>".$value."<br/>";
	}

	echo"=============================================<br>";
}
?>