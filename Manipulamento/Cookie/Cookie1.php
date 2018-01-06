<?php
	
	if (isset($_COOKIE["exmplo01"])) {
		
	$obj = json_decode($_COOKIE["exmplo01"]);
	
	echo $obj->familia;
	}
?>
