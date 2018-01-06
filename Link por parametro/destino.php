<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		
		$tatto = array("tattoo-03.jpg","tattoo-04.jpg","tattoo-05.jpg");

		$objeto = $_GET["codigo"];
	?>
	<img src="<?php echo $tatto[$objeto];?>">
</body>
</html>