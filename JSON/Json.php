<?php
$pessoas = array();
	array_push($pessoas, array(
		'nome'=>'joao', 'idade'=>20));
	array_push($pessoas, array(
		'nome'=>'glaucio','idade'=>20));
	
echo json_encode($pessoas);	

?>